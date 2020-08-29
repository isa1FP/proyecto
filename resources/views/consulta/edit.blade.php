@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">EDITAR CONSULTA</h5>
    </div>
    <div class="card-body">
		<form method="POST" id="formulario" action="{{ route('consulta.update', $model->id) }}" autocomplete="off" role="form">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PATCH">
			
			@include('consulta.form')
		</form>

	</div>
</div>

@include('consulta.modal')
@endsection