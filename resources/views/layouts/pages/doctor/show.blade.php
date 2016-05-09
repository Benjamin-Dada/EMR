<h1 class="page-header"> Patient Vitals </h1>
<div class="panel panel-default">
    <div class="panel-heading"> <strong> {!! $patient->name !!} </strong></div>
    <div class="panel-body">
      @if($patient->patientvitals)
      <strong> Temperature: </strong> {{$patient->patientvitals->temp}}
      <br>
      <strong> Weight: </strong> {{$patient->patientvitals->weight}}
      <br>
      <strong> BMI: </strong> {{$patient->patientvitals->BMI}}
      <br>
      <strong> First Hospital visit: </strong> {{ date('F d, Y', strtotime($patient->patientvitals->created_at)) }}
      <br>
      <strong> Most recent visit: </strong> {{ date('F d, Y', strtotime($patient->patientvitals->updated_at)) }}
      <br>
      @endif    
  </div>
</div>
<p><a href="{{route('notes.index',$patient->id)}}" class="btn btn-primary">Add Consultation Note and Prescription</a></p>