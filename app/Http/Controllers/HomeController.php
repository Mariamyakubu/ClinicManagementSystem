<?php
// HomeController.php

namespace App\Http\Controllers;

use App\Models\Project; // Import the Project model if you need to pass project data

class HomeController extends Controller
{
    public function index()
    {
        // Optionally get a project if needed
        // $project = Project::first(); // Example: Get the first project or any logic you need

        return view('home'); // Ensure 'home' is the correct view name
    }
}

