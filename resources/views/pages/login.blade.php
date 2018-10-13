@extends('layouts.auth')
@section ('content')
<form class="form-signin">
    <div class="text-center mb-4">
      <img class="mb-4 favicon" src="../assets/img/favicon.png" alt="nEdCom" width="72" height="72">
      <img class="mb-4" src="../assets/img/nEdCom_logo.png" alt="nEdCom" height="60">
      <h1 class="h3 mb-3">Welcome back!</h1>
    </div>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
@endsection
