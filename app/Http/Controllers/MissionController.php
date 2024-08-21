<?php

namespace App\Http\Controllers;

use App\Models\OurMission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission = OurMission::orderBy('id', 'desc')->get();
        return view('backend.mission.index',compact('mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mission.create');
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
            'title'        =>  'required',
            'description'  =>  'required',
            'icon'         =>  'required|image|mimes:jpeg,png,jpg',
        ]);

        $mission = new OurMission;
        $mission->title        = $request->title;
        $mission->description  = $request->description;
        if($request->icon){
            $file_image = time().'-'.rand(111, 990).'.'.$request->icon->extension();
            $request->icon->storeAs('mission', $file_image, 'public');
            $mission->icon = $file_image;
        }
        $mission->save();
        return redirect()-> route('mission.index')->with('success','Mission Inserted Succesfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OurMission $mission)
    {
        return view('backend.mission.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurMission $mission)
    {
        $request->validate([
            'title'        =>  'required',
            'description'  =>  'required',
            'icon'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $mission->title        = $request->title;
        $mission->description  = $request->description;
        if($request->icon){
            $file_image = time().'-'.rand(111, 990).'.'.$request->icon->extension();
            $request->icon->storeAs('mission', $file_image, 'public');
            $mission->icon = $file_image;
        }
        $mission->save();
        return redirect()-> route('mission.index')->with('update','Mission Updated Succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurMission $mission)
    {
        $team->delete();
       return redirect()-> route('mission.index')->with('error','Mission Delete Succesfull');
    }
}
