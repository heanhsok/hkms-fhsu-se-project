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