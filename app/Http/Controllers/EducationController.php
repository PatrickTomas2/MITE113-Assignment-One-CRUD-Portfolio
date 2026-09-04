<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Portfolio.Educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Education::create($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Education created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('Portfolio.Educations.edit', [
            'education' => $education,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validatedData = $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $education->update($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Education updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('portfolio.index')->with('success', 'Education deleted successfully.');
    }
}
