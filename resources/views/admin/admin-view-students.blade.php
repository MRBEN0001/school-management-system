

      @extends('layouts.dashboard')
        @section('content')

        <div class="container-fluid">
       
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">view students</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">view students</li>
                        </ol>
                    </div>
                    <!-- <div class="col-md-7 align-self-center">
                        <a href="https://www.wrappixel.com/templates/adminwrap/"
                            class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Upgrade to
                            Pro</a>
                    </div> -->
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
                                                <th>Name</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                        
                                         <tbody>
                                        
                                         @forelse($students as $student)

                                            <tr>
                                                <td>{{$student->name ?? ""}}</td>
                                                <td> {{$student->email ?? ""}}</td>
                                                
                                                <td class="btn btn-primary"> <a href="/student/{{$student->id}}/edit"></a> 
                                                <a href="/student/{{$student->id}}/edit">  <input class="btn btn-primary" type="submit" value="Edit"></a> 

                                            </td>
                                                <td class="btn btn-danger" role="button">
                                            <form action="/student/{{$student->id}}/delete" method="post">
                                                @csrf
                                                @method('Delete')
                                                <input class="btn btn-danger" type="submit" value="Delete">

                                            </form>
                                            </td>
                                            </tr>
                                       @empty
                                       <h4 class="text-warning">No Record Found!</h4>
                                            @endforelse
                                            

                                         
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