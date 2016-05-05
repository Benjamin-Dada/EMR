@section('title', 'Patient Logs')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.alerts')
            <h1 class="page-header">
                Patients                 
            </h1>

        	@if($forPharmacy)      
            	<table class="table table-striped table-bordered">
        		    <thead>
        		        <tr>
        		            <td>ID</td>
        		            <td>Name</td>
        		            <td>Email</td>
        		        </tr>
        		    </thead>
        		    <tbody>
        		    @foreach ($forPharmacy as $pat)
            		<tr>
            			<td>{{$pat->patient->id }}.</td>
            			<td><a href="{{ route('patients.show', $pat->id) }}">{{$pat->patient->name}}</a></td>
            			<td>{{$pat->patient->email}}</td>
            		</tr>
                 	@endforeach       
            		</tbody>
            	</table>
            @endif


            @if($forPharmacy->isEmpty())
            <div class="alert alert-info">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            There are currently no Patients to dispense drugs to, still in doubt? Check-in with the Doctor.
            <a href="mailto: doctor@emr.com" class="btn btn-info">Mail Doctor</a> 
            </div>
            @endif


        </div>