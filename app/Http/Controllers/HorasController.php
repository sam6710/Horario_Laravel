<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;
use App\Models\Asignatura;

class HorasController extends Controller
{
    protected $horas;

    public function __construct(Hora $horas){
        $this->horas = $horas;
    }

    public function index()
    {
        $horas = $this->horas->obtenerHora();
        return view("horas.ver", ["horas" => $horas]);
    }


    public function create()
    {
        return view("horas.crear");
    }


    public function store(Request $request)
    {
        $horas = new Hora($request->all());
        $horas->save();
        return redirect()->action([HorasController::class, "index"]);
    }


    public function show($id)
    {
        $horas = $this->hora->obtenerHoraPorId($id);
        return view("horas.ver", ["hora" => $hora]);
    }


    public function edit($id)
    {
        $horas = $this->horas->obtenerHoraPorId($id);
        return view("horas.editar", ["hora" => $hora]);
    }


    public function update(Request $request, $id)
    {
        $horas = Hora::find($id);
        $horas->fill($request->all());
        $horas->save();
        return redirect()->action([HorasController::class, 'index']);
    }


    public function destroy($id)
    {
        $hora = Hora::find($id);
        $hora->delete();
        return redirect()->action([HorasController::class, 'index']);
    }
}

