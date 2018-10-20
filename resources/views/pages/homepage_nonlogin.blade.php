@extends('layouts.app')
@section('content')
    @include('includes.main-nav')
    @include('includes.sidenav')
    @include('includes.login-reminder')
    <div class="container mainContent-wrapper">
        <div class="row">
            <!-- <div class="col-2"> -->
                @include('includes.left-sidebar')
            <!-- </div> -->
            <div class="col-8">
                @include('includes.opportunity-post')
                @include('includes.question-post')
                @include('includes.question-post')
                @include('includes.question-post')
                @include('includes.question-post')
            </div>
            <!-- <div class="col-2"> -->
                @include('includes.right-sidebar')
            <!-- </div> -->
        </div>
    </div>
@endsection
