<div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('upload/picture/'.$user_profile->profile_picture)}}" alt="User profile picture">

          <h3 class="profile-username text-center"><a href="{{route('admin.account.show', $user->id)}}"> {{$user_profile->first_name}} {{$user_profile->last_name}} </a></h3>

            {{-- <p class="text-muted text-center">Software Engineer</p> --}}

            <ul class="list-group list-group-unbordered">

              <li class="list-group-item">
                <b>Role:</b> <a class="pull-right">

                  @if($user->roles->first()->id == 1)
                    <span class="label label-primary">{{$user->roles->first()->name}}</span>
                  @else
                    <span class="label label-warning">{{$user->roles->first()->name}}</span>
                  @endif

                </a>
              </li>

              <li class="list-group-item">
                <b>Gender</b> <a class="pull-right">{{$user_profile->gender}}</a>
              </li>

              <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">132</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="pull-right">343</a>
              </li>
              <li class="list-group-item">
                <b>Questions</b> <a class="pull-right">257</a>
              </li>
              <li class="list-group-item">
                <b>Answers</b> <a class="pull-right">87</a>
              </li>
            </ul>

            <a href="#" class="btn btn-danger btn-block"><b>Points: 350</b></a>
          </div>
          <a href="{{route('admin.account.edit',$user->id)}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        
        <!-- /.box -->
      </div>