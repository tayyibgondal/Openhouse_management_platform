<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve and display all students
        $students = Student::all();
        return view('admin.students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show the form for creating a new student
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'project_id' => 'required|exists:projects,id',
        ]);

        // Create a new Student object and save it to the database
        Student::create($validatedData);

        // Redirect to the index route after creating the student
        return redirect()->route('admin.students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show the details of a specific student
        $student = Student::find($id);
        return view('admin.students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Show the form for editing a specific student
        $student = Student::find($id);
        return view('admin.students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'project_id' => 'required|exists:projects,id',
        ]);

        // Update the student with the validated data
        Student::where('id', $id)->update($validatedData);

        // Redirect to the show route after updating the student
        return redirect()->route('admin.students.show', ['student_id' => $id])->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete a specific student
        $student = Student::find($id);

        if ($student) {
            $student->delete();
            return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully');
        } else {
            return redirect()->route('admin.students.index')->with('error', 'Student not found');
        }
    }
}
