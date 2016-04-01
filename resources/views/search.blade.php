@if($results)
@foreach($results as $patient)
<a href="{{ route('patients.show', $patient->id) }}">{{$patient->name}}</a><br>
@endforeach
@endif

@if($results->isEmpty())
<h3>Sorry, no records found!</h3>
@endif