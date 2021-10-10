<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="{{ url('/') }}">
					<span>Farmacia</span>Gatitos
				</a>
{{-- 				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="	fa fa-user-circle"></em>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ url('logout') }}">
								<div><em class="fa fa-user-times"></em> Salir
								</a>
							</li>
						</ul>
					</li>
				</ul> --}}

				<ul class="nav navbar-top-links navbar-right">
					<li style="margin-right: 2em; margin-top: 1em;">

						<form action="{{ url('logout') }}" method="POST">
							@csrf
							<div class="text-center">
							<button type="submit" class="btn btn-danger navbar-right"><em class="fa fa-power-off">&nbsp;</em> Salir
							</button>
						</div>
						</form>
					</li>
				</ul>

{{-- 				<form class="navbar-form navbar-right" action="{{ url('logout') }}" method="POST">
					@csrf
					<button type="submit" class="btn btn-danger navbar-right"><em class="fa fa-power-off">&nbsp;</em> Salir
					</button>
				</form> --}}

				{{-- <form action="{{ url('logout') }}" method="POST">
					@csrf
					<button type="submit" class="btn btn-danger navbar-right"><em class="fa fa-power-off">&nbsp;</em> Salir
					</button>
				</form> --}}
			</div>
		</div><!-- /.container-fluid -->
	</nav>