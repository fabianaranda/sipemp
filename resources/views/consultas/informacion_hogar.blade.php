@extends('layouts.menu')

@section('content')


<link rel="stylesheet" href="css/estilos_pie_pagina.css">

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>Consultas</h1>
        <h2 class="">Informacion Hogar</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Consultas</a></li>
            <li class="active">nformacion Hogar</li>
        </ol>
    </div>
</div>
<br>
<br>
<br>
<div class="color_informacion_modulo " style="margin-top: 15px;">
    <span class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Sistema de Informacion
            Poblacional Misak -SIPEMP &gt; <font color="#060505">Consultas </font> &gt; <font color="#060505">
                Informacion Hogar</font> </span>
</div>
<!---//////// CONTENEDOR  INFIRMACION DE USUARIO  Y CARACTERISTICAS  ETC///////////////////////////////------->
<div class="container clear_both padding_fix">
    <!--\\\\\\\ container  start \\\\\\-->
    <div class="page-content">
        <div class="row">


            <div class="col-md-4">
                <div class="profile_bg">
                    <div class="user-profile-sidebar">
                        <div class="row">
                            <div class="col-md-4"><img src="images/shura.png" width="40" /></div>
                            <div class="col-md-8">
                                <div class="user-identity">
                                    <!--
					     <p><i class="fa fa-users"></i> Administrador</p>
                        <h4><strong>{{ Auth::user()->name }}</strong></h4>
                        -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-status-data">
                        <h4> Buscar por Código de Familia o Doc. de Integrante</h4>

                        <form id="" class="form_cunsulta" name="form" action="/Informacion-hogar" method="POST"
                            role="Informacion-hogar" class="pocicion_formulario">
                            {{ csrf_field() }}

                            <div id="consulta_externa">

                                <input id="nuip" name="q" class="inputbuscar" style="text-align:center"
                                    title="El nùmero de cèdula debe ser de 2 a 10 dígitos" value="" style="width:100px"
                                    autocomplete="of">


                                <span class="animated fadeIn"></span>
                            </div>

                            <!--	<div class="nobottommargin tright">
								<input type="submit" id="boton" name="enviar" value="Buscar " class="boton tab-linker btn-block" style="width: 160px">
							</div>-->



                            <div class="user-button">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- <button type="button" class=" btn btn-primary btn-rounded" ><i class="fa fa-envelope"></i> Buscar</button>-->
                                        <input type="submit" id="boton" name="enviar" value="Buscar "
                                            class="botonBuscar " style="width: 100px">

                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="botonCancelar"
                                            onclick="location.href='{{ url('Menu-Cunsultas') }}'"><i
                                                class="fa fa-user"></i> Cancelar</button>

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
                </div>-->
                </div>
            </div>

            <!-- ESTYLE BOTONES -->
            <style>
            .botonBuscar {
                text-decoration: none;
                padding: 4px;
                font-weight: 600;
                font-size: 15px;
                color: #ffffff;
                background-color: #5cb85c;
                border-radius: 19px;
                border: 2px solid #5cb85c;
                margin-left: 27px;
            }

            .botonCancelar {
                text-decoration: none;
                padding: 4px;
                font-weight: 600;
                font-size: 20px;
                color: #ffffff;
                background-color: #e41b1a;
                border-radius: 16px;
                border: 2px solid #e41b1a;
                margin-left: 250px;
                margin-left: 20px;
            }

            .inputbuscar {
                text-decoration: none;
                padding: 4px;
                font-weight: 600;
                font-size: 20px;
                color: #130303;
                background-color: #ece9e9;
                border-radius: 16px;
                border: 2px solid #131111;
                margin-left: 250px;
                margin-left: 20px;
            }
            </style>


            <br>
            <!--//////Meno de informacion de sistema ,  ingresar usuarios y ver usuarios en el sistema ///////////--->
            <!--/col-md-4-->
            <div class="col-md-8">
                <div class="ContenedorFormularioConsultasActualizacion">
                    <div class="block-web full">
                        <ul class="nav nav-tabs nav-justified nav_bg">
                            <li class="active"><a href="#Informacion_del_sistema" data-toggle="tab"><i
                                        class="fa fa-laptop"></i>Información general de Hogar </a></li>
                            <li class="active"><a href="#ingresar_usuarios" data-toggle="tab"><i class="fa fa-user"></i>
                                    Informacion de la vivienda del Hogar </a></li>
                            <!--  <li class="active"><a href="#roles" data-toggle="tab"><i class="fa  fa-users"></i> Información sociocultural </a></li>-->

                        </ul>
                        <div class="tab-content">
                            <!---/////Informacion del sistema de informacion poblacional////////---->
                            <div class="tab-pane animated fadeInRight active" id="Informacion_del_sistema">
                                <div class="user-profile-content">
                                    <!--  <h5><strong>INFORMACIÓN DE LA  PERSONA N°CC:  </strong> <b> </b></h5>
                      <!--<p> <> </p>-->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <!-- <h5><strong>Ingresar Informacion</strong> -</h5>
                          <address>-->

                                            <div class="alert alert-success" role="alert">

                                                <div class="table-responsive">
                                                    <h1>{{Session::get('data')}}</h1>
                                                    @if(isset($details))
                                                    <h5><strong> Informacion de la Familia con el Codigo Hogar :
                                                            {{ $query }} Son los siguientes. </strong></h5>

                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>

                                                                <th>PARENTESCO</th>
                                                                <th>NOMBRES</th>
                                                                <th>APELLIDOS</th>
                                                                <th>TIPO CC</th>
                                                                <th>CC</th>
                                                                <th>GENERO</th>
                                                                <th>ESTADO CIVIL</th>
                                                                <th>ESCOLARIDAD</th>
                                                                <th>PROFESION</th>
                                                                <th>TELEFONO</th>
                                                                <th>DIRECCION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($details as $persona)
                                                            <tr>
                                                                <td>{{$persona-> n_integrantes}}</td>

                                                                <td>{{$persona-> parentesco }}</td>
                                                                <td>{{$persona-> nombres }}</td>
                                                                <td>{{$persona-> apellidos }}</td>
                                                                <td>{{$persona->  tipo_identificacion }}</td>
                                                                <td>{{$persona->  docomento_persona}}</td>
                                                                <td>{{$persona->  sexo }}</td>
                                                                <td>{{$persona-> estado_civil }}</td>
                                                                <td>{{$persona->  nivel_academico }}</td>
                                                                <td>{{$persona->  profecion_id  }}</td>
                                                                <td>{{$persona-> telefono }}</td>
                                                                <td>{{$persona-> nombre_vereda}}-{{$persona->nombre_sector}}
                                                                </td>


                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @elseif(isset($message))
                                                    <h3> {{$message}}</h3>
                                                    @endif
                                                </div>

                                            </div>
                                            </address>
                                        </div>
                                        <!--<div class="col-sm-6">
                          <h5><strong>Ingresar Informacion</strong> --</h5>
                         
                        </div>-->
                                    </div>
                                </div>
                            </div>

                            <!------/////////Ingresar usuarios y roles en el sistema //////////////////-------------->

                            <div class="tab-pane animated fadeInRight" id="ingresar_usuarios">
                                <div class="user-profile-content">

                                    <h5><strong>INFORMACIÓN DE LA PERSONA N°CC: </strong> <b> </b></h5>
                                    <!--<p> <> </p>-->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <h5><strong>Ingresar Informacion</strong> -</h5>
                                            <address>

                                                <div class="alert alert-success" role="alert">
                                                    <div class="table-responsive">
                                                        @if(isset($details))
                                                        Los Datos ingresados del estudiante : <b> {{ $query }} </b> Es :
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>TIPO DE VIVIENDA DE LA FAMILIA</th>
                                                                    <th>N° PERSONAS HOGAR</th>
                                                                    <th>N° DORMITORIOS</th>
                                                                    <th>N° DORMITORIOS USADOS </th>


                                                                    <th>APELIDO</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach($details as $persona)
                                                                <tr>
                                                                    <td>{{$persona-> tipo_propietario }}</td>
                                                                    <td>{{$persona-> total_personas_hogar }}</td>
                                                                    <td>{{$persona-> numero_dormitorio }}</td>
                                                                    <td>{{$persona-> dormitorio_usado}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @elseif(isset($message))
                                                        <h3> {{$message}}</h3>
                                                        @endif
                                                    </div>


                                                </div>
                                            </address>
                                        </div>
                                        <!--<div class="col-sm-6">
                          <h5><strong>Ingresar Informacion</strong> --</h5>
                          <div class="alert alert-success" role="alert">
                          <div class="table-responsive">
						@if(isset($details))
					 Los Datos ingresados del estudiante : <b> {{ $query }} </b> Es :
					<table class="table table-bordered table-striped">
								<thead>
								<tr>
								<th>NOMBRE</th>
								<th>APELIDO</th>  
								</tr></thead>
								<tbody>

									@foreach($details as $persona)
									<tr>
                                    <td>{{$persona-> tipo_identificacion }}</td>
								    <td>{{$persona-> id }}</td>	
									</tr>
									@endforeach	
									</tbody>
								</table> 
								@elseif(isset($message))
                                <h3> {{$message}}</h3>
                                 @endif
							</div>
                   

                        </div>
                        </div>-->
                                    </div>
                                </div>
                            </div>


                            <!--------//////// informacion de usuarios ingresados en el sistema//////////////////////---------------------->
                            <div class="tab-pane" id="roles">
                                <ul class="media-list">
                                    <div class="alert alert-success" role="alert">
                                        <div class="table-responsive">
                                            @if(isset($details))
                                            Los Datos ingresados del estudiante : <b> {{ $query }} </b> Es :
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>NOMBRE</th>
                                                        <th>APELIDO</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($details as $persona)
                                                    <tr>
                                                        <td>{{$persona-> tipo_identificacion }}</td>
                                                        <td>{{$persona-> id }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @elseif(isset($message))
                                            <h3> {{$message}}</h3>
                                            @endif
                                        </div>


                                    </div>

                                </ul>
                            </div>
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
                <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href="">©
                    Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
            </div>
        </div>

    </div>

</footer>



<!-- /sidebar chats -->








@endsection