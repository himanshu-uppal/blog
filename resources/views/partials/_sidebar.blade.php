<!-- sidebar as a column , should used in a row with another column -->
   
  <div class="col s12 m12 l4">
    <div class="popular-posts">
    <div class="row">
      <center><h4>Heading</h4></center>
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
          <span class="card-title">{{ $popularPost->title }}</span>
          <p>{{ substr($popularPost->excerpt,0,100) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach    
     

      

        
  </div>
    </div>

    <div class="recommended-posts">
    <div class="row">
      <center><h4>Heading</h4></center>
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
          <span class="card-title">{{ $recommendedPost->title }}</span>
          <p>{{ substr($recommendedPost->excerpt,0,100) }} </p>
        </div>
      </div>
    </a>
       </div>
       @endforeach    
      

        

  </div>
    </div>
  </div>
  <!-- sidebar ends -->