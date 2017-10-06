<?php
/**
 * Created by PhpStorm.
 * User: EddyBanda
 * Date: 11/8/2017
 * Time: 10:37 PM
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;


class datosFormularioController extends BaseController
{


    public function btnConsulta(Request $req)
    {
        $dato1 = $req->input('dato1');
        $dato2 = $req->input('dato2');

        //$listaFormulario = DB::table('wf_workflow.pmt__uid_frm_fppsd_f01')->where(['funcionario_solicitante'=>$dato1,'cod_cite'=>$dato2])->value('nro_ticket_cpd');
        $listaFormulario = DB::table('wf_workflow.pmt__uid_frm_fppsd_f01')->where(['funcionario_solicitante'=>$dato1,'cod_cite'=>$dato2])->get();

        if(count($listaFormulario) >0)
        {
            foreach ($listaFormulario as $lista)  {
                echo "DATOS ENCONTRADOS".$lista->NRO_TICKET_CPD;

            }

            // ***** BLOQUE CORRECTO *****
            //echo "DATOS ENCONTRADOS".$dato1;
            //foreach ($listaFormulario as $lista)  {
            //    echo "DATOS ENCONTRADOS".$lista->NRO_TICKET_CPD;
            //}
        }
        else
        {
            echo "DATOS NO ENCONTRADOS";
        }

        //echo count($listaFormulario);
        //return view('pasoproduccion', ['listaFormulario' => $listaFormulario]);

    }
}

?>