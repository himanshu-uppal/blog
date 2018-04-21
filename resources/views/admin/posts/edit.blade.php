@extends('admin.master')

@section('title', 'Edit Post')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')
<main>


<div class="container">
	<h3>Edit Post</h3>


	{!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}


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
				{{ Form::label('content','Post Body:')}}</br></br>
				{{ Form::textarea('content',null) }}
				<script>
				CKEDITOR.replace( 'content' );
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
			<div class="input-field col s6">
				{{ Form::label('featured_image','Featured Image')}}
				{{ Form::text('featured_image',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<!-- <div class="row">
		
			<div class="input-field col s10">
				{!! Form::label('status','Post Status:') !!}</br></br>				
				
				
			
	

	
			</div>
		</div>
	 -->

				
		
		
		<div class="row">
			<div class=" col s8">

    				
        
    				
			 {{ Form::label('category',' Post Category:')}} </br></br>
		
		
			@foreach($categories as $category)

        	<input type="checkbox" name="categories[]" value="{{$category->id}}" id="{{$category->id}}" {{ in_array($category->id,$categoriesSelected) ? 'checked' : ''  }} /> 

      <label for="{{$category->id}}">{{$category->category}}</label></br>

												
				
			@endforeach
			
			</div>	
		</div>
		<div class="row">
			<div class=" col s10">

    				
        
    				
			 {{ Form::label('font',' Post Font:')}} </br></br>
		
		<select name="font" >
			@foreach($fonts as $font)

        	<option  value="{{$font->id}}" id="{{$font->id}}"  @if($font->id==$post->font->id) selected @else  @endif >{{$font->name}}({{$font->size}})</option> 		
										
				
			@endforeach
		</select>
			
			</div>	
		</div>		
		<div class="row">
			<div class="input-field col s6">
				<a href="{{ route('posts.show',$post->id) }}" class="btn red lighten-1 waves-effect waves-light">Cancel</a>
	
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