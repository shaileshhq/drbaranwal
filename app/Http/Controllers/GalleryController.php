<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::orderBy('id', 'desc')->get();
        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.add_gallery');
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
            'type'   => 'required',
            'image'  =>  'required|image|mimes:jpeg,png,jpg',
        ]);

        $gallery = new Gallery;
        $gallery->type = $request->type;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('gallery', $file_photo, 'public');
            $gallery->image = $file_photo;
        }
        $gallery->save();
        return redirect()-> route('gallery.index')->with('success','Gallery Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {

        return view('backend.gallery.edit_gallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'type'    => 'required',
            'image'   =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $gallery->type = $request->type;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('gallery', $file_photo, 'public');
            $gallery->image = $file_photo;
        }
        $gallery->save();
        return redirect()-> route('gallery.index')->with('success','Gallery Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
       $gallery->delete();
       return redirect()-> route('gallery.index')->with('error','Gallery Delete Succesfull');
    }
}
