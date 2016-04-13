@extends('layouts.master')

@section('content')

    @include('layouts.partials.sidebar')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @if($patient)
        @include('layouts.partials.alerts')
        <h1 class="page-header"> {{$patient->name}} </h1>

        <div class="panel panel-default">
            <div class="panel-heading">Enter Test Results</div>
                <div class="panel-body">
                    <form class="form-vertical" role=form" method="post" action="{{route('test.store', $patient->id)}}">

                    <div class="form-group{{ $errors->has('ua') ? ' has-error' : '' }}">
                        <label for="ua" class="control-label">Urine Analysis</label>
                        <input type="text" name="ua" class="form-control" id="ua" value="{{ old('ua') ?: '' }}">
                        @if ($errors->has('ua'))
                            <span class="help-block">{{ $errors->first('ua')}}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('blood_count') ? ' has-error' : '' }}">
                    <label for="blood_count" class="control-label">Blood Count</label>
                    <input type="text" name="blood_count" class="form-control" id="blood_count">
                    @if ($errors->has('blood_count'))
                        <span class="help-block">{{ $errors->first('blood_count') }}</span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('pcv') ? ' has-error' : '' }}">
                    <label for="pcv" class="control-label">Packaged Cell Volume</label>
                    <input type="text" name="pcv" class="form-control" id="pcv">
                    @if ($errors->has('pcv'))
                        <span class="help-block">{{ $errors->first('pcv') }}</span>
                    @endif
                    </div>
          
                    <div class="form-group{{ $errors->has('esr') ? ' has-error' : '' }}">
                    <label for="esr" class="control-label">Erythrocyte Sedimentation Rate</label>
                    <input type="text" name="esr" class="form-control" id="esr">
                    @if ($errors->has('esr'))
                        <span class="help-block">{{ $errors->first('esr') }}</span>
                    @endif
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Attach Vitals</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$patient->id}}">
                </form>
                </div>
            </div>
        </div>  
        @endif
</div>    
@endsection