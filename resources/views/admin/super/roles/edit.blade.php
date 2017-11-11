@extends('admin.master')

@section('title', 'Create Role')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection

@section('main')
<main>
	<div class="container ">
		<h2>Create New Role</h2>
		{!! Form::model($role,['route'=>['roles.update',$role->id],'data-parsley-validate'=>'true','method'=>'PUT']) !!}
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('role','Role Name')}}
				{{ Form::text('role',null,array('class'=>'validate','data-parsley-required'=>'')) }}
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
			<div class="input-field col s6">
				{{ Form::submit('Update Role',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
		</main>
	@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}

	
   

@endsection