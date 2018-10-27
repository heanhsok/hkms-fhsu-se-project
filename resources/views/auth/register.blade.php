@extends('auth.layouts.app')
@section ('content')
<div class="container-fluid register">
    <div class="row both-col">
                    <div class="col-md-3 register-left">
                        <img src="{{asset('../assets/img/nEdCom_logo.png')}}" alt=""/>
                        <h3>Welcome</h3>
                        <p>The only online platform for Cambodian university students</p>
                        {{-- <input type="submit" name="" value="Login"/><br/> --}}
                        <a href="{{ route('login') }}" class="login-bt" type=button name="button">
                            Log in
                        </a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Professor/Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as a Student</h3>
                                <form method="POST" action="{{ route('register', ['userType' => 'standard'] ) }}">
                                    @csrf
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name *" value="" name='firstname' id='firstname'/>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name *" value="" name='last_name' />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name='major'>
                                                    <option class="hidden"  selected disabled>Please select your major</option>
                                                    <option value="IT Management">IT Management</option>
                                                    <option value="Computer Science">Computer Science</option>
                                                    <option value="Business Administration">Business Administration</option>
                                                    <option value="Global Affairs">Global Affairs</option>
                                                </select>
                                                {{-- <medium id="passwordHelpInline">Cannot find your major? <a href="#">Add Now!</a></medium> --}}
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name='degree'>
                                                    <option class="hidden"  selected disabled>Please select your degree</option>
                                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                                    <option value="Master Degree">Master Degree</option>
                                                    <option value="Phd">Phd</option>
                                                </select>
                                                    {{-- <medium id="passwordHelpInline">Cannot find your major? <a href="#">Add Now!</a></medium> --}}
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name='university'>
                                                    <option class="hidden"  selected disabled>Please select your university</option>
                                                    <option value="American Univeristy of Phnom Penh">American Univeristy of Phnom Penh</option>
                                                    <option value="Fort Hays State University">Fort Hays State University</option>
                                                    <option value="Royal University of Phnom Penh">Royal University of Phnom Penh</option>
                                                    <option value="CamEd">CamEd</option>
                                                </select>
                                                {{-- <medium id="passwordHelpInline">Cannot find your university? <a href="#">Add Now!</a></medium> --}}
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline">
                                                        <input type="radio" name="gender" value="male"checked>
                                                        <span> Male </span>
                                                    </label>
                                                    <label class="radio inline">
                                                        <input type="radio" name="gender" value="female">
                                                        <span>Female </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Username" value="" name='name' id='name' />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email *" value="" name='email' id='email' />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="10" maxlength="10" name="phone_number" class="form-control" placeholder="Your Phone (Optional)" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name='password' id='password' placeholder="Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"  placeholder="Confirm Password *" value=""  name="password_confirmation" />
                                            </div>
                                            
                                            <div class="checkbox mb-3">
                                                <label>
                                                <input type="checkbox" value="agree"> By signing up you indicate that you have read and agree to nEdCom's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                                </label>
                                            </div>
                                            <div class='form-group'>
                                                <input type="submit" class="btnRegister"  value="Register"/>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3 class="register-heading">Register as a professor/recruiter</h3>
                                <form method="POST" action="{{ route('register', ['userType' => 'premiem'] ) }}">
                                    @csrf
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Name *" value="" name='firstname' id='firstname'/>
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name *" value="" name='last_name' />
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name='position'>
                                                        <option class="hidden"  selected disabled>Please select your position</option>
                                                        <option value="IT Management">Professor</option>
                                                        <option value="Computer Science">Recruiter</option>
                                                    </select>
                                                    {{-- <medium id="passwordHelpInline">Cannot find your major? <a href="#">Add Now!</a></medium> --}}
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name='specialty'>
                                                        <option class="hidden"  selected disabled>Please select your Specialty</option>
                                                        <option value="IT Management">IT Management</option>
                                                        <option value="Computer Science">Computer Science</option>
                                                        <option value="Business Administration">Business Administration</option>
                                                        <option value="Global Affairs">Global Affairs</option>
                                                    </select>
                                                        {{-- <medium id="passwordHelpInline">Cannot find your major? <a href="#">Add Now!</a></medium> --}}
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name='workplace'>
                                                        <option class="hidden"  selected disabled>Please select your workplace</option>
                                                        <option value="American Univeristy of Phnom Penh">American Univeristy of Phnom Penh</option>
                                                        <option value="Fort Hays State University">Fort Hays State University</option>
                                                        <option value="Royal University of Phnom Penh">Royal University of Phnom Penh</option>
                                                        <option value="CamEd">CamEd</option>
                                                    </select>
                                                    {{-- <medium id="passwordHelpInline">Cannot find your university? <a href="#">Add Now!</a></medium> --}}
                                                </div>
                                                <div class="form-group">
                                                    <div class="maxl">
                                                        <label class="radio inline">
                                                            <input type="radio" name="gender" value="male"checked>
                                                            <span> Male </span>
                                                        </label>
                                                        <label class="radio inline">
                                                            <input type="radio" name="gender" value="female">
                                                            <span>Female </span>
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Username *" value="" name='name' />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email *" value="" name='email' />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" value="" name="phone_number" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="password_confirmation"/>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="exampleInputFile">Choose a file to confirm your identity</label>
                                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                <small id="fileHelp" class="form-text text-muted">Your privacy is save with us. </small>
                                            </div> --}}
                                            <div class="checkbox mb-3">
                                                <label>
                                                <input type="checkbox" value="agree"> By signing up you indicate that you have read and agree to nEdCom's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                                </label>
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@stop
