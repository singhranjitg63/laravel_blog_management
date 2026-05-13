<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();

        return view('createBlog', compact('categories'));
    }

    public function addBlog(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'contant'=>'required',
            'user_id'=>'required',
            'categorie_id'=>'required',
        ]);
        $blogData = new Blog(); 

        $blogData->title = $request->title;
        $blogData->contant = $request->contant;
        $blogData->user_id = $request->user_id;
        $blogData->categorie_id = $request->categorie_id;

        $blogData->save();

        return redirect('/blog');
    }
    public function showBlog()
    {
        $BlogData = Blog::with('Category')->get();
        return view('Blogs', ['listBlog' => $BlogData]);
    }
}