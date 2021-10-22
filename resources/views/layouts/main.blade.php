<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Farmacia</title>
	<link href="{{ url('lumino/css/bootstrap.min.css') }}" rel="stylesheet"/>
	<link href="{{ url('lumino/css/font-awesome.min.css') }}" rel="stylesheet"/>
	<link href="{{ url('lumino/css/datepicker3.css') }}" rel="stylesheet"/>
	<link href="{{ url('lumino/css/styles.css') }}" rel="stylesheet"/>
{{-- 	<link href="{{ url('lumino/css/datatables.min.css') }}" rel="stylesheet"/> --}}
	<livewire:styles/>
	
	
</head>
<body>

	
	<script src="{{ url('lumino/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('lumino/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('lumino/js/chart.min.js') }}"></script>
	<script src="{{url('lumino/js/chart-data.js')}}"></script>
	<script src="{{url('lumino/js/easypiechart.js')}}"></script>
	<script src="{{url('lumino/js/easypiechart-data.js')}}"></script>
	<script src="{{url('lumino/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('lumino/js/custom.js')}}"></script>
	<livewire:scripts/>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@include('layouts.navbar')
		@include('layouts.sidebar')
		@yield('content')
	</div>	<!--/.main-->

		
</body>
</html>