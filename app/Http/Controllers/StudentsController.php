<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Image;
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
         return view('layouts.admin')->with('dashboardContent', 'list.students')->with('users', $users);
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
        return view('layouts.admin')->with('dashboardContent', 'forms.edit-student')->with('student', $student);
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
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->last_name = $request->input('last_name');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->email = $request->input('email');
        $student->contact_no = $request->input('contact_no');
        $student->birthdate = $request->input('birthdate');
        $student->father_first_name = $request->input('father_first_name');
        $student->father_last_name = $request->input('father_last_name');
        $student->father_contact_no = $request->input('father_contact_no');
        $student->mother_first_name = $request->input('mother_first_name');
        $student->mother_last_name = $request->input('mother_last_name');
        $student->mother_contact_no = $request->input('mother_contact_no');
        $student->update();



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
