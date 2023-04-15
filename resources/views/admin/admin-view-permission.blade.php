@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">view Permissions</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">view Permissions</li>
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

                                        <button data-target="#collapseExample" data-toggle="collapse" 
                                        role="button" aria-expanded="false" aria-controls="collapseExample" 
                                        id="approveButton" data-id="approved"  value="approved" class="  btn btn-success">Approve
                                        </button>

                                        <button data-target="#collapseExample" data-toggle="collapse" 
                                        id="RejectButton" class=" btn btn-danger" data-id="rejected">Reject</button>

                                        <form onsubmit="getValue()" class=" form collaps" id=" collapseExample" action="/permission/{{$permission->id}}/update" method="post" style="display:non ;margin-top:1rem;" id="">
                                            @csrf
                                            @method('PUT')

                                        
                                            <!-- <input type="text" id="status" name="status" value="" class="status01"> -->
                                            <!-- <input  type="text" id="" name="permissionId" value="/permission/{{$permission->id}}/update" class=""> -->
                                            <input type="text" name="comment" value="" id="comment">
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
">

</script>
    <script>
        document.getElementById('actionButtons').addEventListener('click', function(event) {
            var permissionStatus = event.target.getAttribute('data-id');
        
            var permissionId = event.target.getAttribute('id');
            
        document.querySelector('.form').addEventListener('submit', function(e){
            e.preventDefault();
            var comment= e.target.document.querySelector('#comment').value;
            // alert(comment);
            var url = "{{ route('update-permission', ':id') }}"
            url = url.replace(':id', permissionId);

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    "_token": $('meta[name = "csrf-token"]').attr('content'),
                    status: permissionStatus,
                    comment:comment,
                    
                },
                success: function(data) {
                    console.log(data)
                }
            });

        });

        });

//         function getValue(event) {
//   event.preventDefault(); // prevent form submission
//   var inputVal = document.getElementById("comment").value;
//   alert(inputVal);
// }



    //     document.querySelector(".form").addEventListener('click' ,function(event){
    // var commentElement= document.querySelector(' button #commentElement');
    // var comment = event.target.commentElement;
    //         // var comment = event.target.parentNode.commentElement.getAttribute('name');
    //         alert(comment)
    //     });












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