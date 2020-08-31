<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('blackDashboardPro.app');
        $model = Paciente::orderBy('id','DESC')->paginate(3);
        $model->accion = 'MisPacientes';
        return view('home', compact('model'));
    }
}
