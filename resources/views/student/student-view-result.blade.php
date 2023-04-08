@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">view Courses</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">view courses</li>
            </ol>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                    <div class="table-responsive">
                        <table class="table">

                            <thead>

                                <tr>
                                    <!-- <th>SN</th> -->
                                    <th>Course Tittle</th>
                                    <th>Course Code</th>
                                    <th>Credit Unit</th>
                                </tr>
                            </thead>

                            <tbody>





                                @extends('layouts.dashboard')
                                @section('content')

                                <div class="container-fluid">

                                    <!-- ============================================================== -->
                                    <!-- Bread crumb and right sidebar toggle -->
                                    <!-- ============================================================== -->
                                    <div class="row page-titles">
                                        <div class="col-md-5 align-self-center">
                                            <h3 class="text-themecolor">view Courses</h3>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                                <li class="breadcrumb-item active">view courses</li>
                                            </ol>
                                        </div>

                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- End Bread crumb and right sidebar toggle -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- Start Page Content -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                                    <div class="table-responsive">
                                                        <table class="table">

                                                            <thead>

                                                                <tr>
                                                                    <!-- <th>SN</th> -->
                                                                    <th>Course Tittle</th>
                                                                    <th>Course Code</th>
                                                                    <th>Quiz</th> 
                                                                    <th>Assignment</th> 
                                                                    <th>Exam</th>
                                                                     <th>Total</th>
                                                                      <th>Grade</th>
                                                                      
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                            @foreach($studentResult as $result)
                                                             @foreach($marks as $mark)
                                                                <tr>

                                                                    <td> {{$mark->course->title  }}</td>
                                                                    <td> {{$mark->course->code  }}</td>
                                                                    <td> {{$result->quiz_mark ?? ""}}</td>
                                                                    <td> {{$result->assignment_mark ?? ""}}</td>
                                                                    <td> {{$result->exam_mark ?? ""}}</td>
                                                                    <td> {{$result->total ?? ""}}</td>
                                                                    <td> {{$result->grade ?? ""}}</td>

                                                                  
                                                                 
                                                                </tr>
                                                                @endforeach
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- End PAge Content -->
                                    <!-- ============================================================== -->
                                </div>
                                @endsection




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
@endsection