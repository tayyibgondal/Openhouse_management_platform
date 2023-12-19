<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use App\Models\EvaluatorProject;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }


    // public function seeEvaluations() {
    //     // Extract records from the Evaluator_Project table, along with marks.
    //     // If marks are unset, put 'Unmarked' string
    //     // {E1: {P1:M1, P2:M2, P3:M3...}, E2: }
    //     $data = [];

    //     // Get unique evaluator ids
    //     $evaluator_ids = EvaluatorProject::pluck('evaluator_id')->unique()->toArray();
    //     // For each id, get all projects as well as their marks
    //     foreach($evaluator_ids as $id) {
    //         $projects_marks = EvaluatorProject::where('evaluator_id', $id)->select('project_ids', 'marks')->get();
    //         $data[$id] = $projects_marks;
    //     }

    //     return view('admin.evaluations', ['data'=>$data]);
    // }

    // Queries used in this function:
    // 1. For each evaluator_id, print project_ids and corresponding marks.
    public function seeEvaluations()
    {
        // Extract records from the Evaluator_Project table, along with marks.
        // If marks are unset, put 'Unmarked' string
        // ['Evaluator1' => ['Project1' => 'Mark1', 'Project2' => 'Mark2', ...], 'Evaluator2' => ...]
        $data = [];

        $evaluators = Evaluator::with('projects')->get();

        foreach ($evaluators as $evaluator) {
            $evaluatorName = $evaluator->name;

            foreach ($evaluator->projects as $project) {
                $projectName = $project->name;

                $evaluatorProject = EvaluatorProject::where([
                    'evaluator_id' => $evaluator->id,
                    'project_id' => $project->id,
                ])->first();

                $marks = $evaluatorProject->marks ? $evaluatorProject->marks : 'Unmarked';

                $data[$evaluatorName][$projectName] = $marks;
            }
        }

        return view('admin.evaluations', ['data' => $data]);
    }


    // Two main queries involved in this function:
    // 1. Group query 
    // 2. See if a project exists in the projects assigned to an evaluator
    public function assign()
    {
        // Get all records from Projects table
        $projects = Project::all();
        // Get all records from Evaluators table
        $evaluators = Evaluator::all();
        // Get all records from Evaluator_Project table
        $evaluatorProjects = EvaluatorProject::all();

        // Count how many projects each Evaluator has been assigned
        // Note: the ->map->count() calls the count method for each sub-collection
        $evaluatorCounts = $evaluatorProjects->groupBy('evaluator_id')->map->count()->toArray();
        // Count how many evaluators each Project has been assigned to
        $projectCounts = $evaluatorProjects->groupBy('project_id')->map->count();

        // Iterate over all projects from projects table, if project not in P append 'project:0' to P
        foreach ($projects as $project) {
            if (!isset($projectCounts[$project->id])) {
                $projectCounts[$project->id] = 0;
            }
        }

        // Iterate over all evaluators from evaluators table, if evaluator not in E, append 'evaluator:0' to E
        foreach ($evaluators as $evaluator) {
            if (!isset($evaluatorCounts[$evaluator->id])) {
                $evaluatorCounts[$evaluator->id] = 0;
            }
        }

        // At this point, we have those projects and those evaluators that could be given an assignment

        // Make an unserved projects array
        $unservedProjects = [];

        // Since we want to assign at least 4 evaluators to each project, so I'll repeat the 
        // following logic in a loop 4 times.
        for ($i = 0; $i < 4; $i++) {
            // Iterate over all project records in P
            foreach ($projectCounts as $projectId => $projectCount) {
                // If project has not been assigned to 5 evaluators
                if ($projectCount < 5) {
                    // Shuffle the evaluators array
                    $shuffledEvaluators = $evaluators->shuffle(); // Evaluators is a collection

                    $assigned = false;

                    // Iterate over all evaluators
                    foreach ($shuffledEvaluators as $evaluator) {
                        // If category of project and evaluator matches
                        if ($evaluator->category === $projects->find($projectId)->category) {
                            // If this project and evaluator are not bound already
                            if (!in_array($evaluator->id, $evaluatorProjects->where('project_id', $projectId)->pluck('evaluator_id')->toArray())) {
                                // Add a record in E_P table
                                EvaluatorProject::create([
                                    'evaluator_id' => $evaluator->id,
                                    'project_id' => $projectId,
                                ]);

                                // Increment the counter of evaluator by 1
                                $evaluatorCounts[$evaluator->id] += 1;
                                // If evaluator count >= 5, remove it from E
                                if ($evaluatorCounts[$evaluator->id] > 5) {
                                    unset($evaluatorCounts[$evaluator->id]);
                                }

                                $assigned = true;
                                break;
                            }
                        }
                    }

                    // If assigned = false, i.e., project has not been assigned: add project to unserved array
                    if (!$assigned) {
                        $unservedProjects[] = $projectId;
                    }
                }
            }
        }

        return redirect()->route('admin.evaluations')->with('success', 'Projects assigned successfully');
    }
}
