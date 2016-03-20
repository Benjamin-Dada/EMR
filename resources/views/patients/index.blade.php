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
        <a class="btn btn-info" href="{{ route('patients.create') }}">Create New Patient</a>
    </h1>

	@if($patient)      
    	<table class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Name</td>
		            <td>Email</td>
		            <td>Actions</td>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach ($patient as $pat)
    		<tr>
    			<td>{{$pat->id }}.</td>
    			<td><a href="{{ route('patients.show', Auth::user()->id) }}">{{$pat->name}}</a></td>
    			<td>{{$pat->email}}</td>
    			<td><button class="btn btn-circle btn-danger delete"
                          data-action="{{ url('patients/' . $pat->id) }}"
                          data-token="{{csrf_token()}}">
                    <i class="fa fa-trash-o"></i>Delete
                </button>
            	</td>
    		</tr>
         	@endforeach       
    		</tbody>
    	</table>
@endif

    @if($patient->isEmpty())
         <h3>There are currently no Patients</h3>
    @endif

</div>
@endif
@endsection
