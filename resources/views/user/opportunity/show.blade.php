@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
        <div class="row">
                @include('includes.left-sidebar-op')
            <div class="col-10">

              
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
                    <br>
                

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