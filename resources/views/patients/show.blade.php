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
            <p>Here is the show blade</p>
              We would provide:
              <ul>
              <li>Ability for a doctor to add consultation notes</li> 
              <li>Ability for a doctor to request lab and radio test</li> 
              <li>Ability for a doctor to prescribe drug</li>
              </ul>
              <ul>
              <li>Ability for a Nurse to enter patientt vitals</li> 
              <li>Ability for a pharmacist to confirm drug prescription</li> 
              </ul>
              <a class="btn btn-info" href="{{$patient->id}}/vitals">Patient Vitals</a>
         </div>
    </div>
      @endif
</div>
@stop