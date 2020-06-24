@extends('layouts.menu')

@section('content')

  <!--\\\\\\\ contentpanel start\\\\\\-->
  <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>REPORTES</h1>
          <h2 class="">Educacion Propia</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Reportes</a></li>
            <li class="active">Educacion Propia</li>
          </ol>
        </div>
      </div>


            <div class="col-lg-12">
            <section class="panel default blue_title h2">
              <div class="panel-heading"><span class="semi-bold">-</span> </div>
              <div class="ContenedorFormularioCenso">
              <div class="panel-body">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a data-toggle="tab" href="#Tab1">---------</a></li>
                  <li><a data-toggle="tab" href="#Tab2">---------</a></li>
                  <li><a data-toggle="tab" href="#Tab3">-------</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div id="Tab1" class="tab-pane fade in active">
                    <p>___</p>
                  </div>
                  <div id="Tab2" class="tab-pane fade">
                    <p>------------</p>
                  </div>
                  <div id="Tab3" class="tab-pane fade">
                    <p>--------.</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
          </div>




@endsection