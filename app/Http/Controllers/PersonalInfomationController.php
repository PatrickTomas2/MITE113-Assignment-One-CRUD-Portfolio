<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use App\Models\Skills;

class PersonalInfomationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Portfolio.index', [
            'personalInformation' => PersonalInformation::all(),
            'skills' => Skills::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Portfolio.PersonalInformation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'professional_title' => 'required|string|max:255',
            'short_introduction' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        PersonalInformation::create($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Personal information created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
