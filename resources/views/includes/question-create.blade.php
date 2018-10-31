    <div class="container-fluid">
            <div class="col-sm-12 q-create">
                <div class="profile-post">
                    <img alt="profile picture" src="{{ asset('upload/picture/'.'default.png')}}">
                    <p class="profileName">{{ Auth::user() != '' ? Auth::user()->name : 'Guest' }}</p>
                </div>
                <form action="{{ route('forum.storeQuestion') }}" method="post">
                    <textarea name="header" rows="1" placeholder="What's on your mind?" required></textarea>
                    <textarea name="description" rows="3" placeholder="Tell me more..." required></textarea></br>
                    @foreach($tags as $index => $tag)
                    <input type="checkbox" name="tags[]" style="margin:0px;" value="{{ $tag->id }}">
                    {{$tag->description}}
                    @endforeach
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
