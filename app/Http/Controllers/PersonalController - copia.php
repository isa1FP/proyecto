<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personal;

class PersonalController extends Controller
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
        $model = Personal::orderBy('id','DESC')->paginate(3);

        $model->accion = 'personal';

        return view('personal.index', compact('model')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Personal;

        return view('personal.create')
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
        $model = new Personal;
        $model->ci = $request->ci;
        $model->nombres = $request->nombres;
        $model->apellidos = $request->apellidos;
        $model->fecha_nacimiento = $request->fecha_nacimiento;
        $model->sexo = $request->sexo;
        $model->estadocivil = $request->estadocivil;
        $model->tipodocumento = $request->tipodocumento;
        $model->numero = $request->numero;
        $model->direccion = $request->direccion;
        $model->telefono = $request->telefono;
        $model->celular = $request->celular;
        $model->email = $request->email;
        $model->ocupacion = $request->ocupacion;
        $model->cargo = $request->cargo;
        $model->especialidad = $request->especialidad;
        $model->login = $request->login;
        $model->clave = $request->clave;
        $model->permisos = $request->permisos;
        $model->save();

        return redirect()->route('personal.index')
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
        $model = Personal::find($id);

        return view('personal.edit')
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
        $model = Personal::find($id);
        $model->ci = $request->ci;
        $model->nombres = $request->nombre;
        $model->apellidos = $request->apellidos;
        $model->fecha_nacimiento = $request->fecha_nacimiento;
        $model->sexo = $request->sexo;
        $model->estadocivil = $request->estadocivil;
        $model->tipodocumento = $request->tipodocumento;
        $model->numero = $request->numero;
        $model->direccion = $request->direccion;
        $model->telefono = $request->telefono;
        $model->celular = $request->celular;
        $model->email = $request->email;
        $model->ocupacion = $request->ocupacion;
        $model->cargo = $request->cargo;
        $model->especialidad = $request->especialidad;
        $model->login = $request->login;
        $model->clave = $request->clave;
        $model->permisos = $request->permisos;
        $model->save();

        return redirect()->route('personal.index')
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
