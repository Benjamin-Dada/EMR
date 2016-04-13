@extends('layouts.master')
@section('title','Patient Info')
@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3 main">
    @include('layouts.partials.alerts')
    @if( $patient )
     @if(Auth::user()->name === "Front Desk")
     <h1 class="page-header"> Patient Details </h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
            <div class="panel-body">
              @if($patient)
              <strong> Email: </strong> {{$patient->email}}
             <br>
              <strong> Status: </strong> {{$patient->marital_stat}}
             <br>
              <strong> Date of Birth: </strong> {{$patient->DOB}}
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
    @if(Auth::user()->name === "Nurse")
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
              <strong> Temperature: </strong> {{$patient->patientvitals->temp}}
             <br>
              <strong> Created at: </strong> {{$patient->patientvitals->created_at}}
             <br>
              @endif  
              @if(!$patient->patientvitals)
                <h2 style="color: red;">Vitals of {!! $patient->name !!} not found! <p><a class="btn btn-primary" href="{{$patient->id}}/vitals">Enter Patient vitals</a></p></h2>
              @endif
            </div>
          </div>
         <p><a class="btn btn-primary" href="{{route('vitals.edit', $patient->id)}}">Edit Patient vitals</a></p>
    @endif
    @if(Auth::user()->name === "Doctor")
        <h1 class="page-header"> Patient Vitals </h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
            <div class="panel-body">
              @if($patient->patientvitals)
              <strong> Temperature: </strong> {{$patient->patientvitals->temp}}
             <br>
              <strong> Weight: </strong> {{$patient->patientvitals->weight}}
              <br>
              <strong> Temperature: </strong> {{$patient->patientvitals->temp}}
             <br>
              <strong> Last visited: </strong> {{$patient->patientvitals->updated_at}}
             <br>
              @endif  
            </div>
          </div>
        <p><a href="{{route('notes.index',$patient->id)}}" class="btn btn-primary">Add Consultation Note and Prescription</a></p>
    @endif

    @if(Auth::user()->name === "Lab Attendant")
    <h1 class="page-header"> Test Request by Doctor </h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
            <div class="panel-body">
                Urine Analysis <br> Blood Count <br> PCV <br> ESR
            </div>
          </div>
         <p><a href="{{route('test.index', $patient -> id)}}" class="btn btn-primary">Add Test Result</a></p>
    @endif

    @if(Auth::user()->name === "Pharmacist" )
    <h1 class="page-header"> Drug Prescribed by Doctor </h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
            <div class="panel-body">
              Vitamin C 600mmhg 4days              
            </div>
          </div>
       <p><a href="{{route('drugs.index', $patient -> id)}}" class="btn btn-primary">Confirm Drug Dispense </a></p>
    @endif
</div>
         
  
    @endif

@endsection