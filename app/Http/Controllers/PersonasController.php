<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;
//use Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$familia = Personas::paginate();

       // return view('interfaces.familia_persona', compact('familia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
   


    public function create_grupo_familiar(Request $request)
    {
        $personas = $request->personas;
        foreach ($personas as $key => $data) 
        {           
            //$data=request::all();
            $hogar = new Personas;
            //$hogar -> estado = $data["estado "];
            $hogar -> n_integrantes  = $data["integrantes"];
            $hogar -> docomento_persona = $data["docomento_persona"];
            $hogar -> tipo_identificacion = $data["tipo_identificacion"];
            $hogar -> nombres = $data["nombres"];
            $hogar -> apellidos  = $data["apellidos"];
            $hogar -> estado_civil  = $data["estado_civil"];
           
            $hogar -> fecha_nacimiento  = $data["fecha_nacimiento"];
           // $hogar -> edad_actual  = $data["edad_actual"];
            $hogar -> nivel_academico  = $data["nivel_academico"];
            $hogar -> parentesco  = $data["parentesco"];
            $hogar -> hogar_id  = $data["hogar_id"];
          
           
            //$hogar -> docomento_pdf  = $data["docomento_pdf"];
            //$hogar -> hogar_id  = $data["q"];
           // $hogar -> fecha_actualizacion  = $data["fecha_actualizacion"];
           // $hogar -> fecha_censo  = $data["fecha_censo"];
            //*/
           // $hogar -> codigo_profesion  = $data["codigo_profesion"];
            $hogar->save();
        }
        if (true /*$resul*/)
            {
            
               //return view("mensajes.msj_correcto")->with("msj","Informacion de la vivienda Guardado");   
             return ['validate'=>true,'hogar_id'=>$hogar->hogar_id];
            
            }  else
            {
              return back()->with("errormsj","Datos no Guardado");
		    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     *
     * @param  int  $numero_documento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$personas = Personas::find($id);

        //return view('interfaces.informacion_general_persona', compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(personas $personas)
    {
        //
    }
}
