@extends('layouts.admin')
@section('content')

      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Eliminar Producto</li>
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
                     

                      <td class="text-center">
                         <img src="/panaderia/public/store_productos/{{ $producto->foto }}"  style="max-width:40px;"  class="img-responsive" >  
                      </td>

                      <td >
                        <div class="btn-group">
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                 
                </tbody>
              </table>

               
      <a href="{{url('producto')}}"type="button" class="btn btn-info">Cancelar</a

            </section>
          </div>
        </div>
        <!-- page end-->
      </section>

@stop