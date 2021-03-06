@section('title', 'Patient Logs')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.alerts')
            <h1 class="page-header">
                Patients                 
            </h1>

        	@if($forDoctor)      
            	<table class="table table-striped table-bordered">
        		    <thead>
        		        <tr>
        		            <td>ID</td>
        		            <td>Name</td>
        		            <td>Email</td>
        		        </tr>
        		    </thead>
        		    <tbody>
        		    @foreach ($forDoctor as $patient)
            		<tr>
            			<td>{{$patient->patient->id }}.</td>
            			<td><a href="{{ route('patients.show', $patient->id) }}">{{$patient->patient->name}}</a></td>
            			<td>{{$patient->patient->email}}</td>
            		</tr>
                 	@endforeach       
            		</tbody>
            	</table>
            @endif


            @if($forDoctor->isEmpty())
            <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            There are currently no Patients to be attended to, speak with the Nurse. &nbsp;
            <a href="mailto: nurse@emr.com" class="btn btn-info"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail Nurse</a> 
            </div>
            @endif



        </div>