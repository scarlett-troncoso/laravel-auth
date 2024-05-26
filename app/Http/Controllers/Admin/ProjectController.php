<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Project::all()); 

        return view('admin.projects.index', ['projects' => Project::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        // $validated['cover_image'] = Storage::put('uploads', $request->cover_image);
        // dd($validated);

        Project::create($validated);

        return to_route('admin.projects.index')->with('message', 'Cobgratulation! Project added correctly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        // dd($request->all());

        // validate inputs
        $validated = $request->validated();

        /* if($request->has(cover_image){ //se la richiesta, cioé i data editati, ha una cover_image
                if($project->cover_image){
                Storage::delete($project->cover_image)} // se il project ha gia una cover_image cancellare

                $image_path = Store::put('uploads', $request->cover_image)
                $validated['cover_image'] = $image_path;
         })*/

         // dd($validated);

         // updated model
        $project->update($validated);

        // redirect
        return to_route('admin.projects.index', compact('project'))->with('message', 'Cobgratulation! Project edited correctly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
