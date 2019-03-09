@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <script>
        $( document ).ready(function() {
            clicked = true;
            $( ".card__like" ).click(function() {
                if(clicked){
                    $(this).css('color', '#9E8881');
                    clicked  = false;
                } else {
                    $(this).css('color', '#CA2934');
                    clicked  = true;
                }
            });
        });
    </script>
    <style >
        .card {
        /* display: block; */
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        transition: box-shadow .25s;
        }
        .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .op-card-cover{
        width: 100%;
        height:250px;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        display:block;
        overflow: hidden;
        }
        .op-card-cover img{
                width: 100%;
                height: 250px;
                object-fit:cover;
                transition: all .25s ease;
        }
        .op-card-body{
        padding:15px;
        text-align:left;
        // margin-bottom: 15px;
        }
        .op-title {
            width: 100%;
            font-family: 'Raleway', sans-serif;
            margin-top:0px;
            font-weight: 500;
            font-size: 1.4em;
        }
        .op-title a{
            color: #FA5316;
            text-decoration: none !important;
        }
        .op-card-footer {
        border-top: 1px solid #D4D4D4;
        }
        .op-card-footer a {
        color: #FA5316;
        text-decoration: none !important;
        padding:10px;
        font-weight:600;
        text-transform: uppercase
        }
        .op-card-body-top{
        width: 100%;
        height: 20px;
        // position: absolute;
        margin-bottom: 10px;
        }
        .card__like {
        font-size: 18px;
        cursor: pointer;
        color: #9E8881;
        }

        .card__clock {
        width: 18px;
        vertical-align: middle;
        fill: #FA5316;
        }
        .card__time {
        font-size: 14px;
        color: #FA5316;
        vertical-align: middle;
        margin-left: 5px;
        }
        .card__clock-info {
        float: right;
        }
        .card__by {
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        }
        .card__author {
        text-decoration: none;
        color: #AD7D52;
        }
        .card__category {
        text-decoration: none;
        color: #AD7D52;
        }
        .op-deadline{
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        }
        .op-category{
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        }
    </style>

    <div class="container forum-home">
        <h3>
                {{$current_page->title}}
        </h3>

                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-xs-12 col-md-6 col-lg-4">
                                <div class="card single-op-post">
                                    <a href="{{route('opportunity.show',['type' => $page->type])}}" class="op-card-cover" >
                                        <img src="{{asset('upload/picture/'.$post->picture)}}">
                                    </a>
                                    <div class="op-card-body">
                                            <div class="op-card-body-top">
                                                <i class="fas fa-heart card__like"></i>

                                            </div>
                                            <div class="op-card-body-after-top">
                                                <h4 class="op-title"><a href="{{route('opportunity.post.show',['opportunity'=>$page->type, 'post'=>$post->id])}}">{{$post->title}}</a></h4>
                                                <span class="card__by">By: <a href="#" class="card__author" title="author">{{$post->user->name}}</a></span> <br>
                                                <span class="op-deadline">Deadline: {{$post->end_date}}</span> <br>
                                                <span class="op-category">Category: <a href="#" class="card__category">{{$post->category}} </a></span>
                                            </div>
                                    </div>
                                    <div class="row op-card-footer">
                                        <a href="#" class="btn btn-link btn-block">Read More</a>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>

    </div>

@stop
