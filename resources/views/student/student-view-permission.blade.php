




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
                                    @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" style="color: green;">X</button>
                {{ session('status') }}
            </div>
            @endif
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
                                                                    <th>Title</th>
                                                                    <th>Reason</th>
                                                                    <th>Status</th>
                                                                    <th>Comment</th>


                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @foreach($permissions as $permission)
                                                                <tr>
                                                                    <td>{{$permission->title ?? ""}}</td>
                                                                    <td> {{$permission->reason ?? ""}}</td>
                                                                    @if($permission->status=="approved")
                                                                    <td class="text-success" > {{$permission->status ?? "" }}</td>
                                                                    @elseif($permission->status=="rejected")

                                                                    <td class="text-danger"> {{$permission->status ?? "" }}</td>
                                                                    @else
                                                                    <td class="text-warning"> {{$permission->status ?? "" }}</td>
                                                                    @endif
                                                                    <td> {{$permission->comment ?? ""}}</td>




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


