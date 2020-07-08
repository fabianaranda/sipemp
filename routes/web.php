<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

/* 
|--------------------------------------------------------------------------
|              MENU LATERIAL DE LAS VISTAS DE CENSO POBLACIONAL
|
*/

		//Route menu lateral de los furmulario del censo poblacional ////
		 Route:: get('/menu-lateral',function(){
			return view('menu_lateral.MenuIzquierdoCensoSIPESM');
	   });
	 
	   Route:: get('/menu-lateral2',function(){
		return view('menu_lateral.menu_lateral_informacion');
   });
 
	   

		 

/*
|--------------------------------------------------------------------------
|                            CENSO VIVIENDA  
|
*/
Route::get('Vivienda','InterfacesController@interfas_vivienda')->name ('Vivienda');
Route::POST('Vivienda/Guardado', 'ViviendaController@create_informacion_vivienda')->name('Vivienda.create');
Route::get('Vivienda','InfraestructuraCasaMisakController@material_paredes')->name ('Vivienda');


//Route::get('Vivienda','MaterialCocinaController@material_cocina')->name ('Vivienda');


//Route::get('get-codigo_material_Pareded-list','DireccionViviendaHogarController@getmunicipio');
/*
|--------------------------------------------------------------------------
|                        CENSO HOGAR_PERSONA    
|
*/                       //Route  vista hogar persona 
//Route::get('Vivienda-Hogarr','InterfacesController@interfas_hogar_persona')->name ('hogar_persona');



//Route::POST('Vivienda-Hogar/Guardado', 'HogarController@create_hogar_persona');
                           //   Route para direccion de hogar 
Route::get('Vivienda-Hogar_persona/{id_persona}','DireccionViviendaHogarController@direccion_Hogar_Vivienda_persona')->name('Vivienda-Hogar_persona');
Route::get('get-municipio-list','DireccionViviendaHogarController@getmunicipio');
Route::get('get-resguardo-list','DireccionViviendaHogarController@getresguardo');
Route::get('get-zona-list','DireccionViviendaHogarController@getzona');
Route::get('get-vereda-list','DireccionViviendaHogarController@getvereda');
Route::get('get-sector-list','DireccionViviendaHogarController@getsector');

/*
|--------------------------------------------------------------------------
|                            CENSO HOGAR    
|
*/

Route::get('Hogar','InterfacesController@interfas_hogar')->name ('Hogar');
Route::get('Hogar','DireccionHogarController@direccion_Hogar');
Route::POST('Vivienda-Hogar/Guardado', 'HogarController@create_hogar');
Route::get('get-municipio-list','DireccionHogarController@getmunicipio');
Route::get('get-resguardo-list','DireccionHogarController@getresguardo');
Route::get('get-zona-list','DireccionHogarController@getzona');
Route::get('get-vereda-list','DireccionHogarController@getvereda');
Route::get('get-sector-list','DireccionHogarController@getsector');
/*
|--------------------------------------------------------------------------
|                            BUSCAR CODIGO DEL HOGAR    
|
*///Route::get('Hogar', 'BuscarCodigoViviendaController@buscar_codigo_vivienda');




//Route::get('Hogar', 'EconomiaComidaMisakController@create')->name('Hogar');

//Route::any('Comida', 'ComidasPropiasController@create')->name('Comida');




/* Route  para censar  infirmacion sociocultural  desde Plantas condimentarías y aromáticas  desde intefas hogar*/
//Route::get('Hogar', 'censosocioculturalcontroller@create')->name('interfaces.hogar');

//Route::POST('Hogar', 'plantas_medicinalesController@Plantas_Medicinales')->name('interfaces.hogar');


/*
|----------------------------------------------------------------------------------------------------------
|                   CENSO INGRESAR  MIEMBROS DE LA FAMILIA Misak  DENTRO DEL HOGAR  
*/




//Route::get('Ingresar_personas/{id_Hogar}','CodigosForaniosTablasController@CodigoHogar');

/*ROTAS PARA INGREZAR  DATOS SEGUN SU PARENTESCO "FAMILIA" */

Route::get('Ingresar_personas/{id_Hogar}','InterfacesController@CodigoHogar');
Route::post('Ingresar_personas', 'PersonasController@create_grupo_familiar');



/*
|--------------------------------------------------------------------------
|                        CENSO    PERSONAS DENTRO DE LA FAMILIA  Misak     
|
*/

Route::get('Personas', function () {
    return view('interfaces.personas');
});


Route::get('Personas/{id_hogar}','InterfacesController@interfas_personas')->name ('Personas');


/*
|--------------------------------------------------------------------------
|                        CENSO  INFORMACION PERSONA Misak  INGRESAR  a cada unu de los integrantes de la familia     
|
*/ Route::get('Informacion_Persona/{id_persona}','InterfacesController@interfas_informmacion_persona')->name ('Informacion_Persona');
    // ruta para actualizar estado mediante js
//Route::get('changeStatus', 'InterfacesController@changeStatus');
/// ruta para guardar informacion persona 
  Route::POST('info_persona/Guardado', 'InfoformacionPersonaController@create_informacion_persona');


/*
|--------------------------------------------------------------------------
|                       CENSO  MENU EDUCACION FORMAL      
|
*/ 

Route::get('Menu-Educacion-Formal/{id_persona}','InterfacesController@interfas_menu_educacion_formal')->name ('Menu-Educacion-Formal');



/*
|--------------------------------------------------------------------------
|                       CENSO   EDUCACION FORMAL DE LA PERSONA     
|
*/ 
Route::POST('Educacion_Formal/Guardado', 'EducacionPersonaController@create_educacion_escuale_colegio');


//Route::get('Educacion_Formal','InterfacesController@interfas_educacion_formal')->name ('Educacion_Formal');

Route::get('Educacion_Formal/{id_persona}','ColeEscueDireccionController@direccion_escue_cole')->name ('Educacion_Formal');

Route::get('get-colegio-list','ColeEscueDireccionController@getcolegio');

Route::get('get-sede-list','ColeEscueDireccionController@getsede');

 Route::get('get-tipoE-list','ColeEscueDireccionController@gettipoE');

/*
|--------------------------------------------------------------------------
|                       CENSO   EDUCACION SUPERIOR DE LA PERSONA     
|
*/

Route::get('Educacion_Superior/{id_persona}','InterfacesController@interfas_educacion_superior')->name ('Educacion_Superior');
Route::POST('Educacion_Superior', 'EducacionSuperiorController@create_educacion_superior');

/*
Route::get('Educacion_Superior','ColeEscuelaTerminadoDireccionController@direccion_escue_cole');

Route::get('get-colegio-list','ColeEscueDireccionController@getcolegio');

Route::get('get-sede-list','ColeEscueDireccionController@getsede');

 Route::get('get-tipoE-list','ColeEscueDireccionController@gettipoE');


 /*                                                                       |   
|                                                                         |
|--------------------------------resumen del certificado por persona -----------------------|
|                                                                         |
|                                                                         | 
*/  
Route::get('Resumen-Censo-Personal/{id_persona}','InterfacesController@interfas_resomen_censo')->name ('Resumen-Censo-Personal');


 /*                                                                       |   
|                                                                         |
|--------------------------------CERTIFICADO CENSO POBLACIONAL-----------------------|
|                                                                         |
|                                                                         | 
*/  
Route::get('Certificado-Censo/{hogar_id}','InterfacesController@interfas_certifcado_censo_familiar')->name ('Certificado-Censo');



 /*                                                                       |   
|                                                                         |
|--------------------------------OPCION DE COSULTAS-----------------------|
|                                                                         |
|                                                                         | 
*/                                                                        

 /*
|--------------------------------------------------------------------------
|                               MENU DE CONSULTAS   
*/ 
   Route::get('Menu-Cunsultas','InterfacesController@interfas_menu_consulta')->name('Menu-Cunsultas');


    /*
|--------------------------------------------------------------------------
|                              VISTA COSNSULTA    INFORMACION PERSONA POR DOCUMENTO DE IDENTIDAD  
*/ 
Route::any('Informacion-Persona', 'InformacionGeneralController@consulta_infomacion_general_persona');
Route::get('Informacion-Persona','InterfacesController@interfas_cunsulta_persona')->name('Informacion-Persona');




/*
|--------------------------------------------------------------------------
|                              VISTA COSNSULTA    INFORMACION HOGAR 
*/
Route::any('Informacion-hogar', 'ConsultaHogarController@consulta_infomacion_hogar_persona');
Route::get('Informacion-hogar','InterfacesController@interfas_cunsulta_hogar')->name('Informacion-hogar');

/*
|--------------------------------------------------------------------------
|                              VISTA COSNSULTA    INFORMACION VIVIENDA 
*/
Route::any('Informacion-vivienda', 'consultaviviendacontroller@consulta_infomacion_vivienda_persona');
Route::get('Informacion-vivienda','InterfacesController@interfas_cunsulta_vivienda')->name('Informacion-vivienda');


/*
|--------------------------------------------------------------------------
|                              VISTA  ACTUALIZACION MENU 
*/

Route::get('Menu-Actualizacion','InterfacesController@vista_nemu_actualizacion')->name('Menu-Actualizacio');

/*
|--------------------------------------------------------------------------
|                              VISTA  ACTUALIZACION DATOS 
*/
Route::any('Actualizacion-informacion-general', 'ActualizacionesInformacionController@actualizar_informacion_general_persona');

Route::get('Actualizacion-informacion-general','InterfacesController@vista_actualizacion_general')->name('Actualizacion-datos');
 

 // VISTA ACTUALIZACION TABLA PERSONA ///
Route::get('Edit-Informacion/{id_persona}','InterfacesController@actualizacion_informacion_personas')->name('Edit-Informacion');





//Route::resource('Actualizacion-Informacion-General-Persona','ActualizacionesInformacionController');


//Route::resource('Informacion','ActualizarInformacionPersonaController');


Route::resource('products','ProductController');

/*
Route:: get('products',function(){
	return view('products.index');
});


Route::get('products','ProductController@index')->name('products.index');


Route::get('products/{id_persona}','ProductController@product1')->name('products.edit');

Route::put('products/{id_persona}', 'ProductController@update')->name('products.update');

Route::get('products/{id_persona}', 'ProductController@edit')->name('products.edit');

/* */
/*

|--------------------------------------------------------------------------
|             VISTA  NUEVA PERSONA DENTRO DE HOGAR (INGRESAR PERSONA CON CODIGO DEL HOGAR)
*/

Route::get('Ingreso-persona-Nocleo-familiar','InterfacesController@vista_nueva_persona_nucleo_familiar')->name('Ingreso-persona-Nocleo-familiar');

Route::post('Ingreso-persona-Nocleo-familiar', 'PersonasController@create_grupo_familiar');
/* */
/*

|--------------------------------------------------------------------------
|             VISTA  NUEVA HOGAR MISAK- ACTUALIZACIONES , INGREZAR UN NUEVO HOGAR , PERSONAS REGISTRADOS EN EL SISTEMA

*/
// Ruta, hogar familia, 
Route::get('Nuevo-Hogar-Misak','InterfacesController@vista_nuevo_hogar_nucleo_familiar')->name('Nuevo-Hogar-Misak');

//Route::POST('Vivienda-Hogar/Guardado', 'HogarController@create_hogar');
Route::get('Nuevo-Hogar-Misak','HogarNuevoController@direccion_Hogar');
Route::get('get-municipio-list','HogarNuevoController@getmunicipio');
Route::get('get-resguardo-list','HogarNuevoController@getresguardo');
Route::get('get-zona-list','HogarNuevoController@getzona');
Route::get('get-vereda-list','HogarNuevoController@getvereda');
Route::get('get-sector-list','HogarNuevoController@getsector');


/// Ruta para ingresar la nueva familia, Misak..
Route::get('Nueva-Familia-Misak/{id_Hogar}','InterfacesController@vista_nuevo_nucleo_familiar')->name('Nuevo-Hogar-Misak');




/*
|--------------------------------------------------------------------------
|                              VISTA  REPORTES 
*/

Route::get('Menu-Reportes','InterfacesController@vista_menu_reporte')->name('Menu-Reportes');


/*
|--------------------------------------------------------------------------
|                              VISTA  REPORTES  personas 
*/

Route::get('Reportes-Personas','InterfacesController@vista_reportes_personas')->name('Reportes-Personas');

route::resource('Reportes-Personas','ReportesController');
/*
|--------------------------------------------------------------------------
|                       VISTA  REPORTE CENSO GENERAL POBLACIONAL por   VIGENCIA 
*/


Route::get('Censo-general','InterfacesController@vista_censoGeneralVigencia')->name('Censo-general');

Route::any('Censo_general', 'InformacionCensoControlador@consulta_censo_ministerio');
	
	/*
|--------------------------------------------------------------------------
|                       VISTA  REPORTE EDUCACION PROPIA  
*/
Route::get('Reporte-Educacion-Propia','InterfacesController@vista_reporte_educacion_propia')->name('Reporte-Educacion-Propia');

	/*
|--------------------------------------------------------------------------
|                       VISTA  REPORTE SALUD PROPIA  
*/

//Route::get('Reporte-Salud','InterfacesController@vista_reporte_salud_propio')->name('reportes.reporteSaludPropia');
      
                                                                                                                                                                                 
	Route:: get('/Reporte-Salud',function(){
		return view('reportes.reporteSaludPropia');
   });

   	/*
|--------------------------------------------------------------------------
|                       VISTA  MENU NOVEDAD RETIRO   
*/

Route::get('Menu-Novedad','InterfacesController@vista_interfas_menu_novedad')->name('Menu-Novedad');
// buscar persona fallecida 
Route::any('Buscar-Persona-Fallecido', 'BuscarPersonaFallecidaController@persona_fallecida_buscar');
Route::get('Buscar-Persona-Fallecido','InterfacesController@vista_interfas_buscar_persona_fallecida')->name('Buscar-Persona-Fallecido');

/// retiro  persona  fallecida 
Route::get('Novedad-Persona-Fallecido={id_persona}','InterfacesController@vista_interfas_novedad_fallecimiento')->name('Novedad-Persona-Fallecido');

/// buscar retiro del censo, por traslado. 
Route::any('Buscar-Persona-Retirar', 'BuscarPersonaRetirarController@buscar_persona_retirar');

Route::get('Buscar-Persona-Retirar','InterfacesController@vista_interfas_buscar_persona_retito')->name('Buscar-Persona-Retirar');


Route::get('Retiro-Censo-Poblacional={id_persona}','InterfacesController@vista_interfas_novedad_retiro_censo')->name('Retiro-Censo-Poblacional');

Route::get('/Validacion','InterfacesController@vista_interfas_validacionretiro')->name('Validacion');


   	/*
|--------------------------------------------------------------------------
|                       VISTA  MENU   ADMINISTRADOR    
*/
Route::get('/Menu-administrador','InterfacesController@Vista_interfas_menuAdminsitrador')->name('Menu-administrador');

   	/*
|--------------------------------------------------------------------------
|                       VISTA  MENU   USUARIOS   
*/
Route::get('/Menu-Usuarios','InterfacesController@vista_interfas_menu_usuarios')->name('Menu-Usuarios');
  
/*
|--------------------------------------------------------------------------
|                       VISTA   INGRESAR USUARIOS     
*/ Route::get('/Ingresar_Usuarios','InterfacesController@vista_interfas_ingrezar_usuarios')->name('Ingresar_Usuarios');

//Route::post('/Ingresar_Usuarios', 'usuariosController@create');
//Users
Route::POST('Ingresar_Usuarios/Guardado', 'usuariosController@create')->name('Ingresar_Usuarios.create');;


//->middleware('permission:users.index');
Route::get('Menu-Usuarios', 'UserController@index')->name('users.index');

Route::put('users/{user}', 'UserController@update')->name('users.update');
//->middleware('permission:users.edit');

Route::get('users/{user}', 'UserController@show')->name('users.show');
//->middleware('permission:users.show');

Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
//->middleware('permission:users.destroy');

Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
////->middleware('permission:users.edit');


Route::get('listtar-personas', function () {

    return view('Ingresar_Persona');
});


Route::get('listtar-persons', 'datatablecontroller@getdate')->name('listtar-persons');

Route::get('/listtar-persons/estado/{id}/{estado}', 'datatablecontroller@cambiar_estadoPersona');

//Route::get('listtar-persons', 'datatablecontroller@getdate')->name('listtar-persons');
//Route::get('/listtar-persons/estado/{id}/{estado}', 'datatablecontroller@cambiar_estadoPersona');


});

