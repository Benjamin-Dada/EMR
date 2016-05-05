@extends('layouts.master')

@section('title', "Test Request Form")
@section('content')
@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    <h1 class="page-header">
		Test Request Form    
	</h1>

	@if($patient)
	    
    	<table class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <td>ID</td>
		            <td>Patient Name</td>
		            <td>Test Name</td>
		            <td>Verdict</td>
		        </tr>
		    </thead>
		    <tbody>

		    <form role="form" method="post" action="{{route('test.store', $patient->id)}}">  
    		<tr>
    			<td>{{$patient->id }}.</td>
    			<td>{{$patient->name }}</td>
    			<td>{{$patient->note->test}}</td>
                <!-- <select name="test[]" class="form-control" id="test" size="5">
                            <option value="">Select Test </option>
                            <option selected value="ua">Urine Anaysis</option>
                            <option selected value="blood_count">Blood Count</option>
                            <option selected value="pcv">PCV</option>
                            <option selected value="esr">ESR</option>
                            <option selected value="hiv">HIV 12 Screening</option>
                            <option selected value="hb_test">Hepatitis B Testing</option>
                        </select> -->
    			<td><input type="text" name="verdict" class="form-control" id="verdict" value="{{ old('verdict') ?: '' }}"></td>
    			<!-- <td><input type="datetime" name="duration" class="form-control" id="duration" value="{{ old('duration') ?: '' }}"></td> -->
    		</tr> 
    		</tbody>
    	</table>
    	<button type="submit" class="btn btn-default">Confirm</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">        
        </form>  
    @endif

</div>
@endsection

