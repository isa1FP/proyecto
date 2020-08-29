@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">NUEVA CONFIGURACION</h5>
    </div>
    <div class="card-body">
		<form method="POST" id="formulario" action="{{ route('configuracion.store') }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			
			@include('configuracion.form')
		</form>
	</div>
</div>
@endsection