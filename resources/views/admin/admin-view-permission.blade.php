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
                                    <th>Title</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Take Action</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>

                            <tbody id="actionButtons">
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->title ?? ""}}</td>
                                    <td> {{$permission->reason ?? ""}}</td>
                                    @if($permission->status=="approved")
                                    <td class="text-success"> {{$permission->status ?? "" }}</td>
                                    @elseif($permission->status=="rejected")

                                    <td class="text-danger"> {{$permission->status ?? "" }}</td>
                                    @else
                                    <td class="text-warning"> {{$permission->status ?? "" }}</td>
                                    @endif
                                    <td id="actionTd">

                                        <button data-target="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" id="{{$permission->id}}" data-id="true" class=" approveButton btn btn-success">Approve
                                        </button>
                                        <button data-target="#collapseExample" data-toggle="collapse" id="{{$permission->id}}" class=" rejectButton btn btn-danger" data-id="false">Reject</button>

                                        <form class=" .form collaps" id=" collapseExample" action="/permission/{{$permission->id}}/update" method="post" style="display:non ;margin-top:1rem;" id="">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" id="status" name="status" value="" class="status01">
                                            <input type="text" name="comment" value="" id="commentElement">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </form>

                                    </td>
                                    <td> {{$permission->comment ?? ""}}</td>
                                </tr>
                                @endforeach

                    </div>

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js
"></script>
    <script>
        document.getElementById('actionButtons').addEventListener('click', function(event) {
            const permissionStatus = event.target.getAttribute('data-id');
        
            var permissionId = event.target.getAttribute('id');


            var url = "{{ route('update-permission', ':id') }}"
            url = url.replace(':id', permissionId);

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    "_token": $('meta[name = "csrf-token"]').attr('content'),
                    status: permissionStatus,
                },
                success: function(data) {
                    console.log(data)
                }
            });
        });


        document.querySelector(".form").addEventListener('click' ,function(event){
    var commentElement= document.querySelector(' button #commentElement');
    var comment = event.target.commentElement;
            // var comment = event.target.parentNode.commentElement.getAttribute('name');
            alert(comment)
        });












        //get the button to be clicked

        //add event listener to the button to be clicked
        // showFormButton.addEventListener('click', function() {
        //     myForm.style.display = "block";
        // });
        //add event listener to the button to be clicked so as to add approved  



        // showFormButton2.addEventListener('click', function() {
        //     myForm.style.display = "block";

        // });
        //add event listener to the button to be clicked so as to add rejected


        // const myElement = document.querySelector('.rejectButton');
    </script>

    @endsection