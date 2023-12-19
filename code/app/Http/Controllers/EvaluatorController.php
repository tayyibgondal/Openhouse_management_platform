<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use Illuminate\Http\Request;

class EvaluatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve and display all evaluators
        $evaluators = Evaluator::all();
        return view('admin.evaluators.index', ['evaluators' => $evaluators]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show the form for creating a new evaluator
        return view('admin.evaluators.create');
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
            'password' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        // Create a new Evaluator object and save it to the database
        Evaluator::create($validatedData);

        // Redirect to the index route after creating the evaluator
        return redirect()->route('admin.evaluators.index')->with('success', 'Evaluator created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show the details of a specific evaluator
        $evaluator = Evaluator::find($id);
        return view('admin.evaluators.show', ['evaluator' => $evaluator]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Show the form for editing a specific evaluator
        $evaluator = Evaluator::find($id);
        return view('admin.evaluators.edit', ['evaluator' => $evaluator]);
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
            'password' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        // Update the evaluator with the validated data
        Evaluator::where('id', $id)->update($validatedData);

        // Redirect to the show route after updating the evaluator
        return redirect()->route('admin.evaluators.show', ['evaluator_id' => $id])->with('success', 'Evaluator updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete a specific evaluator
        $evaluator = Evaluator::find($id);

        if ($evaluator) {
            $evaluator->delete();
            return redirect()->route('admin.evaluators.index')->with('success', 'Evaluator deleted successfully');
        } else {
            return redirect()->route('admin.evaluators.index')->with('error', 'Evaluator not found');
        }
    }
}
