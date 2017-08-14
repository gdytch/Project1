<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Image;
use App\User;
use App\Department;

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
         return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.student.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'dashboard_content' => 'dashboards.admin.student.add',
            'departments' => Department::all()->sortBy('department_id'),
            'year_levels' => Department::all('year_levels')->unique('year_levels')->sortBy('year_levels')
        );
        return view('layouts.admin')->with($data);
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
            'password' =>'required|min:6|confirmed',
            'email' => 'email|max:255',
            'avatar' => 'image',
        ]);


            // store
        $student = new User(Input::all());

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = $student->ID_no.".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500,500)->save(public_path('storage/avatars/'.$filename));
            $student->avatar = $filename;
        }else{
            $student->avatar = 'default.jpg';
        }

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
        $student = User::find($id);
        return view('layouts.admin')->with('dashboard_content','dashboards.student.profile')->with('student',$student);
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
        $departments = Department::all();
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.student.edit')->with('student', $student)->with('departments', $departments);
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
            'first_name'  => 'required',
            'middle_name'  => 'required',
            'last_name'  => 'required',
            'email' => 'required|email|max:255',
            'avatar' => 'image'
        ]);


            // store
        $student = User::find($id);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = $student->ID_no.".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500,500)->save(public_path('storage/avatars/'.$filename));
            $student->avatar = $filename;
        }

        $student->update(Input::all());



        // redirect
        $message = 'Successfully Updated!';
        return redirect('/admin/student/profile/'.$student->id)->withSuccess($message);
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
