<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;
use App\Models\Asignatura;
use App\Http\Controllers\AsignaturaController;

class HoraController extends Controller
{
    protected $horas, $asignaturas;
    public function __construct(Hora $horas,Asignatura $asignaturas)
    {
        $this->horas = $horas;
        $this->asignaturas = $asignaturas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $horas = $this->horas->obtenerHora();
        return view('horas.lista', ['horas' => $horas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignaturas = $this->asignaturas->obtenerAsignatura();
        return view('horas.crear',['asignaturas' => $asignaturas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hora = new Hora($request->all());
        $hora->save();
        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function show($codAs)
    {
        $hora = $this->horas->obtenerHorasPorCodAs($codAs);
        return view('horas.ver', ['hora' => $hora]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $diaH,$horaH
     * @return \Illuminate\Http\Response
     */
    public function edit($diaH,$horaH)
    {
        $hora = $this->horas->obtenerHoraPorCod($diaH,$horaH);
        return view('horas.editar', ['hora' => $hora]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $diaH,$horaH
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $diaH,$horaH)
    {
        $hora = Hora::find($diaH,$horaH);
        $hora->fill($request->all());
        $hora->save();
        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $diaH,$horaH
     * @return \Illuminate\Http\Response
     */
    public function destroy($diaH,$horaH)
    {
        $hora = Hora::find($diaH,$horaH);
        $hora->delete();
        return redirect()->action([HoraController::class, 'index']);
    }
}
