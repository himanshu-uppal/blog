@extends('admin.master')

@section('title', 'Edit Permission')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection

@section('main')
<main>
	<div class="container ">
		<h2>Edit Permission</h2>
		{!! Form::model($permission,['route'=>['permissions.update',$permission->id],'data-parsley-validate'=>'true','method'=>'PUT']) !!}
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('display_name','Display Name:')}}
				{{ Form::text('display_name',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('description','Description:')}}</br></br>
				{{ Form::textarea('description',null,array('class'=>'validate','data-parsley-required'=>'')) }}
				
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('resource','Display Name:')}}
				{{ Form::text('resource',null,array('class'=>'crud-resource validate','data-parsley-required'=>'')) }}
			</div>
		</div> 
		<div class="row">
			<div class='permissions-slug'></div>
		</div> 

		

		
		
			
		
		
	
		<div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Update Permission',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
		</main>
	@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}
	<script type="script/javascript">
   $('.crud-resource').keyup(function(event) {
    newText = event.target.value;
    $('.permissions-slug').text(newText);
  });
</script>
@endsection