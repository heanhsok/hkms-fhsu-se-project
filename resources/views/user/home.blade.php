@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')

    @guest
        @include('includes.login-reminder')
    @endguest
    <!-- Forum Section -->
    <div class="container opportunity-section">
        <h4 class="op-heading">New Questions</h4>
        <div class="row">
            <div class="col-6">
                    @include('includes.question-post')
            </div>
        </div>
        <h5 class="text-center load-more"> <a href="/forum">View All</a> </h5>
    </div>
@stop
