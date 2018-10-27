@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <form action="{{route('education.store')}}" method="post">
            @csrf
            @method('POST')
            <input type="text" name='user_id' hidden value="{{Auth::user()->id}}">

            School:
            <input type="text" name="school" class="form-control" value="">
            Degree:
            <input type="text" name="degree" class="form-control" value="">
            Major:
            <input type="text" name="major" class="form-control" value="">
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

        <h2>Education</h2>
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Education</div>
                
                @foreach ($user_educations as $user_education)
                    <b>{{$user_education->major}}</b>
                    <a href="{{route('education.edit', ['id' => $user_education->id ] )}}">Edit</a>
                    <form action="{{ route('education.destroy', $user_education->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <ul>
                        <li>school: {{$user_education->school}}</li>
                        <li>degree: {{$user_education->degree}}</li>
                        <li>major: {{$user_education->major}}</li>
                        <li>description: {{$user_education->desc}}</li>
                        <li>start_date: {{$user_education->start_date}}</li>
                        <li>end_date: {{$user_education->end_date}}</li>
                    </ul>       
                @endforeach
            </div>
        </div>
                
    </div>

</div>
@endsection
