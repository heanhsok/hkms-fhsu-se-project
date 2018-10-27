<?php

namespace App\Http\Controllers;

use App\UserVolunteerExp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserVolunteerExpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.volunteer.index')->with([
            'user_volunteer_exps' => Auth::user()->user_volunteer_experience()->get()
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
        UserVolunteerExp::create($request->all());
        return redirect()->route('volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserVolunteerExp  $UserVolunteerExp
     * @return \Illuminate\Http\Response
     */
    public function show(UserVolunteerExp $UserVolunteerExp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserVolunteerExp  $UserVolunteerExp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.volunteer.edit')->with([
            'user_volunteer_exp' => UserVolunteerExp::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserVolunteerExp  $UserVolunteerExp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        UserVolunteerExp::find($id)->fill($request->all())->save();
        return redirect()->route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserVolunteerExp  $UserVolunteerExp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        UserVolunteerExp::find($id)->delete();
        return redirect()->route('volunteer.index');
    }
}
