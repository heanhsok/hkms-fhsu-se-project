@extends('user.layouts.app')

@section('content')

<section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>Question</h3></header>
        <form action="{{ route('forum.storeQuestion') }}" method="post">
            <div class="form-group">
                <textarea class="form-control" name="question" id="question" rows="5" placeholder="Write your question here."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
</section>

@endsection