@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User</div>
                    <ul>
                        <li>Username: {{$user->name}}</li>
                        <li>Email: {{$user->email}}</li>
                    </ul>
            </div>
        </div>
        <div class="col-md-12">
            <img src="{{asset('assets/picture/'.$user_profile->profile_picture)}}" alt="" height="100px">
            <div class="card">
                <div class="card-header">User</div>
                    <ul>
                        <li>First Name: {{$user_profile->first_name}}</li>
                        <li>Last Name:{{$user_profile->last_name}}</li>
                        <li>Gender: {{$user_profile->gender}}</li>
                        <li>Biography: {{$user_profile->biography}}</li>
                    </ul>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User</div>
                    <ul>
                        <li>Phone Number: {{$user_profile->phone_number}}</li>
                        <li>Street Number: {{$user_profile->street_number}}</li>
                        <li>Street Name: {{$user_profile->street_name}}</li>
                        <li>Commune: {{$user_profile->commune}}</li>
                        <li>District: {{$user_profile->district}}</li>
                        <li>City: {{$user_profile->city}}</li>
                        <li>Country: {{$user_profile->country}}</li>
                    </ul>
            </div>
        </div>

        <h2>Work Expriences</h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Work Experience</div>
                @foreach ($user_work_experiences as $user_work_experience)
                    <b>{{$user_work_experience->position}}</b>
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

        <h2>Education</h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Education</div>
                @foreach ($user_educations as $user_education)
                    <b>{{$user_education->major}}</b>
                    <ul>
                        <li>school: {{$user_education->school}}</li>
                        <li>degree: {{$user_education->degree}}</li>
                        <li>major: {{$user_education->major}}</li>
                        <li>grade: {{$user_education->grade}}</li>
                        <li>desc: {{$user_education->desc}}</li>
                        <li>start_date: {{$user_education->start_date}}</li>
                        <li>start_date: {{$user_education->start_date}}</li>
                    </ul>       
                @endforeach
            </div>
        </div>

        <h2>Volunteer</h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Volunteer</div>
                @foreach ($user_volunteer_experiences as $user_volunteer_experience)
                    <b>{{$user_volunteer_experience->role}}</b>
                    <ul>
                        <li>role: {{$user_volunteer_experience->role}}</li>
                        <li>organization: {{$user_volunteer_experience->organization}}</li>
                        <li>desc: {{$user_volunteer_experience->desc}}</li>
                        <li>start_date: {{$user_volunteer_experience->start_date}}</li>
                        <li>end_date: {{$user_volunteer_experience->end_date}}</li>
                    </ul>       
                @endforeach
            </div>
        </div>


        
        
        
        
        
        
        

                
    </div>

</div>
@endsection
