<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;

class AsignaturasController extends Controller
{
    protected $asignaturas;
    
    public function __construct(Asignatura $asignaturas)
    {
        $this->asignaturas = $asignaturas;
    }
    
    public function index()
    {
        $asignaturas = $this->asignaturas->obtenerAsignatura();
        return view("asignaturas.ver", ["asignaturas" => $asignaturas]);
    }


    public function create()
    {
        return view("asignaturas.crear");
    }


    public function store(Request $request)
    {
        $asignaturas = new Asignatura($request->all());
        $asignaturas->save();
        return redirect()->action([AsignaturasController::class, "index"]);
    }


    public function show($id)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorId($id);
        return view("asignaturas.ver", ["asignaturas" => $asignaturas]);
    }


    public function edit($id)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorId($id);
        return view("asignaturas.editar", ["asignaturas" => $asignaturas]);
    }


    public function update(Request $request, $id)
    {
        $asignatura = $this->asignatura->obtenerAsignaturaPorId($id);
        $asignatura->nombreAs = $request->nombreAs;
        $asignatura->nombreCortoAs = $request->nombreCortoAs;
        $asignatura->profesorAs = $request->profesorAs;
        $asignatura->colorAs = $request->colorAs;
        $asignatura->save();
        return redirect()->action([AsignaturasController::class, 'index']);
    }


    public function destroy($id)
    {
        $asignatura = $this->asignatura->obtenerAsignaturaPorId($id);
        $asignatura->delete();
        return redirect()->action([AsignaturasController::class, 'index']);
    }
}
