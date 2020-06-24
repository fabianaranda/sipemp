@extends('layouts.menu')

@section('content')

<link rel="stylesheet" href="css/estilos_pie_pagina.css">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Reporte</h1>
          <h2 class="">Reporte por Vigencia</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Reporte</a></li>
            <li class="active">Reporte por Vigencia</li>
          </ol>
        </div>
      </div>
      

       <br>
       <br>
       <br>
         <div  class="color_informacion_modulo " style="margin-top: 15px;">  
           <span  class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Sistema de Informacion Poblacional Misak -SIPEMP &gt; <font color="#060505">Reportes </font> &gt; <font color="#060505">Reporte por Vigencia formato Ministerios</font> </span>        
         </div>
         
       <div class="col-lg-12">

            <section class="panel default blue_title h2">
             <div class="panel-heading"><span class="semi-bold"></span> </div>
             <div class="ContenedorFormularioCenso">
              <div class="panel-body">
                <ul class="nav nav-tabs" id="myTab">
                 <li class="active"><a data-toggle="tab" href="#Tab1">CENSO GENERAL POR VIGENCIA</a></li>
                  
                
                </ul>
                
                <div class="tab-content" id="myTabContent">
                  <div id="Tab1" class="tab-pane fade in active">  <!----TAP 1 ------>
                  <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Censo General</h3>
            </div>
         <div class="porlets-content"> 
          <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  
                                  
               
               <form id=""  class="form_cunsulta" name="form" action="/Censo_general" method="POST" role="Censo_General" class="pocicion_formulario">
				     	      {{ csrf_field() }}
      						<div id="consulta_externa">
								<label>Seleccione el año a Generar:</label><br>

							<!--	<input  id="nuip" name="q" class="form-control"  placeholder="Digíte el número sin puntos ni comas" title="El nùmero de cèdula debe ser de 2 a 10 dígitos" value="{{ Auth::user()->id_persona}}" style="width: 160px"  style=""> -->

               <select id="nuip" name="q" class="form-control"  placeholder="Digíte el número sin puntos ni comas" title="El nùmero de cèdula debe ser de 2 a 10 dígitos"  style="width: 160px" required="" style="">
                                  	<option value="">Selecione el Año</option>
                                    <option value="2019">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    
                                   </select>
								<span class="animated fadeIn"></span>
							</div>
							<br>
							<div class="nobottommargin tright">
								<input type="submit" id="boton" name="enviar" value="Ver información " class="boton tab-linker btn-block" style="width: 160px">
						
            	</div>
						</form>
            </div>
            <br>
            <br>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Descargar <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <!--<li><a href="#"></a></li>-->
                                      <li><a href="#">Guardar como PDF</a></li>
                                      <li><a href="#">Exportar en  Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="margin-top-10 table-responsive" ></div>
                         
                          <div class="table-responsive">
                          @if(isset($details))
                          <h4>La Información del censo poblacional del Resguardo de Guambia  vigencia  <b> </b> son:</h4>
					         <table class="table table-bordered table-striped">
								<thead>
                
								<tr>
								<th>#</th>
								<th>VIGENCIA </th>
								<th>RESGUARDO INDIGENA</th>
								<th>COMUNIDAD INDIGENA</th>
								<th>FAMILIA</th>
								<th>TIPO IDENTIFICACION</th>
								<th>NUMERO DOCUMENTO</th>
								<th>NOMBRES</th>
								<th>APELLIDOS</th>
                <th>FECHA NACIMIENTO</th>
                <th>PARENTESCO</th>
                <th>SEXO</th>
                <th>ESTADO CIVIL</th>
                <th>PROFESION</th>
                <th>ESCOLARIDAD</th>
                <th>INTEGRANTES</th>
                <th>DIRECCION</th>
								<th>TELEFONO</th>
                <th>USUARIO</th>
              
								</tr>
            
                
                </thead>
								<tbody>
               
                @foreach($details as $key=> $persona)
									<tr> 
                   
                   <td > {{$key+1}}</td>
                  	<td>{{$persona-> fecha_censo}}</td>
										<td>{{$persona-> codigo_resguardo }}</td>
                    <td>{{$persona-> comunidad_indigena }}</td>
										<td>{{$persona-> id}}</td>
                    <td>{{$persona-> tipo_identificacion }}</td>
										<td>{{$persona-> docomento_persona }}</td>
                    <td>{{$persona-> nombres }}</td>
                    <td>{{$persona-> apellidos }}</td>
                  <td>{{$persona-> fecha_nacimiento }}</td>
                    <td>{{$persona-> parentesco }}</td>
										<td>{{$persona-> sexo  }}</td>
                    <td>{{$persona-> estado_civil }}</td>
                    <td>{{$persona-> profecion_id }}</td>
                    
										
                    <td>{{$persona-> nivel_academico }}</td>
                    <td>{{$persona-> n_integrantes  }}</td>
										<td>{{$persona-> nombre_vereda}}-Sector-{{$persona->nombre_sector}}</td>
                    
                    <td>{{$persona-> telefono}}</td>
                    <td>{{$persona-> nombre_reguardo}}</td>	
									</tr>
									@endforeach
								</tbody>
								</table>
                @elseif(isset($message))
                                <h3> {{$message}}</h3>
                                 @endif
							</div>                 
						</div>	
		 </div>	

		 
                      </div>
 
            </div><!--/porlets-content-->  
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->
      

                  
                
                </div> <!--FIN --TAP 1 ------>
                  
                
                </div>
              </div>
            </section>
          </div>
          </div>
          <br>
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
    <!-- script de la librerias chart para generar reportes  -->
  

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}" defer></script>
    <script src="{{ asset('vendors/build/js/custom.min.js') }}" defer></script>
   

@endsection