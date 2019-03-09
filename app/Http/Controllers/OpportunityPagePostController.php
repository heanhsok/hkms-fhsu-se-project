<?php

namespace App\Http\Controllers;

use App\OpportunityPage;
use App\OpportunityPagePost;
use Illuminate\Http\Request;

class OpportunityPagePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(OpportunityPage::find(1)->first()->posts()->get());

        return redirect()->route('opportunity.post.show',['opportunity'=>'event', 'post'=>1]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        //
        // dd(OpportunityPage::all());
        return view('user.opportunity.post.create')->with([
            'pages' => OpportunityPage::all()
        ]);
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

        if ($request->hasFile('picture_file')) {
            $picture = $request->picture_file;
            $picture_name = time().$picture->getClientOriginalName();
            $picture->move('upload/picture/', $picture_name);

            $request->request->add(['picture'=> $picture_name]);
        }

        // dd($request);

        $post = OpportunityPagePost::create($request->all());

        return redirect()->route('opportunity.post.show',[
            'opportunity'=>$post->page()->first()->type, 
            'post'=>$post->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpportunityPagePost  $opportunityPagePost
     * @return \Illuminate\Http\Response
     */
    public function show($opportunity, $post)
    {
        //
        // dd($post);
        return view('user.opportunity.post.show')->with([
            'post' => OpportunityPagePost::where('id',$post)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpportunityPagePost  $opportunityPagePost
     * @return \Illuminate\Http\Response
     */
    public function edit($opportunity, $post)
    {
        //
        return view('user.opportunity.post.edit')->with([
            'pages' => OpportunityPage::all(),
            'post' => OpportunityPagePost::where('id',$post)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpportunityPagePost  $opportunityPagePost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $page, $id)
    {
        if ($request->hasFile('picture_file')) {
            $picture = $request->picture_file;
            $picture_name = time().$picture->getClientOriginalName();
            $picture->move('upload/picture/', $picture_name);

            $request->request->add(['picture'=> $picture_name]);
        }

        // dd(OpportunityPagePost::find($id));

         OpportunityPagePost::find($id)->fill($request->all())->save();

         $post =OpportunityPagePost::find($id);

        return redirect()->route('opportunity.post.show',[
            'opportunity'=>$post->page()->first()->type, 
            'post'=>$post->id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpportunityPagePost  $opportunityPagePost
     * @return \Illuminate\Http\Response
     */
    public function destroy($page, $id)
    {
        //
        OpportunityPagePost::find($id)->delete();
        return redirect()->route('opportunity.index');
    }
}
