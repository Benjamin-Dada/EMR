@extends('layouts.master')

@section('content')

@if(!Auth::check())
<div class="container">
    <div class="row">
     <h1>Please Log in</h1>
    </div>
</div>
@endif

@if(Auth::check())

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    <h1 class="page-header">
        Patients 
        <a class="btn btn-info" href="{{ route('patients.create') }}">New Patient</a>
    </h1>

<div class="container">
	@if($patient)
    <div class="row">
    	@foreach ($patient as $pat)
    	  <ul>
    	   <li>{{$pat->id }}. {{$pat->name}}</li>
          </ul> 
         @endforeach                                
    </div>
    @endif

    @if($patient->isEmpty())
         <h3>There are currently no Patients</h3>
    @endif

    </div>
</div>
@endif
@endsection
