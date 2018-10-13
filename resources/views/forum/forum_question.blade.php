@extends('user.layouts.app')

@section('content')
<h3>{{$question->question}}</h3>
<p>by: {{$question->user->name}}</p>

<section class="row new-post" style="padding-bottom: 50px">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>Answer</h3></header>
        <form action="{{ route('forum.storeAnswer',[$question->id]) }}" method="post">
            <div class="form-group">
                <textarea class="form-control" name="answer" id="answer" rows="5" placeholder="Write your answer here."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
</section>

@foreach($answers as $answer)
<p><b>{{$answer->user->name}}:</b> {{$answer->answer}}<br>
    Upvote | Downvote
</p>
@endforeach

@endsection