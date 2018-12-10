<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
        $user_profile = $user->user_profile()->first();
        $user_work_experiences = $user->user_work_experience()->get();
        $user_educations = $user->user_education()->get();
        $user_volunteer_experiences = $user->user_volunteer_experience()->get();

        return view('user.profile.index')->with([
            'user' => $user,
            'user_profile' => $user_profile,
            'user_work_experiences' => $user_work_experiences,
            'user_educations' => $user_educations,
            'user_volunteer_experiences' => $user_volunteer_experiences
        ] );

        
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
        return view('user.profile.edit')->with([
            'user' => Auth::user(),
            'user_profile' => Auth::user()->user_profile()->first()
        ] );
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
        // dd($request->first_name);
        $user_profile = \App\UserProfile::where('user_id',$id)->first();

        
        if ($request->hasFile('profile_picture')) {
            $profile_picture = $request->profile_picture;
            $profile_picture_name = time().$profile_picture->getClientOriginalName();
            $profile_picture->move('upload/picture/', $profile_picture_name);

            $user_profile->profile_picture = $profile_picture_name;
            $user_profile->save();
        }

        $user_profile->first_name = $request->first_name;
        $user_profile->last_name = $request->last_name;
        $user_profile->gender = $request->gender;
        $user_profile->biography = $request->biography;
        $user_profile->phone_number = $request->phone_number;
        $user_profile->street_number = $request->street_number;
        $user_profile->street_name = $request->street_name;
        $user_profile->commune = $request->commune;
        $user_profile->district = $request->district;
        $user_profile->city = $request->city;
        $user_profile->country = $request->country;

        $user_profile->save();

        // dd(Route::currentRouteName());

        $prev_url = url()->previous();
        $is_admin = (strpos($prev_url, 'admin') !== false);

        if ($is_admin) {
            return redirect()->route('admin.account.show', $id);
        }

        return redirect()->route('profile.index');

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
