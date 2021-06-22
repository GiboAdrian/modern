<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Category;
use App\Models\Models\Post;

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
        return view('home');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function servicios()
    {
        return view('servicios');
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
}
