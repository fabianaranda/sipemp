
@extends('layouts.menu')

@section('content')

<link rel="stylesheet" href="css/estilos_pie_pagina.css">
<div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>PERFIL</h1>
          <h2 class=""></h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">INICIO</a></li>
           
            <li class="active">Perfil</li>
          </ol>
        </div>
      </div>

  <!--\\\\\\\left_nav end \\\\\\-->
  


  <!--\\\\\\\ container  start \\\\\\-->
  <div class="page-content" background="">

  
          <div class="row">
            <div class="col-md-4">
              
              <div class="profile_bg"  >
                <div class="user-profile-sidebar">
                  <div class="row">
                    <div class="col-md-4"><img style="width:80px" src="images/images.png" /></div>
                    <div class="col-md-8">
                      <div class="user-identity">
                        <h4><strong>{{ Auth::user()->name}}</strong></h4>
                        <p><i class="fa fa-map-marker"></i> {{ Auth::user()->apellidos}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-status-data">
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
					  <div class="col-md-6 col-sm-12 col-xs-12">
					  
					   <div class="form-group input-group-sm">
                           <label ></span>Cargo en el Cabildo</label>
                        <input name="id" type="text" value="{{ Auth::user()->cargo}}"  tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                        </div>
					         </div>
					          <div class="col-md-6 col-sm-12 col-xs-12">
					  
					              <div class="form-group input-group-sm">
                           <label ></span>Cargo en el  Sistema</label>
                                 <input name="id" type="text" value="{{ Auth::user()->cargo_sistema}}"  tabindex="2" class="form-control" style="" autocomplete="on"  value=""   >
         
                        </div>
					             </div>
                     </div>
                 </div>
                </div>
                <div class="user-button">
                <div class="row">
                    <div class="col-sm-6">
                      <button type="button" class=" btn btn-primary btn-rounded"><i class="fa fa-envelope"></i>Normas del sistema</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-user"></i>Manual de Usuario </button>
                    </div>
                  </div>
                </div>
           

              </div>
          
              
             
            </div>
            <!--/col-md-4-->
            <div class="col-md-8">
              <div class="block-web full">
                <ul class="nav nav-tabs nav-justified nav_bg">
                  <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Acerca del Usuario</a></li>
                  
                </ul>
                <div class="tab-content ContenedorFormularioCenso">
                  <div class="tab-pane animated fadeInRight active" id="about">
                    <div class="user-profile-content">
                    
                      <hr>
                      <div class="row">
                        <div class="col-sm-6">
                          <h5><strong>CONTACTO</strong>USUARIO </h5>
                          <address>
                          <strong>Phone</strong><br>
                          <abbr title="Phone">354 123 4567</abbr>
                          </address>
                          <address>
                          <strong>Correo electrónico</strong><br>
                          <a >{{ Auth::user()->email}}</a>
                          </address>
                          <address>
                          <strong></strong><br>
                          <a href=""></a>
                          </address>
                        </div>
                        <div class="col-sm-6">
                          <h5><strong>Permisos </strong> Asignados</h5>
                          <p></p>
                          <p></p>
                          <p></p>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
     
          
           
                </div>
                <!--/tab-content-->
              </div>
              <!--/block-web-->
            </div>
            <!--/col-md-8-->
          </div>
          <!--/row-->
        </div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->

<!-- Pie de pagina -->
	   
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
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href="">© Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
                    </div>
                </div>

            </div>
        
    </footer>

<!--fin pie de pagina-->



  


@endsection
  


