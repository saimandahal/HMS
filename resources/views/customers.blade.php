<title>Customer Details</title>
@extends('layout.main')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            Customer Details
            </li></ol>
 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Full Customers List</div>
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                   <th>S.No.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Age</th>
                    <th>CheckIn Date</th>
                    <th>CheckOut Date</th>
                    <th>Amount Recieved</th>
                    <th>Remarks</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>S.No.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Age</th>
                    <th>CheckIn Date</th>
                    <th>CheckOut Date</th>
                    <th>Amount Recieved</th>
                    <th>Remarks</th>
                  </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->firstname}} {{$post->middlename}} {{$post->lastname}}</td>
                    <td>{{$post->state}}</td>
                    <td>{{$post->profession}}</td>
                                        <td>{{$post->age}}</td>

                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                                        <td>{{$post->id}}</td>

                    <td>{{$post->id}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
</div>


@endsection