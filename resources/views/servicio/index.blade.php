@extends('blackDashboardPro.app')

@section('contentPrincipal')
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">LISTA SERVICIOS</h5>
    </div>
    <div class="card-body">
      <a href="{{ route('servicio.create') }}" class="btn btn-info" >Nuevo Registro</a>

      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <tr>
              <th>Codigo</th>
              <th>Nombres</th>
              <th class="text-left">Descripcion</th>
              <th class="text-left">Precio</th>
            </tr>
          </thead>
          <tbody>
            @foreach($model as $dato)
              <tr>
                <td class="text-left">{{$dato->codigo}}</td>
                <td class="text-left">{{$dato->nombre}}</td>
                <td>{{$dato->descripcion}}</td>
                <td>{{$dato->precio}}</td>
                <td class="text-right">
                  
                  <a href="{{action('ServicioController@edit', $dato->id)}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Editar">
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