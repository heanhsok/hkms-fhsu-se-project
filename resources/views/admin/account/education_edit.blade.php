@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Profile: {{$user->name}}
    </h1>

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('upload/picture/'.$user_profile->profile_picture)}}" alt="User profile picture">

            <h3 class="profile-username text-center">{{$user_profile->first_name}} {{$user_profile->last_name}}</h3>

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
      <!-- /.col -->
      <div class="col-md-9">
        
        <div class="box box-primary">
          <div class="box-header with-border">
            {{-- <h3 class="box-title">Edit Profile</h3> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            
            {{-- edit form --}}

            <form action="{{route('education.update', ['id' => $user_education->id] )}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    {{csrf_field()}}
                    
                    School:
                    <input type="text" name="school" class="form-control" value="{{$user_education->school}}">
                    Degree:
                    <input type="text" name="degree" class="form-control" value="{{$user_education->degree}}">
                    Major:
                    <input type="text" name="major" class="form-control" value="{{$user_education->major}}">
                    Description:
                    <textarea name="desc" id="desc" cols="5" rows="5" class="form-control">{{$user_education->desc}}</textarea>
                    
                    Start Date:
                    <input type="text" name="start_date" class="form-control" value="{{$user_education->start_date}}">
        
                    End Date:
                    <input type="text" name="end_date" class="form-control" value="{{$user_education->end_date}}">
                
                    <br>
                    <div class="form-group pull-right">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </div>
                    
        
                </form>

            {{-- / edit form --}}


          </div>
          <!-- /.box-body -->
        </div>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
@endsection