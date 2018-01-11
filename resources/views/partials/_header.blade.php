
@section('page-header-tag')
    @show 

<nav>
    <div class="nav-wrapper ">
      <a href="{{ route('index') }}" class="brand-logo  light-green-text text-accent-3">lifeinsidebraces</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="grey-text material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a class=" white-text" href="{{ route('index') }}">Home</a></li>
        <li><a class=" white-text" href="{{ route('about') }}">About Us</a></li>
        <li><a class="white-text" href="{{ route('blog.index') }} ">Blog</a></li>
        <li><a class="white-text" href="{{ route('team') }}">Our Team</a></li>
        <li><a class=" white-text" href="{{ route('contact') }}">Contact Us</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('blog.index') }}">Blog</a></li>
        <li><a href="{{ route('team') }}">Our Team</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <div class="page-header-content  center ">
    <div class="row">
      <div class="col s12 m10 offset-m1 l8 offset-l2 ">

        <div class="page-header-title white-text">
          @section('page-header-title')
    @show 
    
      @section('page-header-meta')
    @show
        </div>
        <!-- <div class="meta">
          -lorem ipsum is lorem hitvh
        </div> -->
        <!-- <div >
          <img class="page-header-image" src="images/title.png" />
       
        </div> -->

      
          
        
           
        
         
      
     
      
</div>
    </div>
    

  </div>

  </header>