<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            CT
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Tim
          </a>
        </div>
        <ul class="nav">
          <li class="{{ $model->accion == 'MisPacientes'? 'active' : '' }}">
            <a href="{{ url('paciente') }}">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>Paciente</p>
            </a>
          </li>
          <li class="{{ $model->accion == 'consulta'? 'active' : '' }}">
            <a href="{{ url('consulta') }}">
              <i class="tim-icons icon-paper" aria-hidden="true"></i>
              <p>Cosulta</p>
            </a>
          </li>
          <li class="{{ $model->accion == 'cita'? 'active' : '' }}">
            <a href="{{ url('cita') }}">
              <i class="tim-icons icon-badge" aria-hidden="true"></i>
              <p>Citas</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#tablesExamples">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>
                Administrar
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="{{ $model->accion == 'servicio'? 'active' : '' }}">
                  <a href="{{ url('servicio') }}">
                    <span class="sidebar-mini-icon">_</span>
                    <span class="sidebar-normal">
                      Servicios
                    </span>
                  </a>
                </li>
                <li class="{{ $model->accion == 'personal'? 'active' : '' }}">
                  <a href="{{ url('personal') }}">
                    <span class="sidebar-mini-icon">RT</span>
                    <span class="sidebar-normal"> Personal </span>
                  </a>
                </li>
                <li class="{{ $model->accion == 'configuracion'? 'active' : '' }}">
                  <a href="{{ url('configuracion') }}">
                    <span class="sidebar-mini-icon">ET</span>
                    <span class="sidebar-normal"> Configuracion </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/tables/datatables.net.html">
                    <span class="sidebar-mini-icon">DT</span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>