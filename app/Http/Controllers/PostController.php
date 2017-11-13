<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
use Input;
use Gate;

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
       // $status = Status::all(['status','id']);        
        return view('admin.posts.create')->withCategories($categories);

    
        
       
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
         if(Gate::allows('create-post', Post::class)){
        $this->validate($request,[
            'title'=>'required|max:255',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required',
            ]);

        $post = new Post();

        $post->title=$request->title;
        $post->slug = $request->slug;
        $post->content=$request->body;
        $post->excerpt="excerpt";

        $category=$request->input('category');
       
       
    foreach($category as $c){
            printf($c);

        }

        


        //$post->save();

        //Session::flash('key','value');
        Session::flash('success','The blog post was successfully saved !');

        return redirect()->route('posts.show',$post->id);
    }
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

          $this->authorize('update', $post);

return view('admin.posts.edit')->withPost($post);

        
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
        $post->content=$request->content;
        

        $post->save();

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
