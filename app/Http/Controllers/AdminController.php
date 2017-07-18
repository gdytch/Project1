<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;

class AdminController extends Controller
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
        return view('dashboards.admin-home');
    }
    public function list_students(){
      $users = User::all();
      return view('list.students')->with('users', $users);
    }
    public function list_teachers(){
      $teachers = Teacher::all();
      return view('list.teachers')->with('teachers', $teachers);
    }
}
