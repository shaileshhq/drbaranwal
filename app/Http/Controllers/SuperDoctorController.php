<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SuperspecialistDoctor;

class SuperDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superspecialist = SuperspecialistDoctor::orderBy('id', 'asc')->get();
        return view('backend.superdoctor.index', compact('superspecialist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.superdoctor.create');
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
            'name'        => 'required',
            'designation' => 'required',
            'image'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $superspecialist = new SuperspecialistDoctor;
        $superspecialist->name = $request->name;
        $superspecialist->designation = $request->designation;
        $superspecialist->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('superspecialist', $file_photo, 'public');
            $superspecialist->image = $file_photo;
        }
        $superspecialist->save();
        return redirect()->route('superdoctor.index')->with('success','Superspecialist Doctor Created Succesfully');
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
    public function edit($id)
    {
        $superspecialist = SuperspecialistDoctor::find($id);
        return view('backend.superdoctor.edit', compact('superspecialist'));
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
            'name'        => 'required',
            'designation' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $superspecialist = SuperspecialistDoctor::find($id);
        $superspecialist->name = $request->name;
        $superspecialist->designation = $request->designation;
        $superspecialist->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('superspecialist', $file_photo, 'public');
            $superspecialist->image = $file_photo;
        }
        $superspecialist->save();
        return redirect()->route('superdoctor.index')->with('update','Superspecialist Doctor Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superspecialist = SuperspecialistDoctor::find($id);
        return redirect()->route('superdoctor.index')->with('delete','Superspecialist Doctor Deleted Succesfully');
    }
}
