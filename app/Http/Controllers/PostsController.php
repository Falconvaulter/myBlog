<?php namespace App\Http\Controllers;

use App\Posts;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use Auth;

class PostsController extends Controller {

    /*
        Only a logged on user can view anything
        with posts
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /*
        Display index of all posts
    */
    public function index() {
        $posts = Posts::latest('created_at')->with('user')->get();
        
        return view('posts.index', compact('posts'));   
    }
    
    /*
        Display Create form
    */
    public function create() {
        return view('posts.create');
    }
    
    /*
        Store post
    */
    public function store(PostsRequest $request) {
        
        Auth::user()->posts()->create($request->all());
        
        return redirect('posts')->with(['flash_message' => 'Post Uploaded']);  
    }
}
