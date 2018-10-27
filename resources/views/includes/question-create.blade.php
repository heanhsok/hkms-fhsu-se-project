    <div class="container-fluid">
            <div class="col-sm-12 q-create">
                <div class="profile-post">
                    <img alt="profile picture" src="https://lumiere-a.akamaihd.net/v1/images/character_princess_cinderella_855a0a75.jpeg">
                    <p class="profileName">Sokchamroeun Riem</h3>
                </div>
                <form action="{{ route('forum.storeQuestion') }}" method="post">
                    <textarea name="header" rows="1" placeholder="What's on your mind?"></textarea>
                    <textarea name="description" rows="3" required></textarea>
                    <textarea class="post-topics" placeholder="Choose Topics"></textarea>
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
