<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::orderBy('id', 'desc')->get();
        return view('backend.media.index',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.media.create');
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

       $media= new Media;
       $media->title = $request->title;
       $media->slug = Str::slug($request->title);
       $media->description = $request->description;
       if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('media', $file_photo, 'public');
            $media->image = $file_photo;
        }
       $media->save();
       return redirect()-> route('media.index')->with('success','Media Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);
        return view('backend.media.edit', compact('media'));
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
        $request->validate([
            'title'         =>  'required',
            'description'   =>  'required',
            'image'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

       $media= Media::find($id);
       $media->title = $request->title;
       $media->slug = Str::slug($request->title);
       $media->description = $request->description;
       if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('media', $file_photo, 'public');
            $media->image = $file_photo;
        }
       $media->save();
       return redirect()->route('media.index')->with('update','Media Update Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Media::destroy($id);
        return redirect()->route('media.index')->with('delete','Media Delete Succesfully');
    }
}
