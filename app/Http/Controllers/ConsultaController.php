<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consulta;
use App\Models\Consultasservicios;
use App\Models\Paciente;
use App\Models\Servicio;

use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$model = Consulta::orderBy('id','DESC')->paginate(3);
        $model = DB::table('consultas as c')
                    ->select('c.id', 'p.ci', 'p.nombres', 'p.apellidos', 'e.nombre as estado', 
                            'c.fecha')
                    ->join('paciente as p', 'c.idpaciente', '=', 'p.id')
                    ->join('estado as e', 'c.idestado', '=', 'e.id')
                    ->paginate(5);

        $model->accion = 'consulta';

        return view('consulta.index', compact('model')); 
    }

    public function historial()
    {
        $model = new Consulta;
        $consultaServicio = null;

        $model->accion = 'consulta';
        $model->scenario = 'historial';

        return view('consulta.historial')
                ->with('model', $model)
                ->with('consultaServicio', $consultaServicio);
    }

    public function create()
    {
        $model = new Consulta;
        $consultaServicio = null;

        $model->accion = 'consulta';
        $model->scenario = 'create';

        return view('consulta.create')
                ->with('model', $model)
                ->with('consultaServicio', $consultaServicio);
    }

    public function store(Request $request)
    {
        $datoPACIENTE = json_decode($request->hiddenPaciente);
        $datoSERVICIO = json_decode($request->hiddenServicio);

        $model = new Consulta;
        $model->idpaciente = $datoPACIENTE->id;
        $model->descripcion = $request->descripcion;
        $model->idestado = 1;
        if($model->save())
        {
            for($i = 0; $i < count($datoSERVICIO); $i++)
            {
                $dato = json_decode($datoSERVICIO[$i]);
                
                $modelo = new Consultasservicios;
                $modelo->idconsultas = $model->id;
                $modelo->idservicios = $dato->id;
                $modelo->precio = $dato->precio;
                $modelo->save();
            }
        }

        return redirect()->route('consulta.index')
                ->with('mensaje', 'Registro creado satisfactoriamente');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $model = Consulta::find($id);

        $modelPaciente = Paciente::where('id', '=', $model->idpaciente)->first();
        
        $model->nombre = $modelPaciente->nombres;
        $model->apellidos = $modelPaciente->apellidos;

        $model->ttt = $modelPaciente;


        $consultaServicio = DB::table('consultasservicios as cs')
                        ->select('s.id', 's.nombre', 'cs.precio')
                        ->join('servicios as s', 'cs.idservicios', '=', 's.id')
                        ->where('idconsultas', '=', $model->id)
                        ->get();
        $consultaServicio = json_encode($consultaServicio);
        
        $model->accion = 'consulta';
        $model->scenario = 'edit';

        return view('consulta.edit')
                ->with('model', $model)
                ->with('consultaServicio', $consultaServicio);
    }

    public function update(Request $request, $id)
    {

        $datoPACIENTE = json_decode($request->hiddenPaciente);
        $datoSERVICIO = json_decode($request->hiddenServicio);

        $model = Consulta::find($id);
       //print_r ($datoPACIENTE->id);
        //return;
        $model->idpaciente = $datoPACIENTE->id;
        $model->descripcion = $request->descripcion;
        $model->idestado = 1;

        
        if($model->save())
        {
            Consultasservicios::where('idconsultas', '=', $id)->delete();

            for($i = 0; $i < count($datoSERVICIO); $i++)
            {
                $dato = json_decode($datoSERVICIO[$i]);
                
                $modelo = new Consultasservicios;
                $modelo->idconsultas = $model->id;
                $modelo->idservicios = $dato->id;
                $modelo->precio = $dato->precio;
                $modelo->save();
            }
        }
        return redirect()->route('consulta.index')
        ->with('mensaje', 'Registro creado satisfactoriamente');
    }

    public function destroy($id)
    {
    }


    public static function buscarPaciente()
    {
        if(isset($_POST['valor']))
        {
            $valor = $_POST['valor'];

            $modelo = Paciente::where('nombres', 'like', '%'.$valor.'%')
                        ->orderBy('nombres', 'ASC')->get();
            print_r( json_encode($modelo) );
        }
    }
    public static function buscarServicio()
    {
        if(isset($_POST['valor']))
        {
            $valor = $_POST['valor'];

            $modelo = Servicio::where('nombre', 'like', '%'.$valor.'%')
                        ->orderBy('nombre', 'ASC')->get();
            print_r( json_encode($modelo) );
        }
    }
}
