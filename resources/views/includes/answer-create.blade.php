<div class="container-fluid">
    <header><h4>Submit Your Answer</h4></header>
     <div class="col-sm-12 q-create">
     	<div class="profile-post">
            <img alt="profile picture" src="https://lumiere-a.akamaihd.net/v1/images/character_princess_cinderella_855a0a75.jpeg">
            <p class="profileName">{{ Auth::user()->name }}</p>
        </div>
        <form action="{{ route('forum.storeAnswer',[$question->id]) }}" method="post">
            <div class="form-group">
                <textarea name="answer" id="answer" rows="3" placeholder="Write your answer."></textarea>
            </div>
            <div class="container-fluid q-create-footer">
            <div class="left-create-footer">
            </div>
            <div class="right-create-footer">
                <ul>
                   <li><button style="padding-top: 0px" type="submit" class="btn btn-link">Submit</button></li>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </ul>
            </div>
    		</div>
        </form>

    </div>

</div>
