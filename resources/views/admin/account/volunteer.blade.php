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
        @include('admin.includes.profile_box')
      <div class="col-md-9">
        
        <div class="box box-primary">
          <div class="box-header with-border">
            {{-- <h3 class="box-title">Edit Profile</h3> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <strong><i class="fa fa-book margin-r-5"></i>Volunteer Experience</strong>
            <br><br>
            @foreach ($user_volunteer_experiences as $user_volunteer_experience)
                <p class="text-muted">
                    
                    <b>{{date('Y',strtotime($user_volunteer_experience->start_date))}} to {{date('Y',strtotime($user_volunteer_experience->end_date))}}:</b>
                    {{$user_volunteer_experience->role}}, {{$user_volunteer_experience->organization}}
                    
                    <ul>
                        <li><b>Role:</b> {{$user_volunteer_experience->role}}</li>
                        <li><b>Organization:</b> {{$user_volunteer_experience->organization}}</li>
                        <li><b>From:</b> {{$user_volunteer_experience->start_date}}</li>
                        <li><b>To:</b> {{$user_volunteer_experience->end_date}}</li>
                    </ul>
                  
                    <div class="col-md-1">
                        <form action="{{ route('volunteer.destroy', $user_volunteer_experience->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
                    </div>
                    

                    <a href="{{route('admin.volunteer.edit',['user_id'=>$user->id, 'vol_id'=>$user_volunteer_experience->id])}}" class="btn btn-xs btn-warning">Edit</a><br>
                  
                </p>
            @endforeach

            <hr>
            
            <h3>Add New</h3>
            {{-- start create eduction--}}
            
            <form action="{{route('volunteer.store')}}" method="post">
                @csrf
                @method('POST')
                <input type="text" name='user_id' hidden value="{{$user->id}}">
    
                Role:
                <input type="text" name="role" class="form-control" value="">
                Organization:
                <input type="text" name="organization" class="form-control" value="">
                Description:
                <textarea name="desc" id="desc" cols="5" rows="5" class="form-control"></textarea>
                
                Start Date:
                <input type="text" name="start_date" class="form-control" value="">
    
                End Date:
                <input type="text" name="end_date" class="form-control" value="">
                <hr>
                <div class="form-group pull-right">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Add New</button>
                    </div>
                </div>
    
            </form>

            {{-- end create education --}}


          </div>
          <!-- /.box-body -->
        </div>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
@endsection