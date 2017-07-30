<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Illuminate\Support\Facades\Input;


class DepartmentsController extends Controller
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
        $departments = Department::all();
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.list.departments')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // form in admin/departments
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
            'department_id' =>'required',
            'department_name' => 'required',
        ]);

        $department = new Department(Input::all());
        $department->save();
        $message = 'Successfully Registered';
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
        $department = Department::find($id);
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.pages.department-profile')->with('department', $department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.forms.edit-department')->with('department', $department);
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
            'department_id' =>'required',
            'department_name' => 'required',
        ]);

        $department = Department::find($id);
        $department->update(Input::all());
        $message = 'Successfully Updated!';
        return redirect('admin/department/'. $id)->withSuccess($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = 'Not allowed';
        return redirect()->back()->withError($message);
    }
}
