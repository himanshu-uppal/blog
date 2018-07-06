@extends('admin.master')

@section('title', 'Add Font')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')
<main>


<div class="container">
	<div class="row">
		<div class="col s8">
			<h3>Add Font</h3>
	{!! Form::open(array('route'=>'font.store','data-parsley-validate'=>'true','method'=>'POST')) !!}
		


	<div class="row">
			<div class="input-field col s10">

				{{ Form::label('name','Font Name')}}
				{{ Form::text('name',null,array('class'=>'validate','data-parsley-required'=>'')) }}
				
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('size','Size:')}}
				{{ Form::text('size',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>		
		<div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Add Font',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>

		</div>
		
	</div>
	


	</div>
</main>
@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection