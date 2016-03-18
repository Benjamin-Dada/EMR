@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    @if( $patient )
    <h1 class="page-header">
        {!! $patient->name !!}
    </h1>

    <div class="container">
         <div class="row">
            <p>Here is the show blade</p>
                <button class="btn btn-circle btn-danger delete"
                          data-action="{{ url('projects/' . $project->id) }}"
                          data-token="{{csrf_token()}}">
                    <i class="fa fa-trash-o"></i>Delete
                </button>
         </div>
    </div>
        <hr>
        <div class="row">
        <!-- @include('comments.form') -->
        </div>
      @endif
</div>
@stop