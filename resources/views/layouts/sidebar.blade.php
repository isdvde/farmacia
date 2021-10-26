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

	@can('farmacia.view')
	<li @if(Request::is('farmacia'))class="active"@endif>
		<a href="{{ url('farmacia') }}">
			<em class="	fa fa-home">&nbsp;</em> Farmacias
		</a>
	</li>
	@endcan

	{{-- FIN SECCION FARMACIA --}}

	{{-- INICIO SECCION EMPLEADO --}}
	
	@can('empleado.view')
	<li @if(Request::is('empleado'))class="active"@endif>
		<a href="{{ url('empleado') }}">
			<em class="	fa fa-user">&nbsp;</em> Empleados
		</a>
	</li>
	@endcan

	{{-- FIN SECCION EMPLEADO --}}

	@can('pedido.view')
	<li @if(Request::is('pedido'))class="active"@endif>
		<a href="{{ url('pedido') }}">
			<em class="	fa fa-list-alt">&nbsp;</em> Pedidos
		</a>
	</li>
	@endcan

	{{-- FIN SECCION PEDIDO --}}

	{{-- INICIO SECCION LABORATORIO --}}

	@can('laboratorio.view')
	<li @if(Request::is('laboratorio'))class="active"@endif>
		<a href="{{ url('laboratorio') }}">
			<em class="	fa fa-truck">&nbsp;</em> Laboratorios
		</a>
	</li>
	@endcan

	{{-- FIN SECCION LABORATORIO --}}

	{{-- INICIO SECCION INVENTARIO --}}
	@can('inventario.view')
	<li @if(Request::is('inventario'))class="active"@endif>
		<a href="{{ url('inventario') }}">
			<em class="	fa fa-database">&nbsp;</em> Inventario
		</a>
	</li>
	@endcan
	{{-- FIN SECCION INVENTARIO --}}

	{{-- INICIO SECCION MEDICAMENTO --}}
	
	@can('medicamento.view')
	<li @if(Request::is('medicamento'))class="active"@endif>
		<a href="{{ url('medicamento') }}">
			<em class="	fa fa-heartbeat">&nbsp;</em> Medicamentos
		</a>
	</li>
	@endcan
	{{-- FIN SECCION MEDICAMENTO --}}

	{{-- INICIO SECCION COMPRA--}}

	@can('compra.view')
	<li @if(preg_match('#compra.*#',Request::path()))class="active"@endif>
		<a href="{{ url('compra') }}">
			<em class="	fa fa-money">&nbsp;</em> Compras
		</a>
	</li>	
	@endcan
	{{-- FIN SECCION COMPRA --}}

</ul>
</div><!--/.sidebar-->
