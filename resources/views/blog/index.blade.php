@extends('master')

@section('title', "| Home")
@section('page-header-tag')
<header class="header full-height" style="background: #aeea00 url('{{ route('image.show',['image8.jpg']) }}')">
@endsection

@section('page-header-image',"image7.jpg")

   

@section('page-header-title')
<h1>lifeinsidebraces</h1>
@endsection 
    
@section('page-header-meta')
<h4>
</h4>
@endsection 

@section('main')

  <div class="container">  
  <div class="posts">
    <div class="row">
      <center><h4>Recent Posts</h4></center>
    </div>

    
    <div class="row"> 
    @foreach($posts as $post)     
      <div class="col l4 s12 m6">
        <a href="{{ route('blog.single',$post->slug) }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',$post->featured_image) }}">                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">{{ $post->title }}</span>
          <p>{{ substr($post->excerpt,0,60) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach

       

     
      
      

       

       


  </div>
    </div>

  
  
  
  </div><!-- container  -->
  

@endsection
