@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
        <div class="row">
            @include('includes.left-sidebar')
            <div class="col-7">
                @include('includes.question-create')
                @include('includes.question-post')
            </div>
            @include('includes.right-sidebar')
        </div>
    </div>
@stop
