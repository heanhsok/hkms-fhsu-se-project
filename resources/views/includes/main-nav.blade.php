<div class="header">
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-company-red">
	<a href="#"><img class="navbar-brand" src="{{asset('../assets/img/nEdCom_logo_30px.png')}}" alt="nEdCom"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="http://nedcom.edu"><i class="fas fa-home"></i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/forum"><i class="fas fa-comments"></i>Forum</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link " href="/opportunity"><i class="fas fa-briefcase"></i>Opportunity</a>
		  </li>
		</ul>
		<form class="form-inline mt-2 mt-md-0">
		  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		<ul class="navbar-nav">
			<li class="nav-item">
  			<a class="nav-link" href="http://nedcom.edu"><i class="fas fa-inbox"></i></a>
  		  </li>
			<li class="nav-item">
  			<a class="nav-link" href="http://nedcom.edu"><i class="fas fa-bell"></i></a>
  		  </li>
		  @guest
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">Log In</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">Sign Up</a>
			</li>
			@endguest
			@auth

				<li class="nav-item">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
						</a>
				</li>
				<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
				</li>
			@endauth

	  </ul>
		</div>
		</nav>
</div>
