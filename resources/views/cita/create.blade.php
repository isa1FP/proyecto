@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">RECERVAR NUEVA CITA</h5>
    </div>
    <div class="card-body">
		<form method="POST" id="formulario" action="{{ route('cita.store') }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			
			@include('cita.form')
		</form>
	</div>
</div>
@include('cita.modal')
@endsection