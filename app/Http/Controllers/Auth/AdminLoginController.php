<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest');
    }
    public  function showLoginForm(){
      return view('auth.admin-login');
    }
    public function login(Request $request){
      //Validate the form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:5'
      ]);
      //if validated
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->intended('admin');
      }
      //if not validated
      $errors = [$this->username() => trans('auth.failed')];

      if ($request->expectsJson()) {
          return response()->json($errors, 422);
      }

      return redirect()->back()
          ->withInput($request->only($this->username()))
          ->withErrors($errors);

    }
    public function username()
    {
        return 'email';
    }
}
