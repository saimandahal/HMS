
@extends('layout.main')
@section('content')



 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
           <i class="fas fa-calculator"></i>
            <span></span>
           Amount Calculator
          </li>
          
        </ol>
<div class="row">
    <div class="col-sm-6">
               <div class="row">
                <div class="col-sm-10">
<h5>Room Type:</h5>
                                <hr>
                                 <select class="custom-select mr-sm-4" id="roomtype" name="roomtype">
                                <option selected>Choose the type of room...</option>
                                <option name="normal" >Normal</option>
                              <option value="2" data-action="normal2" onclick="myfunction2()">Normal Double</option>

                                <option value="3" data-action="deluxe" onclick="myfunction3()">Deluxe</option>
                                     <option value="4" data-action="deluxe2" onclick="myfunction()">Deluxe Double</option>
                                     <option value="5" onclick="myfunction()">Large Normal</option>
                                <option value="6" onclick="myfunction()">Special</option>
                                <option value="7" onclick="myfunction()"> Special Double</option>
                                <option value="8" onclick="myfunction()">Very Special</option>

              </select>
                   <hr>
                   </div>
                    
                      <div class="col-sm-2"></div>
        </div>
                       <div class="row">          </div>
                        <h5>Extra Feaures:</h5>
                         <hr>
                      <div class="row">

                              <div class="col-sm-4 form-check">
                    <input type="checkbox" class="form-check-input" id="spa">
                    <label class="form-check-label" for="spa">Spa</label>
                  </div>
                              <div class="col-sm-4 form-check">
                    <input type="checkbox" class="form-check-input" id="Food">
                    <label class="form-check-label" for="exampleCheck1">Food</label>
                  </div>
                              <div class="col-sm-4 form-check">
                    <input type="checkbox" class="form-check-input" id="Bar">
                    <label class="form-check-label" for="exampleCheck1">Bar</label>
                  </div>
                                    </div>
                                    <div class="row">
                              <div class="col-sm-6 form-check">
                    <input type="checkbox" class="form-check-input" id="Transportation">
                    <label class="form-check-label" for="exampleCheck1">Transportation</label>
                  </div>
                              <div class="col-sm-6 form-check">
                    <input type="checkbox" class="form-check-input" id="parking">
                    <label class="form-check-label" for="exampleCheck1">Parking</label>
                  </div>
                                   </div>
                                   <hr>
            <div class="row">
                <h5>Total Amount:</h5>
                <input type="text" class="form-control" id="amount" value="">
            </div>
                  <button  onclick="function1()">AC</button>

         </div>
         
    <div class="col-sm-6">
                                   <h4>Information:</h4>
                                   <hr>

                 <div class="row">
                  <div class="col-sm-8">
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
    <tr>
      <th scope="row">1</th>
      <td>Normal</td>
      <td>300</td>
      <td>...</td>
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>Normal Double</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Deluxe</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Deluxe</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Deluxe Double</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Large Norrmal</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Special</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>Special Double</td>
      <td>Rs.</td>
      <td>...</td>
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>Very Special</td>
      <td>Rs.5000</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
       <a href="#" class="btn btn-danger">Edit</a>
        </div>
    <div class="col-sm-4">
                  <h5>Extra Features:</h6>
                    <table class="table table-hover">
  <thead>
                    
                    <th>Features</th>
                    <th>Price</th>
                  <tr>
                      <td></td>
                      <td></td>
                  </tr>
                        </thead>
        </table>
                  <a class="btn btn-danger" href="/">Edit</a>
              </div>
        </div>
               </div>
            </div>
     </div>
</div>
</div>
<script>
        function function1(){     
    var x=document.getElementById("roomtype").selectedIndex ;
       if(x==1)          
{    document.getElementById('amount').value=500;
}        else(x==2)
    {
        document.getElementById('amount').value=800;
    }
            
        }


                            </script>   
       
@endsection