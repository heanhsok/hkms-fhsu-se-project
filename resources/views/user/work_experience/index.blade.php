@extends('user.layouts.app')

@section('content')
@include('includes.main-nav')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-profile-info">

                <div class="card-header">Work Experience</div>

                @foreach ($user_work_experiences as $user_work_experience)
                    <p>{{$user_work_experience->position}}</p>
                    <a href="{{route('work.edit', ['id' => $user_work_experience->id ] )}}">Edit</a>
                    <form action="{{ route('work.destroy', $user_work_experience->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="margin: 10px 0;">Delete</button>
                    </form>
                    <ul>
                        <li>Specialty: {{$user_work_experience->specialty}}</li>
                        <li>Position: {{$user_work_experience->position}}</li>
                        <li>Workplace: {{$user_work_experience->workplace}}</li>
                        <li>Description: {{$user_work_experience->desc}}</li>
                        <li>Start: {{$user_work_experience->start_date}}</li>
                        <li>End: {{$user_work_experience->end_date}}</li>
                    </ul>
                @endforeach
            </div>

            <div class="card-profile-info">
                <div class="card-header" style="margin: 10px 0;">Add New</div>
                <form action="{{route('work.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <input style="margin: 10px 0;" type="text" name='user_id' hidden value="{{Auth::user()->id}}">

                    Specialty:
                    <input type="text" name="specialty" class="form-control" value="" style="margin: 10px 0;">
                    Position:
                    <input type="text" name="position" class="form-control" value="" style="margin: 10px 0;">
                    Workplace:
                    <input type="text" name="workplace" class="form-control" value="" style="margin: 10px 0;">
                    Description:
                    <textarea name="desc" id="desc" cols="5" rows="5" class="form-control" style="margin: 10px 0;"></textarea>

                    Start Date:
                    <input type="text" name="start_date" class="form-control" value="" style="margin: 10px 0;">

                    End Date:
                    <input type="text" name="end_date" class="form-control" value="" style="margin: 10px 0;">

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Add New</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>
@endsection
