<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function add(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->input('name');
        $blog->content = $request->input('content');
        $blog->writingDate = $request->input('writingDate');
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->name = $request->input('name');
        $blog->content = $request->input('content');
        $blog->writingDate = $request->input('writingDate');
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
