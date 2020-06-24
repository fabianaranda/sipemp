@extends('layouts.menu2')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/sweetalert2@9.js"></script>

  
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Censo Poblacional</h1>
          <h2 class="">Informacion Persona</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Censo Poblacional</a></li>
            <li class="active">Informacion Persona</li>
          </ol>
        </div>
      </div>

      
     <!-- INICIO DE  CODIGO DE FORMULARIO -->


		       <div class="container">
			   
                    <!--Informacion menu izquierda-->
                    <div class="col-md-3 col-sm-4 col-xs-12 ">    
                                  				
                            <iframe  frameborder="0" width="100%" scrolling="no" height="245" 
							
                            src="">
							
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
		                       <table class="estatic" >
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
		                        <table class="active" >
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
                   <form id="Hogar" method="post" action="info_persona/Guardado" accept-charset="UTF-8" enctype="multipart/form-data" >
                     {{ csrf_field() }}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
                            <input name="persona_id" type="text"  style="visibility:hidden" value="{{$datos->id}}" tabindex="2"  class="form-control btn-warning" style="width:60px"  value="" >
				                    <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                      
                                   <div class="recuadro_info_persona"> INRESE INFORMACION GENERAL DE:  {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}} </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                      
                                        <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 1-->
                                               
                                     <div class="form-group input-group-sm">
                                        <label for="ddGenero"><span class="asterisco">*</span>Genero</label>
                                        <select name="hijos_estudiando_guambia" id="ddGenero" tabindex="51" class="form-control" onchange="showGenero(this);"  required="">
		                                    <option value="">Seleccione</option>
		                                    <option value="2">Hombre</option>
		                                    <option  value="1">Mujer</option>
	                                     </select>
                                   </div>
			
	                      
                                 




                                                 <div class="form-group input-group-sm">
                                                    <label><span class="asterisco">*</span>¿Perteneces a alguna empresa asociativa? </label>
                                                     <select name="empresa_asociativa" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                     <option value="">Selec</option>
                                                     <option value="Natural">Natural</option>
                                                      <option value="jurídica">jurídica</option>
                                                     <option value="Privada">Privada</option>
                                                     <option value="Publica">Publica </option>
                                                     <option value="Ninguno">Ninguno</option>
                                                      </select>
                                                    </div>
													
													  <div class="form-group input-group-sm">
                                                    <label ><span class="asterisco">*</span>Que carnet de Salud tiene? </label>
                                                           <select name="carnet_salud_id" id="servicio_acueducto" class="form-control"   style="width:" required="">
                                                <option value="" selected disabled>Seleccione carnet de Salud</option>
                                                  @foreach($carnet_salud as $key => $carnet_salud)
                                                  <option value="{{$key}}"> {{$carnet_salud}}</option>
                                                @endforeach
                                                 </select>
                                                    </div>
													<div class="form-group input-group-sm">
                                                 <label>
                                                <span class="asterisco">*</span>
                                               ¿ Profesión Actual?</label>
                                               <select name="profecion_id" id="servicio_acueducto" class="form-control"   style="width:" required="">
                                                <option value="" selected disabled>Seleccione Profesión Actual</option>
                                                  @foreach($profecion as $key => $profecion)
                                                 <option value="{{$key}}"> {{$profecion}}</option>
                                              @endforeach
                                          </select>


  
                                        </div>

                                        <div class="form-group input-group-sm">
                                        <label  style="width:300px" for="title"> Numero Telefono  :</label>
		                                  <input name="telefono" type="text"    class="form-control" style="" autocomplete="of"  value=""   >
                                        </div>
               
        									  </div> <!-- Fin de Columna 1-->
											 
											  <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 2-->
          

                                   

                                                <div class="form-group input-group-sm">
                                                 <label ><span class="asterisco">*</span>¿Pertenece a alguna religión?</label>
                                                      <select name="religion" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                      <option value="">Selec</option>
                                                      <option value="Propia">Propia</option>
                                                      <option value="Católica">Católica</option>
                                                       <option value="Cristiana ">Cristiana </option>
                                                       <option value="Ateo">Ateo</option>
                                                       
                                                      </select>
                                                  </div>
												  
												     <div class="form-group input-group-sm">
                                                 <label ><span class="asterisco">*</span>¿Ha donde recurre si  se enferma? </label>
                                                      <select name="enfemerma_recurre" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                      <option value="">Selec</option>
                                                      <option value="Propia">Medico Tradicional </option>
                                                      <option value="Católica">medicina ocidental </option>
                                                       
                                                       
                                                      </select>
                                                  </div>
												  
												                   <div class="form-group input-group-sm">
                                                 
                                                      <label   <span class="asterisco">*</span>Cargar documento de identidad formato PDF</label>
			                                    <input type="file" name="docomento_pdf" class="btn-danger" required="">
                                                  </div>
                                                  <div class="form-group input-group-sm">
                                        <label  style="width:300px" for="title"> Comunidad Indigena  :</label>
		                                   <input name="comunidad_indigena" type="text"    class="form-control" style="" autocomplete="of"  value="11670001"   >
                                        </div>
           
	
                                                </div> <!-- Fin Columna 2-->
										  
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
		                                      
											  <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona"> SELECCIONE  LOS IDIOMAS QUE HABLA: {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}}</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                                    <div class="col-md-3 col-lg-3">
                                    </ul>    
                                     @foreach($idiomas as $idiomas_persona)
	                                      <li>
	                                          <label>
	                                             {{ Form::checkbox('idiomas[]', $idiomas_persona->id, null) }}
	                                              {{ $idiomas_persona->nombre}}
	        
	                                             </label>
	                                               </li>
	                                            @endforeach
                                             </ul>
                                         </div>            
										 
                                   </div>
                                <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
								
								     
								
								   <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona">  CONOCIMIENTOS DE NAMUY WAM  DE : {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}}</div>
                                    
									
									
									
									
									
									
									
									
									
									<div class="col-xs-12 col-xs-12   estilo1" >
                               
							                    
                                       <fieldset>                              
                                    <div class="form-group">
                                         <label for="" class="col-lg-2 control-label">Habla Namuy Wam</label>
                                           <div class="col-lg-10">
                                               <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                         <div class="btn-group" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="habla_namuy_wam"  value="No habla"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                    No habla 
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="habla_namuy_wam"  value="Entiende, pero no habla" data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                     Entiende, pero no habla 
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="habla_namuy_wam" value=" Si  Habla"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="" name="" required="" type="radio" aria-required="true">
                                                                    Si  Habla
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                            </div>
                                     </div>
									  </fieldset>
									 <fieldset>
                                     <div class="form-group">
                                        <label for="" class="col-lg-2 control-label"> Escritura </label>
                                          <div class="col-lg-10">
                                              <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                         <div class="btn-group" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="escritura_namuy_wam"  value="No escribe" data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                    No escribe 
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="escritura_namuy_wam"  value="Escribe, pero no habla"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                     Escribe, pero no habla 
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="escritura_namuy_wam"  value="Escribe y habla"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" required="" type="radio" aria-required="true">
                                                                    Escribe y habla 
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                                  </div>
                                            </div>
											</fieldset>
											<!--
											<fieldset>
										<div class="form-group">
                                        <label for="" class="col-lg-2 control-label">Entiende, pero no habla </label>
                                          <div class="col-lg-10">
                                              <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                         <div class="btn-group" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento " class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                     Bajo
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                     Medio
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="" name="" required="" type="radio" aria-required="true">
                                                                     Alto
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                                  </div>
                                            </div>
											</fieldset>
<!--                                         </fieldset>
											<div class="form-group1">
                                        <label for="" class="col-lg-3 control-label">Entiende, pero no habla </label>
                                          <div class="col-lg-3">
                                              <div class="form-group input-group-sm">
                                                    <div class="form-group1">
                                                            
                                                      
                                                         <div class="btn-group1" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                     Bajo
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                     Medio
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="" name="" required="" type="radio" aria-required="true">
                                                                     Alto
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                                  </div>
                                            </div>
                                            -->           
										
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
								
								             
								   <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona"> CONOCIMIENTOS DEL ESPAÑOL DE:: {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}}</div>
                                    
							
									
									<div class="col-xs-12 col-xs-12   estilo1" >
                               
							                    
                                       <fieldset>                              
                                    <div class="form-group">
                                         <label for="" class="col-lg-2 control-label">Habla Español </label>
                                           <div class="col-lg-10">
                                               <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                          <div class="btn-group" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   name="habla_español" value="No habla"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                    No habla 
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="habla_español"   value="Entiende, pero no habla" data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                     Entiende, pero no habla 
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input name="habla_español"  value="Si  Habla"   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="" name="" required="" type="radio" aria-required="true">
                                                                    Si  Habla
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                            </div>
                                     </div>
									  </fieldset>
									 <fieldset>
                                     <div class="form-group">
                                        <label for="" class="col-lg-2 control-label">Escritura  </label>
                                          <div class="col-lg-10">
                                              <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                        
														
                                                                <div class="btn-group" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   name="escribe_español" value=" No escribe"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" required="" type="radio" aria-required="true">
                                                                     No escribe 
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="escribe_español"   value="Escribe,pero no habla" data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                     Escribe,pero no habla 
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input name="escribe_español"  value=" Escribe y habla"   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="" name="" required="" type="radio" aria-required="true">
                                                                     Escribe y habla 
                                                                    </label>
                                                         </div>
                                                       </div>
                                                    </div>
                                                  </div>
                                            </div>
											</fieldset>
										   									
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
								
								
								  <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona">  {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}} SE VISTE CON EL VESTIDO PROPIO</div>
                                    
							
									
									<div class="col-xs-12 col-xs-12   estilo1" >
                               
							                 <br>   
                                       <fieldset>                              
                                    <div class="form-group">
                                         <label for="" class="col-lg-2 control-label">Vestimenta </label>
                                           <div class="col-lg-10">
                                               <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                          <div class="btn-group contendor_bt" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="vestimenta_misak"  value="No se viste"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                    No se viste 
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="vestimenta_misak" value="Se viste cada evento especial" data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio"  required="" type="radio" aria-required="true">
                                                                     Se viste cada evento especial  
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input  name="vestimenta_misak"  value="Si se viste"  data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" required="" type="radio" aria-required="true">
                                                                    Si se viste 
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                            </div>
                                     </div>
									  </fieldset>
									  <br>
									  <!--
									 <fieldset>
                                     <div class="form-group">
                                        <label for="" class="col-lg-2 control-label">Escritura  </label>
                                          <div class="col-lg-10">
                                              <div class="form-group input-group-sm">
                                                    <div class="form-group">
                                                            
                                                      
                                                         <div class="btn-group" data-toggle="buttons">
                                                                <label  class="btn btn-conocimiento" class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                    No escribe 
                                                                  </label>
																   <label  class="btn btn-conocimiento"  class="btn btn-info active"data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="radio-36920633" name="" required="" type="radio" aria-required="true">
                                                                     Escribe, pero no habla 
                                                                   </label>
                                                                   <label  class="btn btn-conocimiento"  class="btn btn-info active" data-toggle="tooltip" data-placement="bottom" >
                                                                    <input   data-val="true" data-val-required="El nivel de habilidad es un campo obligatorio" id="" name="" required="" type="radio" aria-required="true">
                                                                    Escribe y habla 
                                                                    </label>
                                                         </div>
                                                       
                                                       </div>
                                                    </div>
                                                  </div>
                                            </div>
											</fieldset>-->
										   									
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
								
								
								
								
							
								
								   <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona">CONOCIMIENTOS ANCESTRALES DESDE SER MISAK DE: {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}}</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                      
                                            <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 1-->

                                                 <div class="form-group input-group-sm">
                                                    <label f><span class="asterisco">*</span>Usted es médicos tradicionales? </label>
                                                     <select name="medico_tradicional" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                     <option value="">Selec</option>
                                                     <option value="Partera">Partera/o</option>
                                                      <option value="Sobandero">Sobandero/a</option>
                                                     <option value="Pulsador">Pulsador/a</option>
													 <option value="Medico T">Merepik</option>
                                                     
                                                      </select>
                                                    </div>
               
        									  </div> <!-- Fin de Columna 1-->
											 
											  <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 2-->
          
                                                <div class="form-group input-group-sm">
                                                 <label f><span class="asterisco">*</span> usted tiene Conocimientos empíricos “Sabios ” </label>
                                                      <select name="conocimientos_empiricos" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                      <option value="">Selec</option>
                                                      <option value="1">Artesano/a</option>
                                                      <option value="2">músico</option>
                                                       <option value="3">deportistas</option>
                                                       <option value="4">consejeros (wachip, kᶿrᶿshᶿp)</option>
                                                       <option value="5">constructor/a</option>
													   <option value="6">constructor/a</option>
													   <option value="7">peluquero/a</option>
													   <option value="8">pintor/a</option>
													   <option value="9">mecamico/a</option>
													   <option value="10">cerámica </option>
                                                      </select>
                                                  </div>
           
	
                                                </div> <!-- Fin Columna 2-->
										  
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
 						
									<div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona"> HÁBITOS DE VIDA SALUDABLES DE:{{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}} </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                      
                                            <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 1-->

                                                 <div class="form-group input-group-sm">
                                                    <label f><span class="asterisco">*</span>¿qué deporte practica_constantemente?</label>
                                                     <select name="deporte_constante" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                     <option value="">Selec</option>
                                                     <option value="Futbol">Futbol</option>
                                                      <option value="2">____</option>
													  <option value="2">____</option>
													  <option value="2">____</option>
                                                     
                                                     
                                                      </select>
                                                    </div>
													
													  <div class="form-group input-group-sm">
                                                    <label f><span class="asterisco">*</span>Conoce  lugares sagrados  dentro del resguardo de Guambia </label>
                                                     <select name="lugares_sagrados" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                     <option value="">Selec</option>
                                                     <option value="SI">SI</option>
                                                      <option value="">No</option>
													  
                                                    
                                                     
                                                      </select>
                                                    </div>
               
        									  </div> <!-- Fin de Columna 1-->
											 
											  <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 2-->
          
                                                <div class="form-group input-group-sm">
                                                 <label ><span class="asterisco">*</span>¿Conoce algun juegos tradicionales?  </label>
                                                      <select name="juegos_tradicionales" type="text"    class="form-control " required="">
                                                      <option value="">Selec</option>
                                                      <option value="SI">SI</option>
                                                      <option value="NO">NO</option>
                                                   
                                                      </select>
                                                  </div>
                                                    <!-- <div class="form-group input-group-sm">
                                                 <label ><span class="asterisco">*</span>cual? </label>
                                                      <input type="text"  name="" id="nombre5" placeholder="Ingrese contenido"  class="form-control" style="text-transform:uppercase;" style="width:300px" > 
                                                  </div>-->
	
                                                </div> <!-- Fin Columna 2-->
										  
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
 						
									<div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona">____________</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                      
                                            <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 1-->

                                                 <div class="form-group input-group-sm">
                                                    <label f><span class="asterisco">*</span>¿Le Realizan baños en las diferentes etapas de la vida? </label>
                                                     <select name="baños_etapas_vida" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                     <option value="">Selec</option>
                                                     <option value="Vientre (preconcepción) ">Vientre (preconcepción) </option>
                                                      <option value="Concepción">Concepción</option>
                                                     <option value="Niñez">Niñez</option>
													                          <option value="Juventud">Juventud</option>
													                         <option value="Adulto mayor">Adulto mayor</option>
                                                     
                                                      </select>
                                                    </div>
               
        									  </div> <!-- Fin de Columna 1-->
											 
											           <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 2-->
          
                                 <div class="form-group input-group-sm">
                                             
                                             <div id="Mujer" style="visibility: hidden; display: none;">
                                              <div class="form-group input-group-sm">
                                              <label for="ddMujer"><span class="asterisco">*</span>¿Cuando llega la menstruación usted guarda?</label>
                                              <select name="no_estudia_guambia" id="ddMujer" tabindex="52" class="form-control" style="display: none;"  >
		                                          <option value="">Seleccione</option>
		                                          <option value="SI">SI</option>
		                                          <option value="NO">NO</option>
		                                      </select>
                                      </div>
                                    </div>
                                  </div>

                               </div> <!-- Fin Columna 2-->
										          </div>
                              <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                              </div> <!--Fin del contenedor informacion_persona -->
 						              <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona">--------------------</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                      
                                            <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 1-->

                                                 <div class="form-group input-group-sm">
                                                    <label f><span class="asterisco">*</span>Precenta alguna de estas  enfermedades? </label>
                                                    <select name="enfermedades_id" id="servicio_acueducto" class="form-control"   style="width:" required="">
                                                     <option value="" selected disabled>Seleccione </option>
                                                  @foreach($enfermedades as $key => $enfermedades)
                                                  <option value="{{$key}}"> {{$enfermedades}}</option>
                                                @endforeach
                                                 </select>
                                                    </div>
													
													 <div class="form-group input-group-sm">
                                                    <label f><span class="asterisco">*</span>Recurre a la medicina alternativa? </label>
                                                     <select name="medicina_alternativa" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                     <option value="">Selec</option>
													  <option value="Ninguno">Ninguno </option>
                                                     <option value="Homeópata">Homeópata</option>
                                                      <option value="Reflexología">Reflexología</option>
                                                     <option value="Acupuntura">Acupuntura</option>
													 <option value="Aromaterapia">Aromaterapia</option>
													 <option value="Temascal">Temascal</option>
                                                     <option value="Yagüe">Yagüe</option>
													
													 <option value="Rape">Rape</option>
													 <option value="Dudoterapia">Dudoterapia </option>
													
                                                      </select>
                                                    </div>
               
        									  </div> <!-- Fin de Columna 1-->
											 
											  <div class="col-md-6 col-sm-12 col-xs-12"> <!--Columna 2-->
          
                                                <div class="form-group input-group-sm">
                                                 <label f><span class="asterisco">*</span>Usted consume? </label>
                                                      <select name="consumo_sustancias" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control " required="">
                                                      <option value="">Selec</option>
                                                      <option value="1">Alcohol</option>
                                                      <option value="2">Cigarrillo</option>
                                                       <option value="3">Sustancias psicoactivas </option>
                                                       <option value="4">No consume</option>
                                                      
                                                      </select>
                                                  </div>
           
	
                                                </div> <!-- Fin Columna 2-->
										  
                                    </div>
                                  <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
								   <div class="contenedor_informacion_persona"> <!--Contenedor informacion_persona --->
                       
                                   <div class="recuadro_info_persona"> SELECCIONE SI TIENE ALGUNA DE ESTAS LIMITACIONES FÍSICAS  {{$datos->nombres}} {{$datos->apellidos}} CC N° {{$datos->docomento_persona}}</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                               
                                    <div class="col-md-3 col-lg-3">
                                    </ul>    
                                     @foreach($limitaciones_fisinas as $limitaciones_fisinas)
	                                      <li>
	                                          <label>
	                                             {{ Form::checkbox('limitaciones_fisinas[]', $limitaciones_fisinas->id, null) }}
	                                              {{ $limitaciones_fisinas->nombre}}
	        
	                                             </label>
	                                               </li>
	                                            @endforeach
                                             </ul>
                                         </div>            
										 
                                   </div>
                                <div class="clearfix"></div> <!--Cierra el contenedor 2 . recuadro -->
                                </div> <!--Fin del contenedor informacion_persona -->
 						
									
                            
                                     <!--borones Guardar y continuar -->
                                       <div class="pull-right ">
                                               
                                               <button type="button" class="botones_censo_cancelar" onclick="location.href='{{ url('Hogar') }}'" >LIMPIAR</button>
                                               <input type="submit" class="botones_censo_poblacional" value="GUARDAR Y CONTINUAR " id="boton" class="btn btn-primary" >
                                                                                 
                                                         
                                            </div>
                                 
                                 </form>
                                 
									     <br>
                       <br>
									<!-- FIN FORMULARIO-->
						    </div><!--FIN ContenedorMenu-->
				        </div><!--FIN col-md-9-->
	             </div><!--FIN container-->


               <br>
               <br>
		 <br>
     </div>
     </div>
     </div>
	   
	     
	  <!--PIE DE PAGINA --->
    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>SISTEMA DE INFORMACIÓN POBLACIONAL MISAK - SIPEMP</h1>

                     <img src="{{ asset('images/logo.png') }}" alt="">
                     
                </div>
                
              

                <div class="colum2">

                    <h1>Contacto</h1>

                    <div class="row2">
                        <img src="{{ asset('icon/smartphone.png') }}">
                        <label>3217452529</label>
                    </div>
                   
                       <div class="row2">
                        <img src="{{asset('icon/contact.png')}}">
                         <label>CabildoGuambia@gmail.com</label>
                    </div>
                     
                   


                </div>

                <div class="colum3">

                    <h1>Direccion</h1>
                    
                    <div class="row2">
                        <img src="{{ asset('icon/house.png') }}">
                        <label>CARRERA 2 12 25-Silvia Cauca
                        </label>
                    </div>

                   <!-- <div class="row2">
                        <img src="icon/smartphone.png">
                        <label>+1-829-395-2064</label>
                    </div>-->

                   

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        &copy;2020 Todos los Derechos Reservados | <a href="">Cabido de Guambia</a>
                    </div>

                    <div class="informacion1">
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href="">© Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
                    </div>
                </div>

            </div>
        
    </footer>
	
				 
               <script type="text/javascript">
$('#Hogar').submit(function(e)
{
      e.preventDefault();//cancelar el envio
      var url=$("#Hogar").attr('action');
      var type=$("#Hogar").attr('method');
      $.ajax({
        type:type,
        url:base+'/'+url,
        data:$('#Hogar').serialize(),
        dataType:'json',
        success:function(response)
        {
          if(response.validate)
          {
            Swal.fire(
              'Exito',
              'Se ha guardado con éxito ss',
              'success'
            )
            setTimeout(function(){  location.href=base+"/Menu-Educacion-Formal/"+response.id; }, 2000);
          
		  }
          else{
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Se generó un error al guardar!',
            })
          }
        }
      })
    })
</script> 

<!-- Seleccionar  genero de la persona a censar -->
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--->
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--->

<script type="text/javascript">
    //--Modificación para disminuir lentitud de la página y disminuir las peticiones al servidor.
	//PARA QUE APARESCAN LOS OBCIONES  CUANDO SELECCIONE   GENERO MUJER 
    function showGenero() {
        var e = document.getElementById("ddGenero");
        var strUser = e.options[e.selectedIndex].value;
        if (strUser == 1) {
			//input ¿*¿Cuando llega la menstruación usted guarda??
            $('#Mujer').show();
            $('#Mujer').css('visibility', 'visible');
            
            $('#ddMujer').css('display', 'block');
			
        }
		
        else {
			 //input ¿*¿Cuando llega la menstruación usted guarda??
            $('#ddMujer :nth-child(0)').prop('selected', true);
			  $('#Mujer').hide();
			  $('#Mujer').css('visibility', 'hidden');
			  $('#ddMujer').css('display', 'none');
			  
        }
    };



</script>
<!---------------! FIN  seleccionar  Genero  -------->


@endsection