<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use Carbon;

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
     * @param $cantidadMeses
     * @return string
     */
    public static function getCantidadPasesProduccion($cantidadMeses)
    {
        $valor = $cantidadMeses;
        $arrayDato = "";
        $decSumaTotal = 0;
        $fechaActual = Carbon\Carbon::now();

        while($valor > 0) {
            //select COUNT(*) AS CANTIDAD from wf_workflow.pmt__uid_frm_fppsd_f01 where FECHA_SOLICITUD BETWEEN '2017-07-12 00:00:00' AND '2017-07-12 23:59:59';
            $listaFormulario = DB::table('wf_workflow.pmt__uid_frm_fppsd_f01')
                ->select(DB::raw('COUNT(ID_UID_FRM) as cantidad'))
                //->where('FECHA_SOLICITUD', 'LIKE', '2017-07-12%')
                //->where('FECHA_SOLICITUD', 'LIKE', substr($fechaActual->addDays(-$valor)->toDateTimeString(),0,10).'%')
                ->where('FECHA_SOLICITUD', 'LIKE', substr($fechaActual->toDateString(),0,10).'%')
                ->get()
                ->first();

            $arrayDato = $listaFormulario->cantidad . ", ".$arrayDato;
            $fechaActual->subDay();
            $decSumaTotal = $decSumaTotal + $listaFormulario->cantidad;
            $valor = $valor - 1;
//        foreach ($listaFormulario as $lista) {
//            $retorno=$lista->cantidad;
//        }

        }
        //echo $arrayDato;
        $arrayDato = $decSumaTotal . ", ".$arrayDato;
        return $arrayDato;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
