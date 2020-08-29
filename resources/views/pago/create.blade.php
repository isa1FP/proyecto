@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">NUEVO SERVICIO</h5>
    </div>
    <div class="card-body">
		<form method="POST" action="{{ route('pago.store') }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			
			@include('pago.form')
		</form>
	</div>
</div>
@endsection