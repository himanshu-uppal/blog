@extends('master')


@section('share-meta')
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:image" content="{{ route('image.show',[$post->featured_image]) }}" />
<meta property="og:type" content="website" />
@endsection


 
@section('title', "| $post->title")





@section('main')



<div class="container">
  <div class="row">
  <div class="col s12 m12 l8">
     <div class="post-title-area ">
      <h1 style="font-family:{{$post->font->name}};"> {{ $post->title }} </h1>
    </div>
    <div class="post-thumbnail-area">
      <img class="post-thumbnail" src="{{ route('image.show',$post->featured_image) }}"  alt="{{$post->featured_image_alt_text}}" />
    </div>
   
    <div class="post-content-area">

    
 {{--  <div class="post-category">
      <div class="row">
      <a href="">lifeinsidebraces</a> 
                
                
    </div>
    </div> --}}
   
<div class="post-content" style="font-family:{{$post->font->name}};font-size:{{$post->font->size}};">  
   {!! $post->content !!}   
  </div>
  
    
     <div class="post-meta">
      <div class="row">
      <div class="col l6 s6 m6 left-align">
        
      </div> 
      <div class="col l6 s6 m6 right-align">
       {{ date('F d, Y', strtotime($post->published_at)) }}
      </div>
    </div>
    </div>
    <hr>
 
  <hr>
  

   </div> 
  </div>


<!-- sidebar as a column , should used in a row with another column -->   
  @include('partials._sidebar') 

	
    </div> <!-- row -->
  </div>

@endsection
