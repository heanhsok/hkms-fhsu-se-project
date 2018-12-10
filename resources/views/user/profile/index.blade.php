@extends('user.layouts.app')

@section('content')
@include('includes.main-nav')
    <div class="container">
        <div class="top-profile-card">
            <div class="profile-edit">
                <a href="{{route('profile.edit', ['id' => $user->id ] )}}" target="_blank">Edit</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-image">
                                <img src="{{asset('upload/picture/'.$user_profile->profile_picture)}}"  alt="image" />
                                <div class="bottom">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-summary">
                        <h1 class="profile-name">{{$user->name}}</h1>
                        <p class="short-des">{{$user_profile->biography}}</p>

                        <div class="about-profile-brief">
                            <div class="row">
                                <div class="icon-about">
                                    <p><i class="fas fa-graduation-cap"></i></p>
                                    <p><i class="fas fa-map-marker-alt"></i></p>
                                    <p><i class="fas fa-envelope"></i></p>
                                    <p><i class="fas fa-transgender-alt"></i></p>
                                </div>
                                <div class="text-about">
                                    @foreach ($user_educations as $user_education)
                                        <p>Study {{$user_education->major}} at {{$user_education->school}}</p>
                                    @endforeach
                                    <p>{{$user_profile->city}}, {{$user_profile->country}}</p>
                                    <p>{{$user->email}}</p>
                                    <p>{{$user_profile->gender}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-content">
                <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">Education</label>

                <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Work Experience</label>

                <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Volunteer</label>

                <section id="content1">
                    <div class="col-md-12">
                    <div class="card-profile-info">
                        <div class="card-header"><a href="{{route('education.index')}}" target="_blank">Edit & Add New</a></div>
                        @foreach ($user_educations as $user_education)
                            <p>{{$user_education->major}}</p>
                            <ul>
                                <li>School: {{$user_education->school}}</li>
                                <li>Degree: {{$user_education->degree}}</li>
                                <li>Major: {{$user_education->major}}</li>
                                <li>Grade: {{$user_education->grade}}</li>
                                <li>description: {{$user_education->desc}}</li>
                                <li>Start: {{$user_education->start_date}}</li>
                                <li>End: {{$user_education->start_date}}</li>
                            </ul>
                        @endforeach
                    </div>
                    </div>
                </section>

                <section id="content2">
                    <div class="col-md-12">
                        <div class="card-profile-info">
                            <div class="card-header"><a href="{{route('work.index')}}" target="_blank">Edit & Add New</a></div>
                            @foreach ($user_work_experiences as $user_work_experience)
                                <p>{{$user_work_experience->position}}</p>
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
                    </div>
                </section>

                <section id="content3">
                    <div class="col-md-12">
                        <div class="card-profile-info">
                            <div class="card-header"><a href="{{route('volunteer.index')}}" target="_blank">Edit & Add New</a></div>
                            @foreach ($user_volunteer_experiences as $user_volunteer_experience)
                                <p>{{$user_volunteer_experience->role}}</p>
                                <ul>
                                    <li>Organization: {{$user_volunteer_experience->organization}}</li>
                                    <li>Description: {{$user_volunteer_experience->desc}}</li>
                                    <li>Start: {{$user_volunteer_experience->start_date}}</li>
                                    <li>End: {{$user_volunteer_experience->end_date}}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>

                </section>

                <section id="content4">

                </section>

                <section id="content5">
                    <div class="about-profile-detail">
                        <div class="d-flex flex-row mt-2">
                        	<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        		<li class="nav-item">
                        			<a href="#overview" class="nav-link active" data-toggle="tab" role="tab" aria-controls="overview">Overview</a>
                        		</li>
                        		<li class="nav-item">
                        			<a href="#education" class="nav-link" data-toggle="tab" role="tab" aria-controls="education">Education</a>
                        		</li>
                        		<li class="nav-item">
                        			<a href="#work-ex" class="nav-link" data-toggle="tab" role="tab" aria-controls="work-ex">Work Experience</a>
                        		</li>
                        		<li class="nav-item">
                        			<a href="#volunteer-ex" class="nav-link" data-toggle="tab" role="tab" aria-controls="volunteer-ex">Volunteer Experience</a>
                        		</li>
                        	</ul>
                        	<div class="tab-content">
                        		<div class="tab-pane fade show active" id="overview" role="tabpanel">
                        			<h1>Overview</h1>


                        		</div>
                        		<div class="tab-pane fade" id="education" role="tabpanel">
                        			<h1>Education</h1>


                        		</div>
                        		<div class="tab-pane fade" id="work-ex" role="tabpanel">
                        			<h1>Work Experience</h1>



                        		</div>
                        		<div class="tab-pane fade" id="volunteer-ex" role="tabpanel">
                        			<h1>Volunteer Experience</h1>


                        		</div>
                        	</div>
                        </div>
                    </div>
                </section>
        </div>

    </div>
@endsection
