  @extends('layouts.menu')

  @section('content')

  <link rel="stylesheet" href="css/estilos_pie_pagina.css">

  <!--\\\\\\\ contentpanel start\\\\\\-->
  <div class="pull-left breadcrumb_admin clear_both">
      <div class="pull-left page_title theme_color">
          <h1>Actualizacion</h1>
          <h2 class="">Actualizacion Informacion General</h2>
      </div>
      <div class="pull-right">
          <ol class="breadcrumb">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Actualizacion</a></li>
              <li class="active">Actualizacion Informacion General</li>
          </ol>
      </div>
  </div>
  <br>
  <br>
  <br>
  <div class="color_informacion_modulo " style="margin-top: 15px;">
      <span class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Sistema de Informacion
              Poblacional Misak -SIPEMP &gt; <font color="#060505">Actualizacion </font> &gt; <font color="#060505">
                  Informacion General</font> </span>
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
                          <h4> Buscar Doc. de la persona para la actualizacion de datos</h4>

                          <form id="" class="form_cunsulta" name="form" action="/Actualizacion-informacion-general"
                              method="POST" role="informacion-perosona" class="pocicion_formulario">
                              {{ csrf_field() }}

                              <div id="consulta_externa">

                                  <input id="nuip" name="q" class="inputbuscar" style="text-align:center"
                                      placeholder="Digíte el número sin puntos ni comas"
                                      title="El nùmero de cèdula debe ser de 2 a 10 dígitos"
                                      value="{{ Auth::user()->id_persona}}" style="width: 200px" style="">
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
                                          <button type="button" class="botonCancelar"><i class="fa fa-user"></i>
                                              Cancelar</button>
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


              <br>
              <br>
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
                                          class="fa fa-laptop"></i>Actualizar Informacion General </a></li>


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


                                              </address>
                                          </div>
                                          <div class="col-sm-12">
                                              <!-- <h5><strong>Ingresar Informacion</strong> --</h5>-->
                                              <div class="alert alert-success" role="alert">

                                                  <div class="table-responsive">
                                                      <h1>{{Session::get('data')}}</h1>
                                                      @if(isset($details))
                                                      Informacion del Habitante a actualizar N° CC : <b1> {{ $query }}
                                                      </b1> Es :
                                                      <table class="table table-bordered table-striped">
                                                          <thead>
                                                              <tr>
                                                                  <th>NOMBRES</th>
                                                                  <th>APELLIDO</th>
                                                                  <th>N° CEDULA </th>
                                                                  <th>TIPO ID</th>
                                                                  <th>DIRECCION</th>
                                                                  <th>RESGUARDO</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>

                                                              @foreach($details as $persona)
                                                              <tr>
                                                                  <td>{{$persona-> nombres }}</td>
                                                                  <td>{{$persona-> apellidos }}</td>
                                                                  <td>{{$persona-> docomento_persona }}</td>
                                                                  <td>{{$persona-> tipo_identificacion }}</td>

                                                                  <td>{{$persona-> nombre_vereda}}-{{$persona->nombre_sector}}
                                                                  </td>

                                                                  <td>{{$persona-> nombre_reguardo }}</td>

                                                                  <!--
                    <td width="10px">
                                    <a href="" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                -->

                                                                  <td width="10px">
                                                                      <a href="{{ route('Actualizacion-Informacion-General-Persona', $persona->id) }}"
                                                                          class="btn btn-sm btn-danger">
                                                                          Actualizar Informacion
                                                                      </a>
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










                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!------/////////Ingresar usuarios y roles en el sistema //////////////////-------------->
                      <br>
                      <!--
           <a class="botonActualizar_Informacion_General"style="" href="">Actualizar</a>
		
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