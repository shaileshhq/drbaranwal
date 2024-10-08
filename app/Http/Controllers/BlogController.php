<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::orderBy('id', 'desc')->get();
        return view('backend.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         =>  'required',
            'description'   =>  'required',
            'image'         =>  'required|image|mimes:jpeg,png,jpg',
        ]);

       $blog= new Blog;
       $blog->title = $request->title;
       $blog->slug = Str::slug($request->title);
       $blog->description = $request->description;
       if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('blog', $file_photo, 'public');
            $blog->image = $file_photo;
        }
       $blog->save();
       return redirect()-> route('blog.index')->with('success','Blog Created Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backend.blog.edit_blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         =>  'required',
            'description'   =>  'required',
            'image'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

       $blog= Blog::find($id);
       $blog->title = $request->title;
       $blog->slug = Str::slug($request->title);
       $blog->description = $request->description;
       if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('blog', $file_photo, 'public');
            $blog->image = $file_photo;
        }
       $blog->save();
       return redirect()->route('blog.index')->with('update','Blog Update Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()-> route('blog.index')->with('error','Blog Delete Succesfull');
    }
}
