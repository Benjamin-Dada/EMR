@extends('layouts.master')
@section('title','Patient Info')
@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3 main">
  @include('layouts.partials.alerts')
  @if( $patient )
  @if(Auth::user()->role === "1")
  <h1 class="page-header"> Patient Details </h1>
  <div class="panel panel-default">
    <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
    <div class="panel-body">
      @if($patient)
      <strong> Email: </strong> {{$patient->email}}
      <br>
      <strong> Status: </strong> {{$patient->marital_stat}}
      <br>
      <strong> Date of Birth: </strong> {{ date( 'F d, Y',strtotime($patient->DOB))}}
      <br>
      <strong> Telephone: </strong> {{$patient->phone}}
      <br>
      <strong> Address: </strong> {{$patient->address}}
      <br>
      @endif  
    </div>
  </div>
<p><a href="{{route('patients.edit',$patient->id)}}" class="btn btn-primary">Edit Registration Details</a></p>
@endif

@if(Auth::user()->role === "2")
<h1 class="page-header"> Patient Vitals </h1>
<div class="panel panel-default">
    <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
    <div class="panel-body">
      @if($patient->patientvitals)
      <strong> Temperature: </strong> {{$patient->patientvitals->temp}}
      <br>
      <strong> Weight: </strong> {{$patient->patientvitals->weight}}
      <br>
      <strong> Height: </strong> {{$patient->patientvitals->height}}
      <br>
      <strong> BMI: </strong> {{$patient->patientvitals->BMI}}
      <br>
      <strong> Created at: </strong> {{$patient->patientvitals->created_at}}
      <br><br>

      <p><a class="btn btn-primary" href="{{route('vitals.edit', $patient->id)}}">Edit Patient vitals</a></p>
      @endif  
      
      @if(!$patient->patientvitals)
      <div class="alert alert-danger">Vitals of {!! $patient->name !!} not yet entered!</div>
  </div>
</div>
     <p><a class="btn btn-primary" href="{{$patient->id}}/vitals">Enter Patient vitals</a></p>
     @endif

@endif

@if(Auth::user()->role === "3")
  @include('layouts.pages.doctor.show')
@endif

@if(Auth::user()->role === "4")
<h1 class="page-header"> Test Requested by Doctor </h1>
<div class="panel panel-default">
    <div class="panel-heading"> <strong> {{ $patient->name }} </strong></div>
    <div class="panel-body"><!-- can a for loop be used here -->
     @if($patient->note)
    {{$patient->note->test}} 
    <a href="{{route('test.index', $patient -> id)}}" class="btn btn-primary">Add Test Result</a>
    @endif
    @if(!$patient->note)
    <div class="alert alert-warning"> The Doctor is yet to request test for any patient</div>
    <p>Click the back arrow in your browser to <b>Go back</b></a></p>
    @endif
    </div>
</div>
@endif

@if(Auth::user()->role === "5" )
<h1 class="page-header"> Drug Prescribed by Doctor </h1>
<div class="panel panel-default">
    <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
    <div class="panel-body">
    @if($patient->note)
    {{$patient->note->prescription}} 
    <a href="{{route('drugs.index', $patient -> id)}}" class="btn btn-primary">Confirm Drug Dispense </a>
    @endif
    @if(!$patient->note)
    <div class="alert alert-warning"> The Doctor is yet to prescribe a drug</div>
    <p>Click the back arrow in your browser to <b>Go back</b></a></p>
    @endif
    </div>
</div>
@endif

  @endif
</div>


@endsection