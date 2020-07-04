<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('menu2.name', 'RESUMEN CENSO SISTEMA -SIPEMP ') }}</title>



<link href="{{ asset('css/certificado.css') }}" rel="stylesheet">


<form method="post" action="" id="form1">



    <br>
    <br>
    <style type="text/css">
    .style3 {
        height: 16px;
    }


    .styleletrapagina {
        font-size: 0.2px;
    }
    </style>



    </head>

    <body>
        @foreach($datos as $key=>$temp)

        <table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tbody>
                <tr bgcolor="#FFFFFF" ; height="55px" ;>
                    <td width="76%" rowspan="2"><img src="{{ asset('images/logo_v1-1.jpg') }}" width="286PX"
                            height="59"></td>

                    <td width="8%" valign="middle" class="contenido">Fecha Censo:</td>
                    <td width="16%" valign="middle">---</td>

                </tr>

                <tr>
                    <td height="19" valign="middle" bgcolor="#FFFFFF" class="contenido">Pagina:+</td>
                    <td valign="middle" bgcolor="#FFFFFF">1 de 1</td>
                </tr>

                <tr bgcolor="#F4F7FB">
                    <td colspan="3">
                        <!--<p>&nbsp;</p>-->
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
                            <tbody>
                                <tr bgcolor="#327bb2">
                                    <td colspan="4" class="subtitulo4" align="center"> <br>
                                        <div align="center">RESUMEN DEL CENSO POBLACIONAL INDVIDUAL</div><br>
                                    </td>
                                </tr>

                                <tr bgcolor="#243f78">
                                    <td colspan="2" height="25px" ; class="subtitulo4">
                                        CABILDO INDIGENA DE GUAMBIA NIT:817-000-162-9
                                    </td>
                                    <td colspan="2" height="25px" ;>
                                        <div align="left">


                                            <span class="subtitulo4"><b>SISTEMA DE INFORMACION POBLACIONAL
                                                    -SIPEMP</b></span>&nbsp;<font size="0.6px" , color="#fff" ;>-</font>
                                        </div>
                                    </td>
                                </tr>

                                <tr bgcolor="#8398C5">
                                    <td colspan="4" class="tituloEtiqueta" align="center">
                                        <div align="center">DETALLES - PERSONA </div>
                                    </td>
                                </tr>
                                <tr bgcolor="#327bb2">
                                    <td colspan="2" height="25px" ; class="subtitulo4">
                                        ESTADO DEL CENSO
                                    </td>
                                    <td colspan="2" height="25px" ;>
                                        <div align="left">


                                            <span class="subtitulo4"><b> </b></span>&nbsp;<font size="0.6px" ,
                                                color="#fff" ;> @if ($temp->status == 1)
                                                <span class="badge badge-success">CENSADO</span>

                                                @else
                                                <span class="badge badge-danger">En proceso<p></p></span>
                                                @endif </font>
                                        </div>
                                    </td>
                                </tr>


                                <tr bgcolor="#FFFFFF">
                                    <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>NOMBRE COMPLETO</strong>
                                    </td>
                                    <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->nombres}}
                                        -{{$temp->apellidos}}&nbsp;</td>
                                </tr>
                                <tr bgcolor="#FFFFFF">
                                    <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>TIPO DE DOCUMENTO</strong>
                                    </td>
                                    <td width="23%" bgcolor="#FFF" class="subtitulo2">
                                        {{$temp->tipo_identificacion}}&nbsp;</td>
                                    <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>NUMERO DE
                                            DOCUMENTO</strong></td>
                                    <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->docomento_persona}}&nbsp;
                                    </td>
                                </tr>
                                <tr bgcolor="#FFFFFF">

                                    <td bgcolor="#ddd" class="style3"><strong>GÉNERO</strong></td>
                                    <td bgcolor="#FFF" class="style3">{{$temp->sexo}}&nbsp;</td>
                                    <td bgcolor="#ddd" class="style3"><strong>FECHA NACIMIENTO</strong></td>
                                    <td bgcolor="#FFF" class="style3">{{$temp->fecha_nacimiento}}</td>

                                </tr>

                                <tr bgcolor="#FFFFFF">
                                    <td bgcolor="#ddd" class="subtitulo2"><strong>ESTADO CIVIL</strong></td>
                                    <td bgcolor="#FFF" class="subtitulo2">{{$temp->estado_civil}}&nbsp;</td>
                                    <td bgcolor="#ddd" class="subtitulo2"><strong>TELEFONO</strong></td>
                                    <td bgcolor="#FFF" class="subtitulo2">{{$temp->telefono}}&nbsp;</td>
                                </tr>
                                <tr bgcolor="#FFFFFF">
                                    <td bgcolor="#ddd" class="subtitulo2"><strong>NIVEL ACADEMICO</strong></td>
                                    <td bgcolor="#FFF" class="subtitulo2">{{$temp->nivel_academico}}&nbsp;</td>
                                    <td bgcolor="#ddd" class="subtitulo2"></td>
                                    <td bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                                </tr>

                                <tr bgcolor="#FFFFFF">
                                    <td colspan="4" class="subtitulo2">&nbsp;</td>
                                </tr>


                                <!--Aqui va el codigo de tablas  informacion del trabajador-->

                                <tr bgcolor="#849AC6">
                                    <td colspan="4" class="tituloEtiqueta" align="center">
                                        <div align="center">DIRECCIÓN - PERSONA </div>
                                    </td>
                                </tr>


                                <tr bgcolor="#FFFFFF">
                                    <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>DEPARTAMENTO</strong></td>
                                    <td width="23%" bgcolor="#FFF" class="subtitulo2">
                                        {{$temp->nombre_depatamento}}&nbsp;</td>
                                    <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>MUNICIPIO</strong></td>
                                    <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_municipio}}&nbsp;
                                    </td>
                                </tr>
                                <tr bgcolor="#FFFFFF">
                                    <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>RESGUARDO</strong></td>
                                    <td width="23%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_reguardo}}&nbsp;
                                    </td>
                                    <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>ZONA</strong></td>
                                    <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_zona}}&nbsp;</td>
                                </tr>
                                <tr bgcolor="#FFFFFF">
                                    <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>VEREDA </strong></td>
                                    <td width="23%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_vereda}}&nbsp;
                                    </td>
                                    <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>SECTOR</strong></td>
                                    <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_sector}}&nbsp;
                                    </td>
                                </tr>
                                <!--
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>RESGUARDO</strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">---&nbsp;</td>
                </tr>-->
                                <tr bgcolor="#FFFFFF">
                                    <td colspan="4" class="subtitulo2">&nbsp;</td>
                                </tr>
                                <!--Aqui finaliza el codigo de tablas direccion empleado-->

                                <!--Aqui va el codigo de tablas informacion  trabajo -->

                                <tr bgcolor="#849AC6">
                                    <td colspan="4" class="tituloEtiqueta" align="center">
                                        <div align="center">INFORMACIÓN - GENARAL DEL RESGUARDO </div>
                                    </td>
                                </tr>

                                <tr bgcolor="#327bb2">
                                    <td colspan="4" class="subtitulo4" align="center">
                                        <span class="subtitulo2"><b>
                                                <font size="0.6px"></font>
                                            </b></span>
                                    </td>
                                </tr>

                                <tr bgcolor="#FFFFFF">
                                    <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>CODIGO RESGUARDO</strong>
                                    </td>
                                    <td colspan="3" bgcolor="#FFF" class="subtitulo2">
                                        {{$temp->comunidad_indigena}}&nbsp;</td>
                                </tr>
                                <tr bgcolor="#FFFFFF">
                                    <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>RESGUARDO</strong></td>
                                    <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_reguardo}}&nbsp;
                                    </td>
                                </tr>

                                <tr bgcolor="#FFFFFF">
                                    <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>DEPARTAMENTO</strong></td>
                                    <td width="23%" bgcolor="#FFF" class="subtitulo2">
                                        {{$temp->nombre_depatamento}}&nbsp;</td>
                                    <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>MUNICIPIO</strong></td>
                                    <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_municipio}}&nbsp;
                                    </td>
                                </tr>




                                <tr bgcolor="#FFFFFF">
                                    <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                                    <td bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                                    <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                                    <td bgcolor="#FFF" class="subtitulo2"> </td>
                                </tr>

                                <tr bgcolor="#FFFFFF">
                                    <td colspan="4" class="subtitulo2">&nbsp;</td>
                                </tr>


                                <!--Aqui finaliza el codigo de tablas informacion trabajo-->


                                <!--Aqui va el codigo de tablas persona encargada de registar al trabajador  -->
                                <!--
          <tr bgcolor="#849AC6">
                      <td colspan="4" class="tituloEtiqueta" align="center"> <div align="center">PERSONA ENCARGADO DE GENERAR EL CERTIFICADO</div></td>
                    </tr>

                    <tr bgcolor="#327bb2">
                      <td colspan="4" class="subtitulo4" align="center">
                        <span class="subtitulo2"><b><font size="0.6px"></font></b></span>
                      </td>
                    </tr>
        
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>NOMBRE COMPLETO </strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{ Auth::user()->name}}&nbsp;</td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>CARGO</strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">-----------&nbsp;</td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>CORREO ELECTRÓNICO</strong></td>
                  <td width="23%" bgcolor="#FFF" class="subtitulo2">{{ Auth::user()->email}}&nbsp;</td>
                  <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td width="26%" bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                </tr>


                <tr bgcolor="#FFFFFF">
                  <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                  <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td bgcolor="#FFF" class="subtitulo2">  </td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td colspan="4" class="subtitulo2">&nbsp;</td>
                </tr>
    
    
        <!--Aqui finaliza el codigo de tablas informacion trabajo-->






                                <tr bgcolor="#FFFFFF">
                                    <td colspan="4">
                                        <div align="justify">
                                            <!-- INGESAR INFORMACION, NORMAR LEGALES --->
                                            <p>-</p>
                                            <!--  FIN INGESAR INFORMACION, NORMAR LEGALES --->

                                        </div>
                                    </td>
                                </tr>
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

                                <tr bgcolor="#FFFFFF">
                                    <td colspan="4">
                                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1"
                                            bgcolor="#EEEEEE">
                                            <tbody>
                                                <tr bgcolor="#849AC6">
                                                    <td colspan="2" height="25px" ; class="subtitulo4">
                                                        <div align="center" class="Estilo16">SEGUIR CON EL PROCESO DEL
                                                            CENSO FAMILIAR </div>
                                                    </td>
                                                </tr>
                                                <!--
            <tr bgcolor="#FFFFFF">
              <td width="11%" height="24" bgcolor="#ddd" class="subtitulo2"><strong>NOMBRE</strong></td>
              <td width="89%" bgcolor="#D5DDEC">_________________________________</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>FIRMA</strong></td>
              <td bgcolor="#FFF">_________________________________</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="23" bgcolor="#ddd" class="subtitulo2"><strong>FECHA</strong></td>
              <td bgcolor="#FFF">_________________________________</td>
            </tr>-->
                                            </tbody>
                                        </table>
                                        <br>
                                        <table width="38%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <!--
              <td width="55%"><div align="center" class="subtitulo3"><a href="javascript:window.print();">IMPRIMIR</a></div></td>
              <td width="10%" class="subtitulo3">
                              <a href="" 
                              class="btn btn-sm btn-danger">
                                      Actualizar Datos
                                  </a>
                              </td>-->

                                                    <td width="45%" class="subtitulo3">
                                                        <div align="center">
                                                            <!--<a href="javascript:window.location.href=&#39;../../Tradicional/Renovar/cptRenovacionCreIng.asp&#39;;">SEGUIR CON EL PROCESO-->
                                                            <a href="{{ route('Personas', $temp->hogar_id) }}"
                                                                class="btn btn-sm btn-default"
                                                                style="background-color:#1b9e1d;border: 0px !important;color:white;">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                SEGUIR CON EL PROCESO
                                                            </a>
                                                            </a> </div>
                                                    </td>




                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p align="left"><span class="Estilo4 Estilo5 Estilo6 Estilo7"><span
                                    class="Estilo4 Estilo5 Estilo6  Estilo8 Estilo9"><span
                                        class="Estilo5 Estilo6 Estilo8 Estilo9  Estilo11"><span
                                            class="Estilo9 Estilo5"><span
                                                class="Estilo6 Estilo8 Estilo9 Estilo13 Estilo14"><span
                                                    style="font-size:10px">NOTA:
                                                    ---.</span></span></span></span></span></span></p>

                    </td>
                </tr>
                <tr bgcolor="#FFFFFF">
                    <td colspan="3">
                        <div align="center"></div>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
        <br>
        <br>


</form>