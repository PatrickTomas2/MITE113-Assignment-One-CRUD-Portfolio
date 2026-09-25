<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\PersonalInformation;

class PersonalInfomationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('Portfolio.index', [
            'personalInformation' => $user->profile,
            'skills' => $user->skills,
            'projects' => $user->projects,
            'education' => $user->education,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->profile) {
            return redirect()->route('portfolio.index');
        }

        return view('Portfolio.PersonalInformation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->profile) {
            return redirect()->route('portfolio.index');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'professional_title' => 'required|string|max:255',
            'short_introduction' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $request->user()->profile()->create($validatedData);

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
    public function edit(PersonalInformation $personalInformation)
    {
        Gate::authorize('update', $personalInformation);

        return view('Portfolio.PersonalInformation.edit', [
            'personalInformation' => $personalInformation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInformation $personalInformation)
    {
        Gate::authorize('update', $personalInformation);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'professional_title' => 'required|string|max:255',
            'short_introduction' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $personalInformation->update($validatedData);

        return redirect()->route('portfolio.index')->with('success', 'Personal information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInformation $personalInformation)
    {
        Gate::authorize('delete', $personalInformation);

        $personalInformation->delete();

        return redirect()->route('portfolio.index')->with('success', 'Personal information deleted successfully.');
    }
}
