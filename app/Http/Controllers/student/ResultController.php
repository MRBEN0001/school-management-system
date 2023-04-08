<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Mark;


class ResultController extends Controller
{
    public function viewResultIndex(){
        $marks = Mark::all();
        $studentResult = Mark::where('user_id', auth()->user()->id)->get();
        
        return view('student.student-view-result')->with('studentResult', $studentResult)
        ->with('marks', $marks);
       
    }
    public function viewResult(){
     

    }
    // public function editMark($id)
    // {
    //     $courses = Course::all();
    //     $students = User::where('is_admin', false)->get();
    //     $mark = Mark::find($id);
    //     return view('admin.admin-edit-mark')->with('mark', $mark)
    //         ->with('courses', $courses)
    //         ->with('students', $students);
    // }
    // public function editCourse($id)
    // {
    //   $course= course::find($id);
    //   return view('admin.admin-edit-course')->with('course', $course);
    // }
}
