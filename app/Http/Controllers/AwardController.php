<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award=Award::orderBy('id', 'desc')->get();
        return view('backend.award.index', compact('award'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.award.add_award');
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
            'image'  =>  'required|image|mimes:jpeg,png,jpg',
            'description'   =>  'required',
        ]);

        $award = new Award;
        $award->award_type = $request->award_type;
        $award->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('award', $file_photo, 'public');
            $award->image = $file_photo;
        }
        $award->save();
        return redirect()-> route('award.index')->with('success','Award Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {

        return view('backend.award.edit_award', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        $request->validate([
            'image'   =>  'nullable|image|mimes:jpeg,png,jpg',
            'description'   =>  'required',
        ]);
        $award->award_type = $request->award_type;
        $award->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('award', $file_photo, 'public');
            $award->image = $file_photo;
        }
        $award->save();
        return redirect()-> route('award.index')->with('success','Award Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
       $award->delete();
       return redirect()-> route('award.index')->with('error','Award Delete Succesfull');
    }
}
