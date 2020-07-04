@extends('layouts.menu2')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/sweetalert2@9.js"></script>

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>Censo Poblacional</h1>
        <h2 class="">Educacion Primaria-Secundaria-Media</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Censo Poblacional</a></li>
            <li class="active">Educacion Primaria-Secundaria-Media</li>
        </ol>
    </div>
</div>


<!-- INICIO DE  CODIGO DE FORMULARIO -->


<div class="container">
    <!--Informacion menu izquierda-->
    <div class="col-md-3 col-sm-4 col-xs-12 ">

        <iframe frameborder="0" width="100%" scrolling="no" height="245" src="">

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
                                                <b href=" ">PERSONAS </b>
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
                        SIPEMP&gt; <font color="#666666">Educacion Formal</font></span>
                </div>

            </div>
            <!--FIN titulo_infobasica-->
            <!-- FORMULARIO-->








            <!-- FORMULARIO-->


            <!------------------>
            <!------------------>



            <!-- ///FORMULARIO////     -->
            <!-- ///FORMULARIO////     -->
            <!--   <form  id="vivienda"  method="post"  action="Vivienda">-->


            <form id="Hogar" method="post" action="Educacion_Formal/Guardado">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


                <!--<div id="SiEducacion" style="visibility: hidden; display: none;">	-->

                <div class="contenedor_informacion_persona">
                    <!--Contenedor informacion_persona --->

                    <div class="recuadro_info_persona"> Agregar Nivel Educativo escolar {{$datos->id}}</div>
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
                                    @foreach($municipioColegio as $key => $municipioColegio)
                                    <option value="{{$key}}"> {{$municipioColegio}}</option>
                                    @endforeach
                                </select>



                            </div>


                            <div class="form-group input-group-sm">
                                <label for="title">Colegio:</label>
                                <select name="colegio" id="colegio" class="form-control" style="width:" required="">
                                </select>

                            </div>

                            <div class="form-group input-group-sm">
                                <label for="title">Sede colegio:</label>
                                <select name="sede" id="sede" class="form-control" style="width:" required="">
                                </select>

                            </div>

                            <div class="form-group input-group-sm">

                                <label for="title">Nivel Académico:</label>
                                <select name="codigo_tipo" id="tipoE" class="form-control" style="width:" required="">
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


                            <input name="info_persona_id" type="text" style="visibility:hidden" value="{{$datos->id}}"
                                tabindex="2" class="form-control btn-warning" style="width:60px" value="">

                            <input name="persona_id" type="text" style="visibility:hidden"
                                value="{{$datos->persona_id}}" tabindex="2" class="form-control btn-warning"
                                style="width:60px" value="">


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
                                    <input type="submit" class="botones_censo_poblacional" value="GUARDAR Y CONTINUAR "
                                        id="boton" class="btn btn-primary">


                                </div>

            </form>
            <br>
            <br>

        </div>
        <div class="clearfix"></div>
    </div>



</div>

<div class="clearfix"></div>
<!--Cierra el contenedor 2 . recuadro -->

</div>






</form>




</div>

<!------------------>
<!------------------>




<!-- FORMULARIO-->

</div>
<!------------------>
<!------------------>










<!-----------
								   <!-----------
								    <!-----------
									 <!------------>















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
//PARA QUE APARESCAN LOS OBCIONES  CUANDO SELECCIONE   si   tiene educacion formal 



// para   escojer el colegio donde estudia, informacion persona 
$('#municipioColegio').change(function() {
    var municipioColegioID = $(this).val();
    if (municipioColegioID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-colegio-list')}}?codigo_muni=" + municipioColegioID,
            success: function(res) {
                if (res) {
                    $("#colegio").empty();
                    $("#colegio").append('<option>Seleccione Colegio</option>');
                    $.each(res, function(key, value) {
                        $("#colegio").append('<option value="' + key + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#colegio").empty();
                }
            }
        });
    } else {
        $("#colegio").empty();
        $("#sede").empty();
    }
});


$('#colegio').on('change', function() {
    var colegioID = $(this).val();
    if (colegioID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-sede-list')}}?codigo_colegio=" + colegioID,
            success: function(res) {
                if (res) {
                    $("#sede").empty();
                    $("#sede").append('<option>Seleccione sede </option>');
                    $.each(res, function(key, value) {
                        $("#sede").append('<option value="' + key + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#sede").empty();
                }
            }
        });
    } else {
        $("#sede").empty();
        $("#tipoE").empty();
    }

});




$('#sede').on('change', function() {
    var sedeEID = $(this).val();
    if (sedeEID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-tipoE-list')}}?codigo_sede=" + sedeEID,
            success: function(res) {
                if (res) {
                    $("#tipoE").empty();
                    $("#tipoE").append('<option>Seleccione el año de que se encuentra  </option>');
                    $.each(res, function(key, value) {
                        $("#tipoE").append('<option value="' + key + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#tipoE").empty();
                }
            }
        });
    } else {
        $("#tipoE").empty();

    }


});
</script>


<script type="text/javascript">
$('#Hogar').submit(function(e) {
    e.preventDefault(); //cancelar el envio
    var url = $("#Hogar").attr('action');
    var type = $("#Hogar").attr('method');
    $.ajax({
        type: type,
        url: base + '/' + url,
        data: $('#Hogar').serialize(),
        dataType: 'json',
        success: function(response) {
            if (response.validate) {
                Swal.fire(
                    'Exito',
                    'Se ha guardado con éxito ss',
                    'success'
                )
                //   setTimeout(function(){  location.href=base+"/Ingresar_personas/"+response.id; }, 2000);
                setTimeout(function() {
                    location.href = base + "/Resumen-Censo-Personal/" + response.persona_id;
                }, 2000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se generó un error al guardar!',
                })
            }
        }
    })
})
</script>

@endsection