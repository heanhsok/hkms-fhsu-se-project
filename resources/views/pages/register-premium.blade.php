@extends('layouts.auth')
@section ('content')
<form class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4 favicon" src="../assets/img/favicon.png" alt="nEdCom" width="72" height="72">
    <img class="mb-4" src="../assets/img/nEdCom_logo.png" alt="nEdCom" height="60">
    <h1 class="h3 mb-3 font-weight-normal">Join nEdCom Today</h1>
    <p>Connect, Learn and Exchange</p>
  </div>
  <div class="form-label-group">
    <input type="firstname" id="inputFirstName" class="form-control" placeholder="First name" required autofocus>
    <label for="inputFirstName">First Name</label>
  </div>
  <div class="form-label-group">
    <input type="lastname" id="inputLastName" class="form-control" placeholder="Last name" required autofocus>
    <label for="inputLastName">Last Name</label>
  </div>

  <!-- Select Position -->
  <div class="form-label-group form-inline">
    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
      <option selected>Choose Your Position</option>
      <option value="Professor">Professor</option>
      <option value="Employer">Employer</option>
    </select>
  </div>

  <!-- Select Specialty -->
  <div class="form-label-group form-inline">
    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
      <option selected>Choose Your Specialty</option>
      <option value="IT">IT Management</option>
      <option value="CS">Computer Science</option>
      <option value="BA">Business Administration</option>
      <option value="GA">Math</option>
    </select>
    <medium id="passwordHelpInline">Cannot find your specialty? <a href="#">Add Now!</a></medium>
  </div>

  <!-- Select Workplace -->
  <div class="form-label-group form-inline">
    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
      <option selected>Choose Your Workplace</option>
      <option value="AUPP">American Univeristy of Phnom Penh</option>
      <option value="FHSU">Fort Hays State University</option>
      <option value="RUPP">Royal University of Phnom Penh</option>
      <option value="CEd">CamEd</option>
    </select>
    <medium id="passwordHelpInline">Cannot find your wokplace? <a href="#">Add Now!</a></medium>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
    <label for="inputPassword">Confirm Password</label>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Choose a file to confirm your identity</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Your privacy is save with us. We need the above file just to make sure that the information provided is accurate.</small>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="agree"> By signing up you indicate that you have read and agree to nEdCom's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
    </label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
</form>
@endsection
