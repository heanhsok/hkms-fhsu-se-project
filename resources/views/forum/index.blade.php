@extends('user.layouts.app')

@section('content')
<h3>Forum Home Page</h3>
@foreach($questions as $question)
<div class="question" data-questionid="{{ $question->id }}">
	<h3><a href="{{route('forum.showQuestion',[$question->id])}}">{{$question->question}}</a></h3>
	<p>by: {{$question->user->name}}</p>
        <div class="interaction">
        <a href="#" class="vote">Upvote</a> |
        <a href="#" class="vote">Downvote</a> |
        <a href="javascript:void(0);" class="edit" value="{{$question->id}}">Edit</a> |
        <a href="{{ route('forum.delete', [$question->id]) }}">Delete</a>        
    	</div>
</div>
@endforeach

<div class="modal" tabindex="-1" role="dialog" id="modal-edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="modal-body">
            <label for="question">Edit Question</label>
            <textarea class="form-control" name="question" id="question" rows="5"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  var token = '{{ Session::token() }}';
  var urlVote = '{{ route('forum.questionVote') }}';
</script>
@endsection