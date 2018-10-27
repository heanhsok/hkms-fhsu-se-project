<?php

namespace App\Http\Controllers;

use \App\UserEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEducationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.education.index')->with([
            'user_educations' => Auth::user()->user_education()->get()
        ]);
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
        UserEducation::create($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserEducation  $UserEducation
     * @return \Illuminate\Http\Response
     */
    public function show(UserEducation $UserEducation)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserEducation  $UserEducation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('user.education.edit')->with([
            'user_education' => UserEducation::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserEducation  $UserEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request);
        UserEducation::find($id)->fill($request->all())->save();
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserEducation  $UserEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        UserEducation::find($id)->delete();
        return redirect()->route('education.index');
    }
}
