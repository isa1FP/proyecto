<div class="row">
	<div class="col-md-7">
		<div class="row">
			<div class="col-md-6">
				<label>Fecha</label>
				<input type="text" name="fechapa" id="fechapa" class="form-control input-sm" value="{{ $model->fechapa }}">
			</div>
			<div class="col-md-6">
				<label>Servicio</label>
				<input type="text" name="servicio" id="servicio" class="form-control input-sm" value="{{ $model->servicio }}">
			</div>
			<div class="col-md-6">
				<label>Monto</label>
				<input type="text" name="monto" id="monto" class="form-control input-sm" value="{{ $model->monto }}">
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="row">
			<div class="col-md-6">
				<label>Saldo</label>
				<input type="text" name="saldo" id="saldo" class="form-control input-sm" value="{{ $model->saldo }}">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('pago.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button class="btn btn-info btn-round">
          	<i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
        </button>
	</div>
</div>