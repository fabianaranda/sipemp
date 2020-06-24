<?php namespace 

App\Http\Controllers;

use Illuminate\Support\Facades\Input;
//Use plataforma\App\Http\Requests\ViviendaRequest;
use App\Http\Requests\ViviendaRequest;
use App\vivienda;
use App\hogar;
//use Request;

use Illuminate\Http\Request;
use DB;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('vivienda');
    }
    



    function create_informacion_vivienda(Request $data){
        $user = new  vivienda();
        $user->material_paredes_id = $data['material_paredes_id'];
        
        $user->material_piso_id = $data['material_piso_id'];
        $user->material_cocina_id = $data['material_cocina_id'];
        $user->material_techo_id = $data['material_techo_id'];
        $user->suministro_agua_id = $data['suministro_agua_id'];
        $user->servicio_energia_id = $data['servicio_energia_id'];
        $user->servicio_sanitario_id = $data['servicio_sanitario_id'];

        $user->numero_hogares = $data['numero_hogares'];
        $user->estado_conservacion = $data['estado_conservacion'];
        $user->periodo_construccion = $data['periodo_construccion'];
        $user->forma_casa = $data['forma_casa'];
        $user->tamaño_casa = $data['tamaño_casa'];
        $user->servicio_internet = $data['servicio_internet'];
        $user->numero_cuertos = $data['numero_cuertos'];
        $user->cuartos_usados = $data['cuartos_usados'];

        $user->wetasphalt = $data['wetasphalt'];
        $user->save();
       //return redirect()->route('interfaces.hogar_persona', ['id_vivienda' => $user->id]);
       return ['validate'=>true,'id'=>$user->id];
       //return view('interfaces.hogar_persona');
    }








   
    function create_hogar_persona(Request $data){
        //try {
            $user = new  hogar();
            $user->vivienda_id = $data['vivienda_id'];
            $user->codigo_sector = $data['codigo_sector'];
            $user->save();
            return ['validate'=>true,'id'=>$user->id];
            //code...
       // } catch (\Throwable $th) {
           // return ['validate'=>false];
        //}
    }
    
     


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ /*
    
    public function create(Request $request)
      {
        $data=Request::all();

        $hogar = new hogar;

       // $hogar -> estado = $data["estado "];
        $hogar -> dococabeza_hogar = $data["dococabeza_hogar"];
        //$hogar -> nombre_cabe_hogar  = $data["nombre_cabe_hogar"];
        //$hogar -> apellido_cabe_hogar = $data["apellido_cabe_hogar"];  
        
       // $hogar -> cantidad_personas = $data["cantidad_personas"];
       
        $hogar -> codigo_sector = $data["codigo_sector"];
        $resul = $hogar->save();

        if ($resul)
            {
            
                return view("mensajes.msj_correcto")->with("msj","Información Guardado en el sistema ");   
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
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
  
    public function show($id)
    {
        //$personas = vivienda::find($id);

        //return view('interfaces.informacion_general_persona', compact('personas'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function edit(Vivienda $vivienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vivienda $vivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vivienda $vivienda)
    {
        //
    }
}
