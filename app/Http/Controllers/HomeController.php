<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Category;
use App\Models\Models\Post;
use App\Models\Models\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        
        return view('welcome', [
            'categories'=>$categories,
            'posts'=>$posts
        ]);
    }

    public function proyectos()
    {
        $categories = Category::all();
        $posts = Post::all();
        
        return view('proyectos', [
            'categories'=>$categories,
            'posts'=>$posts
        ]);
    }

    public function proyecto($postId)
    {
        $post = Post::find($postId);
        $latestPosts = Post::orderBy('id', 'DESC')->take(3)->get();
        return view('proyecto', [
            'post' => $post,
            'latestPosts' => $latestPosts
        ]);
    }

    public function proyectByCategory($category)
    {
        $categories = Category::all();
        $category = Category::where('name', '=', $category)->first();
        $categoryIdSelected = $category->id;
        $posts = Post::where('category_id', '=', $categoryIdSelected)->get();
        return view('proyectos', [
            'categories'=>$categories,
            'posts'=>$posts,
            'categoryIdSelected'=>$categoryIdSelected
        ]);
    }

    public function contact(Request $request)
    {

        $newMessage = new Message();

        $newMessage->client = $request->name;
        $newMessage->mail = $request->email;
        $newMessage->phone = $request->phone;
        $newMessage->message = $request->message;

        $newMessage->save();

        return redirect()->back();
    }
}
