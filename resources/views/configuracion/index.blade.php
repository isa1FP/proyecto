@extends('blackDashboardPro.app')

@section('contentPrincipal')
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">CONFIGURACION</h5>
    </div>
    <div class="card-body">
      <a href="{{ route('configuracion.create') }}" class="btn btn-info" >Nueva Configuracion</a>



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
                      <th>Razon Social</th>
                      <th>Nit</th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                     <!-- <th>Celular</th>-->
                      <th>Email</th>
                      <th>Responsable</th>
                      <!--<th>Logo</th>-->
                      <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($model as $dato)
                    <tr>
                      <td class="text-left">{{$dato->razonsocial}}</td>
                      <td class="text-left">{{$dato->nit}}</td>
                      <td class="text-left">{{$dato->direccion}}</td>
                      <td class="text-left">{{$dato->telefono}}</td>
                      <td class="text-left">{{$dato->celular}}</td>
                      <td class="text-left">{{$dato->email}}</td>
                      <td class="text-left">{{$dato->responsable}}</td>
                      <td class="text-left">{{$dato->logo}}</td>
                      <td class="text-right">
                        <a href="{{action('ConfiguracionController@edit', $dato->id)}}" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-pencil"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Razon Social</th>
                      <th>Nit</th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                      <!--<th>Celular</th>-->
                      <th>Email</th>
                      <th>Responsable</th>
                      <!--<th>Logo</th>-->
                      <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                  </tfoot>
                </table>
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