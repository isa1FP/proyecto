
<div class="row">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-2 pr-md-1">
        <div class="form-group">
          <label>C.I.</label>
          <input type="text" name="ci" id="ci" class="form-control input-sm" value="{{ $model->ci }}">
        </div>
      </div>
      <div class="col-md-5 px-md-1">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{ $model->nombres }}">
        </div>
      </div>
      <div class="col-md-5 pl-md-1">
        <div class="form-group">
          <label>Apellidos</label>
          <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" value="{{ $model->apellidos }}">                      
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 pr-md-1">
        <div class="form-group">
          <label>Fecah de Nacimiento</label>
          <input type="text" class="form-control datepicker" value="10/05/2018">
        </div>
      </div>
      <div class="col-md-3 pl-md-1">
        <div class="form-group">
          <label>Sexo</label> 
          <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="sexo" name="sexo">
          <option value="F">Femenino</option>
          <option value="M">Masculino</option>
          </select>
        </div>
      </div>
      <div class="col-md-5 pl-md-1">
        <div class="form-group">
          <label>Estado Civil</label>
          <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="estadocivil" name="estadocivil">
          <option value="C">Casado</option>
          <option value="S">Soltera</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 pr-md-1">
        <div class="form-group">
          <label>Tipo de Documento</label>
          <input type="text" name="tipodocumento" id="tipodocumento" class="form-control input-sm" value="{{ $model->tipodocumento }}"> 
        </div>
      </div>
      <div class="col-md-3 px-md-1">
        <div class="form-group">
          <label>Número</label>
          <input type="text" name="numero" id="numero" class="form-control input-sm" value="{{ $model->numero }}"> 
        </div>
      </div>
      <div class="col-md-6 pl-md-1">
        <div class="form-group">
          <label>Cargo</label>
          <input type="text" name="cargo" id="cargo" class="form-control input-sm" value="{{ $model->cargo }}"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Ocupacion</label>
          <input type="text" name="ocupacion" id="ocupacion" class="form-control input-sm" value="{{ $model->ocupacion }}"> 
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Especialidad</label>
          <input type="text" name="especialidad" id="especialidad" class="form-control input-sm" value="{{ $model->especialidad }}"> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <label>Dirección</label>
        <textarea name="direccion" class="form-control input-sm" placeholder="Escriba..." rows="2"></textarea>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card card-user">
      <div class="card-body">
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail img-circle">
              <img src="{{ asset('imagenes/placeholder.jpg') }}" alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
            <div>
              <span class="btn btn-round btn-rose btn-file">
                <span class="fileinput-new">Añadir Foto</span>
                <span class="fileinput-exists">Cambiar</span>
                <input type="file" name="..." />
              </span>
              
              <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>Eliminar</a>
            </div>
          </div>
       <!-- <p class="card-text">
          <div class="author">
            <div class="block block-one"></div>
            <div class="block block-two"></div>
            <div class="block block-three"></div>
            <div class="block block-four"></div>
            <a href="javascript:void(0)">
              <img class="avatar" src="../../assets/img/emilyz.jpg" alt="...">
              <h5 class="title">Subir Foto</h5>
            </a>
          </div>
        </p>-->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label>Telefono</label>
            <input type="text" name="sexo" id="sexo" class="form-control input-sm" value="{{ $model->sexo }}"> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
            <label>Celular</label>
            <input type="text" name="sexo" id="sexo" class="form-control input-sm" value="{{ $model->sexo }}"> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            <label>Email</label>
            <input type="text" name="sexo" id="sexo" class="form-control input-sm" value="{{ $model->sexo }}"> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label>Login</label>
            <input type="text" name="sexo" id="sexo" class="form-control input-sm" value="{{ $model->sexo }}"> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
            <label>Clave</label>
            <input type="text" name="sexo" id="sexo" class="form-control input-sm" value="{{ $model->sexo }}"> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label>Permisos</label>
            <input type="text" name="sexo" id="sexo" class="form-control input-sm" value="{{ $model->sexo }}"> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('personal.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button type="button" id="botonGuardar" class="btn btn-info btn-round">
      <i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
    </button>
	</div>
</div>