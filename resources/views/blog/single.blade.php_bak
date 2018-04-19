@extends('master')


@section('share-meta')
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:image" content="{{ route('image.show',[$post->featured_image]) }}" />
<meta property="og:type" content="website" />
@endsection


 
@section('title', "| $post->title")


 {{-- @section('page-header-tag') --}} 

 <!-- <header class="header full-height" style="background:  url('{{ route('image.show',[$post->featured_image]) }}')"> --> 
   
 {{-- @endsection --}}




   

{{--  @section('page-header-title') --}}
<!-- <h1>{{ $post->title }}</h1> -->
{{-- @endsection --}}
    
{{-- @section('page-header-meta') --}}
<!-- <h4>{{ $post->excerpt }}</h4> -->
{{-- @endsection   --}}



@section('main')



<div class="container">
  <div class="row">
  <div class="col s12 m12 l8">
    <div class="post-thumbnail-area">
      <img class="post-thumbnail" src="{{ route('image.show',['image2.jpg']) }}"  />
    </div>
    <div class="post-title-area ">
      <h1>{{ $post->title }} </h1>
    </div>
    <div class="post-content-area">

    
  <div class="post-category">
      <div class="row">
      <a href="">lifeinsidebraces</a> 
                  <!-- <a href="">vitae</a> 
                  <a href="">venenatis</a> 
             <a href="">vitae</a> --> 
                
    </div>
    </div>
   
<div class="post-content">  
   {!! $post->content !!}   
  </div>
  
    <!--  <div class="post-share">
      <div class="row center">
           <a target="_blank" href=""><i class="fa fa-instagram fa-2x" style="color:#e4405f" ></i></a>
 <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://45.55.12.180">
            <i class="fa fa-facebook-square fa-2x " style="color:#3b5999"  aria-hidden="true"> </i>
          </a>
           <a target="_blank" href=""><i class="fa fa-google-plus fa-2x" style="color:#dd4b39" aria-hidden="true"> </i></a>
         <a target="_blank" href=""><i class="fa fa-twitter fa-2x " style="color:#55acee" aria-hidden="true"> </i></a>
      <a target="_blank" href=""><i class="fa fa-youtube fa-2x" style="color:#cd201f" aria-hidden="true"> </i></a>
       
      </div>
    </div> --> 
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
    <hr>
  <div class="author-intro">
    <div class="row">
      <div class="col s12 m3 l4 center">
        <img class="circle responsive-img" src="{{ route('image.show',['image1.jpg']) }}" />
      </div>
      <div class="col s12 m9 l8">
        <!-- {{ $post->admin->description }} -->
        </div>
    </div>

  </div>
  <hr>
  

   </div> 
  </div>


<!-- sidebar as a column , should used in a row with another column -->   
  @include('partials._sidebar') 

	
    </div> <!-- row -->
  </div>

@endsection
