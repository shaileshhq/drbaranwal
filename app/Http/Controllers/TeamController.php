<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = OurTeam::orderBy('id', 'desc')->get();
        return view('backend.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'name'         =>  'required',
            'designation'  =>  'required',
            'image'        =>  'required|image|mimes:jpeg,png,jpg',
        ]);

        $team = new OurTeam;
        $team->name         = $request->name;
        $team->designation  = $request->designation;
        $team->description  = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('team', $file_photo, 'public');
            $team->image = $file_photo;
        }
        $team->save();
        return redirect()-> route('team.index')->with('success','Team Inserted Succesfull');
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
    public function edit(OurTeam $team)
    {
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurTeam $team)
    {
        $request->validate([
            'name'         =>  'required',
            'designation'  =>  'required',
            'image'        =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $team->name        = $request->name;
        $team->designation = $request->designation;
        $team->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('team', $file_photo, 'public');
            $team->image = $file_photo;
        }
        $team->save();
        return redirect()-> route('team.index')->with('update','Team Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurTeam $team)
    {
        $team->delete();
       return redirect()-> route('team.index')->with('error','Team Delete Succesfull');
    }
}
