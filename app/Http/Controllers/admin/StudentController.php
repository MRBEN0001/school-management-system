<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function  createStudentIndex(){
        return view("admin.admin-create-student");
    }

     public function createStudent(Request $request){
      $student= new User();
      $student->name= $request->name;
      $student->email = $request->email;
      $student->password = Hash::make($request->password);
      $student->save();
      return redirect('/view/student/index');
      
    }

    public function viewStudentIndex(){
        //fetch all students from dB
        // $students = User::all()->where('is_admin', '1');
        $students=User::where('is_admin', false)->get();
        return view("admin.admin-view-students")->with('students', $students);

        // ->where('my_column', 'this')
    }
    public function editStudent($id)
    {
      $student= User::find($id);
      return view('admin.admin-edit-student')->with('student', $student);
    }

    public function updateStudent(Request $request, $id)
    {
      $student = User::find($id);
      $student->name = $request->fullname;
      $student->email = $request->email;
      $student->save();
      return redirect('/view/student/index');
    }
    public function deleteStudent($id){
        $student= User::find($id);
        $student->delete();
        return redirect('/view/student/index');
        }
      
}
