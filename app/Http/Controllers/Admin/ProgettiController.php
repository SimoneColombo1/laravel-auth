<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;
use App\Models\projects;
use Carbon\Carbon;

class ProgettiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = projects::all();
        return view("admin.progetti.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.progetti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $data["data_inizio"] = Carbon::now();
        $newProgetto = projects::create($data);
        return redirect()->route('admin.admin.progetti.show', ($newProgetto));
    }

    /**
     * Display the specified resource.
     */
    public function show(projects $project)
    {
        return view("admin.progetti.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projects $project)
    {
        return  view('admin.progetti.edit', compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, projects $project)
    {
        $data = $request->validated();
        $data["data_inizio"] = Carbon::now();
        $project->update($data);
        return redirect()->route('admin.admin.progetti.show', ($project));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(projects $project)
    {
        $project->delete();
        return redirect()->route('admin.admin.progetti.index');
    }
}
