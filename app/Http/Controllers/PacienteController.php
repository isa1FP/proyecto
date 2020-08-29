<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Paciente::orderBy('id','DESC')->paginate(3);

        $model->accion = 'MisPacientes';

        return view('paciente.index', compact('model')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Paciente;

        return view('paciente.create')
                ->with('model', $model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo '==>> '.$request->direccion;
        // return;

        // Paciente::create($request->all());
        $model = new Paciente;
        $model->ci = $request->ci;
        $model->nombres = $request->nombre;
        $model->apellidos = $request->apellidos;
        $model->sexo = $request->sexo;
        $model->telefono = $request->telefono;
        $model->celular = $request->celular;
        $model->fecha_nacimiento = $request->fecha_nacimiento;
        $model->direccion = $request->direccion;
        $model->email = $request->email;
        $model->save();

        return redirect()->route('paciente.index')
                ->with('mensaje', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo ">> ".$id;
        $model = Paciente::find($id);

        return view('paciente.edit')
                ->with('model', $model);

        // return view('paciente.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // libro::find($id)->update($request->all());
        $model = Paciente::find($id);
        $model->ci = $request->ci;
        $model->nombres = $request->nombre;
        $model->apellidos = $request->apellidos;
        $model->telefono = $request->telefono;
        $model->celular = $request->celular;
        $model->fecha_nacimiento = $request->fecha_nacimiento;
        $model->sexo = $request->sexo;
        $model->direccion = $request->direccion;
        $model->email = $request->email;
        $model->save();

        return redirect()->route('paciente.index')
                ->with('mensaje', 'Actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
