<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserEducation;
use App\UserWorkExp;
use App\UserVolunteerExp;
use App\UserProfile;
use Redirect;
use Auth;
use DataTables;
use Hash;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.account.index');
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

        $user = User::where('id',$id)->first();

        $user_profile = $user->user_profile()->first();
        $user_work_experiences = $user->user_work_experience()->get();
        $user_educations = $user->user_education()->get();
        $user_volunteer_experiences = $user->user_volunteer_experience()->get();

        return view('admin.account.show')->with([
            'user' => $user,
            'user_profile' => $user_profile,
            'user_work_experiences' => $user_work_experiences,
            'user_educations' => $user_educations,
            'user_volunteer_experiences' => $user_volunteer_experiences
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        //
        return view('admin.account.edit')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first()
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

    public function getAccounts() {

        // return User::with('user_profile','roles')->get();

        return datatables()->of(User::with('user_profile','roles')
            ->get()->except([1,2,3]))
            ->addColumn('action', function ($users) {
                return '<a href="/admin/account/'.$users->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>
                   <a href="'. route('admin.account.destroy', $users->id) .'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-stop"></i> Disable</a>   ';
            })
            ->addColumn('role', function($user){

                if($user->roles[0]->id == 1) {
                    return '<span class="label label-success">'.$user->roles[0]->name.'</span>   ';
                }
                else {
                    return '<span class="label label-warning">'.$user->roles[0]->name.'</span>   ';
                }

            })->rawColumns(['role', 'action'])
            ->make(true)
            ;

            //how to use database
            //https://laravelcode.com/post/laravel-55-yajra-datatable-example
            
            //add columns with buttons inside
            // https://stackoverflow.com/questions/46522834/add-delete-button-in-yajra-datatables-in-laravel-5-4
    }

    public function setting() {
        return view('admin.setting');
    }

    public function education($id) {
        $user = User::where('id', $id)->first();
        return view('admin.account.education')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first(),
            'user_educations' => $user->user_education()->get()
        ]);
    }

    public function education_edit($user_id, $edu_id) {
        $user = User::where('id', $user_id)->first();

        return view('admin.account.education_edit')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first(),
            'user_education' => UserEducation::where('id',$edu_id)->first()
        ]);
    }


    public function work($id) {
        $user = User::where('id', $id)->first();
        return view('admin.account.work')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first(),
            'user_work_experiences' => $user->user_work_experience()->get()
        ]);
    }

    public function work_edit($user_id, $work_id) {
        $user = User::where('id', $user_id)->first();

        return view('admin.account.work_edit')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first(),
            'work_experience' => UserWorkExp::where('id',$work_id)->first()
        ]);
    }

    public function volunteer($id) {
        $user = User::where('id', $id)->first();
        return view('admin.account.volunteer')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first(),
            'user_volunteer_experiences' => $user->user_volunteer_experience()->get()
        ]);
    }

    public function volunteer_edit($user_id, $vol_id) {
        $user = User::where('id', $user_id)->first();

        return view('admin.account.volunteer_edit')->with([
            'user' => $user,
            'user_profile' => $user->user_profile()->first(),
            'user_volunteer_exp' => UserVolunteerExp::where('id',$vol_id)->first()
        ]);
    }

    public function changepassword(Request $request) {
        // dd(Auth::user());
        // dd(Hash::make($request->password));
        $user = Auth::user(); 
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect('/login');
    }


}
