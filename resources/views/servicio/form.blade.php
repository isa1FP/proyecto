<div class="row">
	<div class="col-md-7">
		<div class="row">
			<div class="col-md-6">
				<label>Codigo</label>
				<input type="text" name="codigo" id="codigo" class="form-control input-sm" value="{{ $model->codigo }}">
			</div>
			<div class="col-md-6">
				<label>Nombres</label>
				<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{ $model->nombre }}">
			</div>
			<div class="col-md-6">
				<label>Precio</label>
				<input type="text" name="precio" id="precio" class="form-control input-sm" value="{{ $model->precio }}">
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="row">
			<div class="col-lg-12">
				<label>Descripción</label>
				<textarea name="descripcion" class="form-control input-sm" placeholder="Escriba..." rows="2">
					{{ $model->descripcion }}
				</textarea>
			</div>
		</div>
	</div>
</div>

		<div class="row">
			<div class="col-md-4">
				<label>Imagen</label>
				<input type="file" name="imagen" id="imagen" class="form-control input-sm" >
			</div>
		</div>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('servicio.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button class="btn btn-info btn-round">
          	<i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
        </button>
	</div>
</div>