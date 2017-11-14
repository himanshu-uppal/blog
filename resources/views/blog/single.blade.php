@extends('master')

@section('title', "| $post->title")
@section('page-header-tag')
<header class="header full-height" style="background:  url('{{ route('image.show',[$post->featured_image]) }}')">
   
    @endsection



   

@section('page-header-title')
<h1>{{ $post->title }}</h1>
@endsection 
    
@section('page-header-meta')
<h4>{{ $post->excerpt }}
</h4>
@endsection 


@section('main')



<div class="container">
	<h1>{{ $post->title }} </h1>
  <div class="post-category">
      <div class="row">
       <a href="">laoreet</a> 
                  <a href="">vitae</a> 
                  <a href="">venenatis</a> 
             <a href="">vitae</a>
                
    </div>
    </div>
   
<div class="post-content">  
   {!! $post->content !!}   
  </div>
   <div class="post-meta">
      <div class="row">
      <div class="col l6 s6 m6 left-align">
        By- &nbsp;{{ $post->admin->name }}
      </div>
      <div class="col l6 s6 m6 right-align">
       {{ date('F d, Y', strtotime($post->published_at)) }}
      </div>
    </div>
    </div>
    <div class="post-share">
      <div class="row center">
           <a target="_blank" href=""><i class="fa fa-instagram fa-2x" style="color:#e4405f" ></i></a>

        

          <a target="_blank" href="">
            <i class="fa fa-facebook-square fa-2x " style="color:#3b5999"  aria-hidden="true"> </i>
          </a>
        


         

          <a target="_blank" href=""><i class="fa fa-google-plus fa-2x" style="color:#dd4b39" aria-hidden="true"> </i></a>
        

          <a target="_blank" href=""><i class="fa fa-twitter fa-2x " style="color:#55acee" aria-hidden="true"> </i></a>
      

          <a target="_blank" href=""><i class="fa fa-youtube fa-2x" style="color:#cd201f" aria-hidden="true"> </i></a>
       


      </div>
    </div>
  <div class="author-intro">
    <div class="row">
      <div class="col s12 m3 l4 center">
        <img class="circle responsive-img" src="{{ route('image.show',['image1.jpg']) }}" />
      </div>
      <div class="col s12 m9 l8">
        I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
      </div>
    </div>

  </div>
  <div class="recommended-posts">
    <div class="row">
      <center><h4>Recommended Posts</h4></center>
    </div>
    <div class="row">  
    @foreach($recommendedPosts as $recommendedPost)     
      <div class="col l4 s12 m6">
        <a href="{{ route('blog.single',$recommendedPost->slug) }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',$recommendedPost->featured_image) }}">                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">{{ $recommendedPost->title }}</span>
          <p>{{ substr($recommendedPost->excerpt,0,60) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach    
      

        

  </div>
    </div>

    <div class="popular-posts">
    <div class="row">
      <center><h4>Popular Posts</h4></center>
    </div>
    <div class="row">  
    @foreach($popularPosts as $popularPost)     
      <div class="col l4 s12 m6">
        <a href="{{ route('blog.single',$popularPost->slug) }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',$popularPost->featured_image) }}">                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">{{ $popularPost->title }}</span>
          <p>{{ substr($popularPost->excerpt,0,60) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach    
     

      

        
  </div>
    </div>
    
  </div>

@endsection
