

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

                                         @foreach($courses as $course)

                                            <tr>
                                               
                                                <td> {{$course->title ?? ""}}</td>
                                                <td> {{$course->code ?? ""}}</td>
                                                <td> {{$course->unit_load ?? ""}}</td>
                                                <td class="btn btn-primary"> <a href="/course/{{$course->id}}/edit"></a> 
                                                <a href="/course/{{$course->id}}/edit">  <input class="btn btn-primary" type="submit" value="Edit"></a> 

                                            </td>
                                                <td class="btn btn-danger" role="button">
                                            <form action="/course/{{$course->id}}/delete" method="post">
                                                @csrf
                                                @method('Delete')
                                                <input class="btn btn-danger" type="submit" value="Delete">

                                            </form>
                                            </td>
                                            </tr>
                                       
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

