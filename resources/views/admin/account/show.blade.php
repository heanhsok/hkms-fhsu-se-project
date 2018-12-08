@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
      User Profile
    </h1>

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" alt="User profile picture">

            <h3 class="profile-username text-center">John Doe</h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered">
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
            <h3 class="box-title">About Me</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Bio</strong>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            <hr>
            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
            <br>
            <p class="text-muted">
              <b>2013 to 2015:</b> M.S. in Computer Science, Fort Hays State University
            </p>

            <p class="text-muted">
                <b>2009 to 2013:</b> B.S. in Computer Science, Fort Hays State University
            </p>
            
            <hr>
            
            <strong><i class="fa fa-briefcase margin-r-5"></i> Work Experiences</strong>
            <br>
            <p class="text-muted"><b>Jan-2018 to Present:</b> Software Engineer, Microsoft Corporation</p>
            <p class="text-muted"><b>Jan-2015 to Nov-2017:</b> Android Developer, Google LLC</p>
            
            <hr>
            
            <strong><i class="fa fa-users margin-r-5"></i> Volunteer Experiences</strong>
            
            <br>
            <p class="text-muted">Teaching Assistant, Fort Hays State University</p>
            <p class="text-muted">Vice President, Student Government Association of FHSU</p>
            <p class="text-muted">Event Organizer, CoderDojo</p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

            <p class="text-muted">Hays, Kansas, USA</p>
            
          </div>
          <!-- /.box-body -->
        </div>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
@endsection