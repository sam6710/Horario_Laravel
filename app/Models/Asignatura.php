<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";
    protected $fillable = ["codAs", "nombreAs", "nombreCortosAs", "profesorAs", "colorAs", "user_id"];
    public $primaryKey = "codAs";
    protected $hidden = ['codAs'];

    public function obtenerAsignatura(){
        return asignatura::all();
    }

    public function obtenerAsignaturaPorId($id){
        return asignatura::find($id);
    }

    public function obtenerAsignaturaporDiaYHora($hora, $dia)
    {
        $id = Auth::user()->id;
        $query = DB::table('horas')
            ->join('asignaturas', 'horas.codAs', '=', 'asignaturas.codAs')
            ->where('horas.diaH', $dia)
            ->where('horas.horaH', $hora)
            ->where('asignaturas.user_id', $id)
            ->first();
        return $query;
    }

}
