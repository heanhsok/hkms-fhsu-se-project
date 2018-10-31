    <div class="container-fluid">
            <div class="col-sm-12 q-post">
                    <div class="q-title">
                        <h4><a href="{{route('forum.showQuestion',[$question->id])}}">{{ $question->header }}</a></h4>
                    </div>
                    <div class="row q-account">
                        <img class="q-account-img" src="https://lumiere-a.akamaihd.net/v1/images/character_princess_cinderella_855a0a75.jpeg" alt="">
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
                                @foreach($questionTags as $questionTag)
                                    <li><a href="{{ route('forum.showPostByTags',[$questionTag->tag->id]) }}">{{$questionTag->tag->description}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="container-fluid q-footer">
                            <div class="left-footer">
                                <ul>
                                    <li ><i class="fas fa-arrow-up"></i>{{ count($questionUpvotes) }} upvotes</li>
                                    <li ><i class="fas fa-comment"></i>{{ count($questionDownvotes) }} comments</li>
                                    <li ><i class="fas fa-eye"></i> 150 views</li>
                                </ul>
                            </div>
                            <div class="right-footer">
                                <ul>
                                    <li >{{ $time }}</li>
                                    <li ><a href="#">Report</a></li>
                                </ul>
                            </div>
                    </div>
            </div>
    </div>


   