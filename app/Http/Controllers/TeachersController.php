<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Teacher;
use App\Http\Requests\CreateTeacherRequest;
class TeachersController extends Controller
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
        $teachers = Teacher::all();
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.teacher.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Form in views\forms\add-teacher
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
                'email' => 'required|email|max:255|unique:teachers',
                'password' => 'required|min:6|confirmed'
            ]);

            // store
            $teacher = new Teacher(Input::all());
            $teacher->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.teacher.edit')->with('teacher', $teacher);
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

        $teacher = Teacher::find($id);
        $teacher->name  = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->save();

        $message = 'Successfully Updated!';
        return redirect('admin/teacher/')->withSuccess($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        $message = 'Teacher Deleted = ID:'.$id.' Name: '.$teacher->name.'';
        return redirect()->back()->withSuccess($message);
    }

}
