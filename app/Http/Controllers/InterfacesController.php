<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Request;
use Illuminate\Http\Request;
use App\Personas;
use App\info_persona;
Use App\idiomas;
use App\hogar;
use App\Role;
Use App\limitaciones_fisinas;
use DB;

class InterfacesController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


   
    public  function interfas_vivienda ()
    {
        return view('interfaces.vivienda');
    }
    
    public  function interfas_hogar_persona( Request $request)
    {  
        $request->user()->authorizeRoles('administrador');
        return view('interfaces.hogar_persona');
    }
 
    
    public  function interfas_hogar ()
    {
        return view('interfaces.hogar');
    }

/// Agregar residentes y/o miembros del hogar
//Ingrese a las personas que conforman el hogar .
    public function CodigoHogar($id_Hogar)
    {
        try {
            $data = hogar::findOrFail($id_Hogar);
            return view('interfaces.Ingresar_personas',compact('id_Hogar'));
        } catch (\Throwable $th) {
            return ['validate'=>false,'msj'=>'El codigo del hogar no exixte'];
        }
    
}



    /*public  function interfas_personas ($id_hogar)
    {
      try {
         $datos = Personas::where('hogar_id',$id_hogar)->get();
        return view('interfaces.personas',compact('datos'));
     } catch (\Throwable $th) {
         return ['validate'=>false,'msj'=>'Usted no tiene acceso a este contenido'];
    }
}
*/
/*
  public  function interfas_personas ($id_hogar)
    {
      
         $Personas = Personas::where('hogar_id',$id_hogar)->get();
        //return view('interfaces.personas',compact('datos'));
            return Datatables::of($Personas)
      ->addColumn('action', function ($user) {
        // estado   de censado ,  -- ingreso de informacion personal
        $btnEstado = "";
        if($user->estado ==1){
          //boton  bt estado 
         $btnEstado ='<a href="/listtar-persons/'.$user->id.'/0" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Informacion Persona</a>';
            // si no  pregunto 
        }else if($user->estado ==0){
          // que me pase en 
          $btnEstado ='<a href="/listtar-persons/'.$user->id.'/1" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-ok"></i> Informacion Persona</a>';
    
        }
        
         /// concatenamos  la bariable tbEstado para que returne
        return $btnEstado.'<a href="/Informacion_Persona/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editr</a>';
       })
        // returna estado 1 
       ->editColumn('estado', function ($user) {
        return  $user->estado == 1?"Sin Censar":"Censado"; 
       })
       
      ->make(true);
      //de lo contrario retorna 
      return view('Ingresar_Persona');
    }
        // funcion cambiar estado  recibe dos parametros , idi y estado 
    public function cambiar_estado($id,$estado  ){
      // busco el oroducto 
      $Personas = Personas::find($id);
     
      if($Personas ==null){
        // hacer la notificacion que no se encontro el producto 
        return redirect('Ingresar_Person');
      }
     /// estado camvielo por estado que llego 

     // notificamos y redireccionamos a producto 
      $Personas->update(["estado"=>$estado]);

      return redirect('Informacion_Persona/');
    }
*/


     
        


    public  function interfas_informmacion_persona($id_persona)
    {
        $datos = Personas::findOrFail($id_persona);

        $profecion = DB::table("profecion")->pluck("nombre","id");

        $idiomas  =  idiomas::get();
        $limitaciones_fisinas  =  limitaciones_fisinas::get();
         
        $carnet_salud = DB::table("carnet_salud")->pluck("nombre","id");
        $enfermedades = DB::table("enfermedades")->pluck("nombre","id");

        return view('interfaces.informmacion_persona',compact('datos','profecion','idiomas','limitaciones_fisinas','carnet_salud','enfermedades'));
    }




    public  function interfas_menu_educacion_formal($id_persona)
    {
        $datos = info_persona::findOrFail($id_persona);
        return view('interfaces.menu_educacion_formal',compact('datos'));
        
    }


    
    public  function interfas_educacion_formal()
    {
       
    }
    

    
    public  function interfas_educacion_superior( $id_persona)
    { 
        $datos = info_persona::findOrFail($id_persona);
       
        return view('interfaces.educacion_superior',compact('datos'));
    }






/*
    public function censo_informacion_general()
    {
        return view('interfaces.Ingresar_Habitante');
    }

    */

    


    public  function interfas_familia_hogar ()
    {
        return view('interfaces.familia_persona');
    }

    
    

    


    
    
    public  function interfas_nivel_educativo()
    {
        return view('interfaces.nivel_educativo');
    }
    

   

  
    
    public  function interfas_informacion_general_censo()
    {
        return view('interfaces.informacion_general_censo');
    }

   
 ///////////vistas  para realizar consultas //////////

   public  function interfas_menu_consulta()
    {   
        return view('consultas.menu_consultas');
    }

    public  function interfas_cunsulta_persona()
    {
        return view('consultas.informacion_persona');
    }
    

    

    public  function interfas_cunsulta_hogar(Request $request)
    {      ///para no mostrar  vista consultar hogar  por  la persona encargada del censo ////
        $request->user()->authorizeRoles('administrador');
        return view('consultas.informacion_hogar');
    }

    

    public  function interfas_cunsulta_vivienda(Request $request)
    {     ///para no mostrar   interfas consultas   por  la persona encargada del censo ////
        $request->user()->authorizeRoles('administrador');
        return view('consultas.informacion_vivienda');
    }


    //////actualizaciones informacion vivienda/////////

    public  function vista_actualizacion_general ()
    {
        return view ('actualizaciones_censo.actualizacion');
    }

   // actualizacion  infirmacion persona-- pasar variables de tablas //////////////////////////////
   ///////////////////////////////////
   /////////////////////////////////////7
    public  function  actualizacion_informacion_personas ($id_persona)
    {
        $datos = Personas::findOrFail($id_persona);
        $datos1 = hogar::findOrFail($id_persona);
        
        return view('actualizaciones_censo.actualizacion_informacion_persona',compact('datos','datos1'));
        
    }


    public  function vista_nuevo_hogar_nucleo_familiar ()
    {
        return view ('actualizaciones_censo.nuevo_hogar_familia_misak');
    }



    
    public function vista_nuevo_nucleo_familiar($id_Hogar)
    {
        try {
            $data = hogar::findOrFail($id_Hogar);
            return view('actualizaciones_censo.nuevo_nucleo_familiar',compact('id_Hogar'));
        } catch (\Throwable $th) {
            return ['validate'=>false,'msj'=>'El codigo del hogar no exixte'];
        }
    
}
    








    ///////////////////////////////////////
    ///////////////////////////////////////
    public  function vista_nemu_actualizacion (Request $request)
    {    ///para no mostrar  vista menu  actualizacion  por  la persona encargada del censo ////
        $request->user()->authorizeRoles(['administrador']);
        return view ('actualizaciones_censo.menu_actualizacion');
    }

    public  function vista_nueva_persona_nucleo_familiar ()
    {
        return view ('actualizaciones_censo.nueva_persona_nucleo_familiar');
    }


    
    
    ///////////Interfaces reporte  //////////

    public  function vista_menu_reporte ( Request $request)
    {    ///para no mostrar  vista menu  de reporte por  la persona encargada del censo ////
        $request->user()->authorizeRoles('administrador');
        return  view('reportes.menu_reportes');
    }

    
    public  function vista_reportes_personas ()
    {
        return  view('reportes.reportes_personas');
    }


    public  function vista_censoGeneralVigencia ()
    {
        return  view('reportes.censo_general_vigencia');
    }

    public  function vista_reporte_educacion_propia ()
    {
        return view('reportes.reporte_educacion_propia');
    }

    public  function vista_reporte_salud_propio ()
    {
        return  view('reportes.reporteSaludPropia');
    }


    
    public  function interfas_reporte ()
    {
        return ('reportes.reporte');
    }
    

    /// VISTAS PARA NOVEDAD DE RETIRO //////////


    public  function vista_interfas_menu_novedad (Request $request)
    {
          
        $request->user()->authorizeRoles('administrador');
        return view('novedad_retiro.menu_noverdad');
    }


    public  function vista_interfas_buscar_persona_fallecida (Request $request)
    {
          
        $request->user()->authorizeRoles('administrador');
        return view('novedad_retiro.buscar_persona_fallecido');
    }



    public  function vista_interfas_novedad_fallecimiento($id_persona)
    {  
        $datos = Personas::findOrFail($id_persona);
        return view('novedad_retiro.retiro_fallecimiento',compact('datos'));
    }


    public  function vista_interfas_buscar_persona_retito (Request $request)
    {
          
        $request->user()->authorizeRoles('administrador');
        return view('novedad_retiro.buscar_persona_retiro',compact('datos'));
    }


   

//// vista formulario de tetiro ////
    public  function vista_interfas_novedad_retiro_censo ($id_persona)
    {   $datos = Personas::findOrFail($id_persona);
        return view('novedad_retiro.retiro_censo_poblacional',compact('datos'));
    }


    public  function vista_interfas_validacionretiro (Request $request)
    {     $request->user()->authorizeRoles('administrador');
        return view('/novedad_retiro.validacion_retiro
        ');
    }

   //////////VISTAS ADMINISTRADOR /////////////

   public  function vista_interfas_menuAdminsitrador (Request $request ) 
   {
        ///para mostrar  vista menu   por  la persona encargada del censo ////
        $request->user()->authorizeRoles('administrador');
      
       return view('/administrador.nemuAdministrador');

   }

 



   public  function vista_interfas_ingrezar_usuarios ()
   {         $datos = Role::get();
             return view('/administrador.ingresar_usuarios',compact('datos'));
   }

   public  function vista_interfas_menu_usuarios (Request $request ) 
   {
        ///para mostrar  vista menu   por  la persona encargada del censo ////
        $request->user()->authorizeRoles('administrador');
      
       return view('/administrador.menu_usuarios');

   }

  

    /////////////////////interfaces  educacion salud propio/////////////////////////////

    public  function educacion_salud_propia ()
    {
        return view('educacion_salud_propia.educacion_salud');
    }

    public  function interfas_informacion_general_persona()
    {
        return view('interfaces.informacion_general_persona');
    }
}

