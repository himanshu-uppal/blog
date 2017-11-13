<html>
<head>
  <title>Lorem Ipsum
  </title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
           <!-- Compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Dosis:700|Titillium+Web:700|Exo+2:400,900" rel="stylesheet">
  


   

    {!! Html::style('css/frontend/prism.css') !!}
    {!! Html::style('css/frontend/style.css') !!}
    {!! Html::style('css/frontend/materialize.css') !!}


  <script src="https://use.fontawesome.com/2b18a9f74f.js"></script>
  
 
  

  
</head>
<body >
  <header class="header full-height" style="background: #aeea00 url('{{ route('image.show',['image8.jpg']) }}')">
   <nav>
    <div class="nav-wrapper white ">
      <a href="#!" class="brand-logo  light-green-text text-accent-3">lifeinsidebraces</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="grey-text material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a class="grey-text text-darken-1" href="#">About Us</a></li>
        <li><a class="grey-text text-darken-1" href="{{ route('blog.index') }} ">Blog</a></li>
        <li><a class="grey-text text-darken-1" href="#">Our Team</a></li>
        <li><a class="grey-text text-darken-1" href="#">Contact Us</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Our Team</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <div class="page-header-content  center ">
    <div class="row">
      <div class="col s12 m10 offset-m1 l8 offset-l2 ">

        <div class="page-header-title white-text">
          <h1>lifeinsidebraces </h1> </br><h4>-Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</h4>
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
  <div class="container">
    
   

   
   
  
  <div class="posts">
    <div class="row">
      <center><h4>Recent Posts</h4></center>
    </div>
    <div class="row">      
      <div class="col l4 s12 m6">
        <a href="{{ route('blog.single',"hello") }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',['image2.jpg']) }}">
                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </a>
       </div>

        <div class="col l4 s12 m6">
          <a href="{{ route('blog.single',"hello") }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',['image3.jpg']) }}">
                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </a>
       </div>

        <div class="col l4 s12 m6">
          <a href="{{ route('blog.single',"hello") }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',['image6.jpg']) }}">
                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </a>
       </div>

       <div class="col l4 s12 m6">
        <a href="{{ route('blog.single',"hello") }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',['image6.jpg']) }}">
                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </a>
       </div>

        <div class="col l4 s12 m6">
          <a href="{{ route('blog.single',"hello") }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',['image1.jpg']) }}">
                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </a>
       </div>

        <div class="col l4 s12 m6">
          <a href="{{ route('blog.single',"hello") }}">
      <div class="card">
        <div class="card-image">
          <img src="{{ route('image.show',['image3.jpg']) }}">
                  
        </div>
        <div class="card-content grey lighten-5">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </a>
       </div>


  </div>
    </div>

  
  
  
  </div><!-- container  -->
  
  <footer class="page-footer green lighten-5">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="black-text">About lifeinsidebraces</h5>
                <p class="black-text "> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
              <div class="col l4 offset-l2 s12 ">
                <h5 class="black-text">Links</h5>
                <ul>
                  <li><a class="black-text " href="#!">About Us</a></li>
                  <li><a class="black-text " href="#!">Our Team</a></li>
                  <li><a class="black-text " href="#!">Blog</a></li>
                  <li><a class="black-text " href="#!">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
               <div class="footer-tab">
          <div class="footer-share-menu">

             <a target="_blank" href=""><i class="fa fa-instagram fa-2x" style="color:#e4405f" ></i></a>&nbsp;&nbsp;

        

          <a target="_blank" href="">
            <i class="fa fa-facebook-square fa-2x " style="color:#3b5999"  aria-hidden="true"> </i>
          </a>&nbsp;
        


         

          <a target="_blank" href=""><i class="fa fa-google-plus fa-2x" style="color:#dd4b39" aria-hidden="true"> </i></a>&nbsp;
        

          <a target="_blank" href=""><i class="fa fa-twitter fa-2x " style="color:#55acee" aria-hidden="true"> </i></a>&nbsp;
      

          <a target="_blank" href=""><i class="fa fa-youtube fa-2x" style="color:#cd201f" aria-hidden="true"> </i></a>&nbsp;
       

         
        

      </div>
     
      
          
          
        </div>
        <hr style="color:#64dd17">
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container white-text">
            © 2017 Copyright lifeinsidebraces
           
            </div>
          </div>
        </footer>

         <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
   

 

    {!! Html::script('js/frontend/prism.js') !!}
     {!! Html::script('js/frontend/javascript.js') !!}
      {!! Html::script('js/frontend/materialize.min.js') !!}


  

  
    
    </body>
  </html>

