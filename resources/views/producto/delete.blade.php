@extends('layouts.admin')
@section('content')

    <style>
        /*.modal {*/
        /*    left: -100px;*/
        /*}*/
    </style>
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
                    <li><i class="fa fa-table"></i>Table</li>
                    <li><i class="fa fa-th-list"></i>Todos los productos</li>
                    <li><i class="fa fa-trash-o"></i>Eliminar Producto</li>
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
                    <div class="panel-body">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                <strong>Elimar producto!</strong> Por favor confirme la eliminacion del siguiente
                                producto:
                            </ul>
                        </div>
                        <table class="table table-avanced  table-hover">
                            <thead>
                            <tr>
                                <th># id</th>
                                <th> Imagen</th>
                                <th> Nombre</th>
                                <th> Descripcion</th>
                                <th> Stock</th>
                                <th> Precio Estandar</th>
                                <th> Categoria</th>
                            </tr>
                            </thead>


                            <tbody>

                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td class="text-center">
                                    <img src="{{asset('/store_productos/'.$producto->foto.'') }}"
                                         style="max-width:80px;"
                                         class="img-responsive">
                                </td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>{{ $producto->precio_es}}</td>
                                <td>{{$producto->categoria->nombrec}}</td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="col-lg-12">
                            <form action="{{route('admin.producto.destroy',$producto->id)}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <a href="{{route('admin.producto.index')}}" class="btn btn-link">Cancelar</a>
                                <button type="submit" class="btn btn-danger">Si, Eliminar</button>
                            </form>
                        </div>
                    </div>


                </section>
            </div>
        </div>


        <!-- page end-->
    </section>



@stop

