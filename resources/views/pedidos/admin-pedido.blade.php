@extends('layouts.admin')
@section('styles')
    @include('layouts.assets.datatables-css')
@endsection
@section('content')
    @php use Carbon\Carbon; @endphp
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Pedidos</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Inicio</a></li>
                    <li><i class="fa fa-table"></i>Pedidos</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <header class="panel-heading">
                        Tabla de los pedidos
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
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Productos</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pedidos as $pedido)
                                    <tr>
                                        <td>{{$pedido->id}}</td>
                                        <td>{{$pedido->user->name}}</td>
                                        <td>@php

                                                Carbon::setLocale('es_ES');
                                                $date = Carbon::parse($pedido->created_at);
                                                $fdate = $date->format('d/m/Y H:i:s');
                                                #$fdate = $date->format('M d Y, h:m:s a');
                                                echo($fdate)
                                            @endphp
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $pedido->estado == 'entregado'?'success':'warning' }}">{{$pedido->estado}}</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled">
                                                @foreach($pedido->detallePedidos as $detalle)
                                                    <li>{{$detalle->producto->nombre}} ({{$detalle->cantidad}})</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>S/.{{$pedido->total}}</td>
                                        <td>

                                                <form action="{{route('admin.pedidos.update',$pedido->id)}}"
                                                      method="post" id="form-{{$pedido->id}}"
                                                      style="display: none"
                                                >
                                                    {{method_field('put')}}
                                                    {{csrf_field()}}
{{--                                                    <input type="hidden" value="{{$pedido->id}}">--}}
                                                </form>
                                                <a type="button" class="btn btn-link btn-{{ $pedido->estado == 'entregado'?'warning':'info' }}"
                                                   style="color: {{ $pedido->estado == 'entregado'?'red':'' }}"
                                                   href="{{route('admin.pedidos.index')}}"
                                                        onclick="event.preventDefault();
                                                     document.getElementById('form-{{$pedido->id}}').submit();"
                                                ><i class="fa fa-{{ $pedido->estado == 'entregado'?'times':'send' }}"></i> {{ $pedido->estado == 'entregado'?'Cancelar entrega':'Entregar' }} </a>

                                        </td>
                                        <td></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

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