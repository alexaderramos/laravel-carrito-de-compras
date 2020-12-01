@extends('layouts.admin')
@section('content')
 <section class="wrapper">
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Clientes</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
      <li><i class="icon_document_alt"></i>Clientes</li>
      <li><i class="fa fa-file-text-o"></i>Nuevo Clientes</li>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Nueva Clientes
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                

                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail1" placeholder="Nombre">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail1" placeholder="Descripcion">
                    </div>
                  </div>

                 
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
                  </div>

                </form>
              </div>
            </section>
          </div>
         
        </div>
        <!-- page end-->
      </section>
@stop