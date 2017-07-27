<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $user = Auth::user();
        return view('layouts.student')->with('dashboardContent','dashboards.student.home')->with('student', $user);
    }

    public function profile(){
        $user = Auth::user();
        return view('layouts.student')->with('dashboardContent','dashboards.student.profile')->with('student', $user);
    }
}
