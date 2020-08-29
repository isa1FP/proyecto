<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Servicio;

class ServicioController extends Controller
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
        $model = Servicio::orderBy('id','DESC')->paginate(3);

        $model->accion = 'servicio';

        return view('servicio.index', compact('model')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Servicio;

        return view('servicio.create')
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
        $model = new Servicio;
        $model->codigo = $request->codigo;
        $model->nombre = $request->nombre;
        $model->descripcion = $request->descripcion;
        $model->precio = $request->precio;
        $model->save();

        return redirect()->route('servicio.index')
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
        $model = Servicio::find($id);

        return view('servicio.edit')
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
        $model = Servicio::find($id);
        $model->codigo = $request->codigo;
        $model->nombre = $request->nombre;
        $model->descripcion = $request->descripcion;
        $model->precio = $request->precio;
        $model->save();

        return redirect()->route('servicio.index')
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
