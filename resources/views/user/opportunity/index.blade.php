@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
                @role(('premiem'))
                <h3><a href="{{route('opportunity.post.create',['type'=>'event'])}}">Create New Opportunity</a></h3>
                @endrole
                <h1>All Type of Opportunities:</h1>
                @foreach($pages as $page)
                    <h3 class="op-heading">
                        <a href="{{route('opportunity.show',['type' => $page->type])}}">{{$page->title}}</a>
                    </h3>
                    <div class="scrolling-wrapper-flexbox">
                        @foreach ($page->posts()->take(5)->get() as $post)
                        <div class="card card--1">
                                <div class="card__info-hover">
                                    <div class="card__clock-info">
                                        <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                        </svg><span class="card__time">Recently</span>
                                    </div>

                                </div>
                                <div class="card__img" style="background-image: url('{{asset('upload/picture/'.$post->picture)}}');"></div>
                                <a href="#" class="card_link">
                                    <div class="card__img--hover" style="background-image: url('{{asset('upload/picture/'.$post->picture)}}');"></div>
                                </a>
                                <div class="card__info">
                                    <span class="card__category"> {{$post->category}} </span>
                                    <h4 class="card__title"><a href="{{route('opportunity.post.show',['opportunity'=>$page->type, 'post'=>$post->id])}}">{{$post->title}}</a></h4>
                                    <span class="card__by">by <a href="#" class="card__author" title="author">Sokchamroeun Riem</a></span>
                                </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="row cardss">
                        <img src="{{asset('upload/picture/'.$post->picture)}}" alt="" width="300px" class="opportunity-post-img-cover">
                        <ul>
                        <li>Title: <a href="{{route('opportunity.post.show',['opportunity'=>$page->type, 'post'=>$post->id])}}">{{$post->title}}</a></li>
                            <li>institution: {{$post->institution}}</li>
                            <li>category: {{$post->category}}</li>
                            {{-- <li>description: {{$post->description}}</li>
                            <li>requirement: {{$post->requirement}}</li>
                            <li>contact: {{$post->contact}}</li>
                            <li>location: {{$post->location}}</li>
                            <li>Open Date: {{$post->start_date}}</li>
                            <li>Close Date: {{$post->end_date}}</li> --}}
                        </ul>
                    </div> -->
                @endforeach
    </div>

@stop
