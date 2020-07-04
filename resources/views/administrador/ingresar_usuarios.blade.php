@extends('layouts.menu')

@section('content')

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>USUARIOS</h1>
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
                        <td title="Información de la persona que viven dentro de la familia ">
                            <table class="active">
                                <tbody>
                                    <tr>
                                        <td>
                                            <b onclick="location.href='{{ url('Menu-Usuarios') }}'">USUARIOS INGRESADOS
                                                EN SIPEMP </b>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>
                        <td style="width:3px;"></td>
                        <td title="Censo vivienda de familia Misak">
                            <table class="estatic">
                                <tbody>
                                    <tr>
                                        <td><b href=""> INGRESAR NUEVO USUARIO DEL SIPEMP</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <!--
		                   <td style="width:3px;"></td>
		                     <td  title="Información de la persona que viven dentro de la familia " >
		                       <table  class="active">
			                       <tbody>
			                        <tr>
				                      <td >
				                          <b  href=""  >INFORMACIÓN PERSONA </b>
				                    </td>
			                        </tr>
		                         </tbody>
		
		                       </table>
		                     </td>	
				
				             <td style="width:3px;"></td>
		                       <td  title="Nivel educativo  que tiene  la persona que vive en la familia" >
		                        <table class="active" >
			                       <tbody>
			                        <tr>
				                    <td >
				                     <b  href=""  >NIVEL EDUCATIVO </b>
				                     </td>
			                           </tr>
		                            </tbody>
		
		                         </table>
		                        </td>
								<-->
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



            <!--mENSAJE DE EERORO  , VALIDACION DEL FORMULARIO--->

            @if (count($errors) > 0)
            <div class="container-fluid" class="alert alert-danger">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <strong>Error al Guardar</strong> Falta campos por Guardar.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @if(session()->has('msj'))

            <div class="alert alert-success" role="alert">
                {{session('msj')}}
            </div>

            @else

            <div class="alert alert-dark" role="alert">

            </div>
            @endif

            <form name="" id="Hogar" method="post" {{ route('Ingresar_Usuarios') }} action="Ingresar_Usuarios/Guardado"
                entype="multipart/form-data">

                <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:-->
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="titulo_informacion">



                    </div> <!-- fin titulo_informacion-->
                    <!--Inicio de formulario-->
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="col-md-6 col-sm-12 col-xs-12">


                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apellidos"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="apellidos" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="apellidos"
                                        value="{{ old('apellidos') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cedula"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nomero de Cedula') }}</label>

                                <div class="col-md-6">
                                    <input id="cedula" type="cedula"
                                        class="form-control @error('cedula') is-invalid @enderror" name="cedula"
                                        value="{{ old('cedula') }}" required autocomplete="cedula">

                                    @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Contraseña Asignado') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>




                        </div> <!-- fin columna 1-->

                        <div class="col-md-6 col-sm-12 col-xs-12">

                            <div class="form-group row">
                                <label for="cargo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                                <div class="col-md-6">
                                    <input id="cargo" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="cargo"
                                        value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>

                                    @error('cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fin_contrato"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Fecha Final del contrato') }}</label>

                                <div class="col-md-6">
                                    <input id="fin_contrato" type="date"
                                        class="form-control @error('name') is-invalid @enderror" name="fin_contrato"
                                        value="{{ old('fin_contrato') }}" required autocomplete="fin_contrato">

                                    @error('fin_contrato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="avatar"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Cargar Foto') }}</label>

                                <div class="col-md-6">
                                    <input id="fin_contrato" type="file"
                                        class="form-control @error('name') is-invalid @enderror" name="avatar">

                                    @error('fin_contrato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <ul class="">
                                <h3>Lista de permisos</h3>
                                @foreach($datos as $persisos)
                                <li>
                                    <label>
                                        {{ Form::checkbox('Role[]', $persisos->id, null) }}
                                        {{ $persisos->name}}
                                        <em>({{ $persisos->description }})</em>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                            <!--
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>-->
                        </div> <!-- fin columna 2-->
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="pull-right botones-pies">

                            <button type="submit" class="btn btn-secondary">
                                {{ __('Ingresar') }}
                            </button>
                            <!--<button type="button" class="btn btn-danger" onclick="location.href='{{ url('familia_persona') }}'" >Cancelar</button>


                    <!--<input type="submit" class="btn btn-success" value="Agregar persona" id="boton" class="btn btn-primary" >-->

                        </div>
                    </div>



                </div>












            </form>


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
                // setTimeout(function(){  location.href=base+"/Ingresar_personas/"+response.id; }, 2000);

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