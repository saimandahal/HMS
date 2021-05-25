<title>Confirmation</title>
<style>

</style>
@extends('layout.main')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            Confirmation
            </li></ol>
            <hr>
            <div class="row">
     <p style="margin-left:25px;color:#93979b; font-size:15px">***Review all details carfully***</p>
 </div>
   <hr>
   <div class="row">
 <div class="col-sm-10 mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Details</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                  <tr>
                   
                    <th>Heading</th>
                    <th>Values</th>
                       </tr>
                  </thead>
                   <tr>
                       <td>Name:</td>

                       
                                                                   <td>{{$post['firstname']}} {{ $post['middlename']}} {{$post['lastname']}}</td>
                       
                   </tr>
                   <tr>
                       <td>Address:</td>
                       <td>{{$post['state']}} {{$post['city']}} {{$post['optional']}}</td>
                       
                   </tr>
                   <tr>
                       <td>Email:</td>
                       <td>{{$post['email']}}</td>
                       
                   </tr><tr>
                       <td>Profession:</td>
                       <td>{{$post['profession']}}</td>
                       
                   </tr><tr>
                       <td>Room Type:</td>
                       <td>{{$post['type']}}</td>
                       
                   </tr><tr>
                       <td>No of guest:</td>
                       <td>{{$post['guestno']}}</td>
                       
                   </tr><tr>
                       <td>No of rooms:</td>
                       <td>{{$post['noroom']}}</td>
                       
                   </tr><tr>
                       <td>Alloted Room no:</td>
                       <td>{{$post['alloted']}}</td>
                       
                   </tr><tr>
                       <td>Additional Services:</td>
                       <td>{{$post['spa']}} {{$post['ac']}} {{$post['parking']}} {{$post['food']}} {{$post['transport']}} </td>
                       
                   </tr>
                </table>   
                   
                    </div>
</div>
    <div class="row">
     <div class="col-sm-8 mb-3">
            </div>
            <a href="/update/{{$post->id}}/edit">
            {{ csrf_field() }}
     <div class="col-sm-2 mb-3">
        <button class="btn btn-danger">Edit</button>
    </div>
        </a>
   <a href="{{url('invoicein')}}">
               <div class="col-sm-2 mb-3">
        <button class="btn btn-success">Confirm</button>
     
    </div>
        </a>
    
    </div>
     </div>
      
     </div>

@endsection