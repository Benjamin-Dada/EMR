@if(Auth::check())
<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li style="margin-left:20px;">
           <p><img src="{{ Auth::user()->getAvatarUrl() }}" height="50" width="50" style="border-radius:25px;" /></p>
        </li>
        <li><a href="/"> @ {{Auth::user()->name}}</a></li>
        <li class="active"><a href="{{route('patients.index')}}"><span class="sr-only">(current)</span>Patients</a></li>
    
        <li><a href="{{ route('patients.create') }}">New Patient</a></li>
       
    </ul>

    <ul class="nav nav-sidebar">
        <li><a href="#">Stats</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="{{url('/logout')}}">Sign Out</a></li>
    
    </ul>
</div>
@endif