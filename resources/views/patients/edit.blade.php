@extends('layouts.master')

@section('title', 'Edit Patient Details')

@section('content')
@include('layouts.partials.sidebar')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
             @include('layouts.partials.alerts')
        <h1 class="page-header">Patient Registration</h1>
            <div class="panel panel-default">
                <div class="panel-heading">Basic Contact</div>
                    <div class="panel-body">
                    <form class="form-vertical" role="form" method="post" action="{{ route('patients.update',$patient->id) }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{!! $patient->name ?: '' !!}">
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                        <label for="dob" class="control-label">DOB</label>
                        <input type="date" name="dob" class="form-control" id="dob">
                        @if ($errors->has('dob'))
                            <span class="help-block">{{ $errors->first('dob') }}</span>
                        @endif
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                        <label for="status" class="control-label">Marital Status</label>
                        <select name="status" class="form-control" id="status" >
                            <option value="">Choose a marital status</option>
                            <option value="single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="help-block">{{ $errors->first('status') }}</span>
                        @endif
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="control-label">Address</label>
                        <textarea name="address" class="form-control" id="address" rows="10" cols="10">
                          {!! $patient->address ?: '' !!}
                        </textarea>
                        @if ($errors->has('address'))
                            <span class="help-block">{{ $errors->first('address') }}</span>
                        @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{!! $patient->email ?: '' !!}">
                            @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="control-label">Telephone</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{!! $patient->phone ?: '' !!}">
                            @if ($errors->has('phone'))
                                <span class="help-block">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Update Patient Details</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {!! method_field('PUT') !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection