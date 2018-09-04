<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    public function send(Request $request)
    {
      $this->validate($request, array(
        'title'       => 'required|max:255',
        'body'        => 'required',
        'slug'        => 'required|alpha_dash|min:5|max:255'
      ));

      $post = new Ourservice;

      $post->title = $request->title;
      $post->body  = Purifier::clean($request->body);
      $post->slug  = $request->slug;

      if($request->hasfile('upload_img')){
        $image = $request->file('upload_img');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('imgs/'. $filename);
        Image::make($image)->save($location);

        $post->image = $filename;
      }

      Session::flash('success', 'Successful creacted new service !');
      $post->save();


      return redirect()->back();


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
