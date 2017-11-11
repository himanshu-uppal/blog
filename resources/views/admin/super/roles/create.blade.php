@extends('admin.master')

@section('title', 'Create Role')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection

@section('main')
<main>
	<div class="container ">
		<h2>Create New Role</h2>
		{!! Form::open(array('route'=>'roles.store','data-parsley-validate'=>'true','method'=>'POST')) !!}
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('name','Role Name')}}
				{{ Form::text('name',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('display_name','Display Name:')}}
				{{ Form::text('display_name',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('description','Description:')}}</br></br>
				{{ Form::textarea('description',null,array('class'=>'materialize-textarea validate','data-parsley-required'=>'')) }}
				
			</div>
		</div>
		<div class="row">
			<div class=" col s10">
				{{ Form::label('label','Permissions:')}}</br></br>
				@foreach($permissions as $permission)
    				
        	
        	<input type="checkbox" name="permission[]" value="{{$permission->id}}" /> 
      <label for="{{$permission->id}}">{{$permission->display_name}}</label></br>

    				@endforeach
		 
			</div>
		</div>
		
		
		<div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Create Role',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
		</main>
	@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}

	
   

@endsection