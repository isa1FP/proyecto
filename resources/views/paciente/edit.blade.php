@extends('blackDashboardPro.app')

@section('contentPrincipal')
<div class="card">
    <div class="card-header">
      <h5 class="card-title">EDITAR PACIENTE</h5>
    </div>
    <div class="card-body">
		<form method="POST" action="{{ route('paciente.update', $model->id) }}"  role="form">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PATCH">
			
			@include('paciente.form')
		</form>

	</div>
</div>
@endsection