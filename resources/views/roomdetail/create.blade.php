@extends('layout.main')
@section('content')

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <h6>Add Rooms</h6>
                    </li>
        </ol>
<hr>
<div class="row">
    <div class="col-sm-2">
        
    </div>
    <div class="col-sm-6">
        <form class="myform" action="{{route('roomdetail.store')}}" method="post">
           {{csrf_field()}}
            
    <div class="form-group col-md-4">
      <label for="inputEmail4">Room Type:</label>
      <input type="text" class="form-control" id="roomtype" name="roomtype" placeholder="Room Type">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Price:</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Price">
    </div>
     
 
         <button type="submit" class="btn btn-success">Add</button>

        </form>
    </div>
    <div class="col-sm-4">
        <h5>Room Details:</h5>
              
           <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Rooms</th>
      <th scope="col">Pricing</th>
      <th scope="col">Rooms</th>
    </tr>
  </thead>
  <tbody>
   
      <table>
    </div>
</div>
    </div>
</div>


@endsection