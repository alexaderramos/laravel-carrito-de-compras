@extends('layouts.admin')
@section('content')

      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Categorias</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Categorias</li>
              <li><i class="fa fa-th-list"></i>Todas las Categorias</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
             @include('notificacion.msj')
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Tabla de los Categorias
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> #</th>
                    <th><i class="icon_calendar"></i> Nombre</th>
                    <th><i class="icon_mail_alt"></i> Descripcion</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>

                  @foreach ($categorias as $categoria)
                    <tr>
                      <td>{{ $categoria->id }}</td>
                      <td>{{ $categoria->nombrec }}</td>
                      <td>{{ $categoria->descripcion }}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#" ><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                  </tr>

                  @endforeach
                  
                 
                </tbody>
              </table>
              <div   style="text-align: center;">
                {!! $categorias->render() !!}  
              </div>
              
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>

@stop