<input type="hidden" id="token" value="{{ csrf_token() }}">
<input type="hidden" name="hiddenPaciente" id="hiddenPaciente">
<input type="hidden" name="hiddenServicio" id="hiddenServicio">

<div class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Datos Paciente</h5>
        </div>
        <div class="card-footer">
        <button id="buscarPacienteCita" type="submit" class="btn btn-fill btn-primary">
				  <i class="fa fa-search" aria-hidden="true"></i>
            Buscar Paciente
        </button>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-3 pr-md-1">
                <div class="form-group">
                  <label>C.I.</label>
                  <input type="text" name="ci" id="ci" class="form-control input-sm" value="{{ $model->ci }}">
                </div>
              </div>
              <div class="col-md-4 px-md-1">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{ $model->nombre }}">
                </div>
              </div>
              <div class="col-md-5 pl-md-1">
                <div class="form-group">
                  <label>Apellido</label>
                  <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" value="{{ $model->apellidos }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label>Telefono</label>
                  <input type="text" name="telefono" id="telefono" class="form-control input-sm" value="{{ $model->telefono }}">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                 <div class="form-group">
                  <label>Celular</label>
                  <input type="text" name="celular" id="celular" class="form-control input-sm" value="{{ $model->celular }}">
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
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Datos de la Cita</h5>
        </div>
        <div class="card-body">
          <form >
            <div class="row">
              <div class="col-md-5 pr-md-1">
                 <div class="form-group">
                  <label>
                    Fecha de la cita
                </label>
                  <input type="text" class="form-control datepicker" value="05/10/2018">
                </div>
              </div>
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label>
                    Hora de la cita
                  </label>
			            <button class="btn btn-primary btn-sm">Ver horarios disponibles</button>
                  <br>
                  <br>
			          </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pr-md-1">
                <label>HORARIOS DISPONIBLES</label>
                   <br>
                    <br> 
                    <div class="row">
                    <div class="col-sm-4 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          8:00
                        </label>
                        <br>
                        <br>
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          11:00
                        </label>
                        <br>
                        <br>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-sm-4 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          9:00
                        </label>
                        <br>
                        <br> 
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          12:00
                        </label>
                        <br>
                        <br>
                      </div>
                    </div>

                    <div class="col-sm-4 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          10:00
                        </label>
                        <br>
                        <br> 
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          13:00
                        </label>
                        <br>
                        <br> 
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          15:00
                        </label>
                        <br>
                        <br> 
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          16:00
                        </label>
                        <br>
                        <br> 
                      </div>
                    </div>
                    <div class="col-sm-4 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          17:00
                        </label>
                        <br>
                        <br> 
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          18:00
                        </label>
                        <br>
                        <br> 
                      </div>
                    </div>
                    <div class="col-sm-4 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          19:00
                        </label>
                        <br>
                        <br> 
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          20:00
                        </label>
                        <br>
                        <br>
                        <br> 
                      </div>
                    </div>
                    </div>                          
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('cita.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button type="button" id="botonGuardar" class="btn btn-info btn-round">
          	<i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
        </button>
	</div>
</div>