<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
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
        return view('Portfolio.Skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'skill_name' => 'required|string|max:255',
            'skill_category' => 'required|string|max:255',
            'proficiency_level' => 'required|string|max:255',
        ]);

        Skills::create($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Skill created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skills $skills)
    {
        return view('Portfolio.Skills.edit', [
            'skill' => $skills,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skills $skills)
    {
        $validatedData = $request->validate([
            'skill_name' => 'required|string|max:255',
            'skill_category' => 'required|string|max:255',
            'proficiency_level' => 'required|string|max:255',
        ]);

        $skills->update($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skills $skills)
    {
        $skills->delete();
        return redirect()->route('portfolio.index')->with('success', 'Skill deleted successfully.');
    }
}
