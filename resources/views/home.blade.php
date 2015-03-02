@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> <p class="text-center"> Panel de Control: {!!Auth::User()['name']!!} </div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<a href='/calendar'><p class="text-center">Ver Calendario</p></a></div>
						<div class="col-md-5">
							<a href='/previous'><p class="text-center">Ver Sesiones Antiguas</p></a></div> 
					</div>

					<div class="row">
						<div class="col-md-5">
							<a href='/pending'><p class="text-center">Ver Sesiones Pendientes</p></a></div>
						<div class="col-md-5">
							<a href='/payment'><p class="text-center">Información de Pagos</p></a></div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
