@extends('master')

@section('share-meta')
<meta property="og:title" content="lifeinisidebraces" />
 {{-- <meta property="og:image" content="{{ route('image.show',[$post->featured_image]) }}" />  --}}
<!-- update image name for blog logo -->
<meta property="og:type" content="website" />
@endsection

@section('title', "| Home")



   

@section('page-header-title')
<h1>lifeinsidebraces</h1>
@endsection 
 


@section('main')


  <div class="container"> 
  <div class="row"> 
    <div class="col l8 s12 m12">
  <div class="posts">
    

    
   {{-- <div class="row masonry-grid" data-masonry='{ "itemSelector": ".masonry-grid-item" }'>   --}}
    @foreach($posts as $post) 
    <div class="post">
   
      <div class="post-title-area " >
      <a href="{{ route('blog.single',$post->slug) }}"><h1 style="font-family:{{$post->font->name}};">{{ $post->title }} </h1></a>
    </div>

     <div class="post-thumbnail-area">
      <img class="post-thumbnail" src="{{ route('image.show',$post->featured_image) }}"  />
    </div>
   
    <div class="post-content-area">

    
{{-- <div class="post-category">
      <div class="row">
      <a href="">lifeinsidebraces</a> 
                 
    </div>
    </div> --}}
   
<div class="post-content" style="font-family:{{$post->font->name}};font-size:{{$post->font->size}};">  
   
   @if($post->excerpt != '')
    {!! $post->excerpt !!}
   @else
    {!! substr($post->content,0,300) !!}
    @if(strlen($post->content)>300)
      {{-- <a class="read-more" href="{{ route('blog.single',$post->slug) }}">...</a> --}}
      <a href="{{ route('blog.single',$post->slug) }}">...</a>
    @endif
   @endif 
    
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
       @endforeach

       

     
      
      

       

       


  </div> <!-- posts ends -->
   <div class="pagination-links">
            {{ $posts->links() }}
          </div>
  
     </div><!-- col for posts -->

       @include('partials._sidebar')  
     

  
  
  </div><!-- row -->
  </div><!-- container  -->

  

@endsection
