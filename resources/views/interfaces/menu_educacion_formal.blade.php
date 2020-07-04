@extends('layouts.menu2')

@section('content')

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>Censo Poblacional</h1>
        <h2 class="">Educacion Persona</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Censo Poblacional</a></li>
            <li class="active">Educacion Persona</li>
        </ol>
    </div>
</div>


<!-- INICIO DE  CODIGO DE FORMULARIO -->


<div class="container">
    <!--Informacion menu izquierda-->
    <div class="col-md-3 col-sm-4 col-xs-12 ">

        <iframe frameborder="0" width="100%" scrolling="no" height="245" src="./menu-lateral">

        </iframe>
    </div>
    <!-- Fin Informacion menu izquierda-->
    <div class="col-md-9 ">
        <div class="ContenedorFormularioCenso">
            <div class="titulo_informacion">

                <table>
                    <tbody>
                        <tr>
                            <td style="width:3px;"></td>
                            <td title="Censo vivienda de familia Misak">
                                <table class="active">
                                    <tbody>
                                        <tr>
                                            <td><b href="">VIVIENDA MISAK</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td style="width:3px;"></td>
                            <td title="Censo del Hogar Misak  ">
                                <table class="active">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b href="">HOGAR MISAK </b>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </td>

                            <td style="width:3px;"></td>
                            <td title="Miembros de la familia   Misak ">
                                <table class="active">
                                    <tbody>
                                        <tr>
                                            <td><b href="">FAMILIA MISAK</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td title="Información de la persona que viven dentro de la familia ">
                                <table class="active">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b href="">PERSONAS </b>
                                            </td>
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
                                                <b href="">INFORMACIÓN PERSONA </b>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </td>

                            <td style="width:3px;"></td>
                            <td title="Nivel educativo  que tiene  la persona que vive en la familia">
                                <table class="estatic">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b href="">NIVEL EDUCATIVO </b>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="color_infor noPrint" style="margin-top: 15px;">
                    <span class="color_infor  noPrint">Usted se encuentra en: &nbsp;&nbsp;Censo Poblacional Misak
                        SIPEMP&gt; <font color="#666666">Información Persona</font></span>
                </div>
                <h1>Informacion Persona </h1>
            </div>
            <!--FIN titulo_infobasica-->
            <!-- FORMULARIO-->


            <div class="col-md-12 col-sm-12 col-xs-12 educacion_primero">
                <div class="form-group form-inline input-group-sm">
                    <label class="pull-left" for="ddSiEducacion">¿Tiene alguna educación formal? </label>

                    <select name="" id="ddArmonizacion" tabindex="51" class="form-control"
                        onchange="showArmonizacion(this);"
                        class="form-control col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                        <option value="">Seleccione</option>
                        <option value="1">SI</option>
                        <option value="0">NO</option>

                    </select>

                </div>

            </div>











            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-6 col-sm-12 col-xs-12">

                    <div class="pull-right botones-pies">

                        <a onclick="  title=" Guardar Educación" class="btn btn-success btn-xs"> </a>

                        <a href="{{ route('Resumen-Censo-Personal', $datos->id) }}" class="btn btn-sm btn-default"
                            style="background-color:#1b9e1d;border: 0px !important;color:white;"> <i class="fa fa-eye"
                                aria-hidden="true"></i>
                            SIGUENTE

                        </a>


                    </div>

                    <br>

                    <div class="clearfix"></div>
                </div>



            </div>
            <br>
            <br>





            <div id="SiHaceArmonizacion" style="visibility: hidden; display: none;">
                <div class="contenedor_informacion_persona">
                    <!--Contenedor informacion_persona --->

                    <div class="recuadro_info_persona">SELECCIONE EL NIVEL DE EDUCACIÓN QUE TIENE </div>

                    <form id="Hogar" method="post" action="Educacion_Formal/Guardado">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


                        <!--<div id="SiEducacion" style="visibility: hidden; display: none;">	-->

                        <div class="contenedor_informacion_persona">
                            <!--Contenedor informacion_persona --->

                            <!--<div class="recuadro_info_persona"> Agregar Nivel Educativo escolar </div>-->
                            <div class="col-md-12 col-sm-12 col-xs-12">



                                <div class="col-md-6 col-sm-12 col-xs-12">



                                    <!-- <div class="form-group input-group-sm">
                                           <!--  <label for="title">Nivel Académico</label>
											
                                            <select name="" class=" form-control" id="ddnoEducacion" onchange="showNOEducacion(this);" >
				                             <option value="">Selec</option>
				                             <option value="NE">No tiene educacionFormal</option>
				                              
				                               <option value="PR">Preescolar</option>
				                                <option value="P">Básica Primaria(1-5)</option>
				                               
											    <option value="BS">Básica Secundaria(6-9)</option>
				                               
											    <option value="MD">Media(10-13)</option>
				                               

			                              </select>--
                                        </div>-->





                                    <div class="form-group input-group-sm">
                                        <label for="title">Seleccione Municipi:</label>
                                        <select name="municipioColegio" id="municipioColegio" class="form-control"
                                            style="width:" required="">
                                            <option value="" selected disabled>Selecione Municipio</option>

                                        </select>



                                    </div>


                                    <div class="form-group input-group-sm">
                                        <label for="title">Colegio:</label>
                                        <select name="colegio" id="colegio" class="form-control" style="width:"
                                            required="">
                                        </select>

                                    </div>

                                    <div class="form-group input-group-sm">
                                        <label for="title">Sede colegio:</label>
                                        <select name="sede" id="sede" class="form-control" style="width:" required="">
                                        </select>

                                    </div>

                                    <div class="form-group input-group-sm">

                                        <label for="title">Nivel Académico:</label>
                                        <select name="codigo_tipo" id="tipoE" class="form-control" style="width:"
                                            required="">
                                        </select>
                                    </div>



                                    <div class="form-group input-group-sm">
                                        <label>
                                            <span class="asterisco">*</span>
                                            Estado</label>
                                        <select name="estado" class="form-control">
                                            <option selected="selected" value="Seleccione">Seleccione</option>
                                            <option value="1">En Curso</option>
                                            <option value="2">Incompleto</option>
                                            <option value="3">Graduado</option>
                                            <option value="4">Retirado</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12">




                                    <div class="form-group input-group-sm">
                                        <label>
                                            <span class="asterisco">*</span>
                                            ¿ La modalidad que tienen la institucion educativa es?</label>
                                        <select name="modalidad_colegio" class="form-control">
                                            <option selected="selected" value="Seleccione">Seleccione</option>
                                            <option value="1">De buena calidad</option>
                                            <option value="2">Regular</option>
                                            <option value="3">Malo</option>


                                        </select>
                                    </div>
                                    <div class="form-group input-group-sm">
                                        <label><span class="asterisco">*</span>Año que estudio/a </label>
                                        <input name="año_educacion1" id=" " type="date" tabindex="2" type="text"
                                            style="width:160px" tabindex="2" class="form-control" autocomplete="off">
                                    </div>


                                    <input name="info_persona_id" type="text" style="visibility:hidden" value=""
                                        tabindex="2" class="form-control btn-warning" style="width:60px" value="">

                                    <input name="persona_id" type="text" style="visibility:hidden" value="" tabindex="2"
                                        class="form-control btn-warning" style="width:60px" value="">


                                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                        <br>

                                        <!--borones Guardar y continuar -->
                                        <div class="pull-right ">

                                            <button type="button" class="botones_censo_cancelar"
                                                onclick="location.href='{{ url('Hogar') }}'">LIMPIAR</button>
                                            <input type="submit" class="botones_censo_poblacional"
                                                value="GUARDAR Y CONTINUAR " id="boton" class="btn btn-primary">


                                        </div>

                    </form>
                    <br>
                    <br>

                </div>
                <div class="clearfix"></div>
            </div>



        </div>


        <!--Cierra el contenedor 2 . recuadro -->

    </div>

    <div class="clearfix"></div>
    <!--Cierra el contenedor 2 . recuadro -->


</div>
</div>







<br>



<!-- FIN FORMULARIO-->
</div>
<!--FIN ContenedorMenuHojaVida-->
</div>
<!--FIN col-md-9-->
</div>
<!--FIN container-->

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
<script type="text/javascript">
//--Modificación para disminuir lentitud de la página y disminuir las peticiones al servidor.
//PARA QUE APARESCAN LOS OBCIONES  CUANDO SELECCIONE  NO TENGO HIJOS ESTUDIANDO  EN LAS INSTITUICONES EDUCATIVAS DEL RESGUARDO


function showArmonizacion() {
    var e = document.getElementById("ddArmonizacion");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 1) {
        //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
        $('#SiHaceArmonizacion').show();
        $('#SiHaceArmonizacion').css('visibility', 'visible');
        $('#ddSiHaceArmonizacion').css('display', 'block');

    } else {
        //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
        $('#ddSiHaceArmonizacion :nth-child(1)').prop('selected', true);
        $('#SiHaceArmonizacion').hide();
        $('#SiHaceArmonizacion').css('visibility', 'hidden');
        $('#ddSiHaceArmonizacion').css('display', 'none');

    }
};
</script>






@endsection