@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
        <div class="row">
                @include('includes.left-sidebar-op')
            <div class="col-10">
                @role(('premiem'))
                <h3><a href="{{route('opportunity.post.create',['type'=>'event'])}}">Create New Opportunity</a></h3>
                @endrole
                <h1>All Type of Opportunities:</h1>
                @foreach($pages as $page)
                    <h3>
                        <a href="{{route('opportunity.show',['type' => $page->type])}}">{{$page->title}}</a>
                    </h3>
                    @foreach ($page->posts()->take(1)->get() as $post)
                    <img src="{{asset('upload/picture/'.$post->picture)}}" alt="" width="300px">
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
                    @endforeach
                    <br>
                @endforeach

                <!-- Career -->
                <div class="container opportunity-section">
                    <h4 class="op-heading">Career</h4>
                    <div class="scrolling-wrapper-flexbox">
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                    </div>
                </div>
                <!-- End Section -->

                <!-- Internship -->
                <div class="container opportunity-section">
                    <h4 class="op-heading">Internship</h4>
                    <div class="scrolling-wrapper-flexbox">
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                    </div>
                </div>
                <!-- End Section -->

                <!-- Volunteer -->
                <div class="container opportunity-section">
                    <h4 class="op-heading">Volunteer</h4>
                    <div class="scrolling-wrapper-flexbox">
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                    </div>
                </div>
                <!-- End Section -->

                <!-- Fellowship -->
                <div class="container opportunity-section">
                    <h4 class="op-heading">Fellowship</h4>
                    <div class="scrolling-wrapper-flexbox">
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                            @include('includes.opportunity-post')
                    </div>
                </div>
                <!-- End Section -->
            </div>
        </div>
    </div>

@stop
