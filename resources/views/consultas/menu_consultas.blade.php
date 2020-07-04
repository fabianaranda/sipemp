@extends('layouts.menu')

@section('content')
<link rel="stylesheet" href="css/estilos_pie_pagina.css">
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>Consultas</h1>
        <h2 class="">Menu</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Consultas</a></li>
            <li class="active">Menu</li>
        </ol>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>




<header>



    <div id="container" style="text-align:center">

        <section class="cursos">

            <b class="conten " onclick="location.href='{{ url('Informacion-vivienda') }}'">
                <div class="curso_hover">
                    <p>Puedes realizar la consulta de las vivienda de la comunidad Misak que vive dentro del resguardo
                        indígena de Guambia </p>
                </div>
                <div>
                    <img src="images/ya.jpg" width="200xp" height="100x" alt="lpersona">
                    <h2>Vivienda</h2>

                </div>
            </b>

            <b class="conten " onclick="location.href='{{ url('Informacion-hogar') }}'">
                <div class="curso_hover">
                    <p>Puedes consultar el hogar de las familia Misak que reside dentro del resguardo indígena de
                        Guambia </p>
                </div>
                <div>

                    <img src="images/persona.jpg" width="200px" alt="persona">
                    <h2>Hogar</h2>

                </div>
            </b>

            <b class="conten" onclick="location.href='{{ url('Informacion-Persona') }}'">
                <div class="curso_hover">
                    <p>Puedes consultar las personas que habitan dentro del resguardo de Guambia </p>
                </div>
                <div>
                    <img src="images/mek.jpg" width="200px" height="" alt=" Logo">
                    <h2>Persona</h2>

                </div>
            </b>
            <!--
<b class="conten" href="">
  <div class="curso_hover"><p>SI.</p>
  </div>
  <div>
    <img src="images/principios.jpg" width="" height="" alt=" Logo">
    <h2>Educación Propia </h2>
    
  </div>
</b>
 
 <b class="conten" href="">
  <div class="curso_hover"><p>si.. </p>
  </div>
  <div>
    <img src="images/ambiental.jpg" width="" height="" alt=" Logo">
    <h2>Salud  Propia </h2>
    
  </div>
</b>
-->




        </section>

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
                        <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a
                            href="">© Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
                    </div>
                </div>

            </div>

        </footer>


        @endsection