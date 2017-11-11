@extends('admin.master')

@section('title', 'Create Post')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection

@section('main')
<main>
	<div class="container ">
		<h2>Create New Post</h2>
		{!! Form::open(array('route'=>'posts.store','data-parsley-validate'=>'true','method'=>'POST')) !!}
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('title','Post Title')}}
				{{ Form::text('title',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('slug','Slug:')}}
				{{ Form::text('slug',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('body','Post Body:')}}</br></br>
				{{ Form::textarea('body',null) }}
				<script>
				CKEDITOR.replace( 'body' );
				</script>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('excerpt','Excerpt:')}}
				{{ Form::textarea('excerpt',null,array('class'=>'materialize-textarea validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('tags','Post Hash tags:')}}
				{{ Form::textarea('tags',null,array('class'=>'materialize-textarea validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('status','Post Status:')}}</br></br>
				
				
			</div>
		</div>	
		
		
		<div class="row">
			{{ Form::label('category',' Post Category:')}}
		
			</br></br>
			


				
				<table>
					<tbody>
    				@foreach($categories as $category)
    				<tr>
    					

        <td>
        	
        	<input type="checkbox" id="category[]" name="category[]" value="{{$category->id}}" /> 
      <label for="{{$category->id}}">-{{$category->category}}</label></td>
  </tr>
    				@endforeach
    			</tbody>
    			</table>
    		
			
		</div>	
		<div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Create Post',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
		</main>
	@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection