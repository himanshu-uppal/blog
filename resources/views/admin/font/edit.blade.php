@extends('admin.master')

@section('title', 'Edit Font')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')
<main>


<div class="container">
	<h3>Edit Category</h3>


	{!! Form::model($font,['route'=>['font.update',$font->id],'method'=>'PUT'])!!}


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
				
				<a href="{{ route('font.index') }}" class="btn red lighten-1 waves-effect waves-light">Cancel</a>
	
			</div>
			{{-- @can('update',$font)  --}}
			<div class="input-field col s6">
				{!! Form::submit('Save Changes',['class'=>'btn green lighten-1 waves-effect waves-light']) !!}
				{!! Form::close() !!}
			</div>
				{{-- @endcan --}}
		</div>



	</div>
</main>
@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection