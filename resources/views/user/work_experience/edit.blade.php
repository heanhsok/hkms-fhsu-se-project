@extends('user.layouts.app')

@section('content')
<div class="container">

        <form action="{{route('work.update', ['id' => $work_experience->id] )}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{csrf_field()}}
            
            Specialty:
            <input type="text" name="specialty" class="form-control" value="{{$work_experience->specialty}}">
            Position:
            <input type="text" name="position" class="form-control" value="{{$work_experience->position}}">
            Workplace:
            <input type="text" name="workplace" class="form-control" value="{{$work_experience->workplace}}">
            Description:
            <textarea name="desc" id="desc" cols="5" rows="5" class="form-control">{{$work_experience->desc}}</textarea>
            
            Start Date:
            <input type="text" name="start_date" class="form-control" value="{{$work_experience->start_date}}">

            End Date:
            <input type="text" name="end_date" class="form-control" value="{{$work_experience->end_date}}">

            
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
            

        </form>
        

</div>
@endsection
