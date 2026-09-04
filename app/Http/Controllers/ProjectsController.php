<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
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
        return view('Portfolio.Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'category' => 'required|string|max:255',
            'technologies_used' => 'required|string|max:255',
        ]);

        Projects::create($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects)
    {
        return view('Portfolio.Projects.edit', [
            'project' => $projects,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'category' => 'required|string|max:255',
            'technologies_used' => 'required|string|max:255',
        ]);

        $projects->update($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $projects)
    {
        $projects->delete();

        return redirect()->route('portfolio.index')->with('success', 'Project deleted successfully.');
    }
}
