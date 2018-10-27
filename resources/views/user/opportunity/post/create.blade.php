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
                    
                    <img src="{{asset('upload/picture/default.png')}}" alt="" width="200px">
                    <br>
                    <br>

                    <form action="{{route('opportunity.post.store',['type'=>'event'])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            
                            
                            <input type="text" name='user_id' hidden value="{{Auth::user()->id}}">
                            <input type="file" name="picture_file" class="form-control">
                            
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="">
                            
                            <label for="">Select Type of Opportunity:</label>
                            <select name="opportunity_page_id" id="opportunity_page_id" class="form-control">
                                @foreach($pages as $page)
                                    <option value="{{$page->id}}"> {{$page->title}}</option>
                                @endforeach
                            </select>

                            
                            <label for="">institution</label>
                            <input type="text" name="institution" class="form-control" value="">
                            
                            <label for="">category</label>
                            <input type="text" name="category" class="form-control" value="">

                            <label for="">Description</label>
                            <textarea name="description" id="desc" cols="5" rows="5" class="form-control"></textarea>
            
                            <label for="">Requirement</label>
                            <textarea name="requirement" id="desc" cols="5" rows="5" class="form-control"></textarea>
            
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control" value="">
                            
                            <label for="">location</label>
                            <input type="text" name="location" class="form-control" value="">
                            
                            <label for="">Open Date:</label>
                            <input type="text" name="start_date" class="form-control" value="">
                            
                            <label for="">Close Date:</label>
                            <input type="text" name="end_date" class="form-control" value="">
                     
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Create</button>
                                </div>
                            </div>
                    </form>

            </div>
        </div>
    </div>

@stop
