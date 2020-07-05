@extends('layouts.menu2')

@section('content')
<section class="cta">
<div class="container">
<div class="wrapper">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Administrador</h1>
          <h2 class="">Inicio</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Administrador</a></li>
            <li class="active">Administrador</li>
          </ol>
        </div>
      </div>

      
     <!-- INICIO DE  CODIGO DE FORMULARIO -->


		       <div class="container">
                    <!--Informacion menu izquierda-->
                    <div class="col-md-3 col-sm-4 col-xs-12 ">    
                                  				
                            <iframe  frameborder="0" width="100%" scrolling="no" height="245" 
							
                            src="./menu-lateral">
							
							</iframe>              
                   </div>
                        <!-- Fin Informacion menu izquierda-->    
                        <div class="col-md-9 ">
                            <div class="ContenedorFormularioCenso">
                                <div class="titulo_informacion">
								           
                                <table >
	                             <tbody>
	                                  <tr>
			                            <td style="width:3px;"></td>
		                               <td  title="Censo vivienda de familia Misak" >
				                       <table class="active">
			                           <tbody>
			                            <tr>
				                           <td ><b href="" >VIVIENDA MISAK</b></td>
			                             </tr>
		                               </tbody>
		                                </table>
		                          </td>
				
				                <td style="width:3px;"></td>
		                          <td  title="Censo del Hogar Misak  " >
		                         <table class="active" >
			                     <tbody>
			                    <tr>
				                 <td >
				                   <b  href=""  >HOGAR MISAK </b>
				                 </td>
			                    </tr>
		                       </tbody>
		
		                       </table>
		                       </td>
			  
		                       <td style="width:3px;"></td>
		                        <td title="Miembros de la familia   Misak " >
		                          <table class="active">
					              <tbody>
			                      <tr>
				                   <td ><b  href="" >FAMILIA  MISAK</b></td>
			                      </tr>
		                         </tbody>
		                       </table>
		                      </td>
		
                          <td  title="Información de la persona que viven dentro de la familia " >
		                       <table   class="active">
			                       <tbody>
			                        <tr>
				                      <td >
				                          <b  href=""  >PERSONAS </b>
				                    </td>
			                        </tr>
		                         </tbody>
		
		                       </table>
		                     </td>
		
		                   <td style="width:3px;"></td>
		                     <td  title="Información de la persona que viven dentro de la familia " >
		                       <table  class="active" >
			                       <tbody>
			                        <tr>
				                      <td >
				                          <b  href=""  >INFORMACIÓN PERSONA </b>
				                    </td>
			                        </tr>
		                         </tbody>
		
		                       </table>
		                     </td>	
				
				             <td style="width:3px;"></td>
		                       <td  title="Nivel educativo  que tiene  la persona que vive en la familia" >
		                        <table class="estatic" >
			                       <tbody>
			                        <tr>
				                    <td >
				                     <b  href=""  >NIVEL EDUCATIVO </b>
				                     </td>
			                           </tr>
		                            </tbody>
		
		                         </table>
		                        </td>
                              </tr>
                            </tbody>
                              </table>
      
			                           <div  class="color_infor noPrint" style="margin-top: 15px;">  
					                     <span  class="color_infor  noPrint">Usted se encuentra en: &nbsp;&nbsp;Censo Poblacional Misak SIPEMP&gt; <font color="#666666">Información Persona</font></span>        
			                           </div>					
                                        <h1 >Informacion Persona </h1>
                                 </div><!--FIN titulo_infobasica-->
								   <!-- FORMULARIO-->
							

                                       <div  class="col-md-12 col-sm-12 col-xs-12 educacion_primero">
                                           <div class="form-group form-inline input-group-sm">
                                              <label class="pull-left" for="ddSiEducacion">¿Tiene alguna educación formal? </label>
											  
                                               <select name="" id="ddArmonizacion" tabindex="51" class="form-control" onchange="showArmonizacion(this);" class="form-control col-md-5 col-md-offset-1 col-sm-12 col-xs-12" >
		                                        <option value="">Seleccione</option>
		                                       <option value="1">SI</option>
		                                      <option  value="0">NO</option>

	                                        </select>
                                               
					                        </div>
                
                                      </div>
									  
								  
									  
									  
									  
									  
									     
            
			 
			
			
                            <div class="col-md-12 col-sm-12 col-xs-12">
                               
                                       	    <div class="col-md-6 col-sm-12 col-xs-12">

                                                <div class="pull-right botones-pies">
                                               
                                                <a onclick="  title="Guardar Educación" class="btn btn-success btn-xs" > Terminar Proceso del censo </a>
                                                
												
                     												
                                            </div>
                                         
                                          <br>
                                      
                                        <div class="clearfix"></div>
                                     </div>
										
										
										  
                              </div>
                             <br>
							 <br>
							 
		
		
		 
		 
                                    <div id="SiHaceArmonizacion" style="visibility: hidden; display: none;">
									<div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                       <div class="recuadro_info_persona">SELECCIONE EL NIVEL DE EDUCACIÓN QUE TIENE  </div>
                                         
										  <div class="panel panel-default">
                                        <div class="well resume-module module-jobs" >
                                           <h2 class="module-title">
                                            Educacion __________  
                                           </h2>
                                        <div class="js-box-laboral-experience" id="experiencia-laboral">
                                          <h3 class="h4">___________</h3>
                                         <div class="module-collapsible collapse in" aria-expanded="true">
                                          <div class="module-summary-wrapper laboral-experience">
                                          <p class="text-muted">
                                             ----------------  </p>
                                         <h4 class="panel-title">
                                             <a href="{{ route('Educacion_Formal', $datos->id) }}" 
                                                       class="btn btn-sm btn-default" style="background-color:#1b9e1d;border: 0px !important;color:white;"> <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            Ingresar Informacion Personal de  
              
                                                                            </a>
                                                                            </a>
                                       </h4>
                                     </div>
                                   </div>
                                </div>
                             </div>
						 </div>
						 
						 <div class="panel panel-default">
                            <div class="well resume-module module-jobs" >
                             <h2 class="module-title">
                                 Educacion Superior 
                            </h2>
                           <div class="js-box-laboral-experience" id="experiencia-laboral">
                            <h3 class="h4">___________</h3>
                           <div class="module-collapsible collapse in" aria-expanded="true">
                          <div class="module-summary-wrapper laboral-experience">
                          <p class="text-muted">
						  {{$datos->id}}
                                  ----------------  </p>
                                <h4 class="panel-title">
                                     <!--<button ><a href="#collapse4" data-parent="#accordion" data-toggle="collapse" class=""> Agregar  Informacion -->
                                             <a href="{{ route('Educacion_Superior', $datos->id) }}" 
                  class="btn btn-sm btn-default" style="background-color:#1b9e1d;border: 0px !important;color:white;"> <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            Ingresar Informacion Personal de  
              
                                                                            </a>
                          </h4>
                           </div>
                      </div>
                  </div>
                </div>
			</div>
						 
						 
						 
						 
						 
						 

										 
									
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
								  
								
								   </div>
								    </div>
								   
								      
								   
								
								   
							
										
                            <br>
									
									
									
									<!-- FIN FORMULARIO-->
						    </div><!--FIN ContenedorMenuHojaVida-->
				        </div><!--FIN col-md-9-->
	             </div><!--FIN container-->
				 
				 			 
<script type="text/javascript">
    //--Modificación para disminuir lentitud de la página y disminuir las peticiones al servidor.
	//PARA QUE APARESCAN LOS OBCIONES  CUANDO SELECCIONE  NO TENGO HIJOS ESTUDIANDO  EN LAS INSTITUICONES EDUCATIVAS DEL RESGUARDO


     function showArmonizacion() {
        var e = document.getElementById("ddArmonizacion");
        var strUser = e.options[e.selectedIndex].value;
        if (strUser == 1) {
			//input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
            $('#SiHaceArmonizacion').show();
            $('#SiHaceArmonizacion').css('visibility', 'visible');
            $('#ddSiHaceArmonizacion').css('display', 'block');
					
        }
		
        else {
			 //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
            $('#ddSiHaceArmonizacion :nth-child(1)').prop('selected', true);
			  $('#SiHaceArmonizacion').hide();
			  $('#SiHaceArmonizacion').css('visibility', 'hidden');
			  $('#ddSiHaceArmonizacion').css('display', 'none');
			 
        }
    };


  
</script>



        
            
		
		@endsection