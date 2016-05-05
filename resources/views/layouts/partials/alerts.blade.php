@if(session()->has('success'))
<div class="alert alert-success" role="alert">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
	{{ session() -> get('success') }}
</div>

@if(session()->has('info'))
<div class="alert alert-info" role="alert">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
	{{ session() -> get('info') }}
</div>

@endif
@if(session()->has('warning'))
<div class="alert alert-warning" role="alert">
	{{ session() -> get('warning')}}
</div>
@endif