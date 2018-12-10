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

            <strong><i class="fa fa-book margin-r-5"></i>Work Experiences</strong>
            <br><br>
            @foreach ($user_work_experiences as $user_work_experience)
                <p class="text-muted">
                    
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
                  
                    <div class="col-md-1">
                        <form action="{{ route('work.destroy', $user_work_experience->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
                    </div>
                    

                    <a href="{{route('admin.work.edit',['user_id'=>$user->id, 'edu_id'=>$user_work_experience->id])}}" class="btn btn-xs btn-warning">Edit</a><br>
                  
                </p>
            @endforeach

            <hr>
            
            <h3>Add New</h3>
            {{-- start create eduction--}}
            
            <form action="{{route('work.store')}}" method="post">
                @csrf
                @method('POST')
                <input type="text" name='user_id' hidden value="{{$user->id}}">
    
                Specialty:
                <input type="text" name="specialty" class="form-control" value="">
                Position:
                <input type="text" name="position" class="form-control" value="">
                Workplace:
                <input type="text" name="workplace" class="form-control" value="">
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