@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
                    <h3>
                        {{$post->title }}
                    </h3>

                    {{-- @role(('premiem')) --}}

                    {{-- role_id = 3 is admin --}}
                    @if (Auth::user()->id == $post->user_id or Auth::user()->id == 3) 
                    <h5><a href="{{route('opportunity.post.edit',['opportunity'=>$post->page()->first()->type, 'post'=>$post->id])}}">Edit</a></h5>

                    <form action="{{ route('opportunity.post.destroy', ['opportunity'=>$post->page()->first()->type, 'post'=>$post->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>

                    @endif

                    {{-- @endrole --}}

                    <a href=""></a>

                    <img src="{{asset('upload/picture/'.$post->picture)}}" alt="" width="300px">
                    <ul>
                        <li>Title: {{$post->title}}</a></li>
                        <li>Posted By: {{$post->user->name}}</li>
                        <li>institution: {{$post->institution}}</li>
                        <li>category: {{$post->category}}</li>
                        <li>description: {{$post->description}}</li>
                        <li>requirement: {{$post->requirement}}</li>
                        <li>contact: {{$post->contact}}</li>
                        <li>location: {{$post->location}}</li>
                        <li>Open Date: {{$post->start_date}}</li>
                        <li>Close Date: {{$post->end_date}}</li>
                    </ul>
    </div>

@stop
