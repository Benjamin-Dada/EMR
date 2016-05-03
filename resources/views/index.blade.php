@extends('layouts.master')
@section('content')

@if(!Auth::check())
@section('title', 'Welcome Page')
<div class="jumbotron">
<!-- <img src="http://res.cloudinary.com/dgpjdyg8p/image/upload/v1459701909/AfricaDoctors_qzjbru.jpg" alt="Hospital_staff_image" style="width: 100%;"> -->
<img src="{{asset('images/photo1.png')}}" width="100%">
    <div class="container">
        <p><h4>The aim of this system is to design develop a cloud-based EMR solution for a particular hospital.</h4></p>
        <p><h4>The Objective of this project is to: </h4></p>
        <ol>
            <h4><li>Analyze the existing Medical Record Information System currently in use by developed Countries so as to utilize better development and design techniques.</li></h4>
            <h4><li>Identify the requirements for development of an Automated Medical Record Information System.</li></h4>
            <h4><li>Model and design a robust EMR using Unified Modelling Language Tools.</li></h4>
            <h4><li>Implement a reliable EMR based off my research.</li></h4>
            <h4><li>Evaluate the EMR system to be developed.</li></h4>
        </ol><br/>
        <p>
            <a class="btn btn-primary btn-lg" href="{{url('/login')}}" role="button">Login</a> 
        </p>
    </div>

</div>
<div class="footer">
  <div class="container">
    <p style="padding-top:20px; text-align: center; font-family: 'Open Sans';"> &copy; <?php echo date("Y"); ?> | Made with <i class="fa fa-heart"></i> by Benjamin Dada</p>
  </div>
</div>
@endif

@if(Auth::check())
@section('title', 'Welcome Page')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <h1 class="page-header">Welcome {{Auth::user()->name}} !
            </h1>

            <div class="alert alert-info"> 
            <p> Please visit to the <b>sidebar</b> to your left, for a list of actions you can perform. <br><br> </p>

            For enquiries contact <b> <a href="mailto: admin@emr.com">John Doe</a>, the administrator</b>.

            </div> 
            @if(Auth::user()->role === '0')
            <div class="alert alert-warning"> 
            <p> When you register a  new user, you get logged in as the user.<br><br> </p>

            This helps you to know that the functionality works as well as refreshes your memory on the access rights the new user now has.

            </div> 
            @endif

                                
        </div>
    </div>
</div>
@endif
@stop
