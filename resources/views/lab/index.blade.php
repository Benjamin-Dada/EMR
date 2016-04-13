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
		            <td>Duration</td>
		        </tr>
		    </thead>
		    <tbody>

		    @foreach ($patient as $pat)
		    <form role=form" method="post" action="{{route('drugs.store', $pat->id)}}">  
    		<tr>
    			<td>{{$pat->id }}.</td>
    			<td>{{$pat->name }}</td>
    			<td><select name="test[]" class="form-control" id="test" size="5">
                            <option value="">Select Test </option>
                            <option selected value="ua">Urine Anaysis</option>
                            <option selected value="blood_count">Blood Count</option>
                            <option selected value="pcv">PCV</option>
                            <option selected value="esr">ESR</option>
                            <option selected value="hiv">HIV 12 Screening</option>
                            <option selected value="hb_test">Hepatitis B Testing</option>
                        </select>
                </td>
    			<td><input type="text" name="dose" class="form-control" id="dose" value="{{ old('dose') ?: '' }}"></td>
    			<td><input type="datetime" name="duration" class="form-control" id="duration" value="{{ old('duration') ?: '' }}"></td>
    		</tr>
         	@endforeach  
    		</tbody>
    	</table>
    	<button type="submit" class="btn btn-default">Confirm</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">        
        </form>  
    @endif

</div>
@endsection

