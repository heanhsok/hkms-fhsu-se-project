<div class="container-fluid">
     <div class="col-sm-12 q-create" style="margin-top: 40px;">
     	<div class="profile-post">
            @if(Auth::user() != '')
            <img alt="profile picture" src="{{ asset('upload/picture/'.'default.png')}}">
            <p class="profileName">{{ Auth::user()->name }}</p>
            @else
            <img alt="profile picture" src="{{ asset('upload/picture/'.'default.png')}}>
            <p class="profileName">Guest</p>
            @endif
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
