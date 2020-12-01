@extends('layouts.admin')
@section('content')
 <section class="wrapper">
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Productos</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
      <li><i class="icon_document_alt"></i>Productos</li>
      <li><i class="fa fa-file-text-o"></i>Nuevo Producto</li>
    </ol>
  </div>
</div>

 <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
     @include('notificacion.msj')
    </div>
  </div>
  
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Nuevo Producto
              </header>
              <div class="panel-body">
                @include('producto.forms.registrer')
              </div>
            </section>
          </div>
         
        </div>
        <!-- page end-->
      </section>
@stop