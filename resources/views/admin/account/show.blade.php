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

      <!-- /.col -->
      <div class="col-md-9">
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">About Me</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Bio</strong>
            <br><br>
            <p>{{$user_profile->biography}}</p>
            <hr>
            <strong><i class="fa fa-book margin-r-5"></i><a href="{{route('admin.education.show',$user->id)}}">Education</a> </strong>
            <br><br>
            @foreach ($user_educations as $user_education)
              <p class="text-muted">
                  <b>{{date('Y',strtotime($user_education->start_date))}} to {{date('Y',strtotime($user_education->end_date))}}:</b>
                  {{$user_education->degree}} in {{$user_education->major}}, {{$user_education->school}}
                  <ul>
                    {{-- <li><b>GPA:</b> {{$user_education->grade}}</li> --}}
                    <li><b>Major:</b> {{$user_education->major}}</li>
                    <li><b>Degree:</b> {{$user_education->degree}}</li>
                    <li><b>school:</b> {{$user_education->school}}</li>
                    <li><b>From:</b> {{$user_education->start_date}}</li>
                    <li><b>To:</b> {{$user_education->end_date}}</li>
                  </ul>
              </p>
            @endforeach
            
            <hr>
            
            <strong><i class="fa fa-briefcase margin-r-5"></i> <a href="{{route('admin.work.show',$user->id)}}">Work Experiences</a></strong>
            <br><br>

            <p class="text-muted">
              @foreach ($user_work_experiences as $user_work_experience)
              <b>{{date('Y',strtotime($user_work_experience->start_date))}} to {{date('Y',strtotime($user_work_experience->end_date))}}:</b>
              {{$user_work_experience->position}}, {{$user_work_experience->workplace}}
                <ul>
                    <li><b>Specialty:</b> {{$user_work_experience->specialty}}</li>
                    <li><b>Position:</b> {{$user_work_experience->position}}</li>
                    <li><b>Workplace:</b> {{$user_work_experience->workplace}}</li>
                    {{-- <li><b>Description:</b> {{$user_work_experience->desc}}</li> --}}
                    <li><b>From:</b> {{$user_work_experience->start_date}}</li>
                    <li><b>To:</b> {{$user_work_experience->end_date}}</li>
                </ul>
              @endforeach
            </p>

            <hr>
            
            <strong><i class="fa fa-users margin-r-5"></i> <a href="{{route('admin.volunteer.show',$user->id)}}">Volunteer Experiences</a></strong>
            
            
            
            <br><br>

            <p class="text-muted">

                @foreach ($user_volunteer_experiences as $user_volunteer_experience)

                  <b>{{date('Y',strtotime($user_volunteer_experience->start_date))}} to {{date('Y',strtotime($user_volunteer_experience->end_date))}}:</b>
                  {{$user_volunteer_experience->role}}, {{$user_volunteer_experience->organization}}
                  
                  <ul>
                      <li><b>Role:</b> {{$user_volunteer_experience->role}}</li>
                      <li><b>Organization:</b> {{$user_volunteer_experience->organization}}</li>
                      <li><b>From:</b> {{$user_volunteer_experience->start_date}}</li>
                      <li><b>To:</b> {{$user_volunteer_experience->end_date}}</li>
                  </ul>

                @endforeach

            </p>

            <hr>

            <strong><i class="fa fa-phone margin-r-5"></i> Contact</strong>
            <br><br>
            <p class="text-muted"><b>Phone Number:</b>{{$user_profile->phone_number}}</p>
            <p class="text-muted"><b>Address: </b>{{$user_profile->street_number}}, 
              {{$user_profile->street_name}}, {{$user_profile->commune}}, 
              {{$user_profile->district}}, {{$user_profile->city}}, {{$user_profile->country}}</p>
            
          </div>
          <!-- /.box-body -->
        </div>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
@endsection