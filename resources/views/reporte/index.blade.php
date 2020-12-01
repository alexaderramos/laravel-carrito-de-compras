@extends('layouts.admin')
@section('content')

      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Reportes</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Reportes</li>
              <li><i class="fa fa-th-list"></i>Todas las Reportes</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Tabla de los Reportes
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> #</th>
                    <th><i class="icon_calendar"></i> Nombre</th>
                    <th><i class="icon_mail_alt"></i> Descripcion</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2004-07-06</td>
                    <td>176-026-5992</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#" ><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>

@stop