@extends('layouts.cliente')
@section('content')
    <main role="main" class="main-container">
        <section class="line" id="common">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="title-icon">
                            <i class="entyp-basket-1"></i>
                        </div>
                        <h1>Detalle de Pedido</h1>
                    </div>
                </div>


                <div class="page">
                    {{-- <div class="col-xs-12"> --}}
                    <div class="table-responsive">
                        <h3 class="label-success">Datos de usuario</h3>
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <td><b>Nombre:</b></td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td><b>Correo :</b></td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <h3 class="label-success">Datos del pedido</h3>
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <th>Producto</th>
                                <th>Precio Uni.</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                            </tr>
                            <pre>
                            @php
                            var_dump(json_encode($cart))
                            @endphp
                                </pre>
                            @foreach ($cart as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>S/.{{ number_format($item->precio_es,2) }}</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>S/.{{ number_format($item->precio_es * $item->cantidad,2) }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <hr/>
                        <h3>
                            <span class="label label-success"></span>
                            Total: S/. {{ number_format($total,2) }}
                        </h3>
                        <p>
                            <a href="{{ route('cart-show') }}" class="btn btn-primary btn-lg">
                                <i class="glyphicon glyphicon-circle-arrow-left"></i>Regresar
                            </a>
                            @if (count($cart))
                                <button id="pagar" class="btn btn-primary btn-lg">Continuar
                                    <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                </button>
                                {{--								 href="https://www.paypal.com/signup/account?intent=true&intentId=intent1517221328174--}}
                            @endif
                        </p>


                    </div>


                    {{-- </div> --}}
                </div>

                <hr/>
                {{--  <p>
                     <a href="{{ url('cliente') }}" class="btn btn-primary btn-lg">
                         <i class="glyphicon glyphicon-circle-arrow-left"></i>Seguir comprando
                     </a>

                     <a href="{{ route('order-detail') }}" class="btn btn-primary btn-lg">Continuar
                         <i class="glyphicon glyphicon-circle-arrow-right"></i>
                     </a>
                 </p> --}}

            </div>


        </section>
        @stop

        @section('scripts')
            <script>
                $('#pagar').on('click', function (e) {
                    e.preventDefault();
                    pagarAjax();
                })

                function pagarAjax(){
                    $.post('{!! route('pedidos.store') !!}',{
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        'total': "{{ number_format($total,2) }}"
                    })
                    .success(function (data){
                        location.href="{!! route('cliente.index') !!}"
                    })

                }

                function pagarFecth() {
                    let data = new FormData();
                    data.append('_token', $('meta[name=csrf-token]').attr('content'))
                    data.append('total', {{ number_format($total,2) }})
                    fetch('{!! route('pedidos.store') !!}',
                        {
                            method: 'POST',
                            body: data
                        })
                        .then(function (response) {
                            if (response.ok) {
                                return response.json()
                            } else {
                                throw "Error en la llamada Ajax";
                            }

                        })
                        .then(function (data) {
                            console.log(data);
                        })
                        .catch(function (err) {
                            console.log(err);
                        });

                }

            </script>
@endsection