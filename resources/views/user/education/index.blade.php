@extends('user.layouts.app')

@section('content')
@include('includes.main-nav')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card-profile-info">

                <div class="card-header">Education</div>

                @foreach ($user_educations as $user_education)
                    <p>{{$user_education->major}}</p>
                    <a href="{{route('education.edit', ['id' => $user_education->id ] )}}">Edit</a>
                    <form action="{{ route('education.destroy', $user_education->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="margin: 10px 0;">Delete</button>
                    </form>
                    <ul>
                        <li>School: {{$user_education->school}}</li>
                        <li>Degree: {{$user_education->degree}}</li>
                        <li>Major: {{$user_education->major}}</li>
                        <li>Description: {{$user_education->desc}}</li>
                        <li>Start: {{$user_education->start_date}}</li>
                        <li>End: {{$user_education->end_date}}</li>
                    </ul>
                @endforeach
            </div>

            <div class="card-profile-info">
                <div class="card-header" style="margin: 10px 0;">Add New</div>
                <form action="{{route('education.store')}}" method="post">
                    @csrf
                    @method('POST')

                    <input type="text" name='user_id' hidden value="{{Auth::user()->id}}" style="margin: 10px 0;">

                    School:
                    <input type="text" name="school" class="form-control" value="" style="margin: 10px 0;">
                    Degree:
                    <input type="text" name="degree" class="form-control" value="" style="margin: 10px 0;">
                    Major:
                    <input type="text" name="major" class="form-control" value="" style="margin: 10px 0;">
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
