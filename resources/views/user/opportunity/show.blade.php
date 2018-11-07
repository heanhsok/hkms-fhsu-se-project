@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
        <h3>
                {{$current_page->title}}
        </h3>
                    @foreach ($posts as $post)
                        <img src="{{asset('upload/picture/'.$post->picture)}}" alt="" width="300px">
                        <ul>
                                {{-- {{route('opportunity.post.show',$post->id)}} --}}
                            <li>Title: <a href="{{route('opportunity.post.show',['opportunity'=>$current_page->type, 'post'=>$post->id])}}">{{$post->title}}</a></li>
                            <li>institution: {{$post->institution}}</li>
                            <li>category: {{$post->category}}</li>
                        </ul>
                    @endforeach
    </div>

@stop
