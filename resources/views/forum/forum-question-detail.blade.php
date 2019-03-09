@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')
    <div class="container forum-home">
        <div class="row">
            @include('includes.left-sidebar')
            <div class="col-7">
                @include('includes.question-detail')
                @include('includes.answer-list')
                @include('includes.answer-create')
            </div>
            @include('includes.right-sidebar')
        </div>
    </div>
@stop
