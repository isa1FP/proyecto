@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">EDITAR CITA</h5>
    </div>
    <div class="card-body">
		<form method="POST" id="formulario" action="{{ route('cita.update', $model->id) }}"  role="form">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PATCH">
			
			@include('cita.form')
		</form>

	</div>
</div>
@include('cita.modal')
@endsection