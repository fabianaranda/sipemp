<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\hogar;
class CodigosForaniosTablasController extends Controller
{
    public function CodigoHogar($id_Hogar)
        {
            try {
                $data = hogar::findOrFail($id_Hogar);
                return view('interfaces.Ingresar_personas',compact('id_Hogar'));
            } catch (\Throwable $th) {
                return ['validate'=>false,'msj'=>'El codigo del hogar no exixte  '];
            }
        }
}
