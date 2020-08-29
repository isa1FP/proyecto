<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        <label>
          Razon Social
        </label>
        <input type="text" name="razonsocial" id="razonsocial" class="form-control input-sm" value="{{ $model->razonsocial }}">
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>
            NIT
          </label>
          <input type="text" name="nit" id="nit" class="form-control input-sm" value="{{ $model->nit }}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label>Direccion</label>
        <textarea name="direccion" class="form-control input-sm" placeholder="Escriba..." rows="2"></textarea>
      </div>
    </div>
  </div>

  <div class="col-md-6">
      <div class="row">
        <div class="col-md-7">
          <label>
            Correo
          </label>
          <input type="text" name="email" id="email" class="form-control input-sm" value="{{ $model->email }}">
        </div>
        <div class="col-md-5">
          <label>
            Logo
          </label>
          <input type="text" name="logo" id="logo" class="form-control input-sm" value="{{ $model->logo }}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label>Responsable</label>
          <input type="text" name="responsable" id="responsable" class="form-control input-sm" value="{{ $model->responsable }}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label>Telefono</label>
          <input type="text" name="telefono" id="telefono" class="form-control input-sm" value="{{ $model->telefono }}">
        </div>
        <div class="col-md-6">
          <label>Celular</label>
          <input type="text" name="celular" id="celular" class="form-control input-sm" value="{{ $model->celular }}">
        </div>
      </div>
  </div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('configuracion.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button type="button" id="botonGuardar" class="btn btn-info btn-round">
      <i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
    </button>
	</div>
</div>