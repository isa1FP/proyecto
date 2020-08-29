<input type="hidden" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="textScenario" value="{{ $model->scenario }}">
<input type="hidden" name="hiddenPaciente" id="hiddenPaciente" value="{{ $model->ttt }}">
<input type="hidden" name="hiddenServicio" id="hiddenServicio" value="{{ $consultaServicio }}">


      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Paciente</h5>
              </div>
              <div class="card-footer">
                <button id="buscarPacienteModal" type="submit" class="btn btn-fill btn-primary">
				        <i class="fa fa-search" aria-hidden="true"></i>
                Buscar Paciente
            	</button>
              </div>
              <div class="card-body">
                <form >
                  <div class="row">
                    <div class="col-md-2 pr-md-1">
                      <div class="form-group">
                        <label>
                        	C.I.
                    	</label>
                        <input  type="text" class="form-control" id="textCI" value="" disabled="">
                      </div>
                    </div>
                    <div class="col-md-5 px-md-1">
                      <div class="form-group">
                        <label>
                        	Nombre
                        </label>
                        <!--<input type="text" class="form-control" value="michael23">-->
                        <input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{ $model->nombre }}" disabled="">
                      </div>
                    </div>
                    <div class="col-md-5 pl-md-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <!--<input type="email" class="form-control" placeholder="mike@email.com">-->
                        <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" value="{{ $model->apellidos }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-12 pr-md-1">
                      <label>descripcion</label>
                      <textarea name="descripcion" class="form-control" rows="5" placeholder="Escriba..."></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Lista Sevicios</h5>
              </div>
	          <div class="card-footer">
				<button id="buscarServicioModal" class="btn btn-fill btn-primary">
                <i class="fa fa-search" aria-hidden="true"></i>
                  Buscar Servicios
                </button>
              </div>
              <div class="col-md-11 pr-md-1">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                      <thead class="text-primary">
                        <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody id="tbodyListaServicios">
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<a href="{{ route('consulta.index') }}" class="btn btn-danger btn-round">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Atrás
		</a>
		<button type="button" id="botonGuardar" class="btn btn-info btn-round">
          	<i class="fa fa-floppy-o" aria-hidden="true"></i>
			Guardar
        </button>
	</div>
</div>