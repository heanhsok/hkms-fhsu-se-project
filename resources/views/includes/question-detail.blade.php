<script>
    $( document ).ready(function() {
        clicked = true;
        $( ".vote-arrow" ).click(function() {
            if(clicked){
                $(this).css('color', '#737373');
                clicked  = false;
            } else {
                $(this).css('color', '#CA2934');
                clicked  = true;
            }
        });
    });
</script>

<style >

.left-vote{
font-family: 'Raleway', sans-serif;
font-weight: 300;
width: 100%;
text-align: center;
}
.vote-num{
text-align: center;
font-size: 22px;
color: #000;
margin: -10px 5px;
}
.vote-arrow{
text-align: center;
font-size: 40px;
cursor: pointer;
color:#737373;
}
.q-detail{
align-items: center;
}
.right-post{
width: 100%;
background: #fff;
border-radius: 5px;
box-shadow: hsla(0, 0, 0, .2) 0 4px 2px -2px;
font-family: "adelle-sans", sans-serif;
font-weight: 100;
}

.question-tags{
margin-top: 10px;
}
.question-tags ul {
display: flex;
flex-direction: row;
flex-wrap: wrap;
list-style: none;
padding-left: 0;
}
.question-tags li + li {
margin-left: .5rem;
}
.question-tags a {
color: #ff4f00;
font-size: .75rem;
letter-spacing: 1px;
// padding: 0 .5rem;
// text-align: center;
text-decoration: none;
}
.question-title{
font-family: 'Raleway', sans-serif;
font-weight: 300;
font-size: 28px;
color: #002A3F;
}

</style>

    <div class="container-fluid">
            <div class="row q-detail ">
                    <div class="col-sm-2 col-md-2 col-lg-2 left-vote">
                        <i class="fas fa-caret-up vote-arrow"></i>
                        <p class="vote-num">3</p>
                        <i class="fas fa-caret-down vote-arrow"></i>
                    </div>
                    <div class=" col-sm-10 col-md-10 col-lg-10 right-post">
                        <div class="question-tags">
                            <ul>
                                @foreach($questionTags as $questionTag)
                                    <li><a href="{{ route('forum.showPostByTags',[$questionTag->tag->id]) }}">{{$questionTag->tag->description}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="ques-title">
                            <h4>{{ $question->header }}</h4>
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

                        </div>
                        <div class="container-fluid q-footer">
                                <div class="left-footer">
                                    <ul>
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
    </div>
