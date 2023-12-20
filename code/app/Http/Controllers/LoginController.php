<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Evaluator;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function adminLogin() {
        return view('login.admin');
    }

    public function projectLogin() {
        return view("login.project");
    }

    public function evaluatorLogin() {
        return view('login.evaluator');
    }

    public function verify(string $role, Request $request)
    {        
        if ($role === 'admin') {
            $email = $request->input('email');
            $password = $request->input('password');

            $admin = Admin::where('email', $email)->first();

            if ($admin && $password === $admin->password) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('login.admin')->with('error', "Incorrect email or password for admin");
            }
        } elseif ($role === 'evaluator') {
            $email = $request->input('email');
            $password = $request->input('password');

            $evaluator = Evaluator::where('email', $email)->first();

            if ($evaluator && $password === $evaluator->password) {
                return redirect()->route('evaluator.home', ['evaluator_id' => $evaluator->id]);
            } else {
                return redirect()->route('login.evaluator')->with('error', "Incorrect email or password for evaluator");
            }
        } elseif ($role === 'project') {
            $token = $request->input('token');
            $password = $request->input('password');

            $project = Project::where('token', $token)->first(); // Assuming token is used for project login

            if ($project && $password === $project->password) {
                return redirect()->route('project.home', ['project_id' => $project->id]);
            } else {
                return redirect()->route('login.project')->with('error', "Incorrect token or password for project");
            }
        } else {
            return "Invalid role";
        }
    }
}
