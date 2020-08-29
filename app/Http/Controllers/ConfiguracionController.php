<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Configuracion;

class ConfiguracionController extends Controller
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
        $model = Configuracion::orderBy('id','DESC')->paginate(3);

        $model->accion = 'configuracion';

        return view('configuracion.index', compact('model')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Configuracion;

        return view('configuracion.create')
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
        $model = new Configuracion;
        $model->razonsocial = $request->razonsocial;
        $model->nit = $request->nit;
        $model->direccion = $request->direccion;
        $model->telefono = $request->telefono;
        $model->celular = $request->celular;
        $model->email = $request->email;
        $model->responsable = $request->responsable;
        $model->logo = $request->logo;
        $model->save();

        return redirect()->route('configuracion.index')
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
        $model = Configuracion::find($id);

        return view('configuracion.edit')
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
        $model = Configuracion::find($id);
        $model->razonsocial = $request->razonsocial;
        $model->nit = $request->nit;
        $model->direccion = $request->direccion;
        $model->telefono = $request->telefono;
        $model->celular = $request->celular;
        $model->email = $request->email;
        $model->responsable = $request->responsable;
        $model->logo = $request->logo;
        $model->save();

        return redirect()->route('configuracion.index')
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
