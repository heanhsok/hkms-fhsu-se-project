@extends('layouts.auth')
@section ('content')
<div class="register-login text-center">
    <form class="form-login">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                alt="">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    <a href="#" class="reset-password">Forget password?</a>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                  <p> Don't have an account? <a href="#" class="mt-5 mb-3 create-account"> Create Account </a></p>
                  <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
            </form>
</div>
@endsection
