
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <title>MY LODGE</title>

  <!-- Custom fonts for this template-->

  <!-- Page level plugin CSS-->

  <!-- Custom styles for this template-->
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" >
  <link href="{{asset('/js/bootstrap.js')}}" rel="stylesheet"> 

</head>
<style>
    .navbar{
        background-color:#17a992;
    }
    </style>
<body id="page-top">

  <nav class="navbar navbar-expand  static-top" >
    <a class="navbar-brand mr-1" href="{{url('home')}}" style="color:white;font-size:25px">MY LODGE</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-danger" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
     <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
         <li class="row"></li>

      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
    <li class="row"></li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('amount')}}">
<i class="fas fa-calculator"></i>
               <span>Amount Calculator</span></a>
      </li>
    <li class="row"></li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('rooms')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Rooms Details</span></a>
      </li>
    <li class="row"></li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('amount')}}">
<i class="fas fa-chart-bar"></i>
               <span>Generate Report</span></a>
      </li>
      <li class="row"></li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('amount')}}">
<i class="fas fa-dungeon"></i>
               <span>Room Allotment</span></a>
      </li>
    </ul>
@yield('content')