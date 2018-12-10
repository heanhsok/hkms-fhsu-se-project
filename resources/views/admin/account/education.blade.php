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

            <strong><i class="fa fa-book margin-r-5"></i>Education</strong>
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
                  
                    <div class="col-md-1">
                        <form action="{{ route('education.destroy', $user_education->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
                    </div>
                    

                    <a href="{{route('admin.education.edit',['user_id'=>$user->id, 'edu_id'=>$user_education->id])}}" class="btn btn-xs btn-warning">Edit</a><br>
                  
                </p>
            @endforeach

            <hr>
            
            <h3>Add New</h3>
            {{-- start create eduction--}}
            <form action="{{route('education.store')}}" method="post">
                @csrf
                @method('POST')
                <input type="text" name='user_id' hidden value="{{$user->id}}">
    
                School:
                <div class="form-group">
                    <input type="text" name="school" class="form-control" value="">
                </div>
                Degree:
                <div class="form-group">
                    <input type="text" name="degree" class="form-control" value="">
                </div>
                Major:
                <div class="form-group">
                    <input type="text" name="major" class="form-control" value="">
                </div>
                Description:
                <div class="form-group">
                    <textarea name="desc" id="desc" cols="5" rows="5" class="form-control"></textarea>
                </div>
                
                Start Date:
                <div class="form-group">
                    <input type="text" name="start_date" class="form-control" value="">
                </div>
    
                End Date:
                <div class="form-group">
                    <input type="text" name="end_date" class="form-control" value="">
                </div>
    
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