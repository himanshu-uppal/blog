@extends('admin.master')

@section('title', 'Library')


@section('custom-styles')
<style>

.image{
	width: 210px;

    	height:210px ;
        margin :0.5%;        
}
.image-area{
	padding: 1%;
    text-align: center;
    margin-top: 2%;

}
.individual-photo{
	 display: inline-block;
    margin: 1%;

}

</style>
<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
        
@endsection

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3>All Images</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('media.create')}}" class="btn blue">Add New Media </a>
		</div>		
	</div>

       <!--  <div id="lightgallery" class="demo-gallery"> -->
        	


	
	
	
		   
	</div>
</div>
<div class="row">
	
        	
           
              
    @foreach($images as $image)
  <div class="col s3">
    
      <p>{{$image}}</p>

      <img  src="{{ route('image.show', [$image]) }}" class="image">

</div>

  @endforeach


       

    
       

	</div>
</main>
@endsection
@section('footer-scripts')
	  <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>
@endsection