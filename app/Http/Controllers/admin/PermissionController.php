<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function requestPermissionIndex(){
       
return view('student.student-request-permission');

    }
    public function createPermission(Request $request)
    {
        $permission= new Permission();
        $permission->user_id= $request->studentId;
        $permission->title= $request->title;
        $permission->reason= $request->reason;
       $s= $permission->save();
       session()->flash('status', "Permission added succesfully");

       return redirect('/view/permission');
        // if ($s) {
        //     return"Permission was submited successfully";
        // }
    }
    public function viewPermission(){
        // $students = User::where('is_admin', false)->get();

        $permissions = permission::where('user_id', auth()->user()->id)->get();
        return view('student.student-view-permission')->with("permissions", $permissions);

    }
    public function  adminViewPermissionIndex(){
        $permissions = Permission::all();
        return view('admin.admin-view-permission')->with("permissions", $permissions);
    }
  
    public function adminTakeActionOnPermission(Request $request, $id){
        // $permission =Permission::find($id);
        // $permission->status = $request->status;
        // $permission->comment= $request->comment;
        // $permission->save();
        // return redirect('/view/permission/index');
    //   return $request['status'] . " " . $id;
      dd("Hello!");
        
    }


    // public function updateStudent(Request $request, $id)
    // {
    //   $student = User::find($id);
    //   $student->name = $request->fullname;
    //   $student->email = $request->email;
    //   $student->save();
    //   return redirect('/view/student/index');
    // }
}
