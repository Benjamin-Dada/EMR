@if(Auth::check())
<div class="col-sm-3 col-md-2 sidebar">

    <div class="pull-left" style="padding-bottom: 10px;">
    @if(Auth::user()->role==="0")
    <img src="{{asset('/images/img/user8-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    @endif
    @if(Auth::user()->role==="1")
    <img src="{{asset('/images/img/user7-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    @endif
    @if(Auth::user()->role==="2")
    <img src="{{asset('/images/img/user5-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    @endif
    @if(Auth::user()->role==="3" || Auth::user()->role==="4" || Auth::user()->role==="5" )
    <img src="{{asset('/images/img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    @endif
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}</div>

    <ul class="nav nav-sidebar">
        <li>
            <div class="nav input-container">
                        <input type="search" id="search-input" name="search-input" placeholder="Search for Patient" onkeydown="down()" onkeyup="up()"/>
                        <div class="icon"><i class="fa fa-search"></i></div>
            </div>
                    
            <div id="search-result"></div>
                    
        </li>
      @cannot('create-user')
        <li><a class="nav" href="{{route('patients.index')}}">Patients</a></li>
        @endcan

        
        @can('create-patient')
        <li><a href="{{ route('patients.create') }}">New Patient</a></li>
        @endcan

       @can('create-user')
        <li><a class="nav" href="{{route('patients.index')}}">Users</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
        @endcan
       
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="#">Stats</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="{{url('/logout')}}">Sign Out</a></li>
    </ul>
</div>
@endif