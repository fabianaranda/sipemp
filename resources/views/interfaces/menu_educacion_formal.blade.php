@extends('layouts.menu2')

@section('content')
<link type="text/css" rel="stylesheet" href="/css/form_ingreso_familia.css">

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

            <form id="Hogar" method="post" action="Educacion_Superior/Guardado">
                <!--<form id="Hogar" method="post" action="Educacion_Formal/Guardado">-->
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


                <div class="col-md-12 col-sm-12 col-xs-12 educacion_primero">
                    <div class="form-group form-inline input-group-sm">
                        <label class="pull-left" for="ddSiEducacion">¿Tiene alguna educación formal? </label>

                        <select name="" id="ddEducacion" tabindex="51" class="form-control"
                            onchange="showSiEducacion(this);"
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
                                style="background-color:#1b9e1d;border: 0px !important;color:white;"> <i
                                    class="fa fa-eye" aria-hidden="true"></i>
                                SIGUENTE

                            </a>


                        </div>

                        <br>

                        <div class="clearfix"></div>
                    </div>



                </div>
                <br>
                <br>





                <div id="SiTieneEducacion" style="visibility: hidden; display: none;">
                    <div class="contenedor_informacion_persona">
                        <!--Contenedor informacion_persona --->

                        <div class="recuadro_info_persona">SELECCIONE EL NIVEL DE EDUCACIÓN QUE TIENE </div>



                        <!--<div id="SiEducacion" style="visibility: hidden; display: none;">	-->

                        <div class="contenedor_informacion_persona">


                            <div class="container">



                                <!--<div class="jumbotron">-->

                                <div class="row">
                                    <div class="col-md-12 form-group input-group-sm">
                                        <div class="etiqueta2"> Recuerde que los campos con un asterisco (*) son
                                            obligatorios.
                                        </div>
                                        <!-- <input type="text" name="txtDir" id="txtDir" maxlength="100" placeholder="Use los controles de la parte inferior para ingresar su dirección en este campo." class="form-control" readonly="readonly" autocomplete="on" required="">
       -->
                                    </div>
                                </div>
                                <!--</div>-->

                                <div class="row">
                                    <div class="col-md-4 form-group input-group-sm">
                                        <div class="etiqueta2 usuario">Seleccione Departamento(*)</div>

                                        <input type="text" name="nombres" maxlength="50"
                                            placeholder="Ingrese sus Nombres" class="form-control" required="">

                                    </div>
                                    <div class="col-md-4 form-group input-group-sm">
                                        <div class="etiqueta2 usuario">Seleccione Municipi:(*)</div>

                                        <input type="text" name="apellidos" maxlength="25"
                                            placeholder="Ingrese su Primer Apellido" class="form-control" required="">
                                    </div>
                                    <div class="col-md-4 form-group input-group-sm">
                                        <div class="etiqueta2 usuario">Seleccione Colegio:(*)</div>

                                        <select name="estado_civil" type="text" maxlength="20" autocomplete="of"
                                            class="form-control " required="">
                                            <option value="">Seleccione</option>
                                            <option value="SO">Soltero(a)</option>
                                            <option value="CA">Casado(a)</option>
                                            <option value="SE">Separado(a) o Divorciado(a)</option>
                                            <option value="VI">Viudo(a)</option>
                                            <option value="UN">Unión Libre</option>
                                        </select>
                                        </select>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group input-group-sm">
                                        <div class="etiqueta2">Seleccione Sede Colegio:.(*)</div>
                                        <div>
                                            <select name="tipo_identificacion" class="form-control text-center">
                                                <option value="">&lt;&lt; Seleccione &gt;&gt;</option>
                                                <option value="0">Cedula de Ciudadania</option>
                                                <option value="1">Tarjeta de Identidad</option>
                                                <option value="2">Cedula de Extranjeria</option>
                                                <option value="3">Pasaporte</option>



                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 form-group input-group-sm">
                                        <div class="etiqueta2"> Seleccione Nivel Académico:.(*)</div>
                                        <input type="number" name="docomento_persona" maxlength="15"
                                            placeholder="Ingrese su Numero de identificación" class="form-control"
                                            onchange="verificaExistente(this.value)" min="0" required="">
                                    </div>
                                    <div class="col-md-4 form-group input-group-sm">
                                        <div class="etiqueta2">Seleccione Estado(*)</div>
                                        <input type="date" name="fecha_nacimiento" maxlength="50"
                                            placeholder="Ingrese el Lugar de Expedicion" class="form-control"
                                            onchange="validarEmail()" autocomplete="on" required="">
                                        <span id="spmMail" style="color: #FF0000; display:none">No es un correo
                                            electrónico
                                            válido, por favor verifiquelo</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group input-group-sm">
                                        <div class="etiqueta2">EL Año que estudio/a (*)</div>

                                        <input type="date" name="nombres" maxlength="50"
                                            placeholder="Ingrese sus Nombres" class="form-control" required="">
                                    </div>
                                    <div class="col-md-6 form-group input-group-sm">
                                        <div for="ddNoEstudiaResguardo" class="etiqueta2">Tiene estudios de Educacion
                                            Superior*)</div>
                                        <select name="nivel_academico" class=" form-control" id="ddNoEstudiaResguardo"
                                            onchange="showNoEstudiaResguardo(this);" autocomplete="of" required="">
                                            <option value="">Seleccione</option>
                                            <option value="2">SI</option>
                                            <option value="1">NO</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 text-center form-group input-group-sm">
                                        <input type="submit" class="Agregarpersona" value="Agregar persona en el Hogar"
                                            id="boton" class="btn btn-primary">
                                        &nbsp;&nbsp;
                                        <input type="button" onclick="limpiarFormulario()" value="Limpiar formulario">

                                    </div>
                                </div>

                                <br>
                            </div>
                            <input name="info_persona_id" type="text" style="visibility:hidden" value="" tabindex="2"
                                class="form-control btn-warning" style="width:60px" value="">

                            <input name="persona_id" type="text" style="visibility:hidden" value="" tabindex="2"
                                class="form-control btn-warning" style="width:60px" value="">
                            <!------------------------------=================================
										==================================================------------------------------------->
                            <!--

                                    <div class="form-group input-group-sm">
                                        <label for="ddNoEstudiaResguardo"><span class="asterisco">*</span>¿Tiene
                                            estudiando hijos en las Instituciones Educativas del Resguardo de
                                            Guambía</label>
                                        <select name="hijos_estudiando_guambia" id="ddNoEstudiaResguardo" tabindex="51"
                                            class="form-control" onchange="showNoEstudiaResguardo(this);" required="">
                                            <option value="">Seleccione</option>
                                            <option value="2">SI</option>
                                            <option value="1">NO</option>

                                        </select>
                                    </div>-->
                            <div id="NoGustaQueEstudienGuambia" style="visibility: hidden; display: none;">
                                <div class="container">
                                    <!--Informacion menu izquierda-->

                                    <!-- Fin Informacion menu izquierda-->

                                    <!-- <form id="Hogar" method="post" action="Educacion_Superior/Guardado">-->
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                    <div class="contenedor_informacion_persona">
                                        <!--Contenedor informacion_persona --->

                                        <div class="recuadro_info_persona">Agregar el Nivel de Educacion superior</div>




                                        <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:--
                  {{ csrf_field() }}
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  -->

                                        <div class="col-md-12 col-sm-12 col-xs-12">


                                            <!--Inicio de formulario-->
                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div class="col-md-6 col-sm-12 col-xs-12">

                                                    <div class="form-group input-group-sm">
                                                        <label><span class="asterisco">*</span>Tipo Educacion Superior
                                                        </label>
                                                        <select name="tipo_educacion_superior" type="text"
                                                            maxlength="20" id="txtPrimerNombre" tabindex="3"
                                                            class="form-control ">
                                                            <option value="">Selec</option>
                                                            <option value="TL">Técnica Laboral</option>
                                                            <option value="TC">Tecnológica</option>
                                                            <option value="UN">,Universitaria</option>
                                                            <option value="EP">Especialización</option>
                                                            <option value="ME">Maestria</option>
                                                            <option value="DOC">Doctorado</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group input-group-sm">
                                                        <label>
                                                            <span class="asterisco">*</span>
                                                            Estado</label>
                                                        <select name="estado_actual" class="form-control">
                                                            <option value="">Seleccione</option>
                                                            <option value="En Curso">En Curso</option>
                                                            <option value="Incompleto">Incompleto</option>
                                                            <option value="Graduado">Graduado</option>
                                                            <option value="Retirado">Retirado</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12 col-xs-12">

                                                    <div class="form-group input-group-sm">
                                                        <label><span class="asterisco">*</span>Nombre de la
                                                            Carrera</label>
                                                        <input name="nombre_carrera" type="text" value="" tabindex="2"
                                                            class="form-control" style="" autocomplete="on" value="">

                                                    </div>


                                                    <input name="documento_id" type="text" style="visibility:hidden"
                                                        value="{{$datos->id}}" tabindex="2"
                                                        class="form-control btn-warning" style="width:60px" value="">


                                                    <input name="persona_id" type="text" style="visibility:hidden"
                                                        value="{{$datos->persona_id}}" tabindex="2"
                                                        class="form-control btn-warning" style="width:60px" value="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" class="Agregareducacion"
                                        value="Agregar carrera de educacion superior" id="boton"
                                        class="btn btn-primary">

                                    <button type="button" class="btn btn-danger"
                                        onclick="location.href='{{ url('familia_persona') }}'">LIMPIAR</button>

            </form>
            <div class="clearfix"></div>
            <!--Cierra el contenedor 2 . recuadro -->

        </div>

        <div class="titulo_informacion">
            <h1>Cantidad de carrerar de educación superior optendios </h1>

        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Tipo Educacion Superior</th>
                    <th>Nombre de la Carrera</th>
                    <th>Nombre de la IES</th>
                    <th>Ciudad donde esta el IES</th>
                    <th>Estado</th>
                    <th>Año de Ingreso</th>
                    <th>Año Finalizado</ </th>

                    <th></th>
                </tr>
            </thead>
            <tbody id="bodyTable">
            </tbody>
        </table>
        <div class="pull-right ">
            <button class="boton_guardarContinuar" id="guardar">Guardar y Continuar</button>
        </div>

        <br>
        <br>
        <br>





    </div>
</div>





<div class="clearfix"></div>
<!--Cierra el contenedor 2 . recuadro -->
</div>
<div class="clearfix"></div>
<!--Cierra el contenedor 2 . recuadro -->
</div>
</div>
<br <!-- FIN FORMULARIO-->
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
//PARA QUE APARESCAN LOS OBCIONES   CUANDO SELECCIONE SI O NO / EDUCACION SUPERIOR 


function showSiEducacion() {
    var e = document.getElementById("ddEducacion");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 1) {
        //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
        $('#SiTieneEducacion').show();
        $('#SiTieneEducacion').css('visibility', 'visible');
        // $('#ddSiHaceArmonizacion').css('display', 'block');

    } else {
        //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
        $('#SiTieneEducacion :nth-child(1)').prop('selected', true);
        $('#SiTieneEducacion').hide();
        $('#SiTieneEducacion').css('visibility', 'hidden');
        //$('#ddSiHaceArmonizacion').css('display', 'none');

    }
};
//// SI TIENE EDUCACION SUPERIOR //////////////////
function showNoEstudiaResguardo() {
    var e = document.getElementById("ddNoEstudiaResguardo");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 1) {
        //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
        $('#NoGustaQueEstudienGuambia').show();
        $('#NoGustaQueEstudienGuambia').css('visibility', 'visible');
        $('#ddNoEstudiaResguardoEscuela').css('display', 'block');

        //input ¿El problema de la deserción escolar    en nuestro pueblo Misak se debe a?
        $('#DesercionEscuela').show();
        $('#DesercionEscuela').css('visibility', 'visible');
        $('#ddNoEstudiaResguardoEscuela1').css('display', 'block');


    } else {
        //input ¿Por qué no le gusta que sus hijos estudien en las instituciones educativas del resguardo de Guambia?
        $('#ddNoEstudiaResguardoEscuela :nth-child(0)').prop('selected', true);
        $('#NoGustaQueEstudienGuambia').hide();
        $('#NoGustaQueEstudienGuambia').css('visibility', 'hidden');
        $('#ddNoEstudiaResguardoEscuela').css('display', 'none');
        //input ¿El problema de la deserción escolar    en nuestro pueblo Misak se debe a?
        $('#ddNoEstudiaResguardoEscuela1 :nth-child(0)').prop('selected', true);
        $('#DesercionEscuela').hide();
        $('#DesercionEscuela').css('visibility', 'hidden');
        $('#ddNoEstudiaResguardoEscuela1').css('display', 'none');
    }
};
</script>


<script type="text/javascript">
var personas = [];
$(function() {
    function verTabla() {
        var form = {};
        $.map($('form').serializeArray(), function(n, i) {
            form[n['name']] = n['value'];
        });
        personas.push(form);
        var html = '';
        $.each(personas, function(index, value) {
            personas[index].integrantes = index + 1;
            html = html + '<tr>';

            html = html + '<td>' + personas[index].integrantes + '</td>';
            html = html + '<td>' + value.tipo_educacion_superior + '</td>';
            html = html + '<td>' + value.nombre_carrera + '</td>';
            html = html + '<td>' + value.nombre_ies + '</td>';
            html = html + '<td>' + value.ciudad_ies + '</td>';
            html = html + '<td>' + value.estado_actual + '</td>';
            html = html + '<td>' + value.año_ingreso + '</td>';

            html = html + '<td>' + value.fecha_finalizado + '</td>';




            html = html + '<td><button  class="borrar" click="borrar(' + index +
                ')">Eliminar</button></td>';

            html = html + '</tr>';
        });
        $('#bodyTable').html(html);
    }
    $('form').submit(function(e) {
        e.preventDefault(); //Evita que se envie el formulario
        verTabla();
    })
})


function borrar(idx) {
    borrar();
    personas.pop();
    personas.splice(idx, 1);
    verTabla();
}

$('#guardar').click(function() {
    if (personas.length > 0) {
        $.ajax({
            url: base + '/Educacion_Superior',
            type: 'POST',
            data: {
                personas
            },
            success: function(response) {

                Swal.fire(
                    'Exito',
                    'Se ha guardado con éxito ss',
                    'success'
                )

                setTimeout(function() {
                    location.href = base + "/Resumen-Censo-Personal/" + response.persona_id;
                }, 2000);

            }

        });

    } else {
        alert('Debe ingresar informacion academica ')
    }
})
</script>






@endsection