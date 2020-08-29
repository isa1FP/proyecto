<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Pago::orderBy('id','DESC')->paginate(3);

        return view('pago.index', compact('model')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pago;

        return view('pago.create')
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
        $model = new Pago;
        $model->fechapa = $request->fechapa;
        $model->servicio = $request->servicio;
        $model->monto = $request->monto;
        $model->saldo = $request->saldo;
        $model->save();

        return redirect()->route('pago.index')
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
        $model = Pago::find($id);

        return view('pago.edit')
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
        $model = Pago::find($id);
        $model->fechapa = $request->fechapa;
        $model->servicio = $request->servicio;
        $model->monto = $request->monto;
        $model->saldo = $request->saldo;
        $model->save();

        return redirect()->route('pago.index')
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
