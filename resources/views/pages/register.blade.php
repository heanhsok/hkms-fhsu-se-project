@extends('layouts.app')
@section ('content')
<div class="container-fluid register">
    <div class="row both-col">
                    <div class="col-md-3 register-left">
                        <img src="{{asset('../assets/img/nEdCom_logo.png')}}" alt=""/>
                        <h3>Welcome</h3>
                        <p>The only online platform for Cambodian university students</p>
                        <input type="submit" name="" value="Login"/><br/>
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
                                <h3 class="register-heading">Apply as a Student</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your major</option>
                                                <option value="IT">IT Management</option>
                                                <option value="CS">Computer Science</option>
                                                <option value="BA">Business Administration</option>
                                                <option value="GA">Global Affairs</option>
                                            </select>
                                            <medium id="passwordHelpInline">Cannot find your major? <a href="#">Add Now!</a></medium>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your university</option>
                                                <option value="AUPP">American Univeristy of Phnom Penh</option>
                                                <option value="FHSU">Fort Hays State University</option>
                                                <option value="RUPP">Royal University of Phnom Penh</option>
                                                <option value="CEd">CamEd</option>
                                            </select>
                                            <medium id="passwordHelpInline">Cannot find your university? <a href="#">Add Now!</a></medium>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="male" checked>
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
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone (Optional)" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="checkbox mb-3">
                                            <label>
                                              <input type="checkbox" value="agree"> By signing up you indicate that you have read and agree to nEdCom's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                            </label>
                                          </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3 class="register-heading">Apply as a professor/recruiter</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your position</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Recruiter">Recruiter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your specialty</option>
                                                <option value="IT">IT Management</option>
                                                <option value="CS">Computer Science</option>
                                                <option value="BA">Business Administration</option>
                                                <option value="GA">Math</option>
                                            </select>
                                            <medium id="passwordHelpInline">Cannot find your specialty? <a href="#">Add Now!</a></medium>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your workplace</option>
                                                <option value="AUPP">American Univeristy of Phnom Penh</option>
                                                <option value="FHSU">Fort Hays State University</option>
                                                <option value="RUPP">Royal University of Phnom Penh</option>
                                                <option value="CEd">CamEd</option>
                                            </select>
                                            <medium id="passwordHelpInline">Cannot find your workplace? <a href="#">Add Now!</a></medium>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="male" checked>
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
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Choose a file to confirm your identity</label>
                                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                            <small id="fileHelp" class="form-text text-muted">Your privacy is save with us. </small>
                                        </div>
                                        <div class="checkbox mb-3">
                                            <label>
                                              <input type="checkbox" value="agree"> By signing up you indicate that you have read and agree to nEdCom's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                            </label>
                                          </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@stop
