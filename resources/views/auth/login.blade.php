@extends('auth.main')
@section('content')
<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-md-center h-100">
			<div class="card-wrapper">
				<h1 class="h1 text-center m-5">Farmacia</h1>
				<div class="card fat">
					<div class="card-body">
						<h3 class="card-title text-center">Ingresar</h3>
						<form method="POST" class="my-login-validation" novalidate="">
							@csrf
							<div class="form-group">
								<label for="username">Usuario</label>
								<input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

								@error('username')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-group mt-4">
								<label for="password">Contraseña</label>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required data-eye>

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-group m-4 text-center">
								<button type="submit" class="btn btn-primary">
									Entrar
								</button>
							</div>
							{{-- <div class="mt-4 text-center">
								<a href="{{ url('register') }}">Registrarse</a>
							</div> --}}
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
