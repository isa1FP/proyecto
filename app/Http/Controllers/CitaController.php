<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cita;

use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$model = Consulta::orderBy('id','DESC')->paginate(3);
select p.ci, p.nombres, p.apellidos, p.telefono, p.celular, p.direccion, h.hora
from paciente p inner join hora h on p.id=h.id

        $model = DB::table('paciente as p')
                    ->select('p.id', 'p.ci', 'p.nombres', 'p.apellidos', 
                            'c.descripcion', 'c.fecha')
                    ->join('paciente as p', 'c.idpaciente', '=', 'p.id')
                    ->paginate(5);

        $model->accion = 'cita';

        return view('cita.index', compact('model')); 
    }

    public function create()
    {
        $model = new Cita;
        $model->accion = 'cita';
        $model->scenario = 'create';

        return view('cita.create')
                ->with('model', $model);
    }

    public function store(Request $request)
    {
        $datoPACIENTE = json_decode($request->hiddenPaciente);

        $model = new Cita;
        $model->idpaciente = $datoPACIENTE->id;
        $model->descripcion = $request->descripcion;
        $model->idestado = 1;

        return redirect()->route('cita.index')
                ->with('mensaje', 'Registro creado satisfactoriamente');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $model = Cita::find($id);
        $modelPaciente = Paciente::where('id', '=', $model->idpaciente)->first();
        
        $model->nombre = $modelPaciente->nombres;
        $model->apellidos = $modelPaciente->apellidos;

        $model->ttt = $modelPaciente;


        $citas = DB::table('cita as c')
                        ->select('h.id', 's.nombre', 'cs.precio')
                        ->join('hora as h', 'c.idcita', '=', 'c.id')
                        ->where('idcita', '=', $model->id)
                        ->get();
        $citas = json_encode($citas);
        
        $model->accion = 'cita';
        $model->scenario = 'edit';

        return view('cita.edit')
                ->with('model', $model)
                ->with('cita', $citas);
    }

    public function update(Request $request, $id)
    {

        $datoPACIENTE = json_decode($request->hiddenPaciente);
        $datoSERVICIO = json_decode($request->hiddenServicio);

        $model = Cita::find($id);
       //print_r ($datoPACIENTE->id);
        //return;
        $model->idpaciente = $datoPACIENTE->id;
        $model->descripcion = $request->descripcion;
        $model->idestado = 1;
        return redirect()->route('cita.index')
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
}


