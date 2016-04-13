<ul class="nav navbar-nav">
			<li><a href="/">Blog Home</a></li>
				
			@if (Auth::check())
			<li @if (Request::is('admin/post*')) class="active" @endif>
				<a href="/admin/post">Posts</a>
			</li>
			<li @if (Request::is('admin/upload*')) class="active" @endif>
				<a href="/admin/upload">Uploads</a>
			</li>
			@endif
</ul>		

		<ul class="nav navbar-nav navbar-right">
			@if (Auth::guest())
							<li><a href="/auth/login">Login</a></li>
			@else				
			<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b>{{ Auth::user()->name}}</a>
								<ul class="dropdown-menu">
									<li><a href="../auth/Logout">Logout</a></li>
									
								</ul>
							</li>
			@endif
		</ul>
					

	