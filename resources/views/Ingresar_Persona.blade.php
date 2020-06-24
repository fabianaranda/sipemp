<!DOCTYPE html PUBLIC "">
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="/images/logo-web.png" type="image/ico" />
 
 
<title>SISTEMA DE INFORMACIÓN  POBLACIONAL  EN RELACIÓN  A LA EDUCACIÓN  Y SALUDO PROPIA  DE LA COMUNIDAD MISAK| SILVIA CAUCA</title>

<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

  <!--\\\\\\\ estilos css \\\\\\-->
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!--///////////Estilos formularios////////////////--->
<link rel="stylesheet"  href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet"  href="/css/estilo_formulario.css" type="text/css" media="all">
<link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="light_theme  fixed_header left_nav_fixed" background="images/Misak.jpg">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\--
      <div class="logo" style="display:block"><span class="theme_color">ULTIMO</span> Admin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>--->
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
                  
                   <img src="images/logo.png"  width="190"  class="bandera_img">
	  
	 <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> noti<span class="badge badge color_2">6</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box"> <a href="inbox.html"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box"> <a href="calendar.html"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box"> <a href="maps.html"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box"> <a href="todo.html"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box"> <a href="task.html"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box"> <a href="timeline.html"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
         <!--\\\\\\\  usuari login \\\\\\-->
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/shura.png" width="30" /><span class="user_adminname"> USUARIO:{{ Auth::user()->name }}</span>  </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile.html"><i class="fa fa-user"></i>Usuario</a> </li>
            <li> <a href="help.html"><i class="fa fa-question-circle"></i>Ayuda</a> </li>
			<!--
            <li> <a href="settings.html"><i class="fa fa-cog"></i>  </a></li>
            -->
			<li> <a class="fa  fa-power-off" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"> SALIR</a>
		           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                   </form>
			</li>
          </ul>  
        </div>
		
        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"></a>
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <div class="left_nav">
      <!--\\\\\\\logo plataform \\\\\\-->
       <img src="images/logo-web.png"  width="215"  class="img-circle profile_img">
	  
	     <br>
	  	<br>
	  	<br>
      <div class="left_nav_slidebar">
        <ul>
          <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>  MENU <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
          <!--  <ul>
              <li> <a href="index.html" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dashboard</b> </a> </li>
              <li> <a href="settings.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li>
              <li> <a href="layouts.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Layouts</b> </a> </li>
              <li> <a href="themes.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Themes</b> </a> </li>
              <li> <a href="widgets.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Widgets</b> </a> </li>
              <li> <a href="animations.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Animations</b> </a> </li>
            </ul>-->
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> CENSO POBLACIONAL <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Censo</b> </a> </li>
              <li> <a href="buttons.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Actualización</b> </a> </li>
              
		   </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> CUNSULTA POBLACIONAL <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="components.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Informacion Habitante</b> </a> </li>
              <li> <a href="validation.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Cultural</b> </a> </li>
              <li> <a href="multi-upload.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Familiar</b> </a> </li>
              <li> <a href="other-forms.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Vivienda</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> INFORMACIÓN GENERAL <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Habitantes</b> </a> </li>
              <li> <a href="task.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Familia</b> </a> </li>
              <li> <a href="notes.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Cultural</b> </a> </li>
              <li> <a href="media.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Otros</b> </a> </li>
              
              
			  
            </ul>
          </li>
       
        </ul>
      </div>
    </div>
	
	
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
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
     
  <!---///////////FORMULARIO CENSO POBLACIONAL////////////////7777---->
  
 <!-- Modal -- Codigo  obtenido desde bootstrapp Modalhttps://getbootstrap.com/docs/4.0/components/modal/-->

        <!--  modal Informacion de Moduli -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      Informacion de modulo
      -
      -
      -
      -
    </div>

  </div>
</div> <!--///////fin de modal /////7-//--->

<!-- FIN -->

 
   <!-- Modal -- Codigo  obtenido desde bootstrapp Modalhttps://getbootstrap.com/docs/4.0/components/modal/-->

        <!--  modal Informacion de Moduli -->

 <div class="modal fade termino_condiciones" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      -
      <label ><span class="asterisco">-</span>Ingresar Informacion </label>
    </div>
  </div>
</div> <!-- Termina Modal  informacion-->

<!-- FIN -->




<!-- Modal validacion -->
   
  
           
           <!-- Modal Confirm pagina guardada -->
                <strong>
				<div class="modal fade" id="myModal_confirmacion" data-keyboard="false" data-backdrop="static">
				</strong>
                 <div class="modal-dialog">
                   <div class="modal-content">
                   	 <img src="icon/Advertencia.png"  width="200" align="center">
                       <div class="modal-header">
                       <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                       <h4 class="modal-title">No has ingresado la informacion general.</h4>
                     </div>
                       <div class="modal-body">
                         <div id="contenido_modal_confirm_alumno_matriculado"></div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> <!----> 
                     </div>
                   </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
               </div><!-- /.modal -->
           <!-- Modal Confirm Delete -->
<!-- INICIO DE  CODIGO DE FORMULARIO -->


<body>

	<div class="nivel_progeso">
		 <div class="iformacion_progeso">
	        Progreso Formulario
         </div>	
		    <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
               <label ><span class="asterisco">*</span>Necesita Ayuda?</label>
           	   <!-- opcion para agregar miebros de de la familia si es cabeza de hogar-->
          
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">SI</button>
      </div><!--//Fin Nivel de Progreso//-->
     
	<div  class="contenedor">
	
            <!-- iformacion donde se enuentra  -->
           <div style="margin-top: 15px;" >
             <span   class="breadcrumb noPrint">Usted se encuentra en: &nbsp;&nbsp;Censo Poblacional de Habitantes Misak   &gt; <font color=" #666666">Información General</font> </span>
          </div><!-- fin   -->	


            <!-- Contenedor_formulario_encuentas-->	
	    <div class="contenedor_formulario_encuentas">
            <!-- ///sub menu de formulario     -->
	    <div class="botones_pestaña_formulario">
          <input type="submit" class="bt_encue_cultrual "  value="Hogar" data-toggle="modal" data-target="#myModal_confirmacion"  onclick="location.href='{{ url('home') }}">
           <button class="bt_encue_general" >Informacion General</button>
           <input type="submit" class="bt_encue_cultrual "  value="Nivel académico" data-toggle="modal" data-target="#myModal_confirmacion"  onclick="location.href='{{ url('home') }}">
		   
           <input type="submit" class="bt_encue_cultrual "  value="Familia" data-toggle="modal" data-target="#myModal_confirmacion"  onclick="location.href='{{ url('home') }}">
    
          <input type="submit" class="bt_encue_cultrual "  value="Vivienda" data-toggle="modal" data-target="#myModal_confirmacion"  onclick="location.href='{{ url('home') }}">
    
         <input type="submit" class="bt_encue_cultrual "  value="Aspectos Culturales" data-toggle="modal" data-target="#myModal_confirmacion"  onclick="location.href='{{ url('home') }}">
   

      </div><!-- ///fin sub menu de formulario     -->	
           .
	     <div class="titulo_de_formulaario">
	       	 INFORMACIÓN PERSONA
         </div>	
 

        <!--/*===========================
                informacion de duardado informacion
                ============================ */ ---->
               
                 @if(session()->has('msj'))
                 <div class="alert alert-success" role="alert">
                  {{session('msj')}}
                  
                 </div>

                 @else

                 <div class="alert alert-dark" role="alert">
                 
                 </div>
                  @endif
				  
    
                       <!-- ///FORMULARIO////     -->
  <form  id="f_nuevo_usuario"  method="post"  action="validacion" class="form-horizontal form_entrada" >
  	  <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:-->
       {{ csrf_field() }}
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
       <!---------------------->
    <div class="row">
      <div  class="col-md-6 ">

      <div class="row"><!--row-->
             <div class="col-md-6">
             <label ><span class="asterisco">*</span>Parentesco</label>
              <select name="tipo_documento" id="tipo_documento" class="form-control"  style="width:150px" required="">
              <option value="">Seleccione</option>
		          <option value="Tarjeta de identidad">Padre</option>
		          <option value="Cedula de ciudadania">Madre</option>
             <option value="Cedula de ciudadania">Hij@</option>
            <option value="Cedula de ciudadania">Nieto</option>
         </select>
         
         <label ><span class="asterisco">*</span>Número Identificación</label>
         <input name="documento_persona" type="text"   tabindex="2" class="form-control" style="" autocomplete="on"  value=""    required="">
         
           </div>
              <div class="col-md-6">
              <label ><span class="asterisco">N° Integrante</label>
              <input name="nombres"  type="text" tabindex="2" class="form-control"  style="width:100px"  autocomplete="off" value="" required="">
          
              <label ><span class="asterisco">*</span>Tipo Documento </label>
        <select name="tipo_documento" id="tipo_documento" class="form-control" required="">
         <option value="">Seleccione</option>
		    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
		   <option value="Cedula de ciudadania">Cedula de ciudadania</option>
       </select>
          
          </div>
          </div> <!--fin de row-->

      

      	 
        

        <label ><span class="asterisco">*Nombres</label>
         <input name="nombres"  type="text" tabindex="2" class="form-control" autocomplete="off" value="" required="">
         <label for=""><span class="asterisco">*</span>Apellidos</label>
         <input name="primer_apellido" type="text"   tabindex="2" class="form-control" autocomplete="off" required="">
       
        <!--<label ><span class="asterisco">*</span>Segundo apellido</label>
          <input name="segundo_apellido" type="text"   tabindex="2" class="form-control" autocomplete="off" >-->
      

        
       
           <div class="row"><!--row-->
             <div class="col-md-6">
             <label ><span class="asterisco">*</span>Genero</label>
        <select name="tipo_documento" id="tipo_documento" class="form-control" required="">
        <option value="">Seleccione</option>
		    <option value="Tarjeta de identidad">Hombre</option>
		    <option value="Cedula de ciudadania">Mujer</option>
        <option value="Cedula de ciudadania">Indefinido</option>
       </select>

           </div>
              <div class="col-md-6">
              <label ><span class="asterisco">*</span>Estado Civil</label>
              <select name="tipo_documento" id="tipo_documento" class="form-control" required="">
             <option value="">Seleccione</option>
		         <option value="Tarjeta de identidad">Soltero</option>
		         <option value="Cedula de ciudadania">Casado</option>
            <option value="Cedula de ciudadania">Ingresar</option>
           </select>

          </div>
          </div> <!--fin de row-->

         
       </div>

       <div class="col-md-6">
       <!--
	    <label for="ddlpoblacion">*Estado del Namuy wam<a class="tooltipDemo">
         
         </label>
         <input name="nivel_que_habla_namtrik" type="text"   tabindex="2" class="form-control" autocomplete="off" required="" >

       ----

          <div class="contenedor_cabesa_hogar" >
          <div class="titulo_de_formulaario"></div>
            <div class="titulo_de_formulaario">  
           
           </div>	
           <!-- opcion para agregar miebros de de la familia si es cabeza de hogar--
           
           <div class="row">
           <div class="col-md-6">
            Nombre de la Institución Educativa
            <input name="colegio" type="text"   tabindex="2" class="form-control" autocomplete="off" required="" >
            </div>
         </div>


        
          
        </div>
        </div><!--hasta aqui-->
        <div class="row"><!--row-->
             <div class="col-md-6">
             <label ><span class="asterisco">*</span>Fecha de nacimiento</label>
         
         <input name="fecha_nacimiento" type="date" tabindex="2" type="text"  style="width:150px" placeholder="documento_persona" tabindex="2" class="form-control" autocomplete="off" required="">
         
        
           </div>
              <div class="col-md-6">
              <label ><span class="asterisco">*Años cumplidos</label>
              <input name="nombres"  type="text" tabindex="2" class="form-control" style="width:100px" autocomplete="off" value="" required="">
              
          </div>
          </div> <!--fin de row-->

          <label ><span class="asterisco">*</span>Nivel Academico</label>
              <select name="tipo_documento" id="tipo_documento" style="width:300px"  class="form-control" required="">
             <option value="">Seleccione</option>
		         <option value="">Analfabeto</option>
             <option value="">Primario</option>
             <option value="">Secudaria</option>
             <option value="">Universidad</option>
		        
           </select>
           <label ><span class="asterisco">*</span>Profesion</label>
              <select name="tipo_documento" id="tipo_documento" style="width:300px"  class="form-control" required="">
             <option value="">Seleccione</option>
		         <option value="Tarjeta de identidad">SELECCIONAR TABLA</option>
		        
           </select>

          <label for=""><span class="asterisco">*</span>N° Celular</label>
         <input name="primer_apellido" type="text"   tabindex="2" class="form-control" style="width:300px" autocomplete="off" required="">
       

         <div class="row"><!--row-->
             <div class="col-md-6">
            
             <label ><span class="asterisco">*</span>Fecha del Censo</label>
              <input name="fecha_nacimiento" type="date" tabindex="2" type="text"  style="width:150px" placeholder="documento_persona" tabindex="2" class="form-control" autocomplete="off" required="">
         
       
           </div>
              <div class="col-md-6">
             
              <label ><span class="asterisco">*</span>Fecha Actualización</label>
              <input name="fecha_nacimiento" type="date" tabindex="2" type="text"  style="width:145px" placeholder="documento_persona" tabindex="2" class="form-control" autocomplete="off" required="">
         

          </div>
          </div> <!--fin de row-->


        </div>
        </div>
          
        
          <div class="titulo_de_formulaario">
          <input name="primer_apellido" type="text"   tabindex="2" class="form-control" autocomplete="off" required="">
        
          </div>
           <br>
           <br>
                
           <button type="button" class="btn btn-success">Cancelar</button>

          <button type="button" class="btn btn-success">Guardar</button>
    
         <!--
         <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6"> </div>
        </div>	
          <div class="titulo_de_formulaario"></div>-->
          
   </form> 
    <br>
    <br>
    <br>
    </div>
    </div> 
    </div>
    </div>
    </div> 
    </div>
    </div> 
  

 <!--//////////// FIN  FORMULARIO ENCUENTA POBLACIONAL//////////////---->
      
        
        
             
<!----Java cript -->
<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>




</body>
</html> 