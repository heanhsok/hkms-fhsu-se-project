@extends('user.layouts.app')
@section('content')
    @include('includes.main-nav')

<style>
.op-top-info{
width: 100%;
display: block;
padding-top: 10px;
margin: auto;

}
.op-report{
font-size: 15px;
float: right;
margin-top: 15px;
margin-right: 10px;
cursor: pointer;
}
.op-account{
margin-top: 15px;
margin-left: 10px;
float: left;
}

.op-account-img{
border-radius: 50%;
display: inline-block;
height: 40px;
position: relative;
width: 40px;
margin-right: 5px;
margin-bottom: 15px;
}
.op-acc-brief .op-authorName{
font-size: 16px;
font-weight:600;
color: #F66C39;
}
.op-acc-brief .op-aboutAuthor{
font-size: 10px;
font-style: italic;
font-weight: lighter;
margin-top: -20px;
}
.op-acc-brief .op-totalActivities{
font-size:10px;
font-style: italic;
font-weight: lighter;
margin-top: -20px;
}
.card-detail {
display: block;
margin-bottom: 20px;
line-height: 1.42857143;
background-color: #fff;
}
.op-card-cover-detail{
width: 100%;
height:80vh;
border-top-left-radius:2px;
border-top-right-radius:2px;
display:block;
overflow: hidden;
img{
    width: 100%;
    height: 80vh;
    object-fit:cover;
}
}
.op-card-body-detail{
padding:15px;
}
.op-title-detail {
font-family: 'Raleway', sans-serif;
margin-top:10px;
font-weight: 400;
font-size: 2.5em;
text-align: center;
}
.op-deadline{
font-size: 14px;
font-family: 'Raleway', sans-serif;
font-weight: 500;
}
.op-category{
font-size: 14px;
font-family: 'Raleway', sans-serif;
font-weight: 500;
}

.op-summary-info{
margin-top: 20px;
justify-content: center;
font-family: 'Raleway', sans-serif;
font-weight: 500;
}
.op-summary-text{
font-size: 18px;
}
.op-summary-stats{
font-size: 17px;
color: #81778F;
a{
    text-decoration: none;
}
a:hover{
    color: #FA5316;
}
}
.op-deadline{
margin-right: 80px;
}
.op-heading-title{
font-size: 18px;
font-family: 'Raleway', sans-serif;
font-weight: 300;
color: #FA5316;
padding-bottom: 5px;
}
.op-sm-des{
font-size: 17px;
font-family: 'Raleway', sans-serif;
font-weight: 300;
margin-left: 10px;
}
.op-card-body-after-top{
margin-left: 10px;
}
.op-saved{
margin-left: 40%;
justify-content: center;
text-align: center;
width: 100px;
height: 35px;
background-color: #FBC1D5;

}
.op-card__like {
text-align: center;
margin-top: 7px;
margin-bottom:5px;
font-size: 18px;
cursor: pointer;
color: #000;
}

</style>

    <div class="container">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="row op-top-info">
                <div class="row op-account">
                    <div class="op-acc-brief">
                        <p class="op-authorName">By: {{$post->user->name}}</h3>
                    </div>
                </div>
                <div class="op-report">
                    <i class="fas fa-flag"> Report</i>
                    @include('includes.report')
                </div>

                <script>
                $(document).ready(function($){
                    //open popup
                    $('.op-report').on('click', function(event){
                        event.preventDefault();
                        $('.cd-popup').addClass('is-visible');
                    });

                    //close popup
                    $('.cd-popup').on('click', function(event){
                        if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                            event.preventDefault();
                            $(this).removeClass('is-visible');
                            event.stopPropagation();
                        }
                    });
                    //close popup when clicking the esc keyboard button
                    $(document).keyup(function(event){
                        if(event.which=='27'){
                            $('.cd-popup').removeClass('is-visible');
                        }
                    });
                });
                </script>

            </div>


                <div class="card-detail">
                        <img class="op-card-cover-detail" src="{{asset('upload/picture/'.$post->picture)}}" alt="img">
                    <div class="op-card-body-detail">
                            <div class="op-card-body-top-detail">
                                <h2 class="op-title-detail">{{$post->title }}</h4>
                                <div class="row op-summary-info">
                                    <div class="op-deadline">
                                        <p class="op-summary-text">Deadline:</p>
                                        <p class="op-summary-stats">{{$post->end_date}}</p>
                                    </div>
                                    <div class="op-category">
                                        <p class="op-summary-text">Category:</p>
                                        <p class="op-summary-stats"><a href="#"> {{$post->category}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="op-card-body-after-top">
                                <div class="op-eligibility">
                                    <h6 class="op-heading-title">Eligibility</h6>
                                    <p class="op-sm-des">{{$post->requirement}}</p>
                                </div>
                                <div class="op-benefit">
                                    <h6 class="op-heading-title">Location</h6>
                                    <p class="op-sm-des">{{$post->location}}</p>
                                </div>
                                <div class="op-description">
                                    <h6 class="op-heading-title">Description</h6>
                                    <p class="op-sm-des">{{$post->description}}</p>
                                </div>
                                <div class="op-apply">
                                    <h6 class="op-heading-title">Contact</h6>
                                    <p class="op-sm-des">{{$post->contact}}</p>
                                </div>
                            </div>

                            <div class="op-saved">
                                <i class="fas fa-heart op-card__like"> Save</i>
                            </div>

                            <script>
                                $( document ).ready(function() {
                                    clicked = true;
                                    $( ".op-card__like" ).click(function() {
                                        if(clicked){
                                            $(this).css('color', '#000');
                                            clicked  = false;
                                        } else {
                                            $(this).css('color', '#CA2934');
                                            clicked  = true;
                                        }
                                    });
                                });
                            </script>

                    </div>
                </div>
        </div>
    </div>
@stop
