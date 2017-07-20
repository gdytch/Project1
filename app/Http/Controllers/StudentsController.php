<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin')->except('show');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = User::all();
         return view('list.students')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Form is in views\forms\add-students
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

            // store
        $student = new User;
        $student->name  = $request->input('name');
        $student->email = $request->input('email');
        $student->password = bcrypt($request->input('password'));
        $student->save();

        // redirect
        $message = 'Successfully registerd!';
        return redirect()->back()->withSuccess($message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);
        return view('forms.edit-student')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email|max:255',
        ]);

            // store
        $student = User::find($id);
        $student->name  = $request->input('name');
        $student->email = $request->input('email');
        $student->save();

        // redirect
        $message = 'Successfully Updated!';
        return redirect('admin/student/')->withSuccess($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();

        $message = 'Student Deleted = ID:'.$id.' Name: '.$student->name.'';
        return redirect()->back()->withSuccess($message);
    }
}
