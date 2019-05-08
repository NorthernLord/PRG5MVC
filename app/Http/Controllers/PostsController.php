<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'category']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('posts')->orderBy('name', 'asc')->get();
        $posts = Post::where('status','1')->orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->withPosts($posts)->withCategories($categories);
    }

    public function category($id)
    {
        $categories = Category::with('posts')->orderBy('name', 'asc')->get();
        $posts = Post::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->withPosts($posts)->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required|max:255',
            'body'          => 'required',
            'category_id'   => 'required|integer',
            'cover_image'   => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload the image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->category_id = $request->category_id;
        if (!empty($_POST['statusCheckbox'])) {
            $post->status =$request->input('statusCheckbox');
        }
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/dashboard')->with('success', 'Blogpost gecreëerd');
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
        return view('posts.show')->withPost($post);
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

        // Check for user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'U bent niet toegestaan deze blogpost aan te passen');
        }

        $categories = Category::all();
        $cats = array();

        foreach($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        return view('posts.edit')->withPost($post)->withCategories($cats);
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
        $this->validate($request, [
            'title'         => 'required',
            'body'          => 'required',
            'category_id'   => 'required'
        ]);

        // Handle file upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload the image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Blogpost geüpdatet');
    }

    public function updateCheckbox(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required'
        // ]);

        $post = Post::find($id);

        // If checkbox is not empty
        // Equals the status to the input of the checkbox (1)
        if (!empty($request->input('statusCheckbox'))) {
            $post->status = $request->input('statusCheckbox');
        }
        else {
            $post->status = $request='0';
        }

        $post->save();

        return redirect('/dashboard')->with('success', 'Blogpost geüpdatet');
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

        // Check for user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'U bent niet toegestaan deze blogpost te verwijderen');
        }

        if($post->cover_image != 'noimage.jpg'){
            // Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();

        return redirect('/dashboard')->with('success', 'Blogpost verwijderd');
    }
}
