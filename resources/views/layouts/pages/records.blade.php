@section('title', 'Patient Logs')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.alerts')
            <h1 class="page-header">
                Patients                 
                <a href="{{ route('patients.create') }}" class="btn btn-info">New Patient</a>
            </h1>

        	@if($patient)      
            	<table class="table table-striped table-bordered">
        		    <thead>
        		        <tr>
        		            <td>ID</td>
        		            <td>Name</td>
        		            <td>Email</td>
        		            <td>Actions</td>
        		        </tr>
        		    </thead>
        		    <tbody>
        		    @foreach ($patient as $pat)
            		<tr>
            			<td>{{$pat->id }}.</td>
            			<td><a href="{{ route('patients.show', $pat->id) }}">{{$pat->name}}</a></td>
            			<td>{{$pat->email}}</td>
            			<td><a href="/patients/{{ $pat->id }}/edit" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                                </a>
                            <button class="btn btn-circle btn-danger delete"
                                  data-action="{{ url('patients/' . $pat->id) }}"
                                  data-token="{{csrf_token()}}">
                            <i class="fa fa-trash-o"></i> Delete
                        </button>
                    	</td>
            		</tr>
                 	@endforeach       
            		</tbody>
            	</table>
            @endif


            @if($patient->isEmpty())
            <div class="alert alert-warning">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            There are currently no Patients &nbsp;<a class="btn btn-info" href="{{ route('patients.create') }}">Create New Patient</a>
            </div>
            @endif


        </div>