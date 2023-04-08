@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Profile</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="https://www.wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Upgrade to
                Pro</a>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <!-- <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="../assets/images/users/5.jpg" class="img-circle"
                                        width="150" />
                                    <h4 class="card-title mt-2">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="fa fa-user"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="fa fa-camera"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div> -->
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tab panes -->
                <div class="card-body">

                    <form action="/mark/{{$mark->id}}/update" method="post" class="form-horizontal form-material mx-2">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-md-12"> </label>
                            <div class="col-md-12">
                                <select name="studentId" class="form-select b-0 " required>
                                    <option value="">Student</option>
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->name ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12"> </label>
                            <div class="col-md-12">
                                <select name="courseId" class="form-select b-0 " required>
                                    <option value="">Course</option>
                                    @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->title ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Quiz</label>
                            <div class="col-md-12">
                                <input name="quizMark" value="{{$mark->quiz_mark}}" type="number" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Assignment</label>
                            <div class="col-md-12">
                                <input name="assignmentMark" value="{{$mark->assignment_mark}}" type="number" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Exam</label>
                            <div class="col-md-12">
                                <input name="examMark" value="{{$mark->exam_mark}}" type="number" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>

@endsection