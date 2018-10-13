@extends('layouts.auth')
@section ('content')
    
        <form class="form-signin">
          <div class="text-center mb-4">
            <img class="mb-4 favicon" src="../assets/img/favicon.png" alt="nEdCom" width="72" height="72">
            <img class="mb-4" src="../assets/img/nEdCom_logo.png" alt="nEdCom" height="60">
            <h1 class="h3 mb-3 font-weight-normal">Join nEdCom Today</h1>
            <p>Connect, Learn and Exchange</p>
          </div>
        <div class="form-inline  check-auth">
          <label class="mr-sm-2" for="inlineFormCustomSelect">Are you a student?</label>
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
            <option selected>Yes/No</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
          </div>

          <div class="form-label-group">
            <input type="firstname" id="inputFirstName" class="form-control" placeholder="First name" required autofocus>
            <label for="inputFirstName">First Name</label>
          </div>
          <div class="form-label-group">
            <input type="lastname" id="inputLastName" class="form-control" placeholder="Last name" required autofocus>
            <label for="inputLastName">Last Name</label>
          </div>

          <!-- Select Major -->
          <div class="form-label-group form-inline">
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
              <option selected>Choose Your Major</option>
              <option value="IT">IT Management</option>
              <option value="CS">Computer Science</option>
              <option value="BA">Business Administration</option>
              <option value="GA">Global Affairs</option>
            </select>
            <medium id="passwordHelpInline">Cannot find your major? <a href="#">Add Now!</a></medium>
          </div>

          <!-- Select Universities -->
          <div class="form-label-group form-inline">
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
              <option selected>Choose Your University</option>
              <option value="AUPP">American Univeristy of Phnom Penh</option>
              <option value="FHSU">Fort Hays State University</option>
              <option value="RUPP">Royal University of Phnom Penh</option>
              <option value="CEd">CamEd</option>
            </select>
            <medium id="passwordHelpInline">Cannot find your university? <a href="#">Add Now!</a></medium>
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

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="agree"> By signing up you indicate that you have read and agree to nEdCom's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
            </label>
          </div>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
          <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
        </form>
@endsection
