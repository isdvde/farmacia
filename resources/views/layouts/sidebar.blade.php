<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">Margarita</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form>
	<ul class="nav menu">
		<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
		<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
		<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
		<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
		<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
			<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-1">
				<li><a class="" href="#">
					<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
				</a></li>
				<li><a class="" href="#">
					<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
				</a></li>
				<li><a class="" href="#">
					<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
				</a></li>
			</ul>
		</li>

		{{-- INICIO SECCION EMPLEADO --}}
		<li class="parent "><a data-toggle="collapse" href="#empleadoItem">
			<em class="fa fa-user">&nbsp;&nbsp;</em> Empleados <span data-toggle="collapse" href="#empleadoItem" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="empleadoItem">
				<li><a class="" href="{{ url('empleado') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a></li>
				<li><a class="" href="{{ url('empleado/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a></li>
			</ul>
		</li>

		{{-- FIN SECCION EMPLEADO --}}

		{{-- INICIO SECCION PEDIDO --}}
		<li class="parent "><a data-toggle="collapse" href="#pedidoItem">
			<em class="fa fa-list-alt">&nbsp;&nbsp;</em> Pedidos <span data-toggle="collapse" href="#pedidoItem" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="pedidoItem">
				<li><a class="" href="{{ url('pedido') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a></li>
				<li><a class="" href="{{ url('pedido/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a></li>
			</ul>
		</li>

		{{-- FIN SECCION PEDIDO --}}

		<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>


	</ul>
</div><!--/.sidebar-->