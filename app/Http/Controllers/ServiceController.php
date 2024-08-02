<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Service::orderBy('id', 'desc')->get();
        return view('backend.service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.add_service');
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

        $service = new Service;
        $service->title = $request->title;
        $service->short_desc = $request->short_desc;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('service', $file_photo, 'public');
            $service->image = $file_photo;
        }
        $service->save();

        return redirect()-> route('service.index')->with('success','Service Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.service.edit_service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'         =>  'required',
            'short_desc'    =>  'required',
            'image'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $service->title = $request->title;
        $service->short_desc = $request->short_desc;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('service', $file_photo, 'public');
            $service->image = $file_photo;
        }
        $service->save();
        return redirect()-> route('service.index')->with('update','Service Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
       $service->delete();
       return redirect()-> route('service.index')->with('error','Service Delete Succesfull');
    }
}
