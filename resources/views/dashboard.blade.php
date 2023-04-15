


@extends('layouts.dashboard')  
      @section('content')  
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- <div class="col-md-7  w-70 align-self-center ">
                        <a href="https://www.wrappixel.com/templates/adminwrap/"
                            class=" w-80 btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Upgrade to
                            Pro</a>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    @if(!auth()->user()->is_admin)
                    <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/view/result/index">CHECK RESULT</a>
                        </div>
                               
                        </div> <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/request/permission/index">REQUEST PERMISSION </a>
                        </div>
                               
                        </div> <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/view/permission">VIEW PERMISSION(S)</a>
                        </div>
                               
                        </div>

                    @else
                    <!-- Column -->
                    <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/create/student/index">CREATE STUDENT</a>
                        </div>
                               
                        </div> <!-- Column -->
                        <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/view/student/index">VIEW STUDENT</a>
                        </div>
                               
                
                        </div> <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/create/course/index">CREATE COURSE</a>
                        </div>
                               
                
                        </div>
                        <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/view/course/index">VIEW COURSES</a>
                        </div>
                               
                
                        </div>
                         <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/add/mark/index">ADD MARK</a>
                        </div>
                               
                
                        </div>
                        <div style=" margin:3rem; height: 8rem; " class="col-lg-3 btn btn-info">
                        <!-- <div  class="card"> -->
                            <!-- <div class="card-bod" style="color:white ; margin: top 3rem; text-align:center"> -->
                            <div style="margin-top:3rem;" >
                            <a style=" height: 5rem; color:white; "  href="/view/mark">VIEW MARKS</a>
                        </div>
                                
                
                        </div>
                        @endif
   
                    </div>
              
            </div>
    @endsection
