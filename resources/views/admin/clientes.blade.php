@extends('layouts.admin')
@section('styles')
    @include('layouts.assets.datatables-css')
@endsection

@section('content')

    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-users"></i> Clientes</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
                    <li><i class="fa fa-table"></i>Table</li>
                    <li><i class="fa fa-users"></i>Clientes</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Tabla de los clientes
                    </header>

                 <div class="panel-body">
                     <table class="table table-avanced  table-hover" id="datatable">
                         <thead>
                         <tr>
                             <th>#</th>
                             <th> Nombre</th>
                             <th> Email</th>
                             <th> Action</th>
                             <th></th>
                         </tr>
                         </thead>


                         <tbody>
                         @foreach ($clientes as $cliente)

                             <tr>

                                 <td>{{ $cliente->id }}</td>
                                 <td>{{ $cliente->name }}</td>
                                 <td>{{ $cliente->email }}</td>

                                 <td>
                                     <div class="btn-group">
                                         <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                         <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                     </div>
                                 </td>

                                 <td></td>
                             </tr>

                         @endforeach

                         </tbody>
                     </table>
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
        $(document).ready(function () {
            let table = $('#datatable').DataTable({

                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Detalles del cliente';
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        }),
                        type: 'column',
                        target: -1
                    }
                },
                columnDefs: [{
                    className: 'control',
                    orderable: false,
                    targets: -1
                }],
                language: {
                    "url": "{{asset('assets/js/Spanish.json')}}",
                },
            });
            // new $.fn.dataTable.FixedHeader( table );
        });
    </script>
@endsection