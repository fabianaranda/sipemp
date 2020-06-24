@extends('layouts.menu')

@section('content')
	
	

      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>NOVEDADES </h1>
          <h2 class="">Retiro del Censo</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Novedades</a></li>
            <li class="active">Menu Nuvedades</li>
          </ol>
        </div>
      </div>
       <!---//////// CONTENEDOR  INFIRMACION DE USUARIO  Y CARACTERISTICAS  ETC///////////////////////////////------->
        <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\--
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
				<h6>Ingrese el número de identificación de la persona  o codigo famila   </h6>

                <form id=""  class="form_cunsulta" name="form" action="/informacion-perosona" method="POST" role="informacion-perosona" class="pocicion_formulario">
				     	      {{ csrf_field() }}
							  
      						<div id="consulta_externa">
							
								<input  id="nuip" name="q" class="form-control" style="text-align:center" placeholder="Digíte el número sin puntos ni comas" title="El nùmero de cèdula debe ser de 2 a 10 dígitos" value="{{ Auth::user()->id_persona}}" style="width: 200px"  style=""> 
								<span class="animated fadeIn"></span>
							</div>
							<br>
						<!--	<div class="nobottommargin tright">
								<input type="submit" id="boton" name="enviar" value="Buscar " class="boton tab-linker btn-block" style="width: 160px">
							</div>--
							
				<div class="user-button">
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
                  
				  <p>Artist</p>
                  <small class="">info</small>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                  <div class="line"></div>
                  <p class="m-t-sm"> </p>
				  --
                </div>--
              </div>
            </div>
      ------>
			
			<br>
			<br>
			
			
			
			
			<!--//////Meno de informacion de sistema ,  ingresar usuarios y ver usuarios en el sistema ///////////--->
            <!--/col-md-4-->
            <div class="col-md-8">
			<div class="ContenedorActualizaciones">
              <div class="block-web full">
                <ul class="nav nav-tabs nav-justified nav_bg">  
                  <li class="active"><a href="#Informacion_del_sistema" data-toggle="tab"><i class="fa fa-laptop"></i>Información general de la persona que va salir del censo Poblacional   </a></li>
				<!--  <li class="active"><a href="#ingresar_usuarios" data-toggle="tab"><i class="fa fa-user"></i> -</a></li>
				  <li class="active"><a href="#roles" data-toggle="tab"><i class="fa  fa-users"></i> Información sociocultural </a></li>-->
                  
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

                          <h5><strong>Informacion General</strong> -</h5>
                          <address>
                         
                          <div class="alert alert-success" role="alert">
                   
                          <div class="table-responsive">
                              <div class="form-group input-group-sm">
                               <label ><span class="asterisco">*</span>Numero Indentificacion</label>
                                <input name="id" type="text" value="{{$datos->docomento_persona}}"  tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                                 </div>
								 <div class="form-group input-group-sm">
                               <label ><span class="asterisco">*</span>Nombres</label>
                                <input name="id" type="text" value="{{$datos->docomento_persona}}" tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                                 </div>
								 <div class="form-group input-group-sm">
                               <label ><span class="asterisco">*</span>Apellidos</label>
                                <input name="id" type="text" value="{{$datos->docomento_persona}}"  tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                                 </div>
							</div>
                       
                        </div> 
                          </address>
                        </div>
                        <div class="col-sm-6">
                          <h5><strong></strong>'</h5>
                          <div class="alert alert-success" role="alert">
                          <div class="table-responsive">
                           
		  <div class="form-group input-group-sm">
           <label f><span class="asterisco">*</span>Motivos de retiro </label>
           <select name="estado_civil" type="text"  maxlength="20" id="txtPrimerNombre" tabindex="3" class="form-control ">
           <option selected="selected" value="Seleccione">Seleccione</option>
		        <option value="Cambio domicilio">Cambio de domicilio</option>
		       <option value="Nuevo  cabildo">Para ingresar en un Nuevo Cabildo </option>
		     
          </select>
         </div>
           
            <div class="form-inline input-group-sm">
           <label ><span class="asterisco">*</span>Fecha de Retiro</label>
            <input name="fecha_nacimiento" type="date"    tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
         </div>
         <br>
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
    

 

    

<!-- /sidebar chats -->   








@endsection

