<?php

namespace App\Http\Controllers;

use App\Models\EvaluatorProject;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'token' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'location' => 'string'
        ]);

        // Create a new Project object and save it to the database
        Project::create($validatedData);

        // // Optionally, you can redirect to a specific route after creating the project
        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::find($id);
        if (Route::currentRouteName() == 'project.home') {
            // Get the number of evaluators who evaluated the project
            // 'done' shows how many evaluators are done with marking this project
            $done = $this->getEvaluators($id);
            // Redirect to 'projects.show'
            return view('projects.home', ['project' => $project, 'done'=>$done]);
        } else {
            // Redirect to 'admin.projects.show'
            return view('admin.projects.show', ['project' => $project]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);

        if(Route::currentRouteName() == 'project.edit') {
            return view('projects.edit', ['project' => $project]);
        }
        else {
            return view('admin.projects.edit', ['project' => $project]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'token' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'location' => 'string'
        ]);

        // Update the project with the validated data
        Project::where('id', $id)->update($validatedData);

        if (Route::currentRouteName() == 'project.update') {
            return redirect()->route('project.home', ['project_id' => $id])->with('success', 'Project updated successfully.');
        }

        // Optionally, you can redirect to a specific route after updating the project
        return redirect()->route('admin.projects.show', ['project_id' => $id])->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('admin.projects.index')->with('succes', 'Project deleted successfully');
    }

    // ==============================================================================================

    public function getEvaluators(string $project_id) {
        $count = EvaluatorProject::where('project_id', $project_id)->where('marks', '!=', -1)->count(); 
        return $count;
    }
}
