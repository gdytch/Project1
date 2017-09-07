<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Teacher;
use App\Subject;
use Excel;

class AdminDashboardController extends Controller
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
        return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.pages.home');
    }

    public function studentProfile($id){
        $student = User::find($id);
        return view('layouts.admin')->with('dashboard_content','dashboards.student.profile')->with('student',$student);
    }

    public function test(){
            $f = ['course_id' => 'AA' , 'course_description' => 'SVDSD'];
            $result = Subject::where($f)->get();
            echo count($result);
            foreach ($result as $key => $value) {
                echo $value->course_id." ".$value->course_description."<br>";
            }

    }
    public function run_test(Request $request){
        if($request->hasFile('file')){
            $file = $request->file('file');

            $results = Excel::load($file, function($reader) {
            })->get();

                  //return $results;
          return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.pages.test')->with('results', $results);

            //return view('layouts.admin')->with('dashboard_content', 'dashboards.admin.pages.test')->with('results', $results);
        }else{
            echo "no file";
        }
    }
}
