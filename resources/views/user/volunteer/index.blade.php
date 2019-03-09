@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card-profile-info">

                <div class="card-header">Volunteer</div>

                @foreach ($user_volunteer_exps as $user_volunteer_exp)
                    <p>{{$user_volunteer_exp->role}}</p>
                    <a href="{{route('volunteer.edit', ['id' => $user_volunteer_exp->id ] )}}">Edit</a>
                    <form action="{{ route('volunteer.destroy', $user_volunteer_exp->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="margin: 10px 0;">Delete</button>
                    </form>
                    <ul>
                        <li>Organization: {{$user_volunteer_exp->organization}}</li>
                        <li>Description: {{$user_volunteer_exp->desc}}</li>
                        <li>Start: {{$user_volunteer_exp->start_date}}</li>
                        <li>End: {{$user_volunteer_exp->end_date}}</li>
                    </ul>
                @endforeach
            </div>
            <div class="card-profile-info">
                <div class="card-header" style="margin: 10px 0;">Add New</div>
                <form action="{{route('volunteer.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <input type="text" name='user_id' hidden value="{{Auth::user()->id}}" style="margin: 10px 0;">

                    Role:
                    <input type="text" name="role" class="form-control" value="" style="margin: 10px 0;">
                    Organization:
                    <input type="text" name="organization" class="form-control" value="" style="margin: 10px 0;">
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
