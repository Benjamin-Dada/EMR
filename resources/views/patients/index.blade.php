@extends('layouts.master')

@section('content')

@if(!Auth::check())
@section('title', 'Restricted')
<div class="container">
    <div class="row">
     <h1>Please Log in</h1>
    </div>
</div>
@endif


@if(Auth::check())

    @if(Auth::user()->role === "0")
        @include('layouts.pages.admin')
    @elseif(Auth::user()->role === "2")
        @include('layouts.pages.nurse')
    @elseif(Auth::user()->role === "3")
        @include('layouts.pages.doctor')
    @elseif(Auth::user()->role === "4")
        @include('layouts.pages.lab')
    @elseif(Auth::user()->role === "5")
        @include('layouts.pages.pharmacy')
    @else
        @include('layouts.pages.records')
    @endif

     
@endif

@endsection

