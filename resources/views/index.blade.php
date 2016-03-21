@extends('layouts.master')

@section('content')

@if(!Auth::check())
    <div class="jumbotron">
    <div class="container">
    <h1>Welcome to EMR</h1>
    <p><img src="http://res.cloudinary.com/dgpjdyg8p/image/upload/v1458521045/With_Doctors_eh80vm.jpg" alt="Hospital_staff_image" style="width: 100%;border-radius: 5px;">
    </p>
        <p><strong>The aim of this system is to design develop a cloud-based EMR solution for a particular hospital.</strong></p>
        <p><h4><strong>The Objective of this project is to: </strong></h4></p>
        <ol>
            <h4><strong><li>Analyze the existing Medical Record Information System currently in use by developed Countries so as to utilize better development and design techniques.</li></strong></h4>
            <h4><strong><li>Identify the requirements for development of an Automated Medical Record Information System</li></strong></h4>
            <h4><strong><li>Model and design a robust EMR using Unified Modelling Language Tools</li></strong></h4>
            <h4><strong><li>Implement a reliable EMR based off my research</li></strong></h4>
            <h4><strong><li>Evaluate the EMR system to be developed</li></strong></h4>
        </ol>
    <p><a class="btn btn-primary btn-lg" href="{{url('/login')}}" role="button">Login &raquo;</a></p>
    </div>
</div>
<div class="footer">
  <div class="container">
    <p style="padding-top:20px; text-align: center; font-family: 'Open Sans';"> &copy; <?php echo date("Y"); ?>
 | Made with <i class="fa fa-heart"></i> by Benjamin Dada</p>
  </div>
</div>
@endif

@if(Auth::check())
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h2 class="sub-header">Patients <span style="float: right;"><a class="btn btn-info" href="{{ route('patients.create') }}">New Patient</a></span></h2> 
                               
        </div>
    </div>
</div>
@endif
@endsection
