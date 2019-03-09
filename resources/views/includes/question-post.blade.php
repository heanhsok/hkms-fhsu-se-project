@foreach( $questionArr as $index => $question )
    <div class="container-fluid">
            <div class="col-sm-12 q-post">
                    <div class="q-title">
                        <h4><a href="{{route('forum.showQuestion',[$question->id])}}">{{ $question->header }}</a></h4>
                    </div>
                    <div class="row q-account">
                        <img class="q-account-img" src="{{ asset('upload/picture/'.'default.png')}}" alt="">
                        <div class="acc-brief">
                            <p class="authorName">{{ $question->user->name}}</h3>
                            <p class="aboutAuthor">Computer Science & IT Management</h5>
                            <p class="totalActivities">12 Qs & 123 Ans</p>
                        </div>
                    </div>
                    <div class="q-body">
                        <div class="q-summary">
                            <p>{{ $question->description }}</p>
                        </div>
                        <div class="q-tags">
                            <ul>
                                @foreach($questionTagArr[$index] as $questionTag)
                                    <li><a href="{{ route('forum.showPostByTags',[$questionTag->tag->id]) }}">{{$questionTag->tag->description}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="container-fluid q-footer">
                            <div class="left-footer">
                                <ul>
                                    <li ><i class="fas fa-arrow-up"></i>{{ count($questionUpvoteArr[$index]) }} upvotes</li>
                                    <li ><i class="fas fa-comment"></i>{{ count($questionDownvoteArr[$index]) }} comments</li>
                                    <li ><i class="fas fa-eye"></i> 150 views</li>
                                </ul>
                            </div>
                            <div class="right-footer">
                                <ul>
                                    <li >{{ $timeArr[$index] }}</li>
                                    <li ><a href="#">Report</a></li>
                                </ul>
                            </div>
                    </div>
            </div>
    </div>
@endforeach