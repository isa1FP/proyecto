@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">NUEVO PERSONAL</h5>
    </div>
    <div class="card-body">
		<form method="POST" id="formulario" action="{{ route('personal.store') }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			
			@include('personal.form')
		</form>
	</div>
</div>
@endsection