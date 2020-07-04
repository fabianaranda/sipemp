@extends('layouts.menu')

@section('content')

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>USUARIOS </h1>
        <h2 class="">Nuevos Usuarios</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Usuarios</a></li>
            <li class="active">Nuevos Usuarios</li>
        </ol>
    </div>
</div>


<div class="container">
    <!--Informacion menu izquierda-->
    <div class="col-md-3 col-sm-4 col-xs-12 ">

        <iframe frameborder="0" width="100%" scrolling="no" height="245" src="./menu-lateral2 ">


        </iframe>
    </div>
    <!-- Fin Informacion menu izquierda-->
    <div class="col-md-9 ">
        <div class="ContenedorFormularioCenso">

            <table>
                <tbody>
                    <tr>

                        <!--
				                <td style="width:3px;"></td>
		                          <td  title="Censo del Hogar Misak  " >
		                         <table class="active" >
			                     <tbody>
			                    <tr>
				                 <td >
				                   <b  href=""  >ROLES</b>
				                 </td>
			                    </tr>
		                       </tbody>
		
		                       </table>
		                       </td>
			  
		                       <td style="width:3px;"></td>
		                        <td title="Miembros de la familia   Misak " >
		                          <table  class="active">
					              <tbody>
			                      <tr>
				                   <td ><b  href="" >PERMISOS DEL SISTEMA </b></td>
			                      </tr>
		                         </tbody>
		                       </table>
		                      </td>
		-->
                        <td style="width:3px;"></td>
                        <td title="Censo vivienda de familia Misak">
                            <table class="estatic">
                                <tbody>
                                    <tr>
                                        <td><b href=""> USUARIOS INGRESADOS EN SIPEMP </b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>


                        <td style="width:3px;"></td>
                        <td title="Información de la persona que viven dentro de la familia ">
                            <table class="active">
                                <tbody>
                                    <tr>
                                        <td>
                                            <b onclick="location.href='{{ url('Ingresar_Usuarios') }}'"> INGRESAR NUEVO
                                                USUARIO DEL SIPEMP </b>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>

                    </tr>
                </tbody>
            </table>




            <div class="color_infor noPrint" style="margin-top: 15px;">
                <span class="color_infor  noPrint">Usted se encuentra en:&nbsp;&nbsp;Usuarios &gt; <font
                        color="#666666"> Nuevos Usuarios en SIPEMP </font></span>
            </div>

            <div>


                <!-- <h1 >Personas </h1>-->
            </div>
            <!--FIN titulo_infobasica-->
            <!-- FORMULARIO-->
            <!-- FORMULARIO-->



            <!--       
                                                  
<section>
 


   <!--<div class="hr-line"></div>-->
            <!--
   <div class="col-lg-12 col-sm-12 text-center group_zonas" style="padding-bottom:25px">
       <div class="zona-consulta col-sm-6 text-center col-lg-4" ng-class="(origenKiosco)? 'col-lg-6' : 'col-lg-4'">
           <div class="btns-consulta">
               <div class="">
                   <button type="button" class="circulo-consulta" onclick="location.href='{{ url('Menu-Usuarios') }}'"> 
                       <img src="modules/content/img/icon_lugar.png" class="icon_consulta">  
                       <div class="titulo-consulta textoConsulta">
                      Usuarios Gobernador- Secretarios General 
                           <div class="clearfix"></div>
                       </div>
                       <div class="texto-consulta textoConsulta">
                            SIPEMP
                       </div>
                   </button>
               </div>
               
           </div>
       </div>
       <div class="zona-consulta col-sm-6 text-center col-lg-4" >
           <div class="btns-consulta">
               <div class="">
                   <button type="button" class="circulo-consulta" onclick="location.href='{{ url('Validacion') }}'">
                       <img src="modules/content/img/icon_jurado.png" class="icon_consulta">
                       <div class="titulo-consulta text-center textoConsulta">
                      Usuarios Oficina Censo Poblacional
                           <div class="clearfix"></div>
                       </div>
                       <div class="texto-consulta textoConsulta">
                        SIPEMP  
                       </div>
                   </button>
               </div>
               
           </div>
       </div>
       
       <div class="zona-consulta col-lg-4 col-sm-6 text-center">
           <div class="btns-consulta">
               <div class="">
                   <button type="button" class="circulo-consulta" onclick="location.href='{{ url('Reporte-Educacion-Propia') }}'">
                       <img src="modules/content/img/icon_candidatos.png" class="icon_consulta">
                       <div class="titulo-consulta text-center textoConsulta">
                       Personal Encargado del Censo Poblacional                                      
                         
                       </div>
                       <div class="texto-consulta textoConsulta">
                       VER
                       </div>
                   </button>
               </div>
           </div>
       </div>
  
</section>

                     
-->


            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios del sistema sipemp
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="solicitudinfo"
                        data-order='[[ 0, "desc" ]]'>
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>N° Documento ID</th>

                                <th>Cargo</th>
                                <th></th>
                                <th colspan="111">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellidos }}</td>
                                <td>{{ $user->cedula }}</td>
                                <td>{{ $user->cargo }}</td>


                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>


                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>

                                <td width="10px">
                                    {!! Form::open(['route' => ['users.destroy', $user->id],
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>









            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
        <!--FIN ContenedorFormularioCenso-->
    </div>
    <!--FIN col-md-9-->
</div>
<!--FIN container-->







@endsection