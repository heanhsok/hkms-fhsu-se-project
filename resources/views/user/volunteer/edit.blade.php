@extends('user.layouts.app')

@section('content')
<div class="container">

        <form action="{{route('volunteer.update', ['id' => $user_volunteer_exp->id] )}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{csrf_field()}}
            
            Role:
            <input type="text" name="role" class="form-control" value="{{$user_volunteer_exp->role}}">
            Organization:
            <input type="text" name="organization" class="form-control" value="{{$user_volunteer_exp->organization}}">
            Description:
            <textarea name="desc" id="desc" cols="5" rows="5" class="form-control">{{$user_volunteer_exp->desc}}</textarea>
            
            Start Date:
            <input type="text" name="start_date" class="form-control" value="{{$user_volunteer_exp->start_date}}">

            End Date:
            <input type="text" name="end_date" class="form-control" value="{{$user_volunteer_exp->end_date}}">

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Add New</button>
                </div>
            </div>
            

        </form>
        

</div>
@endsection
