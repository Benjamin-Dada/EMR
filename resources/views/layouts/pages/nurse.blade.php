@section('title', 'Patient Logs')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.alerts')
            <h1 class="page-header">
                Patients                 
            </h1>

        	@if($forNurse)      
            	<table class="table table-striped table-bordered">
        		    <thead>
        		        <tr>
        		            <td>ID</td>
        		            <td>Name</td>
        		            <td>Email</td>
        		        </tr>
        		    </thead>
        		    <tbody>
        		    @foreach ($forNurse as $pat)
            		<tr>
            			<td>{{$pat->id }}.</td>
            			<td><a href="{{ route('patients.show', $pat->id) }}">{{$pat->name}}</a></td>
            			<td>{{$pat->email}}</td>
            		</tr>
                 	@endforeach       
            		</tbody>
            	</table>
            @endif


            @if($forNurse->isEmpty())
            <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>           
            There are currently no Patients to be attended to, speak with the Front Desk Officer. &nbsp;
            <a href="mailto: frontdesk@emr.com" class="btn btn-info">Mail Officer</a> 
           </div>
            @endif


        </div>