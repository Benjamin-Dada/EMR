@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3 main">
    @include('layouts.partials.alerts')
    @if( $patient )
    <h1 class="page-header"> View Patient Vitals </h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <h3> {!! $patient->name !!} </h3></div>
            <div class="panel-body">
              @if($patient->patientvitals)
              <strong> Temperature: </strong> {{$patient->patientvitals->temp}}
             <br>
              <strong> Weight: </strong> {{$patient->patientvitals->weight}}
              @endif  
            </div>
          </div>
     @if(Auth::user()->name === "Front Desk")
      <p><a href="{{route('patients.edit',$patient->id)}}" class="btn btn-primary">Edit Registration Details</a></p>
    @endif
    @if(Auth::user()->name === "Nurse")
         <p><a class="btn btn-info" href="{{$patient->id}}/vitals">Enter Patient vitals</a></p>
    @endif
    @if(Auth::user()->name === "Doctor")
        <p><a href="{{route('notes.index',$patient->id)}}" class="btn btn-default">Add Consultation Note and Prescription</a></p>
    @endif
    @if(Auth::user()->name === "Lab Attendant")
         <p><a href="{{route('test.index', $patient -> id)}}" class="btn btn-default">Add Test Result</a></p>
    @endif
    @if(Auth::user()->name === "Pharmacist" )
       <p><a href="{{route('drugs.index', $patient -> id)}}" class="btn btn-default">Confirm Drug Dispense </a></p>
    @endif
</div>
         
  
    @endif

@endsection