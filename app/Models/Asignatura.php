<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";
    protected $fillable = ['codAs',"user_id",'nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs'];
    
    public function obtenerAsignatura()
    {
        return Asignatura::all();
    }

    public function obtenerAsignaturaPorCod($codAs)
    {
        return Asignatura::find($codAs);
    }

    public function obtenerAsignaturasPorUserId($user_id){
            return Asignatura::where('user_id', '=', $user_id);
    }

}
