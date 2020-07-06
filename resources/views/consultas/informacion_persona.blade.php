@extends('layouts.menu')

@section('content')
<link rel="stylesheet" href="css/estilos_pie_pagina.css">
<link href="{{ asset('css/certificado.css') }}" rel="stylesheet">
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>CONSULTAS</h1>
        <h2 class="">Informacion Perosona</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Consultas</a></li>
            <li class="active">Informacion Persona</li>
        </ol>
    </div>
</div>

<br>
<br>
<br>
<div class="color_informacion_modulo " style="margin-top: 15px;">
    <span class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Sistema de Informacion
            Poblacional Misak -SIPEMP &gt; <font color="#060505">Consultas </font> &gt; <font color="#060505">
                Informacion Persona </font> </span>
</div>


<!---//////// CONTENEDOR  INFIRMACION DE USUARIO  Y CARACTERISTICAS  ETC///////////////////////////////------->
<div class="container clear_both padding_fix">
    <!--\\\\\\\ container  start \\\\\\-->
    <div class="page-content">
        <div class="row">


            <div class="col-md-4">
                <div class="profile_consulta_persona">
                    <div class="user-profile-sidebar">
                        <div class="row">
                            <div class="col-md-4"><img src="images/shura.png" width="40px" /></div>
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
                        <h4>Ingresar el número de identificación </h4>

                        <form id="" class="form_cunsulta" name="form" action="/Informacion-Persona" method="POST"
                            role="informacion-perosona" class="pocicion_formulario">
                            {{ csrf_field() }}

                            <div id="consulta_externa">

                                <input id="nuip" name="q" class="inputbuscar" style="text-align:center"
                                    title="El nùmero de cèdula debe ser de 2 a 10 dígitos" value="" style="width: 200px"
                                    autocomplete="of">

                                <span class="animated fadeIn"></span>
                            </div>
                            <br>
                            <!--	<div class="nobottommargin tright">
								<input type="submit" id="boton" name="enviar" value="Buscar " class="boton tab-linker btn-block" style="width: 160px">
							</div>-->

                            <div class="user-button">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="submit" id="boton" name="enviar" value="Ver información "
                                            class="botonBuscar" style="width: 160px">

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



            <!--//////Meno de informacion de sistema ,  ingresar usuarios y ver usuarios en el sistema ///////////--->
            <!--/col-md-4-->
            <div class="col-md-8">

                <div class="ContenedorFormularioConsultasActualizacion">
                    <div class="block-web full">
                        <ul class="nav nav-tabs nav-justified nav_bg">
                            <li class="active"><a href="#Informacion_del_sistema" data-toggle="tab"><i
                                        class="fa fa-laptop"></i>INFIRMACÌON DEL HABITANTE </a></li>
                          <!--  <li class="active"><a href="#ingresar_usuarios" data-toggle="tab"><i class="fa fa-user"></i>
                                    Información Academico </a></li>
                            <li class="active"><a href="#roles" data-toggle="tab"><i class="fa  fa-users"></i>
                                    Información academcia superiores </a></li>-->

                        </ul>
                        <div class="tab-content">
                            <!---/////Informacion del sistema de informacion poblacional////////---->
                            <div class="tab-pane animated fadeInRight active" id="Informacion_del_sistema">
                                <div class="user-profile-content">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <!-- <h5><strong>Ingresar Informacion</strong> -</h5>---->
                                            <address>
                                                <h1>{{Session::get('data')}}</h1>
                                                @if(isset($details))
                                                Informacion del Habitante a actualizar N° CC : <b1> {{ $query }} 
                                                Es :
                                                @foreach($details as $persona)
                                                <table width="800" border="0" align="center" cellpadding="0"
                                                    cellspacing="1" bgcolor="#CCCCCC">
                                                    <tbody>

                                                        <tr bgcolor="#F4F7FB">
                                                            <td colspan="3">
                                                                <!--<p>&nbsp;</p>-->
                                                                <table width="95%" border="0" align="center"
                                                                    cellpadding="0" cellspacing="1" bgcolor="#999999">
                                                                    <tbody>
                                                                        <tr bgcolor="#8398C5">
                                                                            <td colspan="4" class="tituloEtiqueta"
                                                                                align="center">
                                                                                <div align="center">INFIRMACÌON GENERAR
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr bgcolor="#327bb2">
                                                                            <td colspan="2" height="25px" ;
                                                                                class="subtitulo4">
                                                                                Sistema de Informacion Poblacional Misak -SIPEMP
                                                                            </td>
                                                                            <td colspan="2" height="25px" ;>
                                                                                <div align="left">

                                                                                   
                                                                                    <span class="subtitulo4">
                                                                                            Resguardo: </span>&nbsp;
                                                                                    <font size="0.6px"  color="#fff" ;>
                                                                                        {{$persona->  nombre_reguardo }}</font>
                                                                                </div>
                                                                            </td>
                                                                        </tr>



                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>NOMBRE
                                                                                    COMPLETO</strong></td>
                                                                            <td colspan="3" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->  nombres}} -{{$persona->  apellidos }}

                                                                                &nbsp;</td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>TIPO DE
                                                                                    DOCUMENTO</strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                               {{$persona->  tipo_identificacion}}&nbsp;
                                                                            </td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>NUMERO DE
                                                                                    DOCUMENTO</strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->  docomento_persona}}&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr bgcolor="#FFFFFF">

                                                                            <td bgcolor="#ddd" class="style3">
                                                                                <strong>GÉNERO</strong></td>
                                                                            <td bgcolor="#FFF" class="style3">
                                                                                 {{$persona->  sexo}}&nbsp;</td>
                                                                            <td bgcolor="#ddd" class="style3">
                                                                                <strong>FECHA NACIMIENTO</strong></td>
                                                                            <td bgcolor="#FFF" class="style3">
                                                                                  {{$persona->  fecha_nacimiento}}</td>

                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong>ESTADO CIVIL</strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2">
                                                                                       {{$persona->  estado_civil}}  &nbsp;</td>
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong>TELEFONO</strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2">
                                                                                {{$persona->  telefono}}&nbsp;</td>
                                                                        </tr>
                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong>NIVEL ACADEMICO</strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2">
                                                                                {{$persona->  nivel_academico}}&nbsp;</td>
                                                                             <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong>CODIGO HOGAR</strong></td>
                                                                             <td bgcolor="#FFF" class="subtitulo2">
                                                                                {{$persona-> id}}&nbsp;</td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td colspan="4" class="subtitulo2">&nbsp;
                                                                            </td>
                                                                        </tr>


                                                                        <!--Aqui va el codigo de tablas  informacion del trabajador-->

                                                                        <tr bgcolor="#849AC6">
                                                                            <td colspan="4" class="tituloEtiqueta"
                                                                                align="center">
                                                                                <div align="center">DIRECCIÓN 
                                                                                </div>
                                                                            </td>
                                                                        </tr>


                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>DEPARTAMENTO</strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->  nombre_depatamento}}&nbsp;
                                                                            </td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>MUNICIPIO</strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->  nombre_municipio}}&nbsp;</td>
                                                                        </tr>
																		 <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>RESGUARDO</strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->  nombre_reguardo  }}&nbsp;
                                                                            </td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>ZONA</strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->   nombre_zona}}&nbsp;</td>
                                                                        </tr>
																		 <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>VEREDA</strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> nombre_vereda}}&nbsp;
                                                                            </td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>SECTOR</strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> nombre_sector}}&nbsp;</td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td colspan="4" class="subtitulo2">&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <!--Aqui finaliza el codigo de tablas direccion empleado-->

                                                                        <!--Aqui va el codigo de tablas informacion  trabajo -->

                                                                        <tr bgcolor="#849AC6">
                                                                            <td colspan="4" class="tituloEtiqueta"
                                                                                align="center">
                                                                                <div align="center">INFORMACIÓN - ACADEMICA 
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr bgcolor="#327bb2">
                                                                            <td colspan="4" class="subtitulo4"
                                                                                align="center">
                                                                                <span class="subtitulo2"><b>
                                                                                        <font size="0.6px"></font>
                                                                                    </b></span>
                                                                            </td>
                                                                        </tr>

                                                                          <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong> DEPARTAMENTO COLEGIO                                                                      </strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> nombre_municipio}}&nbsp;</td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>
                                                                                    MUNICIPIO COLEGIO</strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> nombre_municipio}}&&nbsp;</td>
                                                                        </tr>
                                                                  

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong> NOMBRE IE                                                                 </strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> nombre_colegio}}&&nbsp;</td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>SEDE IE                                                                            </strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> nombre_sede}}&nbsp;</td>
                                                                        </tr>
																		 <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong> GRADO OBTENIDO                                                                      </strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona-> tipo}}&nbsp;</td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>ESTADO                                                                       </strong></td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                {{$persona->  estado}}
																				
																				
																				
																				&nbsp;</td>
                                                                        </tr>




                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong></strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2">&nbsp;
                                                                            </td>
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong></strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2"> </td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td colspan="4" class="subtitulo2">&nbsp;
                                                                            </td>
                                                                        </tr>


                                                                        <!--Aqui finaliza el codigo de tablas informacion trabajo-->


                                                                        <!--Aqui va el codigo de tablas persona encargada de registar al trabajador  -->

                                                                        <tr bgcolor="#849AC6">
                                                                            <td colspan="4" class="tituloEtiqueta"
                                                                                align="center">
                                                                                <div align="center">ESTUDIOS DE EDUCACION SUPERIOR</div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr bgcolor="#327bb2">
                                                                            <td colspan="4" class="subtitulo4"
                                                                                align="center">
                                                                                <span class="subtitulo2"><b>
                                                                                        <font size="0.6px"></font>
                                                                                    </b></span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td height="22" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>PROGRAMAS PROFESIONALES </strong></td>
                                                                            <td colspan="3" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                --&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td height="22" bgcolor="#ddd"
                                                                                class="subtitulo2">
                                                                                <strong>TIPO EDUCACION SUPERIOR</strong></td>
                                                                            <td colspan="3" bgcolor="#FFF"
                                                                                class="subtitulo2">
                                                                                -
                                                                                &nbsp;</td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td width="25%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong>ESTADO</strong></td>
                                                                            <td width="23%" bgcolor="#FFF"
                                                                                class="subtitulo2">

                                                                                ---&nbsp;
                                                                            </td>
                                                                            <td width="26%" bgcolor="#ddd"
                                                                                class="subtitulo2"><strong></strong>
                                                                            </td>
                                                                            <td width="26%" bgcolor="#FFF"
                                                                                class="subtitulo2">&nbsp;</td>
                                                                        </tr>


                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong></strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2">&nbsp;
                                                                            </td>
                                                                            <td bgcolor="#ddd" class="subtitulo2">
                                                                                <strong></strong></td>
                                                                            <td bgcolor="#FFF" class="subtitulo2"> </td>
                                                                        </tr>

                                                                        <tr bgcolor="#FFFFFF">
                                                                            <td colspan="4" class="subtitulo2">&nbsp;
                                                                            </td>
                                                                        </tr>


                                                                        <!--Aqui finaliza el codigo de tablas informacion trabajo-->






                                                                        <!--
        <tr bgcolor="#FFFFFF">
          <td colspan="4"><div align="right"></div>            <div align="right"></div>
            <div align="left">
              <p>&nbsp;</p>
              <p align="center">________________________________
              </p>
            </div>            <div align="center" class="subtitulo3">
              <div align="center">
                <p><strong>Firma.</strong>  NºDocumento : CEDULA DE CIUDADANIA No.</p>
              </div>
          </div></td>
        </tr>-->


                                                                    </tbody>
                                                                </table>
                                                                <p align="left"><span
                                                                        class="Estilo4 Estilo5 Estilo6 Estilo7"><span
                                                                            class="Estilo4 Estilo5 Estilo6  Estilo8 Estilo9"><span
                                                                                class="Estilo5 Estilo6 Estilo8 Estilo9  Estilo11"><span
                                                                                    class="Estilo9 Estilo5"><span
                                                                                        class="Estilo6 Estilo8 Estilo9 Estilo13 Estilo14"><span
                                                                                            style="font-size:10px"> NOTA: Si la información de habitante  necesita actualización,  ir al modulo actalizacion.</span></span></span></span></span></span>
                                                                </p>

                                                </table>
                                                @endforeach
                                                @elseif(isset($message))
                                                <h3> {{$message}}</h3>
                                                @endif


                                            </address>
                                        </div>


                                        <!-- <div class="col-sm-6">
                          <h5><strong>Ingresar Informacion</strong> --</h5>
                          <div class="alert alert-success" role="alert">
                          <div class="table-responsive">
					                        
                                    ingresar un table si es posible

						              	</div>
                        </div>
                        </div>-->
                                    </div>
                                </div>
                            </div>

                            <!------/////////Ingresar usuarios y roles en el sistema //////////////////-------------->

                            <div class="tab-pane animated fadeInRight" id="ingresar_usuarios">
                                <div class="user-profile-content">


                                    <!--<p> <> </p>-->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">



                                            <div class="alert alert-success" role="alert">
                                                <div class="table-responsive">
                                                    hhhhhhh
                                                </div>


                                            </div>
                                            </address>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!--------//////// informacion de usuarios ingresados en el sistema//////////////////////---------------------->
                            <div class="tab-pane" id="roles">
                                <ul class="media-list">
                                    <div class="alert alert-success" role="alert">
                                        <div class="table-responsive">
                                            jjjjjjjjjjjjjjj
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
</div>
</div>



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







@endsection