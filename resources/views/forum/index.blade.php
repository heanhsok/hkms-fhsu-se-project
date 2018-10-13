@extends('user.layouts.app')

@section('content')
<h3>Forum Home Page</h3>
@foreach($questions as $question)
<div class="question" data-questionid="{{ $question->id }}">
	<h3><a href="{{route('forum.showQuestion',[$question->id])}}">{{$question->question}}</a></h3>
	<p>by: {{$question->user->name}}</p>
        <div class="interaction">
        <a href="#" class="vote">
      	{{ Auth::user()->questionVotes()->where('question_id', $question->id)->first() ? Auth::user()->questionVotes()->where('question_id', $question->id)->first()->vote == 1 ? 'You upvote this post' : 'Upvote' : 'Upvote'}}  
        </a> |
        <a href="#" class="vote">{{ Auth::user()->questionVotes()->where('question_id', $question->id)->first() ? Auth::user()->questionVotes()->where('question_id', $question->id)->first()->vote == 0 ? 'You downvote this post' : 'Downvote' : 'Downvote'}}</a>
        @if(Auth::user() == $question->user)
            |
            <a href="#" class="edit">Edit</a> |
            <a href="{{ route('forum.delete', ['question_id' => $question->id]) }}">Delete</a>
        @endif
    	</div>
</div>
@endforeach

<script>
        var token = '{{ Session::token() }}';
        var urlVote = '{{ route('forum.questionVote') }}';
</script>

@endsection