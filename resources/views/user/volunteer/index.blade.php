@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <form action="{{route('volunteer.store')}}" method="post">
            @csrf
            @method('POST')
            <input type="text" name='user_id' hidden value="{{Auth::user()->id}}">

            Role:
            <input type="text" name="role" class="form-control" value="">
            Organization:
            <input type="text" name="organization" class="form-control" value="">
            Description:
            <textarea name="desc" id="desc" cols="5" rows="5" class="form-control"></textarea>
            
            Start Date:
            <input type="text" name="start_date" class="form-control" value="">

            End Date:
            <input type="text" name="end_date" class="form-control" value="">

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Add New</button>
                </div>
            </div>

        </form>

        <h2>Volunteer</h2>
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Volunteer</div>
                
                @foreach ($user_volunteer_exps as $user_volunteer_exp)
                    <b>{{$user_volunteer_exp->major}}</b>
                    <a href="{{route('volunteer.edit', ['id' => $user_volunteer_exp->id ] )}}">Edit</a>
                    <form action="{{ route('volunteer.destroy', $user_volunteer_exp->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <ul>
                        <li>role: {{$user_volunteer_exp->role}}</li>
                        <li>organization: {{$user_volunteer_exp->organization}}</li>
                        <li>description: {{$user_volunteer_exp->desc}}</li>
                        <li>start_date: {{$user_volunteer_exp->start_date}}</li>
                        <li>end_date: {{$user_volunteer_exp->end_date}}</li>
                    </ul>       
                @endforeach
            </div>
        </div>
                
    </div>

</div>
@endsection
