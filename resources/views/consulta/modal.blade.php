<div class="modal" id="modalPaciente" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Buscar Pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div class="row">
      		<div class="col-md-7">
  			 	<input type="text" id="buscador" class="form-control" placeholder="Escriba..." style="color: black;">
      		</div>
      		<div class="col-md-3">
      			<button class="btn btn-default" id="btnBuscar" type="button">Buscar</button>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-12" style="background: #585858; max-height: 300px; overflow-y: scroll;">
      			<div class="table-responsive">
			        <table class="table table-condensed table-hover">
			          <thead class="text-primary">
			          	<tr>
                    <th>C.I.</th>
			              <th>Nombres</th>
			              <th>Apellidos</th>
			              <th> </th>
			            </tr>
			          </thead>
			          <tbody id="tbodyPacientes">
			          </tbody>
			      	</table>
			  	</div>
      		</div>
      	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modalServicios" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Buscar Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<div class="row">
      		<div class="col-md-7">
  			 	<input type="text" id="buscadorServicio" class="form-control" placeholder="Escriba..." style="color: black;">
      		</div>
      		<div class="col-md-3">
      			<button class="btn btn-default" id="btnBuscarServicio" type="button">Buscar</button>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-12" style="background: #585858; max-height: 300px; overflow-y: scroll;">
      			<div class="table-responsive">
			        <table class="table table-condensed table-hover">
			          <thead class="text-primary">
			          	<tr>
			              <th>Nombre</th>
			              <th>Precio</th>
			              <th></th>
			            </tr>
			          </thead>
			          <tbody id="tbodyServicios">
			          </tbody>
			      	</table>
			  	</div>
      		</div>
      	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>