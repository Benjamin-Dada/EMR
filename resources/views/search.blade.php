@if($results)
@foreach($results as $patient)
<li><a href="{{ route('patients.show', $patient->id) }}">{{$patient->name}}</a></li>
@endforeach
@endif

@if($results->isEmpty())
<h3>Sorry, no records found!</h3>
@endif