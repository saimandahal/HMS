<title> Add New User </title>
<style>
    .myform{
        margin-top: 5px;
        
        
    }
</style>
@extends('layout.main')
@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            Update Details
            </li></ol>
   
      
<form class="myform" action="/update/{{$new->id}}" method="post">
{{ csrf_field() }}
@method('GET')
 <div class="row">
     <p style="margin-left:25px;color:#93979b; font-size:15px">***Insert all details carfully***</p>
 </div>
 <hr>
  <div class="form-row">
         <label >Personal Information:</label>
    
    </div>
    <hr>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Firstname:</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FirstName" value="{{($new->firstname)}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middlename:</label>
      <input type="text" class="form-control" id="middlename" name="middlename" placeholder="MiddleName" value="{{($new->middlename)}}">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Lastname:</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LastName" value="{{($new->lastname)}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="city" value="{{($new->city)}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state" value="{{($new->state)}}">
        <option selected>state no.1</option>
        <option>State no.2</option>
        <option>State no.3</option>
        <option>State no.4</option>
        <option>State no.5</option>
        <option>State no.6</option>
        <option>State no.7</option>

            </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip" value="{{($new->zip)}}">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="optionaladdress">Optional Address:</label>
    <input type="text" class="form-control" id="inputAddress" name="optional" placeholder="Dharan,Nepal" value="{{($new->optional)}}">
  </div>
 <!-- <div class="form-group col-sm-6">
      <label for="inputAddress">Optional Address:</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="ChataraLine,Dharan">

  </div>-->
  </div>
          <div class="form-row">
          <div class="form-group col-sm-4">
       <label for="email">Email Address </label>
    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value="{{($new->email)}}">
  </div>
  <div class="form-group col-sm-4" >
    <label for="inputAddress2">Profession </label>
    <input type="text" class="form-control" id="profession" placeholder="Businessman" name="profession" value="{{($new->profession)}}">
  </div>
  <div class="form-group col-sm-4">
       <label for="inputAddress2">Age </label>
    <input type="number" class="form-control" id="profession" placeholder="23" name="age" value="{{($new->age)}}">
  </div>
  
  </div>
          <hr>
  <div class="form-row">
         <label >Room Details:</label>
    
    </div>
    <hr>
       <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Room Type:</label>
      <input type="text" class="form-control" id="roomtype" name="type" placeholder="Deluxe" value="{{($new->type)}}">
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">No. of Guests:</label>
      <input type="number" class="form-control" id="noofguest" name="guestno" placeholder="2" value="{{($new->guestno)}}">
    </div>
     <div class="form-group col-md-2">
      <label for="inputPassword4">No. of Rooms:</label>
      <input type="number" class="form-control" id="noofrooms" name="noroom" placeholder="1" value="{{($new->noroom)}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Alloted Room:</label>
 <select class="form-control" id="exampleFormControlSelect1" name="alloted" value="{{($new->alloted)}}">
      <option>303</option>
      <option>304</option>
      <option>305</option>
      <option>306</option>
      <option>307</option>
    </select>    </div>
  </div>
  
 <div class="form-row">
        <div class="form-group col-md-2">

     <label>Additional Services:</label>
    </div>
            <div class="form-group col-md-2">
            <input class="form-check-input" type="checkbox" value="spa" id="spa" name="spa" value="{{($new->spa)}}">
  <label class="form-check-label" for="wifi">
    Spa And Massage
  </label>
     </div>
      <div class="form-group col-md-2">
            <input class="form-check-input" type="checkbox" value="ac" id="ac" name="ac" value="{{($new->ac)}}">
  <label class="form-check-label" for="ac">
    AC
  </label>
     </div>
     <div class="form-group col-md-2">
            <input class="form-check-input" type="checkbox" value="parking" id="parking" name="parking" value="{{($new->parking)}}">
  <label class="form-check-label" for="wifi">
    Parking
  </label>
     </div>
    
      <div class="form-group col-md-2">
            <input class="form-check-input" type="checkbox" value="food" id="food" name="food" value="{{($new->food)}}">
  <label class="form-check-label" for="wifi">
    Additional Foodstuffs
  </label>
     </div>
      <div class="form-group col-md-2">
            <input class="form-check-input" type="checkbox" value="transport" id="transport" name="transport" value="{{($new->transport)}}">
  <label class="form-check-label" for="transport">
    Transportation
  </label>
     </div>
    </div>
   
 
 <hr>
  <div class="form-row">
         <label >Identification Document:</label>
    
    </div>
    <hr>
  <div class="form-group">

    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
   
    <input type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
  </div>
  <span style="padding:1px"></span>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me in...
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
 </div>

@endsection