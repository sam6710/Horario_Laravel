<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Asignatura;

class HorarioController extends Controller
{
    protected $asignatura;

    public function __construct(Asignatura $asignatura)
    {
        $this->asignatura = $asignatura;
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;

        $lunesPrimeraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(1, 1);
        $lunesSegundaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(1, 2);
        $lunesTerceraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(1, 3);
        $lunesCuartaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(1, 4);
        $lunesQuintaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(1, 5);
        $lunesSextaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(1, 6);

        $martesPrimeraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(2, 1);
        $martesSegundaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(2, 2);
        $martesTerceraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(2, 3);
        $martesCuartaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(2, 4);
        $martesQuintaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(2, 5);
        $martesSextaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(2, 6);

        $miercolesPrimeraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(3, 1);
        $miercolesSegundaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(3, 2);
        $miercolesTerceraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(3, 3);
        $miercolesCuartaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(3, 4);
        $miercolesQuintaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(3, 5);
        $miercolesSextaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(3, 6);

        $juevesPrimeraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(4, 1);
        $juevesSegundaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(4, 2);
        $juevesTerceraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(4, 3);
        $juevesCuartaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(4, 4);
        $juevesQuintaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(4, 5);
        $juevesSextaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(4, 6);

        $viernesPrimeraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(5, 1);
        $viernesSegundaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(5, 2);
        $viernesTerceraHora = $this->asignatura->obtenerAsignaturaporDiaYHora(5, 3);
        $viernesCuartaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(5, 4);
        $viernesQuintaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(5, 5);
        $viernesSextaHora = $this->asignatura->obtenerAsignaturaporDiaYHora(5, 6);

        return view("dashboard", [
            "lunesPrimeraHora" => $lunesPrimeraHora,
            "lunesSegundaHora" => $lunesSegundaHora,
            "lunesTerceraHora" => $lunesTerceraHora,
            "lunesCuartaHora" => $lunesCuartaHora,
            "lunesQuintaHora" => $lunesQuintaHora,
            "lunesSextaHora" => $lunesSextaHora,

            "martesPrimeraHora" => $martesPrimeraHora,
            "martesSegundaHora" => $martesSegundaHora,
            "martesTerceraHora" => $martesTerceraHora,
            "martesCuartaHora" => $martesCuartaHora,
            "martesQuintaHora" => $martesQuintaHora,
            "martesSextaHora" => $martesSextaHora,

            "miercolesPrimeraHora" => $miercolesPrimeraHora,
            "miercolesSegundaHora" => $miercolesSegundaHora,
            "miercolesTerceraHora" => $miercolesTerceraHora,
            "miercolesCuartaHora" => $miercolesCuartaHora,
            "miercolesQuintaHora" => $miercolesQuintaHora,
            "miercolesSextaHora" => $miercolesSextaHora,

            "juevesPrimeraHora" => $juevesPrimeraHora,
            "juevesSegundaHora" => $juevesSegundaHora,
            "juevesTerceraHora" => $juevesTerceraHora,
            "juevesCuartaHora" => $juevesCuartaHora,
            "juevesQuintaHora" => $juevesQuintaHora,
            "juevesSextaHora" => $juevesSextaHora,

            "viernesPrimeraHora" => $viernesPrimeraHora,
            "viernesSegundaHora" => $viernesSegundaHora,
            "viernesTerceraHora" => $viernesTerceraHora,
            "viernesCuartaHora" => $viernesCuartaHora,
            "viernesQuintaHora" => $viernesQuintaHora,
            "viernesSextaHora" => $viernesSextaHora,
        ]);
        
    }
}