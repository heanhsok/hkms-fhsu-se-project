<div class="header">
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-company-red">
	<a href="/"><img class="navbar-brand" src="{{asset('../assets/img/nEdCom_logo_30px.png')}}" alt="nEdCom"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<a class="nav-link" href="/forum"><i class="fas fa-comments fa-fw"></i>Forum</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link " href="/opportunity"><i class="fas fa-briefcase fa-fw"></i>Opportunity</a>
		  </li>
		</ul>
		<form class="form-inline">
		  <input id="search-bar"class="form-control" type="text" placeholder="Search" aria-label="Search">
		  <span class="search-icon"></span>
		</form>
		<ul class="navbar-nav">
			<li class="nav-item">
  			<a class="nav-link" href="http://nedcom.edu"><i class="fas fa-heart"></i>Saved</a>
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
				<a class="nav-link" href="/profile" >
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
