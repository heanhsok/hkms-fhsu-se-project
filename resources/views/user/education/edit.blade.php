@extends('user.layouts.app')

@section('content')
<div class="container">

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

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
            

        </form>
        

</div>
@endsection
