<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use App\Models\Skills;
use App\Models\Projects;
use App\Models\Education;
use App\Models\User;

class PersonalInfomationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Portfolio.index', [
            'personalInformation' => PersonalInformation::with('user')->get(),
            'skills' => Skills::with('user')->get(),
            'projects' => Projects::with('user')->get(),
            'education' => Education::with('user')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Portfolio.PersonalInformation.create', [
            'users' => User::doesntHave('profile')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id|unique:personal_information,user_id',
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
    public function edit(PersonalInformation $personalInformation)
    {
        return view('Portfolio.PersonalInformation.edit', [
            'personalInformation' => $personalInformation,
            'users' => User::doesntHave('profile')->orWhere('id', $personalInformation->user_id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInformation $personalInformation)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id|unique:personal_information,user_id,' . $personalInformation->id,
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
        $personalInformation->delete();

        return redirect()->route('portfolio.index')->with('success', 'Personal information deleted successfully.');
    }
}
