@extends('layouts.master')

@section('title', 'Edit Vitals')
@section('content')

    @include('layouts.partials.sidebar')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @if($patient)
        @include('layouts.partials.alerts')
        <h1 class="page-header"> {{$patient->name}} </h1>

        <div class="panel panel-default">
            <div class="panel-heading">Enter Patient Vitals Here</div>
                <div class="panel-body">
                    <form class="form-vertical" role=form" method="post" action="{{ route('vitals.update',$patient->id) }}">
                    <div class="form-group{{ $errors->has('temp') ? ' has-error' : '' }}">
                        <label for="temp" class="control-label">Temperature (f)</label>
                        <input type="text" name="temp" class="form-control" id="temp" value="{!! $patient->patientvitals->temp ?: '' !!}">
                        @if ($errors->has('temp'))
                            <span class="help-block">{{ $errors->first('temp')}}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                    <label for="weight" class="control-label">Weight (kg)</label>
                    <input type="text" name="weight" class="form-control" id="weight" value="{!! $patient->patientvitals->weight ?: '' !!}">
                    @if ($errors->has('weight'))
                        <span class="help-block">{{ $errors->first('weight') }}</span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                    <label for="height" class="control-label">Height (cm)</label>
                    <input type="text" name="height" class="form-control" id="height"value="{!! $patient->patientvitals->height ?: '' !!}">
                    @if ($errors->has('height'))
                        <span class="help-block">{{ $errors->first('height') }}</span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('bp_sys') ? ' has-error' : '' }}">
                    <label for="bp_sys" class="control-label">Blood Pressure Systole (mmHg)</label>
                    <input type="text" name="bp_sys" class="form-control" id="bp_sys" value="{!! $patient->patientvitals->bp_sys ?: '' !!}">
                    @if ($errors->has('bp_sys'))
                        <span class="help-block">{{ $errors->first('bp_sys') }}</span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('bp_dias') ? ' has-error' : '' }}">
                    <label for="bp_dias" class="control-label">Blood Pressure Diastole (mmHg)</label>
                    <input type="text" name="bp_dias" class="form-control" id="bp_dias" value="{!! $patient->patientvitals->bp_dias ?: '' !!}">
                    @if ($errors->has('bp_dias'))
                        <span class="help-block">{{ $errors->first('bp_dias') }}</span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('oxy_sat') ? ' has-error' : '' }}">
                    <label for="oxy_sat" class="control-label">Oxygen Saturation (%)</label>
                    <input type="text" name="oxy_sat" class="form-control" id="oxy_sat" value="{!! $patient->patientvitals->oxy_sat ?: '' !!}">
                    @if ($errors->has('oxy_sat'))
                        <span class="help-block">{{ $errors->first('oxy_sat') }}</span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('head_cir') ? ' has-error' : '' }}">
                    <label for="head_cir" class="control-label">Head Circumference (cm)</label>
                    <input type="text" name="head_cir" class="form-control" id="head_cir" value="{!! $patient->patientvitals->head_cir ?: '' !!}">
                    @if ($errors->has('head_cir'))
                        <span class="help-block">{{ $errors->first('head_cir') }}</span>
                    @endif
                    </div>                        

                    <div class="form-group{{ $errors->has('waist_cir') ? ' has-error' : '' }}">
                    <label for="waist_cir" class="control-label">Waist Circumference (cm)</label>
                    <input type="text" name="waist_cir" class="form-control" id="waist_cir" value="{!! $patient->patientvitals->waist_cir ?: '' !!}">
                    @if ($errors->has('waist_cir'))
                        <span class="help-block">{{ $errors->first('waist_cir') }}</span>
                    @endif
                    </div>
                    
                    <div class="form-group{{ $errors->has('bmi') ? ' has-error' : '' }}">
                    <label for="bmi" class="control-label">Body Mass Index (kg/m<sup>2</sup>)</label>
                    <input type="text" name="bmi" class="form-control" id="bmi" value="{!! $patient->patientvitals->BMI ?: '' !!}">
                    @if ($errors->has('bmi'))
                        <span class="help-block">{{ $errors->first('bmi') }}</span>
                    @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Attach Vitals</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$patient->id}}">
                     {!! method_field('PUT') !!}
                </form>
                </div>
            </div>
        </div>  
        @endif
</div>    
@endsection