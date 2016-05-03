@extends('layouts.master')

@section('title', "Doctor's Page")
@section('content')
@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-8  col-md-offset-3 main">
             @include('layouts.partials.alerts')
    <div class="col-md-9"> 
        <h1 class="page-header">Consultation</h1>
            <div class="panel panel-default">
                <div class="panel-heading">Consultation note</div>
                   <div class="panel-body">
                    <form class="form-vertical" role="form" method="post" action="{{ route('notes.store', $patient->id) }}">
						<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
						<label for="notes" class="control-label">Consultation Note</label>
							<textarea name="notes" class="form-control" id="notes" rows="10" cols="10">
								{{ old('notes') ?: '' }}
							</textarea>
							@if ($errors->has('notes'))
							<span class="help-block">{{ $errors->first('notes') }}</span>
							@endif
						</div>

						<div class="form-group{{ $errors->has('prescription') ? ' has-error' : '' }}">
						<label for="prescription" class="control-label">Test Recommendations</label>
							<textarea name="prescription" class="form-control" id="prescription" rows="10" cols="10">
								{{ old('prescription') ?: '' }}
							</textarea>
							@if ($errors->has('prescription'))
							<span class="help-block">{{ $errors->first('prescription') }}</span>
							@endif
						</div>

 						<div class="form-group">
                            <button type="submit" class="btn btn-default">Enter</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$patient->id}}">

					</form>
				</div>
			</div>
	</div>
	<div class="col-md-3" style="padding-top: 150px;">
		<p><a href="{{route('drugs.index', $patient->id)}}" class="btn btn-primary">Presribe Drugs</a></p>
		<!-- <p> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#labTest">Request Lab test</button></p> -->
	</div>
	


<!-- <div class="modal fade" id="labTest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Lab Test Request Form</h4>
      </div>
      <div class="modal-body">
     <form action="#" method="POST"> 
          <div class="checkbox">
		    <label><input type="checkbox" name="pcv" value="PCV"> PCV</label>
	      </div>
	      <div class="checkbox">
		    <label><input type="checkbox" name="ua" value="UA"> Urinary Analysis </label>
	      </div>
	      <div class="checkbox">
		    <label><input type="checkbox" name="blood_count" value="blood_count"> Blood Count </label>
	      </div>
	      <div class="checkbox">
		    <label><input type="checkbox" name="esr" value="esr"> ESR</label>
	      </div>
	       <button type="button" class="btn btn-primary" id="send" data-dismiss="modal">Send to Lab</button>
       </form>
    </div> -->
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="send" >Send to Lab</button>
      </div> -->
    </div>
  </div>
</div>
	
</div>
</div>


@endsection