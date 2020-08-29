@extends('blackDashboardPro.app')

@section('contentPrincipal')
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">LISTA pagos</h5>
    </div>
    <div class="card-body">
      <a href="{{ route('pago.create') }}" class="btn btn-info" >Nuevo pago</a>

      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <tr>
              <th>Fecha</th>
              <th>Servicio</th>
              <th class="text-left">Monto</th>
              <th class="text-left">Saldo</th>
            </tr>
          </thead>
          <tbody>
            @foreach($model as $dato)
              <tr>
                <td class="text-left">{{$dato->fechapa}}</td>
                <td class="text-left">{{$dato->servicio}}</td>
                <td>{{$dato->monto}}</td>
                <td>{{$dato->saldo}}</td>
                <td class="text-right">
                  
                  <a href="{{action('PagoController@edit', $dato->id)}}" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Editar">
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