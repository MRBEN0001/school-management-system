<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\MarkController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\AnnouncementController;
use App\Http\Controllers\student\ResultController;
use App\Http\Controllers\admin\PermissionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/dashboard',[AdminHomeController::class, 'index']);
    //COURSE
    Route::get('/create/course/index',[CourseController::class, 'createCourseIndex']);
    Route::post('/create/course',[CourseController::class,'createCourse']);
    Route::get('/view/course/index',[CourseController::class,'viewCourseIndex']);
    Route::get('/course/{id}/edit', [CourseController::class,'editCourse']);
    Route::put('/course/{id}/update', [CourseController::class, 'updateCourse']);
    Route::delete('/course/{id}/delete', [CourseController::class,'deleteCourse']);
    //STUDENT
    Route::get('/create/student/index',[StudentController::class, 'createStudentIndex']);
    Route::post('/create/student',[StudentController::class,'createStudent']);
    Route::get('/view/student/index',[StudentController::class,'viewStudentIndex']);
    Route::get('/student/{id}/edit',[StudentController::class,'editStudent']);
    Route::put('/student/{id}/update',[StudentController::class,'updateStudent']);
    Route::delete('/student/{id}/delete', [StudentController::class,'deleteStudent']);
    //MARK
    Route::get('/add/mark/index',[MarkController::class, 'addMarkIndex']);
    Route::post('/add-mark',[MarkController::class, 'addMark']);
    Route::get(' /view/mark',[MarkController::class, 'viewMark']);
    Route::get(' /mark/{id}/edit',[MarkController::class, 'editMark']);
    Route::put('/mark/{id}/update',[MarkController::class,'updateMark']);
    Route::delete('/mark/{id}/delete', [MarkController::class,'deleteMark']);
    //ANNOUNCEMENT
    Route::get('/create/announcement/index',[AnnouncementController::class, 'createAnnouncementIndex']);
    Route::post('/create/announcement',[AnnouncementController::class, 'createAnnouncement']);
    //Result
    Route::get('/view/result/index',[ResultController::class,'viewResultIndex']);
    Route::get('/view/result',[ResultController::class,'viewResult']);
    //PERMISSION
    Route::get('/request/permission/index',[PermissionController::class,'requestPermissionIndex']);
    Route::post('/create/permission', [PermissionController::class,'createPermission']);
    Route::get('/view/permission',[PermissionController::class,'viewPermission']);
    Route::get('/view/permission/index',[PermissionController::class,'adminViewPermissionIndex']);
    Route::post('/permission/{id}/update',[PermissionController::class,'adminTakeActionOnPermission'])->name('update-permission');

    
    



    

});

require __DIR__.'/auth.php';
