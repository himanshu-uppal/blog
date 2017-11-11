@extends('admin.master')

@section('title', 'Add Media')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')
<main>


<div class="container">
	<div class="row">
		<div class="col s6">
			<h3>Add Media</h3>
	{!! Form::open(array('route'=>'media.store','method'=>'POST','files'=>true)) !!}
		


	<div class="row">
    <div class="file-field ">
      <div class="btn">
        <span>File</span>
        {{ Form::file('image', ['class' => 'validate','data-parsley-required'=>'']) }}
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </div>
  <div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Add Media',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
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