@if(Auth::check())
<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li style="margin-left:20px;">
           <p><img src="{{ Auth::user()->getAvatarUrl() }}" height="50" width="50" style="border-radius:25px;" alt="avatar" /></p>
        </li>
        <li><a class="nav" href="/"> @ {{Auth::user()->name}}</a></li>
        <li><a class="nav" href="{{route('patients.index')}}">Patients</a></li>
        
        @if(Auth::user()->name === "Front Desk")
        <li><a href="{{ route('patients.create') }}">New Patient</a></li>
        @endif
       
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="#">Stats</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="{{url('/logout')}}">Sign Out</a></li>
    </ul>
</div>
@endif