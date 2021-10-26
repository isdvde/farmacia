<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="{{ url('/') }}">
					<span>
						<img src="{{ url('img/logo.png') }}" style="width: 10%">
					</span>
					<span>Farma</span>Segura
				</a>
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
			</div>
		</div>
	</nav>