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
			<div class="col s10">
				{{ Form::label('label','Post Parent:')}}</br></br>
				<select name="post_parent">
					<option value="" disabled selected>Choose your option</option>
					@foreach($posts as $post)
					<option value="{{$post->id}}">{{$post->title}}</option>
					@endforeach
				</select>
			</div>
		</div>
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
				{{ Form::textarea('excerpt',null,array('class'=>'materialize-textarea ')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('tags','Post Hash tags:')}}
				{{ Form::textarea('tags',null,array('class'=>'materialize-textarea ')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('featured_image','Featured Image')}}
				{{ Form::text('featured_image',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('featured_image_alt_text','Featured Image Alt Image Text')}}
				{{ Form::text('featured_image_alt_text',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<!--  <div class="row">
		
			<div class="col s10">
						
				
			</div>
		</div>  -->

		<div class="row">
			<div class=" col s8">




				{{ Form::label('category',' Post Category:')}} </br></br>


				@foreach($categories as $category)

				<input type="checkbox" name="categories[]" value="{{$category->id}}" id="{{$category->id}}" /> 

				<label for="{{$category->id}}">{{$category->category}}</label></br>



				
				@endforeach

			</div>	
		</div>	
		<div class="row">
			<div class=" col s8">  

				{{ Form::label('type',' Post Type:')}} </br></br>

				<select name="type" >			

					<option  value="0" id="0" >Public</option>
					<option  value="1" id="1" selected>Private</option>		

				</select>
				
			</div>	
		</div>	
		<div class="row">
			<div class=" col s8">  

				{{ Form::label('status',' Post Status:')}} </br></br>

				<select name="status" >			

					<option  value="1" id="1" selected>Draft</option>
					<option  value="0" id="0" >Publish</option>		

				</select>
				
			</div>	
		</div>	

		<div class="row">
			<div class=" col s8">




				{{ Form::label('font',' Post Font:')}} </br></br>

				<select name="font" >
					@foreach($fonts as $font)

					<option  value="{{$font->id}}" id="{{$font->id}}">{{$font->name}}({{$font->size}})</option> 		


					@endforeach
				</select>

			</div>	
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