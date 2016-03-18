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
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h2 class="sub-header">Patients</h2>
            <a class="btn btn-info" href="{{ route('patients.create') }}">New Patient</a>                    
        </div>
    </div>
</div>
@endif
@endsection
