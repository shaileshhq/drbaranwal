<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::orderBy('id', 'desc')->get();
        return view('backend.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.add_slider');
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
            'short_desc'    =>  'required',
            'image'         =>  'required|image|mimes:jpeg,png,jpg',
        ]);

        $slider = new Slider;
        $slider->title = $request->title;
        $slider->short_desc = $request->short_desc;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('slider', $file_photo, 'public');
            $slider->image = $file_photo;
        }
        $slider->save();

        return redirect()-> route('slider.index')->with('success','Slider Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title'         =>  'required',
            'short_desc'    =>  'required',
            'image'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $slider->title = $request->title;
        $slider->short_desc = $request->short_desc;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('slider', $file_photo, 'public');
            $slider->image = $file_photo;
        }
        $slider->save();
        return redirect()-> route('slider.index')->with('update','Slider Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
       $slider->delete();
       return redirect()-> route('slider.index')->with('error','Slider Delete Succesfull');
    }
}
