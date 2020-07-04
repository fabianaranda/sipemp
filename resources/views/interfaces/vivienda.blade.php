  @extends('layouts.menu2')

  @section('content')

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
  <link rel="stylesheet" href="css/estilos_pie_pagina.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="/js/sweetalert2@9.js"></script>
  <link href="css/admin.css" rel="stylesheet" type="text/css" />



  <!--\\\\\\\ contentpanel start\\\\\\-->
  <div class="pull-left breadcrumb_admin clear_both">
      <div class="pull-left page_title theme_color">
          <h1>censo poblacional</h1>
          <h2 class="">Vivienda</h2>
      </div>
      <div class="pull-right">
          <ol class="breadcrumb">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Censo Poblacional</a></li>
              <li class="active">Vivienda</li>
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
                                  <table class="estatic">
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
                                  <table class="active">
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
                      <span class="color_infor  noPrint">Usted se encuentra en: &nbsp;&nbsp;Sistema de Informacion
                          Poblacional Misak &gt; <font color="#666666">Censo Vivienda -SIPEMP </font></span>
                  </div>
                  <h1>Datos de la Vivienda </h1>
              </div>
              <!--FIN titulo_infobasica-->
              <!-- FORMULARIO-->

              <div class="panel panel-default">
                  <div class="well resume-module module-jobs">
                      <h2 class="module-title">
                          Vivienda
                      </h2>
                      <div class="js-box-laboral-experience" id="experiencia-laboral">
                          <h3 class="h4">Ingresar Informacion de la Vievienda</h3>
                          <div class="module-collapsible collapse in" aria-expanded="true">
                              <div class="module-summary-wrapper laboral-experience">
                                  <p class="text-muted">
                                      Si el habitante es dueño de la propietario , Ingresar los siguientes datos al
                                      sistema de información poblacional Misak -SIPEMP </p>
                                  <h4 class="panel-title">
                                      <button><a href="#collapse4" data-parent="#accordion" data-toggle="collapse"
                                              class=""> Agregar
                                              <i class="fa fa-plus"></i> </a>
                                      </button>
                                  </h4>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="panel-collapse collapse in" id="collapse4" style="height: auto;">
                      <div class="panel-body">

                          <div class="subtitle-edit-add-hv module-subtitle">


                              <a class="cta-module-cancel js-cta-cancel" ">
<i class=" fa fa-times-circle-o icon-cancel" aria-hidden="true"></i>
                                  <div class="btn-help">

                                      <h4 class="panel-title">
                                          <button><a href="#collapse5" data-parent="#accordion" data-toggle="collapse"
                                                  class=""> Cerrar
                                                  <i class="fa fa-plus"></i> </a>
                                          </button>
                                      </h4>
                                  </div>
                              </a>
                          </div>
                          <p>
                              Todos los campos son obligatorios
                          </p>
                          <!------------------>
                          <!------------------>


                          <div class="card-body">
                              @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div><br />
                              @endif


                              <!-- ///FORMULARIO////     -->
                              <!-- ///FORMULARIO////     -->
                              <form id="Hogar" method="post" action="Vivienda/Guardado">

                                  <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:-->
                                  {{ csrf_field() }}


                                  {{ csrf_field() }}
                                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                  <div class="col-md-12 col-sm-12 col-xs-12">

                                      <div class="titulo_informacion">

                                          <h1>Información general del Hogar </h1>
                                      </div>
                                      <!--Inicio de formulario-->
                                      <div class="col-md-12 col-sm-12 col-xs-12">

                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                              <div class="form-group input-group-sm">


                                                  <div class="form-group input-group-sm">
                                                      <div class="titulo_de_formulaario">* Ubicación de La vivienda::
                                                      </div>
                                                      <!------>
                                                      <div class="radio icheck-wetasphalt">
                                                          <input type="radio" id="wetasphalt1" name="wetasphalt"
                                                              value="A lado rio" required="" />
                                                          <label for="wetasphalt1">Al lado del rio </label>
                                                      </div>
                                                  </div>
                                                  <div class="form-group input-group-sm">
                                                      <div class="radio icheck-wetasphalt">
                                                          <input type="radio" checked id="wetasphalt2" name="wetasphalt"
                                                              value="Al lado carretera" required="" />
                                                          <label for="wetasphalt2">A lado de la carretera </label>
                                                      </div>
                                                  </div>
                                                  <div class="form-group input-group-sm">
                                                      <div class="radio icheck-wetasphalt">
                                                          <input type="radio" checked id="wetasphalt3" name="wetasphalt"
                                                              value="En ladera" required="" />
                                                          <label for="wetasphalt3">En ladera o en filos de cerro
                                                          </label>
                                                      </div>
                                                  </div>



                                                  <div class="contenedor_cabesa_hogar">
                                                      <!---------comienza ------------>

                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <div class="form-group input-group-sm">
                                                                  <label for="title">Número de hogares </label>
                                                                  <input name="numero_hogares" type="number"
                                                                      tabindex="2" class="form-control" style=""
                                                                      autocomplete="on" value="" style="width:200px"
                                                                      required="">
                                                              </div>
                                                              <div class="form-group input-group-sm">
                                                                  <label for="title">Cuartos Usados </label>
                                                                  <input name="cuartos_usados" type="number"
                                                                      tabindex="2" class="form-control" style=""
                                                                      autocomplete="on" value="" style="width:200px"
                                                                      required="">
                                                              </div>
                                                          </div>

                                                          <div class="col-md-6">
                                                              <div class="form-group input-group-sm">
                                                                  <label for="title">Numero de Cuartos </label>
                                                                  <input name="numero_cuertos" type="number"
                                                                      tabindex="2" class="form-control" style=""
                                                                      autocomplete="on" value="" style="width:200px"
                                                                      required="">
                                                              </div>

                                                          </div>

                                                      </div>
                                                  </div>
                                                  <!--FIN -->

                                              </div>

                                              <div class="form-group input-group-sm">


                                                  <div class="contenedor_cabesa_hogar">
                                                      <div class="titulo_informacion" style="width:370px">
                                                          <h6>Servicios en la Vivienda</h6>
                                                      </div>
                                                      <!--FIN titulo_infobasica-->
                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <label for="title">Sistema de suministro de agua:</label>
                                                              <select name="suministro_agua_id" id=""
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="" selected disabled>Sistema de
                                                                      suministro de agua</option>
                                                                  @foreach($suministro_agua as $key => $suministro_agua)
                                                                  <option value="{{$key}}"> {{$suministro_agua}}
                                                                  </option>
                                                                  @endforeach
                                                              </select>
                                                              <label for="title">¿Que tipo de servicio de
                                                                  energía?</label>
                                                              <select name="servicio_energia_id" id=""
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="" selected disabled>Servicio de energía
                                                                  </option>
                                                                  @foreach($servicio_energia as $key =>
                                                                  $servicio_energia)
                                                                  <option value="{{$key}}"> {{$servicio_energia}}
                                                                  </option>
                                                                  @endforeach
                                                              </select>
                                                          </div>

                                                          <div class="col-md-6">
                                                              <label for="title">Servicio de internet? (fijo
                                                                  móvil)</label>
                                                              <select name="servicio_internet" id="servicio_energia"
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="">Seleccione</option>
                                                                  <option value="SI">SI</option>
                                                                  <option value="NO">NO</option>
                                                              </select>

                                                              <label for="title">¿Cuenta con Servicio sanitario?</label>
                                                              <select name="servicio_sanitario_id"
                                                                  id="servicio_internet" class="form-control"
                                                                  style="width:200px" required="">
                                                                  <option value="" selected disabled>Servicio sanitario
                                                                  </option>
                                                                  @foreach($servicio_sanitario as $key =>
                                                                  $servicio_sanitario)
                                                                  <option value="{{$key}}"> {{$servicio_sanitario}}
                                                                  </option>
                                                                  @endforeach
                                                              </select>


                                                              <br>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!--FIN -->


                                              </div>

                                          </div>

                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                              <div class="form-group input-group-sm">

                                                  <!---------comienza ------------>











                                                  <div class="contenedor_cabesa_hogar">
                                                      <!---------comienza ------------>
                                                      <div class="titulo_informacion" style="width:370px">
                                                          <h6>Información de la infraestructura de la casa </h6>
                                                      </div>
                                                      <!--FIN titulo_infobasica-->


                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <label for="title">Material paredes:</label>
                                                              <select name="material_paredes_id" id="material_paredes"
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="" selected disabled>Selecione Material
                                                                      paredes</option>
                                                                  @foreach($material_paredes as $key =>
                                                                  $material_paredes)
                                                                  <option value="{{$key}}"> {{$material_paredes}}
                                                                  </option>
                                                                  @endforeach

                                                              </select>

                                                              <label for="title">Material pisos:</label>
                                                              <select name="material_piso_id" id="material_piso"
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="" selected disabled>Selecione Material
                                                                      piso</option>
                                                                  @foreach($material_piso as $key => $material_piso)
                                                                  <option value="{{$key}}"> {{$material_piso}}</option>
                                                                  @endforeach
                                                              </select>
                                                              <label for="title">Estado de conservación: </label>
                                                              <select name="estado_conservacion" id="material_piso"
                                                                  class="form-control" style="width200px" required="">
                                                                  <option value="">Seleccione</option>
                                                                  <option value="Excelente">Excelente</option>
                                                                  <option value="Bueno">Bueno</option>
                                                                  <option value="Malo">Malo</option>

                                                              </select>
                                                              <label for="title">¿Forma de la casa?</label>
                                                              <select name="forma_casa" id="" class="form-control"
                                                                  style="width:200px" required="">
                                                                  <option value="">Seleccione</option>
                                                                  <option value="Cuadrada">Cuadrada</option>
                                                                  <option value="Rectangular">Rectangular</option>
                                                                  <option value="En ele">En ele</option>
                                                                  <option value="En o">En o</option>
                                                                  <option value="En u">En u</option>
                                                                  <option value="Circular">Circular</option>
                                                              </select>
                                                              <!-- <label for="title">Numero de Cuartos</label>
           <input name="" type="text"   tabindex="2" class="form-control" style="" autocomplete="on"  value="" style="width:200px" >  
					
           <label for="title">Numero de Cuartos</label>
           <input name="" type="text"   tabindex="2" class="form-control" style="" autocomplete="on"  value="" style="width:200px" >  
					
            -->


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="title">Material cocina :</label>
                                                              <select name="material_cocina_id" id=""
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="" selected disabled>Selecione Material
                                                                      Cocina </option>
                                                                  @foreach($material_cocina as $key => $material_cocina)
                                                                  <option value="{{$key}}"> {{$material_cocina}}
                                                                  </option>
                                                                  @endforeach
                                                              </select>

                                                              <label for="title">Material Techo:</label>
                                                              <select name="material_techo_id" id=""
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="" selected disabled>Selecione Material
                                                                      techo</option>
                                                                  @foreach($material_techo as $key => $material_techo)
                                                                  <option value="{{$key}}"> {{$material_techo}}</option>
                                                                  @endforeach

                                                              </select>
                                                              <label for="title">Período de construcción: :</label>
                                                              <select name="periodo_construccion" id="material_piso"
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="">Seleccione</option>
                                                                  <option value="10 años">Hace 5 años </option>
                                                                  <option value="10 años">hace 10 años</option>
                                                                  <option value="15 años">hace 15 años</option>
                                                                  <option value="20 años">hace 20 años</option>
                                                                  <option value="25 años">hace 25 años</option>
                                                                  <option value="30 años">hace 30 años</option>
                                                                  <option value="40 años">hace 40 años</option>
                                                                  <option value="50 en adelante">50 años en adelante
                                                                  </option>
                                                              </select>

                                                              <label for="title">Área (tamaño) de la casa:</label>
                                                              <select name="tamaño_casa" id="material_piso"
                                                                  class="form-control" style="width:200px" required="">
                                                                  <option value="">Seleccione</option>
                                                                  <option value="Ingresar">Ingresar</option>
                                                                  <option value="Ingresar">Ingresar</option>
                                                                  <option value="Ingresar">Ingrrsar</option>

                                                              </select>
                                                              <!--
				  <label for="title">Cuartos Usados </label>
          <input name="" type="text"   tabindex="2" class="form-control" style="" autocomplete="on"  value="" style="width:200px" > 
				  -->
                                                              <br>
                                                          </div>
                                                      </div>


                                                  </div>
                                                  <!--FIN -->








                                              </div>




                                          </div>
                                      </div>
                                  </div>



                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-12 col-xs-12">

                                      </div>
                                      <div class="col-md-6 col-sm-12 col-xs-12"></div>
                                  </div>






                          </div>







                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                          <!---------------------->
                          <div class="row">
                              <div class="col-md-6 ">







                                  <div class="titulo_informacion">
                                      <h4>* </h4>
                                  </div>

                                  <div class="pull-right botones-pies">


                                      <button type="button" class="btn btn-danger btn-xs"
                                          onclick="location.href='{{ url('Hogar') }}'">Cancelar</button>



                                      <input type="submit" class="btn btn-success btn-xs" value="GUARDAR Y CONTINUAR

" id="boton" class="btn btn-primary">


                                  </div>



                                  </form>

                                  <!------------------>
                                  <!------------------>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>




          <!-- FIN FORMULARIO-->
      </div>
      <!--FIN ContenedorMenuHojaVida-->
  </div>
  <!--FIN col-md-9-->
  </div>
  <!--FIN container-->

  <!--/*===========================
               pied de pagina 
        ============================ */ ---->
  </div>
  </div>

  <br>
  <br>
  <!-------PIE DE PAGINA--->

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
                      Desarrollado: Ingeniero Fabian Aranda T -| Cabildo de Guambia</a>
              </div>
          </div>

      </div>

  </footer>


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


                Swal.fire({
                    title: 'Informacion Guardado !',
                    html: 'I will close in <b></b> milliseconds.',
                    timer: 3000,
                    timerProgressBar: true,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getContent()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                    }
                })




                setTimeout(function() {
                    location.href = base + "/Vivienda-Hogar/" + response.id;
                }, 2000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se generó un error al guardar!',
                })
            }
        },
    })
})
  </script>



  <!--
   
   Java cript para  seleccionar vivienda  donde se encuentra ubicado  dentro del resguardo de Guambia
<script type="text/javascript">
    $('#departamento').change(function(){
    var departamentoID = $(this).val();    
    if(departamentoID){
        $.ajax({
           type:"GET",
           url:"{{url('get-municipio-list')}}?codigo_departamento="+departamentoID,
           success:function(res){               
            if(res){
                $("#municipio").empty();
                $("#municipio").append('<option>Seleccione Municipio</option>');
                $.each(res,function(key,value){
                    $("#municipio").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#municipio").empty();
            }
           }
        });
    }else{
        $("#municipio").empty();
        $("#resguardo").empty();
    }      
   });


    $('#municipio').on('change',function(){
    var  municipioID = $(this).val();    
    if( municipioID){
        $.ajax({
           type:"GET",
           url:"{{url('get-resguardo-list')}}?codigo_municipio="+municipioID,
           success:function(res){               
            if(res){
                $("#resguardo").empty();
                $("#resguardo").append('<option>Seleccione Resguardo </option>');
                $.each(res,function(key,value){
                    $("#resguardo").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#resguardo").empty();
            }
           }
        });
    }else{
        $("#resguardo").empty();
        $("#zona").empty();
    }
        
   });


    $('#resguardo').on('change',function(){
    var  resguardoID = $(this).val();    
    if( resguardoID){
        $.ajax({
           type:"GET",
           url:"{{url('get-zona-list')}}?codigo_resguardo="+resguardoID,
           success:function(res){               
            if(res){
                $("#zona").empty();
                $("#zona").append('<option>Seleccione Zona</option>');
                $.each(res,function(key,value){
                    $("#zona").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#zona").empty();
            }
           }
        });
    }else{
        $("#zona").empty();
        $("#vereda").empty();
    }
        
   });

       $('#zona').on('change',function(){
    var   zonaID = $(this).val();    
    if(   zonaID){
        $.ajax({
           type:"GET",
           url:"{{url('get-vereda-list')}}?codigo_zona="+zonaID,
           success:function(res){               
            if(res){
                $("#vereda").empty();
                $("#vereda").append('<option>Seleccione Vereda</option>');
                $.each(res,function(key,value){
                    $("#vereda").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#vereda").empty();
            }
           }
        });
    }else{
        $("#vereda").empty();
        $("#sector").empty();
    }
        
   });

    $('#vereda').on('change',function(){
    var   veredaID = $(this).val();    
    if(   veredaID){
        $.ajax({
           type:"GET",
           url:"{{url('get-sector-list')}}?codigo_vereda="+veredaID,
           success:function(res){               
            if(res){
                $("#sector").empty();
                $("#sector").append('<option>Seleccione Sector</option>');
                $.each(res,function(key,value){
                    $("#sector").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#sector").empty();
            }
           }
        });
    }else{
        $("#sector").empty();
        
    }
   
        
   });
   
   
</script> -->
  @endsection