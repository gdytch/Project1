<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use Excel;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.subject.index')->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.subject.add');
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
            'course_id' => 'required',
            'course_description' => 'required'
        ]);


        $result = Subject::where(['course_id' => $request->course_id , 'course_description' => $request->course_description])->get();
        if(count($result))
            return back()->withInput()->withError('Subject Already Exist');

        $subject = new Subject(Input::all());
        $subject->save();

        return redirect('admin/subject')->withSuccess('Subject Added');
    }

    public function bulkstore(Request $request)
    {

        if($request->hasFile('file')){
            $file = $request->file('file');

            $results = Excel::load($file, function($reader) {})->get();

            $subject = array();
            foreach ($results as $key => $column) {
                $subjects[$key] = ['course_id' => $column->course_id, 'course_description' => $column->course_description];
            }

            Subject::insert($subjects);
            return redirect('admin/subject')->withSuccess('Successfully Added Subjects.');
        }else{
            return redirect()->back()->withError('No file');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.subject.profile')->with('subject', $subject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.subject.edit')->with('subject', $subject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->update(Input::all());

        $message = 'Successfully Updated!';
        return redirect('/admin/subject/'.$subject->id)->withSuccess($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();

        $message = 'Subject Deleted = Course ID:'.$subject->course_id.' '.$subject->course_description.'';
        return redirect()->back()->withSuccess($message);
    }

    public function bulkcreate()
    {
            return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.subject.bulk-add');
    }
}
