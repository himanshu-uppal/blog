<div class="center">
	@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  <strong>Success:</strong> {{ Session::get('success') }}
</div>
@elseif(Session::has('error'))
<div class="alert alert-error" role="alert">
  <strong>fail:</strong> {{ Session::get('error') }}
</div>

@endif

@if( count($errors)>0)
<div class="alert alert-danger" role="alert">
	<strong>Errors:</strong>
	<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
	</ul> 
</div>
@endif
</div>