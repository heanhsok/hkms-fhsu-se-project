<?php

namespace App\Http\Controllers;

use \App\UserWorkExp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserWorkExpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.work_experience.index')->with([
            'user_work_experiences' => Auth::user()->user_work_experience()->get()
        ]);
        // dd(Auth::user()->user_work_experience());
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
        // dd($request);
        
        UserWorkExp::create($request->all());
        return redirect()->route('work.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserWorkExp  $UserWorkExp
     * @return \Illuminate\Http\Response
     */
    public function show(UserWorkExp $UserWorkExp)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserWorkExp  $UserWorkExp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd(UserWorkExp::where('id',$id)->first()->specialty);
        return view('user.work_experience.edit')->with([
            'work_experience' => UserWorkExp::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserWorkExp  $UserWorkExp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        UserWorkExp::find($id)->fill($request->all())->save();
        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserWorkExp  $UserWorkExp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserWorkExp::find($id)->delete();
        return redirect()->route('work.index');
    }
}
