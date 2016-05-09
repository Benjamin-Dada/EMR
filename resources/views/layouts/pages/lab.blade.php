@section('title', 'Patient Logs')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.alerts')
            <h1 class="page-header">
                Patients                 
            </h1>

        	@if($forLab)      
            	<table class="table table-striped table-bordered">
        		    <thead>
        		        <tr>
        		            <td>ID</td>
        		            <td>Name</td>
        		            <td>Email</td>
        		        </tr>
        		    </thead>
        		    <tbody>
        		    @foreach ($forLab as $pat)
            		<tr>
            			<td>{{$pat->patient->id }}.</td>
            			<td><a href="{{ route('patients.show', $pat->id) }}">{{$pat->patient->name}}</a></td>
            			<td>{{$pat->patient->email}}</td>
            		</tr>
                 	@endforeach       
            		</tbody>
            	</table>
            @endif


            @if($forLab->isEmpty())
            <div class="alert alert-warning" role="alert">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            There are currently no Patients requiring test, still in doubt? Speak with the Doctor. &nbsp;
            <a href="mailto: nurse@emr.com" class="btn btn-info"><i class="fa fa-envelope-o" aria-hidden="true"></i>Mail Nurse</a> 
            </div>
            @endif


        </div>