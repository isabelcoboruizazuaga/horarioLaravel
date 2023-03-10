<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    
    protected $table = "horas";
    protected $fillable = ['diaH', 'horaH','codAs'];

    public function obtenerHora()
    {
        return Hora::all();
    }

    public function obtenerHoraPorCod($diaH,$horaH)
    {
        return Hora::find($diaH,$horaH);
    }

    public function obtenerHorasPorCodAs($codAs){
            return Hora::where('codAs', '=', $codAs);
    }
}
