@if(session()->has('success'))
<div class="alert alert-success" role="alert">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session() -> get('success') }}
</div>
@endif

@if(session()->has('info'))
<div class="alert alert-info" role="alert">
	<i class="fa fa-info-circle" aria-hidden="true"></i>
	{{ session() -> get('info') }}
</div>
@endif

@if(session()->has('warning'))
<div class="alert alert-warning" role="alert">
	 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
	{{ session() -> get('warning')}}
</div>
@endif

