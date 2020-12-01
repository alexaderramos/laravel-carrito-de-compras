@extends('layouts.admin')
@section('content')

<style>
  .modal{
    left: -100px;
  }
</style>
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Todos los productos</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Tabla de los productos
              </header>

              <table class="table table-avanced  table-hover">
                <thead>
                  <tr>
                    <th># id</th>
                    <th> Nombre</th>
                    <th> Descripcion</th>
                    <th> Stock</th>
                    <th> Precio Estandar</th>
                    <th> Categoria</th>
                    <th> Imagen</th>
                    <th> Action</th>
                  </tr>
                </thead>
                  
                    
                  
                  @foreach ($productos as $producto)
                  <tbody>
                    <tr>
                      <td>{{ $producto->id }}</td>
                      <td>{{ $producto->nombre }}</td>
                      <td>{{ $producto->descripcion }}</td>
                      <td>{{ $producto->stock }}</td>
                      <td>{{ $producto->precio_es}}</td>
                      <td>{{ $producto->nombrec }} </td>

                      <td class="text-center">
                         <img src="/store_productos/{{ $producto->foto }}"  style="max-width:40px;"  class="img-responsive" >  
                      </td>

                      <td >
                        <div class="btn-group">
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>

                          <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModalDestroy" data-idproducto="{{ $producto->id }}"> <i class="icon_close_alt2"></i></a></button>

                        </div>
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                 
                </tbody>
              </table>
<div class="modal fade" id="myModalDestroy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="id-producto" id="id-producto">      

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
          <button type="submit" class="btn btn-warning">Si, Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>


            </section>
          </div>
        </div>
      

        <!-- page end-->
      </section>



@stop

@section('js')
  <script type="text/javascript">
     $('#myModalDestroy').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var iddetail = button.data('id') 
        var modal = $(this)
        modal.find('.modal-body #id-producto').val(iddetail);
      })
  </script>
@endsection