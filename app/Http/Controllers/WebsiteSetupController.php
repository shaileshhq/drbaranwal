<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetup;
use Illuminate\Http\Request;

class WebsiteSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('backend.website_setup.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        foreach ($input['type'] as $types){
            if(isset($input[$types])){
                
                if($types == "logo"){
                    $logoImage = time().rand(99, 999).'.'.$input[$types]->extension();
                    $input[$types]->storeAs('website_setup', $logoImage, 'public');
                    $input[$types] = $logoImage;
                }

                if($types == "favicon"){
                    $faviconImage = time().rand(99, 999).'.'.$input[$types]->extension();
                    $input[$types]->storeAs('website_setup', $faviconImage, 'public');
                    $input[$types] = $faviconImage;
                }

                WebsiteSetup::updateOrCreate(
                    ["name" => $types],
                    [
                        "name" => $types,
                        "value" => $input[$types]
                    ],
                );
            }

        }
        return redirect()->back()->with('success', 'Website Setup updated successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
