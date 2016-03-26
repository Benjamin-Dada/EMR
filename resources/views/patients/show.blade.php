@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    @if( $patient )
    <h1 class="page-header">
        {!! $patient->name !!}
    </h1>

    <div class="container">
         <div class="row">
            <p>Here is the show of a particular patient blade</p>
              It would provide:
              <ul>
              <li>Ability for a doctor to request lab and radio test</li> 
              <li>Ability for a doctor to prescribe drug</li>
              </ul>
              <ul>
              <li>Ability for a Nurse to enter patient vitals</li> 
              <li>Ability for a pharmacist to confirm drug prescription</li> 
              </ul>
              @if(Auth::user()->id == 1)
              <p><a href="{{route('patients.edit',$patient->id)}}" class="btn btn-primary">Edit Registration Details</a></p>
              @endif
              @if(Auth::user()->id == 2)
              <p><a class="btn btn-info" href="{{$patient->id}}/vitals">Enter Patient vitals</a></p>
              @endif
              @if(Auth::user()->id == 3)
              <p><a href="{{$patient->id}}/notes" class="btn btn-primary">Add Consultation Note and Prescription</a></p>
              @endif
              @if(Auth::user()->id == 4)
              <p><a href="#" class="btn btn-default">Add Test Result</a></p>
              @endif
              @if(Auth::user()->id == 5)
              <p><a href="#" class="btn btn-default">Confirm Drug Dispense </a></p>
              @endif
         </div>
    </div>
      @endif
</div>
@endsection