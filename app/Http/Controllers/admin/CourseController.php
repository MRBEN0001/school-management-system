<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function  createCourseIndex(){
        return view("admin.admin-create-course");
    }

    public function viewCourseIndex(){
        //fetch all coourses from dB
        $courses = course::all();
        //return course index page with all the courses from DB
        return view('admin.admin-view-course')->with('courses', $courses);
    }
    public function createCourse(Request $request){
        $course= new course();
        $course->code= $request->coursecode;
       $course->title = $request->coursetitle;
        $course->unit_load = $request->unitload;
        $s = $course->save();
        return view("admin.admin-view-course");
        
    }

    public function editCourse($id)
    {
      $course= course::find($id);
      return view('admin.admin-edit-course')->with('course', $course);
    }

    public function updateCourse(Request $request, $id)
  {
    $course = course::find($id);
    $course->code = $request->coursecode;
    $course->title = $request->coursetitle;
    $course->unit_load = $request->unitload;
    $course->save();
    return redirect('/view/course/index');
  }
  public function deleteCourse($id){
  $course= course::find($id);
  $course->delete();
  return redirect('/view/course/index');
  }


}
