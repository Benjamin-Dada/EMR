<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content = "{{ csrf_token() }}">
  <meta name="description" content="Project-emr is aimed at managing the patient lifecycle from the time he enters the records department till he collects his last treatment">
  <meta name="keywords" content="Benjamin, project-emr, EMR, undergraduate health project, Covenant University, MIS, Benjamin Dada">

  <title>EMR - @yield('title', 'by 12CH014339')</title>
  
  <!--add favicon-->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  --> <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
  <style>
    body {
      font-family: 'Lato';
  }

  .fa-btn {
      margin-right: 6px;
  }
</style>
@include('layouts.partials.googleanalytics')
</head>
<body id="app-layout">
  <div class="keyline"></div>
  @include('layouts.partials.nav')

  @yield('content')

  <!-- JavaScripts -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--   <script src="{{ asset('js/bootstrap.js') }}"></script>
 -->  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



</body>
</html>
