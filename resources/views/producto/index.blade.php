@extends('layouts.admin')
@section('styles')
    @include('layouts.assets.datatables-css')
@endsection
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
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                @include('notificacion.msj')
                            </div>
                        </div>
                        <div class="">
                            <table class="table table-avanced  table-hover" id="datatable">
                                <thead>
                                <tr>
                                    <th style="width:5%"># id</th>
                                    <th style="width:12%"> Imagen</th>
                                    <th style="width:12%"> Nombre</th>
                                    <th style="width:12%"> Descripcion</th>
                                    <th style="width:12%"> Stock</th>
                                    <th style="width:12%"> Precio Estandar</th>
                                    <th style="width:12%"> Categoria</th>
                                    <th style="width:12%"> Action</th>
                                    <th></th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->id }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/store_productos/'.$producto->foto) }}" style=";"
                                                 class="img-responsive">
                                        </td>
                                        <td> {{ $producto->nombre }}</td>

                                        <td>{{ $producto->descripcion }}</td>
                                        <td>{{ $producto->stock }}</td>
                                        <td>{{ $producto->precio_es}}</td>
                                        <td>{{ $producto->nombrec }} </td>

                                        <td>
                                            <div class="btn-group">
{{--                                                <a class="btn btn-success" href="javascript:void(0)"><i class="icon_check_alt2"></i></a>--}}


                                                <a class="btn btn-danger" type="button"
                                                   href="{{route('admin.producto.delete',$producto->id)}}"><i
                                                            class="icon_close_alt2"></i></a></a>

                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <!-- page end-->
    </section>



@stop



@section('scripts')
    @include('layouts.assets.datatables-js')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            let table = $('#datatable').DataTable({

                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data();
                                return 'Detalles del producto';
                            }
                        } ),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        }),
                        type: 'column',
                        target: -1
                    }
                },
                columnDefs: [ {
                    className: 'control',
                    orderable: false,
                    targets:   -1
                }],
                language: {
                    "url": "{{asset('assets/js/Spanish.json')}}",
                },
            });
            // new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
@endsection