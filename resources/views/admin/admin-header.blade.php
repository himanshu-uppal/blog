  <header>
   <div class="container "><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
   <ul id="nav-mobile" class="side-nav fixed " >

      <!--    <li><div class="user-view">
      <div class="background">
        <img src="images/background.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/side-nav-background.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li> -->
    <h3>Dashboard</h3>
    <li><div class="divider"></div></li>
    <li class="bold"><a href="{{route('admin.dashboard')}}" class="waves-effect waves-teal">Home</a></li>
    <li><div class="divider"></div></li>

    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Blog</a>
          <div class="collapsible-body">
            <ul>
              <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Post</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{route('posts.index')}}">All Posts</a></li>
                        <li><a href="{{route('posts.create')}}">Add New Post</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>  
               <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#!" class="collapsible-header  waves-effect waves-teal">Category</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{route('categories.index')}}">All Categories</a></li>
                        <li><a href="{{route('categories.create')}}">Add new Category</a></li>                   
                      </ul>
                    </div>
                  </li>
                </ul>
              </li> 
                <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Comments</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#">All Comments</a></li>
                        <li><a href="#">Approve Comments</a></li>                   
                      </ul>
                    </div>
                  </li>
                </ul>
              </li> 

               <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Media</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{route('media.index')}}">Library</a></li>
                        <li><a href="{{route('media.create')}}">Add New</a></li>                     
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>  

              <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Font</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{route('font.index')}}">All Fonts</a></li>
                        <li><a href="{{route('font.create')}}">Add New Font</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li> 

            </ul>
          </div>
        </li>

      @if(Auth::user()->isSuperAdmin())
          
       <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Authorization</a>
          <div class="collapsible-body">
            <ul>
              <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Role</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{route('roles.index')}}">All Roles</a></li>
                        <li><a href="{{route('roles.create')}}">Add New Role</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>  
               <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                  <li class="bold"><a href="#!" class="collapsible-header  waves-effect waves-teal">Permission</a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="{{route('permissions.index')}}">All Permissions</a></li>
                        <li><a href="{{route('permissions.create')}}">Add new Permission</a></li>                   
                      </ul>
                    </div>
                  </li>
                </ul>
              </li> 
                
            
            </ul>
          </div>
        </li>

        @endif

        <!-- <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Comments<span class="new badge red"></span></a>

        </li> -->

       <!--  @if(Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
        <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">User</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#">All Users</a></li>
              <li><a href="#">Add New</a></li>
              <li><a href="#">Your Profile</a></li>

            </ul>
          </div>
        </li>
        @endif -->



        @if(Auth::user()->isSuperAdmin())

        <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Admin</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#">All Admins</a></li>
              <li><a href="#">Add New</a></li>
              <li><a href="#">Your Profile</a></li>

            </ul>
          </div>
        </li>

      

         @else

        <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Admin</a>
          <div class="collapsible-body">
            <ul>              
              <li><a href="#">Your Profile</a></li>
            </ul>
          </div>
        </li>

        @endif

        


       <!--  <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal">Components</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#">Header</a></li>
              <li><a href="#">Footer</a></li>
              <li><a href="#">Slider</a></li>

            </ul>
          </div>
        </li> -->
        <li class="bold"><a href="{{ route('admin.logout') }} " class="  waves-effect waves-teal">Logout</a>
       
        </li>
      </ul>
    </li>
  </ul>
















</header>
