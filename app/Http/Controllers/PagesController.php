<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    public function index(){
      if(Auth::guard('admin')->check())
          return redirect('admin');
      else  if(Auth::guard('teacher')->check())
          return redirect('/teacher');
      else   if(Auth::guard('web')->check())
          return redirect('dashboard');
      else
          return view('pages.index');
    }
    public function about(){
      return view('pages.about');
    }

    public function login(){
      return view('pages.index');
    }
}
