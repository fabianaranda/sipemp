@extends('layouts.menu')

@section('content')
	
<link rel="stylesheet" href="css/estilos_pie_pagina.css">

      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>NOVEDADES </h1>
          <h2 class="">Retiro del Censo por fallecimento</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Novedades</a></li>
            <li class="active">Menu Nuvedades</li>
          </ol>
        </div>
      </div>
      <br>
       <br>
       <br>
         <div  class="color_informacion_modulo " style="margin-top: 15px;">  
           <span  class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Sistema de Informacion Poblacional Misak | SIPEMP &gt; <font color="#060505">Novedad Retiro  </font> &gt;  <font color="#060505">Buscar Persona Fallecida</font>&gt;<font color="#060505">Retiro Por  Fallecimiento</font> </span>        
         </div>
       <!---//////// CONTENEDOR  INFIRMACION DE USUARIO  Y CARACTERISTICAS  ETC///////////////////////////////------
        <div class="container clear_both padding_fix">
        \\\\\\\ container  start \\\\\\--
        <div class="page-content">
          <div class="row">
		  
		  
            <div class="col-md-4">
              <div class="profile_bg">
                <div class="user-profile-sidebar">
                  <div class="row">
                    <div class="col-md-4"><img src="images/shura.png" width="40" /></div>
                    <div class="col-md-8">
                      <div class="user-identity">
                    
					     <p><i class="fa fa-users"></i> Administrador</p>
                        <h4><strong>{{ Auth::user()->name }}</strong></h4>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-status-data">
				<h4>Ingrese el número de identificación de la persona fallecida  </h4>

                <form id=""  class="form_cunsulta" name="form" action="/informacion-perosona" method="POST" role="informacion-perosona" class="pocicion_formulario">
				     	      {{ csrf_field() }}
							  
      						<div id="consulta_externa">
							
								<input  id="nuip" name="q" class="form-control" style="text-align:center" placeholder="Digíte el número sin puntos ni comas" title="El nùmero de cèdula debe ser de 2 a 10 dígitos" value="{{ Auth::user()->id_persona}}" style="width: 200px"  style=""> 
								<span class="animated fadeIn"></span>
							</div>
							<br>
						<!--	<div class="nobottommargin tright">
								<input type="submit" id="boton" name="enviar" value="Buscar " class="boton tab-linker btn-block" style="width: 160px">
							</div>-->
							
			<!--	<div class="user-button">
                    <div class="row">
                    <div class="col-sm-6">
                      <button type="button" class=" btn btn-primary btn-rounded" ><i class="fa fa-envelope"></i> Buscar</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="button" class="btn btn-default btn-rounded"><i class="fa fa-user"></i> Cancelar</button>
                    </div>
                  </div>
                </div>
				
						</form>
				
                </div>
				
                <!--
                <div> <small class="">extra</small>
                  <!--
				  <p>Artist</p>
                  <small class="">info</small>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                  <div class="line"></div>
                  <p class="m-t-sm"> </p>
				  --
                </div>--
              </div>
            </div>
			
			
			<br>
			<br>
			
			--->
			
			
			<!--//////Meno de informacion de sistema ,  ingresar usuarios y ver usuarios en el sistema ///////////--->
            <!--/col-md-4-->
            <div class="col-md-8">
			<div class="ContenedorActualizaciones">
              <div class="block-web full">
                <ul class="nav nav-tabs nav-justified nav_bg">  
                  <li class="active"><a href="#Informacion_del_sistema" data-toggle="tab"><i class="fa fa-laptop"></i>Información general de la persona fallecida   </a></li>
				  <li class="active"><a href="#ingresar_usuarios" data-toggle="tab"><i class="fa fa-user"></i> -</a></li>
				  <!--<li class="active"><a href="#roles" data-toggle="tab"><i class="fa  fa-users"></i> Información sociocultural </a></li>-->
                  
                </ul>
                <div class="tab-content">
				 <!---/////Informacion del sistema de informacion poblacional////////---->
                  <div class="tab-pane animated fadeInRight active" id="Informacion_del_sistema">
                    <div class="user-profile-content">
                  <!--  <h5><strong>INFORMACIÓN DE LA  PERSONA N°CC:  </strong> <b> </b></h5>
                      <!--<p> <> </p>-->
                      <hr>
                      <div class="row">
                        <div class="col-sm-6">
                        
                          <h5><strong>Ingresar Informacion</strong> -</h5>
                          <address>
                         
                          <div class="alert alert-success" role="alert">
                   
                          <div class="table-responsive">
                              <div class="form-group input-group-sm">
                               <label ><span class="asterisco">*</span>Numero Indentificacion</label>
                               
                                
                                <input name="id" type="text" value="{{$datos->docomento_persona}}"  tabindex="2" class="form-control" style="" autocomplete="on" value="{{ $datos->id}}" >
         
                                 </div>
								 <div class="form-group input-group-sm">
                               <label ><span class="asterisco">*</span>Nombres</label>
                                <input name="id" type="text" value="{{$datos->nombres}}" readonly=»readonly»  tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                                 </div>
								 <div class="form-group input-group-sm">
                               <label ><span class="asterisco">*</span>Apellidos</label>
                                <input name="id" type="text" value="{{$datos->apellidos}}" readonly=»readonly»  tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                                 </div>
							</div>
                       
                        </div> 
                          </address>
                        </div>
                        <div class="col-sm-6">
                          <h5><strong>Ingresar Informacion</strong> --</h5>
                          <div class="alert alert-success" role="alert">
                          <div class="table-responsive">
						         <div class="form-group input-group-sm">
           
                            <label  style="width:300px" for="title">Cargar documento ________ PDF</label>
			                <input type="file" name="docomento_pdf" class="btn-danger">
             
                             </div>
							 
							</div>
													 
                        </div>
						  <br>
					      <br>
					      <br>
					      <br>
					      <br>
					  
					   <div class="pull-right botones-pies">
					                  
                                         <a onclick=""  title="Guardar Educación" class="btn btn-success btn-xs" href="">Cancelar </a>    
                                        <a onclick=""  title="Guardar Educación" class="btn btn-success btn-xs" href="">Retir de Cenceso Poblaciona </a>
                                                
												
                           </div>
                      </div>
					
						   
                    </div>
                  </div>




                  
				  
				   <!------/////////Ingresar usuarios y roles en el sistema //////////////////-------------->
                 
                
				  
				 
				  <!--------//////// informacion de usuarios ingresados en el sistema//////////////////////---------------------->
                 
                </div>
                <!--/tab-content-->
              </div>
              <!--/platafoma-->
            </div>
            <!--/col-md-8-->
          </div>
		  </div>
          <!--/row-->
        </div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    

 <br>
 <br>
 <br>
 <br>

    

<!--PIE DE PAGINA --->
<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>SISTEMA DE INFORMACIÓN POBLACIONAL MISAK - SIPEMP</h1>

                     <img src="images/logo.png" alt="">

                </div>

                <div class="colum2">

                    <h1>Contacto</h1>

                    <div class="row2">
                        <img src="icon/smartphone.png">
                        <label>3217452529</label>
                    </div>
                       <div class="row2">
                        <img src="icon/contact.png">
                         <label>CabildoGuambia@gmail.com</label>
                    </div>
                     
                   


                </div>

                <div class="colum3">

                    <h1>Direccion</h1>

                    <div class="row2">
                        <img src="icon/house.png">
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

