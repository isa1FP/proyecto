@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">NUEVO PACIENTE</h5>
    </div>
    <div class="card-body">
		<form method="POST" action="{{ route('paciente.store') }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			
			@include('paciente.form')
		</form>
	</div>
</div>
@endsection