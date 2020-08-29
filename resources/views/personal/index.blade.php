@extends('blackDashboardPro.app')

@section('contentPrincipal')
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">PERSONAL</h5>
    </div>
    <div class="card-body">
      <a href="{{ route('personal.create') }}" class="btn btn-info" >Nuevo Registro</a>
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
                      <th>Celular</th>
                      <th>Email</th>
                      <th>Cargo</th>
                      <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($model as $dato)
                    <tr>
                      <td class="text-left">{{$dato->ci}}</td>
                      <td class="text-left">{{$dato->nombres}}</td>
                      <td class="text-left">{{$dato->apellidos}}</td>
                      <td class="text-left">{{$dato->celular}}</td>
                      <td class="text-left">{{$dato->email}}</td>
                      <td class="text-left">{{$dato->cargo}}</td>
                      <td class="text-right">
                        <a href=" " class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                        <a href="{{action('PersonalController@edit', $dato->id)}}" rel="tooltip" class="btn btn-link btn-warning btn-icon btn-sm edit" data-original-title="Tooltip on top" title="Editar"><i class="tim-icons icon-pencil"></i></a>
                        <a href="" rel="tooltip" class="btn btn-link btn-danger btn-icon btn-sm remove" data-original-title="Tooltip on top" title="Delete"><i class="tim-icons icon-simple-remove"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>C.i.</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Celular</th>
                      <th>Email</th>
                      <th>Cargo</th>
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