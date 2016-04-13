@extends('layouts.master')


@section('content')

@if(!Auth::check())
@section('title', 'Welcome Page')
<div class="jumbotron">
<img src="http://res.cloudinary.com/dgpjdyg8p/image/upload/v1459701909/AfricaDoctors_qzjbru.jpg" alt="Hospital_staff_image" style="width: 100%;">
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
        <p><a class="btn btn-primary btn-lg" href="{{url('/login')}}" role="button">Login</a> or <a href="{{url('/register')}}">New Staff</a></p>
    </div>

</div>
<div class="footer">
  <div class="container">
    <p style="padding-top:20px; text-align: center; font-family: 'Open Sans';"> &copy; <?php echo date("Y"); ?> | Made with <i class="fa fa-heart"></i> by Benjamin Dada</p>
  </div>
</div>
@endif

@if(Auth::check())
@section('title', 'Search for Old Patient')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <h1 class="page-header">Dashboard 
             </h1>
                <div class="input-container">
                    <div class="icon"><i class="fa fa-search"></i></div>
                    <input type="search" id="search-input" name="search-input" placeholder="Search for Patient" onkeydown="down()" onkeyup="up()"/>
                </div>
                
                <div id="search-result">
                    
                </div>
           
            
            <!-- <h2 class="sub-header">Patients <span style="float: right;"><a class="btn btn-info" href="{{ route('patients.create') }}">New Patient</a></span></h2> -->                    
        </div>
    </div>
</div>
@endif
@stop
