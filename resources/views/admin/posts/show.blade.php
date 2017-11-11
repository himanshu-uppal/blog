@extends('admin.master')

@section('title', 'View Post')

@section('main')
<main>


<div class="container">
	<h3>View Post</h3>
	<div class="row">
		<div class="col s7">
	<h5>{{ $post->title }}</h5>
	<p>{{ $post->tags }}</p>
	<p>{{ $post->admin->name }}</p>
	<p>
	{{ date('F d, Y', strtotime($post->published_at)) }}

</p>
	<p>
	  @foreach($categories as $category)
	 {{ $category->category }}
	 @endforeach
	</p>
	<p>{{ $post->excerpt }}</p>
	<p>{{ $post->content }}</p>
	

	
	<p>
	 @foreach($comments as $comment)
	 {{ $comment->author->name }}
	 @endforeach
	</p>

	
		
		
</div>
<div class="col s5 ">
	 <div class="card-panel grey lighten-5">
	 	<div class="row">

		<div class="col s2">Link:</div>
		<div class="col s10">
			<a href="{{ route('blog.single',$post->slug)}}">{{ $post->slug }}</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col s6">
		<a href="{{ route('posts.edit',$post->id) }}" class="waves-effect waves-light btn">Edit</a>
	</div>
	@can('delete',$post)
		<div class="col s6">
				<!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal-delete">Delete</a>

			
		</div>
		@endcan
	</div>



  



  <!-- Modal Structure -->
  <div id="modal-delete" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</br>
      A bunch of text</br>
  A bunch of text</br>
A bunch of text</br>
</p>

    	
    </div>
    <div class="modal-footer">
    	
    			{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
	{!! Form::submit('Delete',['class'=>'modal-action waves-effect waves-green btn']) !!}
	{!! Form::close() !!}
    		
    			<a href="#" class=" modal-close waves-effect waves-green btn ">Cancel</a>
    		
    	

    	 
      </div>
  </div>

	 </div>
	
	
	
	</div>
	</div>
	
		
	</div>
</main>
@endsection
