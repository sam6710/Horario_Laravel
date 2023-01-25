<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    protected $table = "asignaturas";
    protected $fillable = ["diaH", "horaH", "codAs"];
    public $primaryKey = ["diaH", "horaH"];
    protected $hidden = ['codAs'];

    public function obtenerHora(){
        return hora::all();
    }

    public function obtenerHoraPorId($id){
        return hora::find($id);
    }
}
