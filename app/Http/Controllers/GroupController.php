<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class GroupController extends Controller
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
        if (Auth::user()->isRole('administrator')) {
            return view('groups');
        } else {
            return view('dashboard');
        }
        
    }
}
