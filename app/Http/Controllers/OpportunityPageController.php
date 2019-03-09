<?php

namespace App\Http\Controllers;

use App\OpportunityPage;
use Illuminate\Http\Request;

class OpportunityPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('user.opportunity.index');
        return view('user.opportunity.index')->with([
            'pages' => OpportunityPage::all()
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpportunityPage  $opportunityPage
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        $page = OpportunityPage::where('type', $type)->first();
        $posts = $page->posts()->get();

        return view('user.opportunity.show')->with([
            'pages' =>  OpportunityPage::all(),
            'current_page' => $page,
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpportunityPage  $opportunityPage
     * @return \Illuminate\Http\Response
     */
    public function edit(OpportunityPage $opportunityPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpportunityPage  $opportunityPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpportunityPage $opportunityPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpportunityPage  $opportunityPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpportunityPage $opportunityPage)
    {
        //
    }
}
