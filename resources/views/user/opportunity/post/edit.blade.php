@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
        <div class="row">
                @include('includes.left-sidebar-op')
            <div class="col-10">


                    <h3>
                        Post in Opportunity Page:
                    </h3>

                    <img src="{{asset('upload/picture/'.$post->picture)}}" alt="" width="200px">
                    <br>
                    <br>

                    <form action="{{route('opportunity.post.update',['opportunity'=>$post->page()->first()->type, 'post'=>$post->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <input type="text" name='user_id' hidden value="{{Auth::user()->id}}">
                            <input type="file" name="picture_file" class="form-control">

                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}">

                            <label for="">Select Type of Opportunity: {{$post->opportunity_page_id}}</label>
                            <select name="opportunity_page_id" id="opportunity_page_id" class="form-control">
                                @foreach($pages as $page)
                                    @if($page->id == $post->id)
                                        <option value="{{$page->id}}" selected> {{$page->title}}</option>
                                    @else
                                    <option value="{{$page->id}}" selected> {{$page->title}}</option>
                                    @endif

                                @endforeach
                            </select>


                            <label for="">institution</label>
                            <input type="text" name="institution" class="form-control" value="{{$post->institution}}">

                            <label for="">category</label>
                            <input type="text" name="category" class="form-control" value="{{$post->category}}">

                            <label for="">Description</label>
                            <textarea name="description" id="desc" cols="5" rows="5" class="form-control">{{$post->description}}</textarea>

                            <label for="">Requirement</label>
                            <textarea name="requirement" id="desc" cols="5" rows="5" class="form-control">{{$post->requirement}}</textarea>

                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control" value="{{$post->contact}}">

                            <label for="">location</label>
                            <input type="text" name="location" class="form-control" value="{{$post->location}}">

                            <label for="">Open Date:</label>
                            <input type="text" name="start_date" class="form-control" value="{{$post->start_date}}">

                            <label for="">Close Date:</label>
                            <input type="text" name="end_date" class="form-control" value="{{$post->end_date}}">

                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                    </form>

            </div>
        </div>
    </div>

@stop
