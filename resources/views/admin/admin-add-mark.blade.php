@extends('layouts.dashboard')
@section('content')


<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add MArk</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add MArk</li>
            </ol>
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

        <!-- Column -->
        <!-- Column -->


        @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" style="color: green;">X</button>
                {{ session('status') }}
            </div>
            @endif

        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tab panes -->
                <div class="card-body">
                    <form action="/add-mark" method="post" class="form-horizontal form-material mx-2">
                        @csrf
                        <select name="courseId" class="form-select b-0 " required>
                            <option value="">Course</option>
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->title ?? ''}}</option>
                            @endforeach
                        </select>
                        <select name="studentId" class="form-select b-0 " required>
                            <option value="">Student</option>
                            @foreach($students as $student)
                            <option value="{{$student->id}}">{{$student->name ?? ''}}</option>
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label class="col-md-12">Quiz Mark</label>
                            <div class="col-md-12">
                                <input name="quizMark" type="number" placeholder="" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Assignment Mark</label>
                            <div class="col-md-12">
                                <input name="assignmentMark" type="number" placeholder="" class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Exam Mark</label>
                            <div class="col-md-12">
                                <input name="examMark" type="number" value="" class="form-control form-control-line">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-12">Grade</label>
                            <div class="col-md-12">
                                <input name="grade" type="text" value="" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button name="submit" class="btn btn-success">Submit</button>
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

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->

@endsection