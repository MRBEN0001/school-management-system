<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Mark;

class MarkController extends Controller
{
    public function  addMarkIndex()
    {
        // $mark = Mark::find(2);
        // dd($mark->users);
        $courses = Course::all();
        $students = User::where('is_admin', false)->get();
        return view("admin.admin-add-mark")
            ->with('courses', $courses)
            ->with('students', $students);
    }

    public function addMark(Request $request)
    {
        $assignment = $request->assignmentMark;
        $quiz = $request->quizMark;
        $exam = $request->examMark;

        $totalScore = $assignment + $quiz + $exam;

        $mark = new Mark();
        $mark->user_id = $request->studentId;
        $mark->course_id = $request->courseId;
        $mark->assignment_mark = $request->assignmentMark;
        $mark->quiz_mark = $request->quizMark;
        $mark->exam_mark = $request->examMark;
        $mark->total = $totalScore;
        $mark->grade = $this->calculateGrade($totalScore);
        $mark->save();
        session()->flash('status', "Mark added succesfully");
        return redirect("/add/mark/index");
    }

    function calculateGrade($totalScore)
    {

        return match (true) {
            $totalScore >= 70 => 'A',
            $totalScore >= 65 => 'B',
            $totalScore >= 50 => 'C',
            $totalScore >= 40 => 'A',
            default => 'F',
        };
    }
    // switch (true) {
    //     case ($totalScore >= 70):
    //         $grade = 'A';
    //         break;
    //     case ($totalScore >= 60):
    //         $grade = 'B';
    //         break;
    //     case ($totalScore >= 50):
    //         $grade = 'C';
    //         break;
    //     case ($totalScore >= 40):
    //         $grade = 'D';
    //         break;

    //     default:
    //         $grade = 'F';
    //         break;
    // }

    // return $grade;

    public function  viewMark()
    {
        $marks = Mark::all();
        // $students = User::where('is_admin', false)->get();
        return view("admin.admin-view-mark")
            ->with('marks', $marks);
        // ->with('students', $students);
    }

    public function editMark($id)
    {
        $courses = Course::all();
        $students = User::where('is_admin', false)->get();
        $mark = Mark::find($id);
        return view('admin.admin-edit-mark')->with('mark', $mark)
            ->with('courses', $courses)
            ->with('students', $students);
    }

    public function updateMark(Request $request, $id)
    {
        $assignment = $request->assignmentMark;
        $quiz = $request->quizMark;
        $exam = $request->examMark;

        $totalScore = $assignment + $quiz + $exam;



        $mark = Mark::find($id);
        $mark->user_id = $request->studentId;
        $mark->course_id = $request->courseId;
        $mark->quiz_mark = $request->quizMark;
        $mark->assignment_mark = $request->assignmentMark;
        $mark->exam_mark= $request->examMark;

        $mark->grade = $request->grade;

        $mark->total = $totalScore;
        $mark->grade = $this->calculateGrade($totalScore);

        $mark->save();
        return redirect("/view/mark");
     
    }
    public function deleteMark($id){
        $mark= Mark::find($id);
        $mark->delete();
        return redirect('/view/mark/');
        }
}
