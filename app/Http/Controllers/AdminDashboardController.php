<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Teacher;

class AdminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.pages.home');
    }

    public function studentProfile($id){
        $student = User::find($id);
        return view('layouts.admin')->with('dashboard_content','dashboards.student.profile')->with('student',$student);
    }

}
