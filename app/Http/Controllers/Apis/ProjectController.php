<?php

namespace App\Http\Controllers\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::select()->with('pm_user')->with('pl_user')->where("status", '!=', 2)->get();;
    }
 
    public function show($id)
    {
        return Project::find($id);
    }

    public function store(Request $request)
    {
        return Project::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());

        return $project;
    }

    public function delete(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return 204;
    }
}
