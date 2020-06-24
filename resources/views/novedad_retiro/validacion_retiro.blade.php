@extends('layouts.menu')

@section('content')

      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Validacion</h1>
          <h2 class="">Retiro Persona del  Censo Poblacional</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Retiro censo Poblacioanal</a></li>
            <li class="active">Validacion</li>
          </ol>
        </div>
      </div>

      
      <div class="container">
                    <!--Informacion menu izquierda-->
                    <div class="col-md-3 col-sm-4 col-xs-12 ">    
                                  				
                            <iframe  frameborder="0" width="100%" scrolling="no" height="245" 
							
                            src="./menu-lateral2 ">
                            
							
							</iframe>              
                      </div>
                        <!-- Fin Informacion menu izquierda-->    
                        <div class="col-md-9 ">
                            <div class="ContenedorFormularioCenso">
                              <div  class="color_infor noPrint" style="margin-top: 15px;">  
					                     <span  class="color_infor  noPrint">Usted se encuentra en:&nbsp;&nbsp;Validación  &gt; <font color="#666666"> Personas que se retiraran del censo poblacional Misak </font></span>        
			                     </div>
                                <div class="block-web full">
                                   <ul class="nav nav-tabs nav-justified nav_bg">  
                                      <li class="active"><a href="#Informacion_del_sistema" data-toggle="tab"><i class="fa fa-laptop"></i>Persona  que van a ser retirado del sistema de información Poblacional SIPEMP   </a></li>
				 
				                     <!--<li class="active"><a href="#roles" data-toggle="tab"><i class="fa  fa-users"></i> Información sociocultural </a></li>-->
                  
                                       </ul>
                                  <div>
                               
			                           					
                                       <!-- <h1 >Personas </h1>-->
                                 </div><!--FIN titulo_infobasica-->
								   <!-- FORMULARIO-->
          

								                                 <table class="table table-striped table-bordered table-hover" id="solicitudinfo" data-order='[[ 0, "desc" ]]'>

                                                <thead>
                
                                                   <tr>
                                                       <th>#</th>
                                                       <th>Doc ID </th>
                                                        <th>Nombre</th>
                                                         <th>Apellido</th>
                                                         <th>Fecha de retiro </th>
                                                          <th>Estado</th>
                                                           <th>Acciones</th>
                                                           </tr>
                                                         </thead>
                                                       <tbody>
        
                                                             <tr><td></td>
                                                                   <td></td>
                                                                   <td></td>
                                                                     <td></td>
                                                                     <td></td>
                                                                     <td></td>
           
                                                                      <td>
                                                                     <a href="Informmacion_persona" 
                                                                           class="btn btn-sm btn-default" style="background-color:#1b9e1d;border: 0px !important;color:white;"> <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            Retirar del censo
                                                                     </a> 

                                                                            <a class="btneliminarsolinfo btn" data-id="" data-action="remove" style="background-color:#FF0206;border: 0px !important;color:white;" data-toggle="confirmation" title="¿Eliminar Solicitud?" data-singleton="true"> <i class="fa fa-trash" aria-hidden="true"></i> 
                                                                            Ver soporte de retiro 
                                                                            </a>
               
                
                
                                                                          </td>

                                                                     </tr>
       
                                                                </tbody>
                                           </table>
                                    
									
									
		
						   </div><!--FIN ContenedorFormularioCenso-->
				        </div><!--FIN col-md-9-->
	             </div><!--FIN container-->

@endsection