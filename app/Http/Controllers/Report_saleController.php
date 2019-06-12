<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use DB;

class Report_saleController extends Controller
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

      $getdata = post::all();
      return view('manage.report.report_sale',compact(['getdata']));
      
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('manage.posts.create');
  }


 public function getdata()
  {
      
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // $this->validateWith([
    //     'display_name' => 'required|max:255',
    //     'name' => 'required|max:100|alpha_dash|unique:roles',
    //     'description' => 'sometimes|max:255'
    //   ]);

     

      // if ($request->permissions) {
      //   $role->syncPermissions(explode(',', $request->permissions));
      // }

      Session::flash('success', 'Successfully created the new post in the database.');
      return redirect()->route('posts.index');
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
