@extends('layouts.menu2')
@section('content')

      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Censo Poblacional</h1>
          <h2 class="">Personas</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Censo Poblacional</a></li>
            <li class="active">Personas</li>
          </ol>
        </div>
      </div>

      
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
		                         <table  class="active" >
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
		
                          <td style="width:3px;"></td>
		                     <td  title="Información de la persona que viven dentro de la familia " >
		                       <table   class="estatic">
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
		                       <table   class="active">
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
					                     <span  class="color_infor  noPrint">Usted se encuentra en:&nbsp;&nbsp;Censo Poblacional Misak SIPEMP &gt; <font color="#666666">Personas</font></span>        
			                           </div>		
                                 			
                                      <!--  <h1  class="btn btn-sm btn-default" >Residentes y/o miembros del hogar </h1>-->
                                        <span class="badge badge-warning">Residentes y/o miembros del hogar </span>
                                 </div><!--FIN titulo_infobasica-->
								   <!-- FORMULARIO-->
          

								                                 <table class="table table-striped table-bordered table-hover" id="solicitudinfo" data-order='[[ 0, "desc" ]]'>

                                                <thead>
                
                                                   <tr>
                                                       <th>#</th>
                                                       <th>Documento ID </th>
                                                        <th>Nombre</th>
                                                         <th>Apellido</th>
            
                                                          <th>Estado</th>
                                                           <th>Proceso de Censo</th>
                                                         
                                                           </tr>
                                                         </thead>
                                                       <tbody>
                                                       
														                     	@foreach($datos as $key=>$temp)
                                                             <tr>
															                         <td>{{$key+1}}</td>
                                                                   <td>{{$temp->docomento_persona}}</td>
                                                                   <td>{{$temp->nombres}}</td>
                                                                     <td>{{$temp->apellidos}}</td>
                                                                     <td class="text-center">
                                                                    @if ($temp->status == 1)
                                                                    <span class="badge badge-success">Censado</span>
                                                                   
                                                                      @else
                                                                    <span class="badge badge-danger">En proceso<p></p></span>
                                                                     @endif
                                                                     </td>
                                                                     <!--<td>{{$temp->id}}</td>-->
           
                                                                      <td>
                                                                     <a href="{{ route('Informacion_Persona', $temp->id) }}" 
                                                                           class="btn btn-sm btn-default" style="background-color:#1b9e1d;border: 0px !important;color:white;"> <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            Ingresar Informacion Personal
                                                                     </a> 

                                                                          </td>
                                                                          

                                                                     </tr>
														
                                                                </tbody>
                                                                
                                                                @endforeach
                                                                
                                           </table>
                                    
									
                                           <a href="{{ route('Certificado-Censo', $temp->hogar_id) }}" 
                                                                           class="btn btn-outline-secondary" > <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            Terminar Proceso del Censo Poblacional
                                                                     </a>
		
						   </div><!--FIN ContenedorFormularioCenso-->
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
	

@endsection