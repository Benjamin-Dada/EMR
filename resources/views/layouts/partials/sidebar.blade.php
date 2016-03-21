@if(Auth::check())
<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li style="margin-left:20px;">
           <p><img src="{{ Auth::user()->getAvatarUrl() }}" height="50" width="50" style="border-radius:25px;" /></p>
        </li>
        <li class="active"><a href="/"> @ {{Auth::user()->name}}<span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('patients.index')}}">Patients</a></li>
        @if((Auth::user()->id) == 1)
        <li><a href="{{ route('patients.create') }}">New Patient</a></li>
        @endif
        @if((Auth::user()->id) == 2)
        <li><a href="#">Enter Patient Vitals</a></li>
        @endif
        @if((Auth::user()->id) == 3)
        <li><a href="#">Enter Consultation Notes</a></li>
        @endif
        @if((Auth::user()->id) == 4)
        <li><a href="#">Enter Test results</a></li>
        @endif
    </ul>

    <ul class="nav nav-sidebar">
        <li><a href="#">Stats</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="{{url('/logout')}}">Sign Out</a></li>
    </ul>
</div>
@endif