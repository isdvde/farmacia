<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
{{-- 			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt=""> --}}
			<img src="{{ url('img/user.png') }}" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">
				{{ Auth::user()->empleado->nombre.' '.Auth::user()->empleado->apellido }}
			</div>
			<div class="profile-usertitle-status">
				<span class="indicator label-success"></span>
				Online <br>
				<span class="fa fa-user">&nbsp;&nbsp;</span>
				{{ Auth::user()->empleado->cargo }}
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	{{-- <form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form> --}}
	<ul class="nav menu">
		{{-- <li @if(Request::is('/'))class="active"@endif>
			<a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a>
		</li>
		<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
		<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
		<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
		<li>
			<a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a>
		</li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
			<em class="fa fa-navicon">&nbsp;</em> Multilevel 
			<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
				<em class="fa fa-plus"></em>
			</span>
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
	</li> --}}


	{{-- INICIO SECCION FARMACIA --}}
{{-- 	<li class="parent @if(preg_match('#farmacia.*#',Request::path())) active @endif">
		<a data-toggle="collapse" href="#farmaciaItem">
			<em class="	fa fa-home">&nbsp;&nbsp;</em> 
			Farmacias 
			<span data-toggle="collapse" href="#farmaciaItem" class="icon pull-right">
				<em class="fa fa-plus"></em>
			</span>
		</a>
		<ul class="children collapse @if(preg_match('#farmacia.*#',Request::path())) in @endif" id="farmaciaItem">
			<li>
				<a class="" href="{{ url('farmacia') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a>
			</li>
			<li>
				<a class="" href="{{ url('farmacia/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a>
			</li>
		</ul>
	</li> --}}

	<li @if(Request::is('farmacia'))class="active"@endif>
		<a href="{{ url('farmacia') }}">
			<em class="	fa fa-home">&nbsp;</em> Farmacias
		</a>
	</li>

	{{-- FIN SECCION FARMACIA --}}

	{{-- INICIO SECCION EMPLEADO --}}
	<li class="parent @if(preg_match('#empleado.*#',Request::path())) active @endif">
		<a data-toggle="collapse" href="#empleadoItem">
			<em class="fa fa-user">&nbsp;&nbsp;</em>
			Empleados 
			<span data-toggle="collapse" href="#empleadoItem" class="icon pull-right">
				<em class="fa fa-plus"></em>
			</span>
		</a>
		<ul class="children collapse @if(preg_match('#empleado.*#',Request::path())) in @endif active" id="empleadoItem" >
			<li>
				<a class="" href="{{ url('empleado') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a>
			</li>
			<li>
				<a class="" href="{{ url('empleado/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a>
			</li>
		</ul>
	</li>

	{{-- FIN SECCION EMPLEADO --}}

	{{-- INICIO SECCION PEDIDO --}}
	<li class="parent @if(preg_match('#pedido.*#',Request::path())) active @endif">
		<a data-toggle="collapse" href="#pedidoItem">
			<em class="fa fa-list-alt">&nbsp;&nbsp;</em> 
			Pedidos 
			<span data-toggle="collapse" href="#pedidoItem" class="icon pull-right">
				<em class="fa fa-plus"></em>
			</span>
		</a>
		<ul class="children collapse @if(preg_match('#pedido.*#',Request::path())) in @endif" id="pedidoItem">
			<li>
				<a class="" href="{{ url('pedido') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a>
			</li>
			<li>
				<a class="" href="{{ url('pedido/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a>
			</li>
		</ul>
	</li>
	{{-- FIN SECCION PEDIDO --}}

	{{-- INICIO SECCION LABORATORIO --}}
{{-- 	<li class="parent @if(preg_match('#laboratorio.*#',Request::path())) active @endif">
		<a data-toggle="collapse" href="#laboratorioItem">
			<em class="	fa fa-truck">&nbsp;&nbsp;</em> 
			Laboratorios 
			<span data-toggle="collapse" href="#laboratorioItem" class="icon pull-right">
				<em class="fa fa-plus"></em>
			</span>
		</a>
		<ul class="children collapse @if(preg_match('#laboratorio.*#',Request::path())) in @endif" id="laboratorioItem">
			<li>
				<a class="" href="{{ url('laboratorio') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a>
			</li>
			<li>
				<a class="" href="{{ url('laboratorio/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a>
			</li>
		</ul>
	</li> --}}

	<li @if(Request::is('laboratorio'))class="active"@endif>
		<a href="{{ url('laboratorio') }}">
			<em class="	fa fa-home">&nbsp;</em> Laboratorios
		</a>
	</li>

	{{-- FIN SECCION LABORATORIO --}}

	{{-- INICIO SECCION INVENTARIO --}}
	<li>
		<a href="{{ url('inventario') }}">
			<em class="	fa fa-database">&nbsp;</em> Inventario
		</a>
	</li>
	{{-- FIN SECCION INVENTTARIO --}}

	{{-- INICIO SECCION MEDICAMENTO --}}
	{{-- <li class="parent @if(preg_match('#medicamento.*#',Request::path())) active @endif">
		<a data-toggle="collapse" href="#medicamentoItem">
			<em class="fa fa-heartbeat">&nbsp;&nbsp;</em> 
			Medicamentos 
			<span data-toggle="collapse" href="#medicamentoItem" class="icon pull-right">
				<em class="fa fa-plus"></em>
			</span>
		</a>
		<ul class="children collapse @if(preg_match('#medicamento.*#',Request::path())) in @endif" id="medicamentoItem">
			<li>
				<a class="" href="{{ url('medicamento') }}">
					<span class="fa fa-eye">&nbsp;&nbsp;</span> Mostrar
				</a>
			</li>
			<li>
				<a class="" href="{{ url('medicamento/create') }}">
					<span class="fa fa-plus-circle">&nbsp;&nbsp;</span> Añadir
				</a>
			</li>
		</ul>
	</li> --}}

	<li @if(Request::is('medicamento'))class="active"@endif>
		<a href="{{ url('medicamento') }}">
			<em class="	fa fa-home">&nbsp;</em> Medicamentos
		</a>
	</li>
	{{-- FIN SECCION MEDCAMENTO --}}



{{-- 	<li>
		<a href="{{ url('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Salir
		</a>
	</li> --}}

{{-- 	<li>
	<form action="{{ url('logout') }}" method="POST">
		@csrf
		<button type="submit" class="btn btn-danger"><em class="fa fa-power-off">&nbsp;</em> Salir
		</button>
	</form>
</li> --}}

</ul>
</div><!--/.sidebar-->

