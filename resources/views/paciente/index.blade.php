@extends('blackDashboardPro.app')

@section('contentPrincipal')
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">LISTA PACIENTES</h5>
    </div>
    <div class="card-body">
      <a href="{{ route('paciente.create') }}" class="btn btn-info" >Nuevo Registro</a>

      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <tr>
              <th>C.I. Paciente</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th class="text-right">Celular</th>
              <th class="text-right">Accion</th>
            </tr>
          </thead>
          <tbody>
            @foreach($model as $dato)
              <tr>
                <td class="text-left">{{$dato->ci}}</td>
                <td class="text-left">{{$dato->nombres}}</td>
                <td class="text-left">{{$dato->apellidos}}</td>
                <td class="text-center">{{$dato->celular}}</td>
                <td class="text-right">
                  
                  <a href="{{action('PacienteController@edit', $dato->id)}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Editar">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                  </a>

                  <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Delete">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection