<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostIT;

class Post2Controller extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('role:superadministrator|administrator|editor|author|contributor');
  // }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $getdata = postIT::all();
      return view('manage.post2.index',compact(['getdata']));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('manage.post2.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $post = new PostIT();
      $post->Content = $request->Content;
      $post->Creator = $request->Creator;
      $post->save();

      return redirect()->route('post2.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

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

  public function apiCheckUnique(Request $request)
  {
    return json_encode(!Post::where('slug', '=', $request->slug)->exists());
  }
}
