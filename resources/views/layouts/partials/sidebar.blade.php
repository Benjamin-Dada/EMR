@if(Auth::check())
<div class="col-sm-3 col-md-2 sidebar">

    @include('layouts.partials.sidebar-top')
   
    <ul class="nav nav-sidebar">
        <li>
            <div class="nav input-container">
                        <input type="search" id="search-input" name="search-input" placeholder="Search for Patient" onkeydown="down()" onkeyup="up()"/>
                        <div class="icon"><i class="fa fa-search"></i></div>
            </div>
                    
            <div id="search-result"></div>
                    
        </li>
       @cannot('create-user')
        <li><a class="nav" href="{{route('patients.index')}}"><i class="fa fa-users"></i> Patients</a></li>
        @endcan

        @can('create-patient')
        <li><a href="{{ route('patients.create') }}"><i class="fa fa-user-plus"></i> New Patient</a></li>
        @endcan

       @can('create-user')
        <li><a class="nav" href="{{route('patients.index')}}"><i class="fa fa-users"></i> Users</a></li>
        <li><a href="{{ route('user.index') }}"><i class="fa fa-user-plus"></i> Register</a></li>
        @endcan
       
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i> Stats</a></li>
        <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
    </ul>
</div>
@endif