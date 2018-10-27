@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <form action="{{route('work.store')}}" method="post">
            @csrf
            @method('POST')
            <input type="text" name='user_id' hidden value="{{Auth::user()->id}}">

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

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Add New</button>
                </div>
            </div>

        </form>

        <h2>Work Expriences</h2>
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Work Experience</div>
                
                @foreach ($user_work_experiences as $user_work_experience)
                    <b>{{$user_work_experience->position}}</b>
                    <a href="{{route('work.edit', ['id' => $user_work_experience->id ] )}}">Edit</a>
                    <form action="{{ route('work.destroy', $user_work_experience->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <ul>
                        <li>specialty: {{$user_work_experience->specialty}}</li>
                        <li>position: {{$user_work_experience->position}}</li>
                        <li>workplace: {{$user_work_experience->workplace}}</li>
                        <li>description: {{$user_work_experience->desc}}</li>
                        <li>start_date: {{$user_work_experience->start_date}}</li>
                        <li>end_date: {{$user_work_experience->end_date}}</li>
                    </ul>       
                @endforeach
            </div>
        </div>
                
    </div>

</div>
@endsection
