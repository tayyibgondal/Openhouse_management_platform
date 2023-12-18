<?php

use App\Http\Controllers\EvaluatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;

// -------------------
// Login Routes
// -------------------
Route::prefix('login/')->name('login.')->group(function() {
    Route::get('', [LoginController::class, 'index'])->name('home');
    Route::get('admin', [LoginController::class, 'adminLogin'])->name('admin');
    Route::get('project', [LoginController::class, 'projectLogin'])->name('project');
    Route::get('evaluator', [LoginController::class, 'evaluatorLogin'])->name('evaluator');
    Route::post('{role}', [LoginController::class, 'verify'])->name('verify');
    
});

// -------------------
// Evaluator Routes
// -------------------
Route::prefix('evaluator/{evaluator_id}/')->name('evaluator.')->group(function() {
    Route::get('', [EvaluatorController::class, 'index'])->name('home');  // sees list of projects 
    Route::get('{project_id}/edit', [ProjectController::class, 'edit'])->name('edit');  // details of a specific project
    Route::put('{project_id}', [ProjectController::class, 'update'])->name('update');  
});

// -------------------
// Project Routes
// -------------------
Route::prefix('project')->name('project.')->group(function () {
    Route::get('{project_id}', [ProjectController::class, 'index'])->name('home');
});
// -------------------
// Admin Routes
// -------------------
Route::prefix('admin/')->name('admin.')->group(function () {
    Route::get('')->name('home');
    Route::get('assign')->name('assign');
    
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index'); 
    Route::get('project/{project_id}', [ProjectController::class, 'show'])->name('projects.show');
    Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('projects/{project_id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('projects/{project_id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('projects/{project_id}/delete', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::get('evaluators', [EvaluatorController::class, 'index'])->name('evaluators.index');
    Route::get('evaluators/{evaluator_id}', [EvaluatorController::class, 'show'])->name('evaluators.show');
    Route::get('evaluators/create', [EvaluatorController::class, 'create'])->name('evaluators.create');
    Route::post('evaluators', [EvaluatorController::class, 'store'])->name('evaluators.store');
    Route::get('evaluators/{evaluator_id}/edit', [EvaluatorController::class, 'edit'])->name('evaluators.edit');
    Route::put('evaluators/{evaluator_id}', [EvaluatorController::class, 'update'])->name('evaluators.update');
    Route::delete('evaluators/{evaluator_id}/delete', [EvaluatorController::class, 'destroy'])->name('evaluators.destroy');

    Route::get('students', [StudentController::class, 'index'])->name('students.index');
    Route::get('students/{student_id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('students', [StudentController::class, 'store'])->name('students.store');
    Route::get('students/{student_id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('students/{student_id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('students/{student_id}/delete', [StudentController::class, 'destroy'])->name('students.destroy');
});
