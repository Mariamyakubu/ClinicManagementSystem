<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Mail\DoctorMail;
use App\Models\Doctor;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
            'email' => 'required|email|unique:doctors',
        ]);

       $doctor = Doctor::create($request->all());
        
        
        // Get the currently logged-in user's email
        $user = Auth::user();
        
        // Send the email to the logged-in user
        Mail::to($user->email)->send(new DoctorMail($doctor));
    

        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully.');
    }

    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
            'email' => 'required|email',
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully.');
    }
}
