<!-- sidebar as a column , should used in a row with another column -->
   
  <div class="col s12 m12 l4">
    <div class="about-blog">
      <div class="row">
      <center><h4>About {life}</h4></center>
    </div>{{--
      <div class="row center">
        <img class="about-image" src="{{ route('image.show','image3.jpg') }}" />
      </div> --}}
      <div class="row" style="font-family:Pacifico;font-size:large">
      <center><strong>The life we live</br>
        The code we write</br>
        The food we eat </br>
        The love we make </br>
        The places we go </br>
        The nature we feel</br>
        The songs we listen.</strong>

      </center>
    </div>
    </div>
   
    <hr>
    <div class="popular-posts">
    <div class="row">
      <center><h4>Popular Posts</h4></center>
    </div>
    <div class="row">  
    @foreach($popularPosts as $popularPost)     
      <div class="col l12 s12 m12">
        <a href="{{ route('blog.single',$popularPost->slug) }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',$popularPost->featured_image) }}">                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title" style="font-family:{{$popularPost->font->name}};">{{ $popularPost->title }}</span>
          <p style="font-family:{{$popularPost->font->name}};">{{ substr($popularPost->excerpt,0,100) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach    
     

      

        
  </div>
    </div>
<hr>
{{--
    <div class="recommended-posts">
    <div class="row">
      <center><h4>Recommended Posts</h4></center>
    </div>
    <div class="row">  
    @foreach($recommendedPosts as $recommendedPost)     
      <div class="col l12 s12 m12">
        <a href="{{ route('blog.single',$recommendedPost->slug) }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',$recommendedPost->featured_image) }}">                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title" style="font-family:{{$recommendedPost->font->name}};">{{ $recommendedPost->title }}</span>
          <p style="font-family:{{$recommendedPost->font->name}};">{{ substr($recommendedPost->excerpt,0,100) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach    
      

        

  </div>
    </div>
     <hr>
    --}}
   
  </div>
  <!-- sidebar ends -->