<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Font;
use Session;
use Input;
use Gate;
use Illuminate\Support\Facades\Auth;
use DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', new Post());
        $posts = Post::orderBy('id','DESC')->paginate(10);
        return view('admin.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $this->authorize('create', Post::class);
      
    
         $categories = Category::all(['category','id']);
         $posts = Post::orderBy('id','DESC')->get(['id','title']);
         $fonts = Font::all(['name','id','size']);
       
       // $status = Status::all(['status','id']);        
        return view('admin.posts.create')->withCategories($categories)->withFonts($fonts)->withPosts($posts);

    
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->authorize('create', Post::class);
        
        $this->validate($request,[
            'title'=>'required|max:255',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required',
            ]);

        /* to check post parent value is coming or not through select box */
        /* Check started */
        $post_parent = $request->post_parent;      
        // print_r($post_parent);       
        /* Check ended */



        $post = new Post();
        $post->admin_id = Auth::user()->id;
        $post->title=$request->title;
        $post->slug = $request->slug;
        $post->content=$request->body;
        $post->excerpt=$request->excerpt;
        $post->tags=$request->tags;
        $post->featured_image=$request->featured_image;
        $post->featured_image_alt_text=$request->featured_image_alt_text;
        $post->published_at = date('Y-m-d H:i:s');
        $post->font_id=$request->font;
        $post->type=$request->type;
        $post->status=$request->status;
        $post->save();
        $category=$request->categories;

        if($category!=null){
            foreach($category as $c){
             DB::table('category_post')->insert(
            ['post_id' => $post->id, 'category_id' => $c]
        );

        }

        }
       
       
    

        //Session::flash('key','value');
        Session::flash('success','The blog post was successfully saved !');

        return redirect()->route('posts.show',$post->id);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $this->authorize('view', $post);
        $comments = $post->comments;
        $categories= $post->categories;       
        return view('admin.posts.show')->withPost($post)->withComments($comments)->withCategories($categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

       $post_categories[] = array();
         $categories = Category::all(['category','id']);
         $fonts = Font::all(['name','id','size']);
         foreach ($post->categories as $category) {
            $post_categories[] = $category->id;
        }
         $categoriesSelected = $post_categories; 
          $this->authorize('update', $post);

return view('admin.posts.edit')->withPost($post)->withFonts($fonts)->withCategories($categories)->withCategoriesSelected($categoriesSelected);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $post = Post::find($id);
         if($request->slug == $post->slug){
            $this->validate($request,[
            'title'=>'required|max:255',
            'content' => 'required',
            ]);

         }
         else
         {
            $this->validate($request,[
            'title'=>'required|max:255',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'content' => 'required',
            ]);
         }
        

       $this->authorize('update', $post);

        $post->title=$request->title;
        $post->slug = $request->slug;
        $post->content=$request->content;
        $post->excerpt=$request->excerpt;
        $post->tags=$request->tags;
        $post->featured_image=$request->featured_image;
        $post->featured_image_alt_text=$request->featured_image_alt_text;
        //$post->published_at = date('Y-m-d H:i:s');
        $post->type=$request->type;
        $post->status=$request->status;
        $post->font_id=$request->font;
        $post->save();
        $category=$request->categories;

       
        $post_categories = array();
        foreach ($post->categories as $category) {
            $post_categories[] = $category->id;
        }

        $categories_remove= array_diff($post_categories, $request->categories);
        //print_r( $categories_remove);

        $categories_add= array_diff($request->categories,$post_categories);
        //print_r( $categories_add);
       // print_r($post_categories);
        //  $post_categories_update[] = array_except($request->categories,$post_categories);
        // print_r($post_categories_update);

        

        
              
       
    foreach($categories_remove as $category_remove){
             DB::table('category_post')->where('post_id','=',$post->id)->where('category_id','=',$category_remove)->delete();            
      }

      foreach($categories_add as $category_add){
             DB::table('category_post')->insert(
            ['post_id' => $post->id, 'category_id' => $category_add]
        );

        }
         

       
       
  

        //Session::flash('key','value');
        Session::flash('success','The blog post was successfully saved !');

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    


        $post = Post::find($id);
         $this->authorize('delete', $post); 
        $post->delete();
        Session::flash('success','The blog post was successfully deleted !');
        return redirect()->route('posts.index');    
    }
}
