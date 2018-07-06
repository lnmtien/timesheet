<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('projects.dashboard');  
    }
    
    public function create()
    {
        if (Auth::user()->isRole('administrator')) {
            return view('projects.new');
        } else {
            return redirect()->route('projects');
        }   
    }
    
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),
            [
                'name' => 'required|min:6|max:250',
                'pm_id' => 'required|integer',
                'pl_id' => 'required|integer',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'kick_off' => 'required|date',
                'sign_off' => 'required|date',
            ]
        );
        if ($validate->fails()) {
            return response()->json($validate->errors(), 422);
        } else {
            $project = new Project;
            $project->name = $request->name;
            $project->pm_id = $request->pm_id;
            $project->pl_id = $request->pl_id;
            $project->description = $request->description;
            $project->start_date = date('Y-m-d', strtotime($request->start_date));
            $project->end_date = date('Y-m-d', strtotime($request->end_date));
            $project->kick_off = date('Y-m-d', strtotime($request->kick_off));
            $project->sign_off = date('Y-m-d', strtotime($request->sign_off));
            $project->status = ($request->status == 'on') ? 0 : 1;
            //$project->save();
            return response()->json($project, 201);
        }  
    }
}
