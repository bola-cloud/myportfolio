<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = PortfolioController::allProjects();
        return view('home', compact('projects'));
    }
}
