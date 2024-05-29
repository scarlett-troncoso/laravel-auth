<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('guests.projects.index', ['projects' => Project::orderByDesc('id')->paginate(9)]);
    }
    
    public function show(Project $project) {
        return view('guests.projects.show', compact('project'));
    }
}
