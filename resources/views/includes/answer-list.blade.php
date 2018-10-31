<div class="container-fluid">
@foreach($answers as $answer)
<p><b>{{$answer->user->name}}:</b> {{$answer->answer}}<br>
    Upvote | Downvote
</p>
@endforeach
</div>