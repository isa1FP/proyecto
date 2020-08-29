<div class="row">
	<div class="col-md-7">
		<div class="row">
			<div class="col-md-6">
				<label>C.I.</label>
				<input type="text" name="ci" id="ci" class="form-control input-sm" value="{{ $model->ci }}">
			</div>

			<div class="col-md-6">
				<label>Nombres</label>
				<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{ $model->nombres }}">
			</div>
			<div class="col-md-6">
				<label>Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" class="form-control input-sm" value="{{ $model->apellidos }}">
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<label>Fecha Nacimiento</label>
				<div class="form-group">
                  <input type="text" class="form-control datepicker" value="10/05/2018">
                </div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<label>Sexo</label>
				<select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Sexo" name="sexo">
                  <option value="F">Femenino</option>
                  <option value="M">Masculino</option>
                </select>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="row">
			<div class="col-lg-12">
				<label>Dirección</label>
				<textarea name="direccion" class="form-control input-sm" placeholder="Escriba..." rows="2"></textarea>
			</div>
			<div class="col-md-6">
				<label>Telefono</label>
				<input type="text" name="telefono" id="telefono" class="form-control input-sm" value="{{ $model->telefono }}">
			</div>
			<div class="col-md-6">
				<label>Celular</label>
				<input type="text" name="celular" id="celular" class="form-control input-sm" value="{{ $model->celular }}">
			</div>
			<div class="col-md-6">
				<label>Email</label>
				<input type="text" name="email" id="email" class="form-control input-sm" value="{{ $model->email }}">
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('paciente.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button class="btn btn-info btn-round">
          	<i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
        </button>
	</div>
</div>