<script>
$(document).ready(function($){
	//open popup
	$('.an-report').on('click', function(event){
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

<style>
.answer-detail{
display: flex;
flex-direction: row;
align-items: flex-start;
padding: 10px 10px 0 10px;
background-color: #fff;
}
.answer-detail img{
width: 40px;
height: 40px;
margin-right: 20px;
}
.num-coms{
padding: 15px 15px 0 0;
}
.an-report{
float: right;
cursor: pointer;
}
</style>

<div class="container-fluid">
	<div class="col-sm-12 answer-list">
		<div class="num-coms">
			<h5>Comments</h5>
		</div>
        @foreach($answers as $answer)

		<div class="answer-detail " style="margin-bottom:10px; text-align:center;">
			<img class="acc-com-proimg" src="{{ asset('upload/picture/'.'default.png')}}" alt="">
			<p>{{$answer->answer}}</p>
		</div>
        @endforeach
		<div class="an-report">
			<i class="fas fa-flag"> Report</i>
			@include('includes.report')
		</div>
	</div>
</div>
