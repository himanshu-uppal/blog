@extends('admin.master')

@section('title', 'Create Permission')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection

@section('main')
<main>
	<div class="container ">
		<h2>Create New Permission</h2>
		{!! Form::open(array('route'=>'permissions.store','data-parsley-validate'=>'true','method'=>'POST')) !!}
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('name','Permission Name')}}
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
			<div class="input-field col s6">
				{{ Form::label('resource','Display Name:')}}
				{{ Form::text('resource',null,array('class'=>'crud-resource validate','data-parsley-required'=>'')) }}
			</div>
		</div> 
		<div class="row">
			<div id ="permissions-slug" class='permissions-slug'>change me </div>
		</div> 

		

		
		
			
		
		
	
		<div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Add Permission',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
		</main>
	@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}

	<!-- jQuery In javascript.js for typed text shown-->
   

@endsection