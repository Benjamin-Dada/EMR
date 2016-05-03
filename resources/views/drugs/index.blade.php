@extends('layouts.master')

@section('title', "Drug's Dispense Form")
@section('content')
@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    <h1 class="page-header">
        Drug Prescription Form 
    </h1>

	@if($patient)
	    
    	<table class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Patient Name</td>
		            <td>Drug Name</td>
		            <td>Dose</td>
		            <td>Duration</td>
		        </tr>
		    </thead>
		    <tbody>
		    <form role="form" method="post" action="{{route('drugs.store', $patient->id)}}">  
    		<tr>
    			<td>{{$patient->id }}.</td>
    			<td>{{$patient->name }}</td>
    			<td><input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?: '' }}"></td>
    			<td><input type="text" name="dose" class="form-control" id="dose" value="{{ old('dose') ?: '' }}"></td>
    			<td><input type="datetime" name="duration" class="form-control" id="duration" value="{{ old('duration') ?: '' }}"></td>
    		</tr>
    		</tbody>
    	</table>
        @if (Auth::user()->role === "3")
        <button type="submit" class="btn btn-default">Send</button>
        @endif
        @if (Auth::user()->role === "5")
        <button type="submit" class="btn btn-default">Confirm</button>
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">        
        </form>  
    @endif

</div>
@endsection

