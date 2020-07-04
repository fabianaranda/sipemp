@extends('layouts.menu')

@section('content')
<link rel="stylesheet" href="css/estilos_pie_pagina.css">
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>Actualizacion</h1>
        <h2 class="">Menu</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Actualizacion</a></li>
            <li class="active">Menu</li>
        </ol>
    </div>
</div>


<section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--<div class="hr-line"></div>-->
    <div class="col-lg-12 col-sm-12 text-center group_zonas" style="padding-bottom:25px">
        <div class="zona-consulta col-sm-6 text-center col-lg-4" ng-class="(origenKiosco)? 'col-lg-6' : 'col-lg-4'">
            <div class="btns-consulta">
                <div class="">
                    <button type="button" class="circulo-consulta"
                        onclick="location.href='{{ url('Actualizacion-informacion-general') }}'">
                        <img src="modules/content/img/icon_lugar.png" class="icon_consulta">
                        <div class="titulo-consulta textoConsulta">
                            Actualizar Datos
                            <div class="clearfix"></div>
                        </div>
                        <div class="texto-consulta textoConsulta">
                            Puede actualizar los datos generales de la persona que se encuentra dentro del SIPEMP
                        </div>
                    </button>
                </div>

            </div>
        </div>
        <div class="zona-consulta col-sm-6 text-center col-lg-4">
            <div class="btns-consulta">
                <div class="">
                    <button type="button" class="circulo-consulta"
                        onclick="location.href='{{ url('Ingreso-persona-Nocleo-familiar') }}'">
                        <img src="modules/content/img/icon_jurado.png" class="icon_consulta">
                        <div class="titulo-consulta text-center textoConsulta">
                            Ingresar persona en el núcleo familiar
                            <div class="clearfix"></div>
                        </div>
                        <div class="texto-consulta textoConsulta">
                            Puedes ingresar otro miembro de la familia Misak dentro del núcleo de hogar
                        </div>
                    </button>
                </div>

            </div>
        </div>
        <div class="zona-consulta col-lg-4 col-sm-6 text-center">
            <div class="btns-consulta">
                <div class="">

                    <button type="button" class="circulo-consulta"
                        onclick="location.href='{{ url('Nuevo-Hogar-Misak') }}'">
                        <img src="modules/content/img/icon_candidatos.png" class="icon_consulta">
                        <div class="titulo-consulta text-center textoConsulta">
                            Ingresar nuevo núcleo familiar
                            <div class="clearfix">en SIPEMP</div>
                        </div>
                        <div class="texto-consulta textoConsulta">
                            Conformación de nuevo nucleo familiar
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div class="zona-consulta col-lg-4 col-sm-6 text-center">
            <div class="btns-consulta">
                <div class="">
                    <button type="button" class="circulo-consulta" onclick="location.href='{{ url('Hogar') }}'">
                        <img src="modules/content/img/icon_candidatos.png" class="icon_consulta">
                        <div class="titulo-consulta text-center textoConsulta">
                            Ingresar familia-persona dentro del censo poblacional
                            <div class="clearfix"> </div>
                        </div>
                        <div class="texto-consulta textoConsulta">
                            Ingreso de Nuevos habitantes dentro del censo poblacional Misak SIPEMP.
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <!--
        <div class="zona-consulta col-lg-4 col-sm-6 text-center" >
           <div class="btns-consulta">
               <div class="">
                   <button type="button" class="circulo-consulta" ng-click="">
                       <img src="modules/content/img/icon_candidatos.png" class="icon_consulta">
                       <div class="titulo-consulta text-center textoConsulta">
                           Informacion Habitante                                   
                           <div class="clearfix"></div>
                       </div>
                       <div class="texto-consulta textoConsulta">
                           Consultar la informacion del habitante.
                       </div>
                   </button>
               </div>
           </div>
       </div>

        <div class="zona-consulta col-lg-4 col-sm-6 text-center" >
           <div class="btns-consulta">
               <div class="">
                   <button type="button" class="circulo-consulta" ng-click="">
                       <img src="modules/content/img/icon_candidatos.png" class="icon_consulta">
                       <div class="titulo-consulta text-center textoConsulta">
                           Informacion Habitante                                   
                           <div class="clearfix"></div>
                       </div>
                       <div class="texto-consulta textoConsulta">
                           Consultar la informacion del habitante.
                       </div>
                   </button>
               </div>
           </div>
       </div>
   </div>-->
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
                <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href="">©
                    Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
            </div>
        </div>

    </div>

</footer>
@endsection