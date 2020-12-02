@extends('layouts.cliente')

@section('styles')
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs/jqc-1.12.4/dt-1.10.22/b-1.6.5/b-print-1.6.5/r-2.2.6/datatables.min.css"/>
    <style>
        body.theme-4 .form-control{
            font-weight: 300;
            -webkit-border-radius: 0;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 0;
            -moz-background-clip: padding;
            border-radius: 0;
            background-clip: padding-box;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: solid 1px #bbbbbb;
            border-bottom: solid 2px #e2e2e2;
            padding-top: 5px;
            padding-bottom: 5px;
            height: 35px;
            color: #000;
            float: left;
            width: 100%;
            margin-bottom: 0px;
            font-size: 1rem;
        }
        .badge {
            padding: 2px 9px 2px;
            font-size: 12.025px;
            font-weight: bold;
            white-space: nowrap;
            color: #ffffff;
            background-color: #999999;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
            text-transform: uppercase;
        }
        .badge:hover {
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
        }
        .badge-error {
            background-color: #b94a48;
        }
        .badge-error:hover {
            background-color: #953b39;
        }
        .badge-warning {
            background-color: #f89406;
        }
        .badge-warning:hover {
            background-color: #c67605;
        }
        .badge-success {
            background-color: #468847;
        }
        .badge-success:hover {
            background-color: #356635;
        }
        .badge-info {
            background-color: #3a87ad;
        }
        .badge-info:hover {
            background-color: #2d6987;
        }
        .badge-inverse {
            background-color: #333333;
        }
        .badge-inverse:hover {
            background-color: #1a1a1a;
        }
    </style>


@endsection

@section('content')
    <main role="main" class="main-container">
        <section class="line" id="common">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="title-icon">
                            <i class="entyp-basket-1"></i>
                        </div>
                        <h1>Mis compras</h1>
                    </div>
                </div>


                <div class="page">
                    <table class="table table-striped table-hover table-bordered" id="datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Productos</th>
                            <th class="text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php use Carbon\Carbon; @endphp
                        @foreach($pedidos as $pedido)
                            <tr>
                                <th>{{$pedido->id}}</th>
                                <td>@php

                                    Carbon::setLocale('es_ES');
                                    $date = Carbon::parse($pedido->created_at);
                                    $fdate = $date->format('d/m/Y H:i:s');
                                    #$fdate = $date->format('M d Y, h:m:s a');
                                    echo($fdate)
                                @endphp
                                </td>
                                <td><span class="badge badge-{{ $pedido->estado == 'entregado'?'success':'warning' }}">{{$pedido->estado}}</span></td>
                                <td>
                                    <ul class="list-unstyled">
                                        @foreach($pedido->detallePedidos as $detalle)
                                            <li>{{$detalle->producto->nombre}} ({{$detalle->cantidad}})</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>S/.{{$pedido->total}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

@endsection



@section('scripts')
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs/jqc-1.12.4/dt-1.10.22/b-1.6.5/b-print-1.6.5/r-2.2.6/datatables.min.js"></script>

@endsection

@section('js')
<script>
    $(document).ready(function () {
        let table = $('#datatable').DataTable({
            responsive:true,
            /*responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Detalles del pedido';
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    }),
                    type: 'column',
                    target: -1
                }
            },*/
           /* columnDefs: [{
                className: 'control',
                orderable: false,
                targets: -1
            }],*/
            language: {
                "url": "{{asset('assets/js/Spanish.json')}}",
            },
        });
        // new $.fn.dataTable.FixedHeader( table );
    });
</script>
@endsection