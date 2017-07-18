<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TeacherLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest');
    }
    public  function showLoginForm(){
      return view('auth.teacher-login');
    }
    public function login(Request $request){
      //Validate the form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:5'
      ]);
      //if validated
      if(Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->intended('teacher');
      }
      //if not validated
      $errors = [$this->username() => trans('auth.failed')];

      if ($request->expectsJson()) {
          return response()->json($errors, 422);
      }

      return redirect('/#teacher')
          ->withInput($request->only($this->username()))
          ->withErrors($errors);

    }
    public function username()
    {
        return 'email';
    }
}
