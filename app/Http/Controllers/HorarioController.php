<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::all();
        return view('horarios.index')->with('horarios',$horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now();
        $hora_ent = Carbon::now();
        $hora_sal = '23:55:45';
        $horas_trab = $hora_ent->diffInHours($hora_sal);
        $total_pagar = $horas_trab*12;
        return view('horarios.create')->with('fecha',$fecha)->with('hora_ent', $hora_ent)->with('hora_sal',$hora_sal)->with('horas_trab',$horas_trab)->with('total_pagar',$total_pagar);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required',
            'hora_ingreso' => 'required',
            'hora_entrada' => 'required',

        ]);

        $horarios= new Horario();
        $horarios->fecha =$request->get('fecha');
        $horarios->hora_ingreso =$request->get('hora_ingreso');
        $horarios->hora_entrada =$request->get('hora_entrada');
        $horarios->hora_salida =$request->get('hora_salida');
        $horarios->horas_trabajadas =$request->get('horas_trabajadas');
        $horarios->total_pagar =$request->get('total_pagar');
        $horarios->user_id =$request->get('user_id');

        $horarios->save();

        return redirect()->route('horarios.index');
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
        //
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
        //
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

    public function reporteHorario(){

        $usuarios= User::all();
        return view('horarios.reporteHorario')->with('usuarios',$usuarios);
    }
}
