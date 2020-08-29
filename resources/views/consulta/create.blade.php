@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">NUEVO CONSULTA</h5>
    </div>
    <div class="card-body">
		<form method="POST" id="formulario" action="{{ route('consulta.store') }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			
			@include('consulta.form')
		</form>
	</div>
</div>

@include('consulta.modal')
@endsection