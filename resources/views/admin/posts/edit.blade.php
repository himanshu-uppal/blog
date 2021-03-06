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
				{{ Form::label('author_name','Post Author Name')}}
				{{ Form::text('author_name') }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				{{ Form::label('author_social_link','Post Author Social Link(In http:// format)')}}
				{{ Form::text('author_social_link') }}
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
				{{ Form::textarea('excerpt',null,array('class'=>'materialize-textarea validate')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('tags','Post Hash tags:')}}
				{{ Form::textarea('tags',null,array('class'=>'materialize-textarea validate')) }}
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
			<div class=" col s8">  

				{{ Form::label('type',' Post Type:')}} </br></br>

				<select name="type" >			

					<option  value="0" id="0" @if($post->status==0) selected @else  @endif>Public</option>
					<option  value="1" id="1" @if($post->status==1) selected @else  @endif>Private</option>		

				</select>
				
			</div>	
		</div>	
		<div class="row">
			<div class=" col s8">  

				{{ Form::label('status',' Post Status:')}} </br></br>

				<select name="status" >	


					<option  value="1" id="1" @if($post->status==1) selected @else  @endif>Draft</option>
					<option  value="0" id="0" @if($post->status==0) selected @else  @endif>Publish</option>		

				</select>
				
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