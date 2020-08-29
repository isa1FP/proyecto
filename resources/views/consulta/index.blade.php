@extends('blackDashboardPro.app')

@section('contentPrincipal')
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">CONSULTAS</h5>
    </div>
    <div class="card-body">
      <a href="{{ route('consulta.create') }}" class="btn btn-info" >Nuevo Consulta</a>

      <!-- End Navbar -->
      <div class="content">

        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="datatable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>C.i.</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Estado</th>
                      <th>Precio</th>
                      <th>Descripcion</th>
                      <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($model as $dato)
                    <tr>
                      <td class="text-left">{{$dato->ci}}</td>
                      <td class="text-left">{{$dato->nombres}}</td>
                      <td class="text-left">{{$dato->apellidos}}</td>
                      <td class="text-left">{{$dato->estado}}</td>
                      <td>Descripcion</td>
                      <td>Descripcion</td>
                      <td class="text-right">
                        {{-- <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a> --}}
                        <a href="{{action('ConsultaController@edit', $dato->id)}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Editar">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>

                        <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                {{ $model->links() }}
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
        <!-- end row -->
      </div>
    </div>
  </div>
@endsection