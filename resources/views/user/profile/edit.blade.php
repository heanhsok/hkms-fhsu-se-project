@extends('user.layouts.app')
@section('content')
@include('includes.main-nav')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}

        <form action="{{route('profile.update', ['id' => $user->id] )}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{csrf_field()}}

            <img src="{{asset('upload/picture/'.$user_profile->profile_picture)}}" alt="" height="250px" style="margin: 10px 0;">
            <input type="file" name="profile_picture" class="form-control" style="margin: 10px 0;">

            <h2 style="margin: 10px 0;">Profile</h2>

            First Name:
            <input type="text" name="first_name" class="form-control" value="{{$user_profile->first_name}}" style="margin: 10px 0;">

            Last Name:
            <input type="text" name="last_name" class="form-control" value="{{$user_profile->last_name}}" style="margin: 10px 0;">

            Gender: {{$user_profile->gender}}

            <div class="form-group">
                <div class="maxl">
                    <label class="radio inline">
                        <input type="radio" name="gender" value="male" {{$user_profile->gender == 'male'?'checked':''}}>
                        <span>Male </span>
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="gender" value="female" {{$user_profile->gender == 'female'?'checked':''}}>
                        <span>Female </span>
                    </label>
                </div>
            </div>

            Biography:
            <textarea style="margin: 10px 0;" name="biography" id="biography" cols="5" rows="5" class="form-control">{{$user_profile->biography}}</textarea>



            <h3 style="margin: 10px 0;">Contact</h3>
            Phone Number:
            <input type="text" name="phone_number" class="form-control" value="{{$user_profile->phone_number}}" style="margin: 10px 0;">
            Street Number:
            <input type="text" name="street_number" class="form-control" value="{{$user_profile->street_number}}" style="margin: 10px 0;">
            Street Name:
            <input type="text" name="street_name" class="form-control" value="{{$user_profile->street_name}}" style="margin: 10px 0;">
            Commune:
            <input type="text" name="commune" class="form-control" value="{{$user_profile->commune}}" style="margin: 10px 0;">
            District:
            <input type="text" name="district" class="form-control" value="{{$user_profile->district}}" style="margin: 10px 0;">
            City:
            <input type="text" name="city" class="form-control" value="{{$user_profile->city}}" style="margin: 10px 0;">
            Country:
            <input type="text" name="country" class="form-control" value="{{$user_profile->country}}" style="margin: 10px 0;">

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>


        </form>

    {{-- </div> --}}

</div>
@endsection
