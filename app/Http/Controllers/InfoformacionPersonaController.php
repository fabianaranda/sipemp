<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info_persona;
class InfoformacionPersonaController extends Controller
{
    function create_informacion_persona(Request $data){
        try {
            $user = new  info_persona();
            $user->religion = $data['religion'];
            $user->persona_id = $data['persona_id'];

            $user->empresa_asociativa = $data['empresa_asociativa'];
            $user->religion = $data['religion'];
            $user->docomento_pdf = $data['docomento_pdf'];
            $user->enfemerma_recurre = $data['enfemerma_recurre'];
            $user->habla_namuy_wam = $data['habla_namuy_wam'];
            $user->escritura_namuy_wam = $data['escritura_namuy_wam'];
            $user->habla_español = $data['habla_español'];
            $user->escribe_español  = $data['escribe_español'];
            $user->vestimenta_misak = $data['vestimenta_misak'];
            $user->medico_tradicional = $data['medico_tradicional'];
            $user->conocimientos_empiricos = $data['conocimientos_empiricos'];
            $user->deporte_constante = $data['deporte_constante'];
            $user->lugares_sagrados = $data['lugares_sagrados'];
            $user->juegos_tradicionales  = $data['juegos_tradicionales'];
            $user->baños_etapas_vida = $data['baños_etapas_vida'];
            $user->mestruacion = $data['mestruacion'];
            $user->medicina_alternativa = $data['medicina_alternativa'];
            $user->consumo_sustancias = $data['consumo_sustancias'];
            $user->comunidad_indigena = $data['comunidad_indigena'];
            $user->telefono = $data['telefono'];                                 

           
            $user->carnet_salud_id = $data['carnet_salud_id'];
            $user->profecion_id = $data['profecion_id'];
            $user->enfermedades_id = $data['enfermedades_id'];

            $user->hoga_id = $data['hoga_id'];

        

            //$user->persona_id = $data['persona_id'];
            
           // $user->codigo_sector = $data['codigo_sector'];
            $user->save();
            return ['validate'=>true,'id'=>$user->id];
           ///// code...
        } catch (\Throwable $th) {
           // return ['validate'=>false];
        }
    }
   


}
