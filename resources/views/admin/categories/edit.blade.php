@extends('admin.master')

@section('title', 'Edit Category')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')
<main>


<div class="container">
	<h3>Edit Category</h3>


	{!! Form::model($category,['route'=>['categories.update',$category->id],'method'=>'PUT'])!!}


	<div class="row">
			<div class="input-field col s10">

				{{ Form::label('category','Category Name')}}
				{{ Form::text('category',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('description','Description:')}}
				{{ Form::textarea('description',null,array('class'=>'materialize-textarea validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s6">
				
				<a href="{{ route('categories.show',$category->id) }}" class="btn red lighten-1 waves-effect waves-light">Cancel</a>
	
			</div>
			<div class="input-field col s6">
				{!! Form::submit('Save Changes',['class'=>'btn green lighten-1 waves-effect waves-light']) !!}
				{!! Form::close() !!}
			</div>
		</div>



	</div>
</main>
@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection