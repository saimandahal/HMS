@extends('layout.main')
@section('content')


<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        
                 <div class="row">
                 <div class="col-sm-10">
                 <ol class="breadcrumb">
          <li class="breadcrumb-item">
                  <i class="fas fa-fw fa-list"></i>
            <span></span>
Room Details:
             </li>
          
        </ol>
              </div>
              
              
              <div class="col-sm-2">
                <ol class="breadcrumb">
          <li class="breadcrumb-item">
                 <a href="{{'/addroom'}}">
                 <button type="button" class="btn btn-danger">
                 <i class="fas fa-plus" style="color:white"></i>
                   </button></a>
                   <a href="">
                 <button type="button" class="btn btn-danger">
                    <i class="fas fa-cogs" style="color:white"></i>
                                     </button></a>
                  
                   
                   

 </li>
          
        </ol>
                 
                 
                  </div>
            </div>
                   
        <h4>Normal:
        </h4>
        <hr>
        <div class="row">
               
          <div class="col-xl-2 col-sm-4 mb-2">
            <div class="card text-white bg-warning o-hidden h-100">
             <a href="/showextra" class="btn btn-default" style="color:white" >
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-dungeon"></i>
                               </div>
                <h4 class="mr-5">101</h4>
                
              </div>
                </a>
            </div>
          </div>
          <div class="col-xl-2 col-sm-4 mb-2">
            <div class="card text-white bg-warning o-hidden h-100">
             <a href="/showextra" class="btn btn-default" style="color:white" >
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-dungeon"></i>
                               </div>
                <h4 class="mr-5">102</h4>
                
              </div>
                </a>
            </div>
          </div>
          
          <div class="col-xl-2 col-sm-4 mb-2">
            <div class="card text-white bg-warning o-hidden h-100">
             <a href="/showextra" class="btn btn-default" style="color:white" >
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-dungeon"></i>
                               </div>
                <h4 class="mr-5">103</h4>
                
              </div>
                </a>
            </div>
          </div>
        </div>
        <hr>
         <h4>Deluxe:
        </h4>
        <hr>
        <div class="row">
             <div class="col-xl-2 col-sm-4 mb-2">
            <div class="card text-white bg-info o-hidden h-100">
             <a href="/showextra" class="btn btn-default" style="color:white" >
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-dungeon"></i>
                               </div>
                <h4 class="mr-5">201</h4>
                
              </div>
                </a>
            </div>
          </div>
        </div>
        <hr>
         <h4>Special:
        </h4>
        <hr>
        <div class="row">
            <div class="col-xl-2 col-sm-4 mb-2">
            <div class="card text-white bg-success o-hidden h-100">
             <a href="/showextra" class="btn btn-default" style="color:white" >
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-dungeon"></i>
                               </div>
                <h4 class="mr-5">301</h4>
                
              </div>
                </a>
            </div>
          </div>
            
        </div>
    </div>
</div>

@endsection