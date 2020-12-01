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
                    <h1>Carrito de compras</h1>
                </div>
            </div>
            @if (count($cart))

            	<p>
            		<a href="{{ route('cart-trash') }}" class="btn btn-danger btn-lg">Vaciar el carrito <i class="glyphicon glyphicon-trash"></i></a>
            	</p>


            	<div class="table-cart row">
                <div class="col-xs-12">
                   <div class="table-responsive">
                   	<table class="table table-striped table-hover  table-bordered">
                   		<thead>
                   			<tr>
                   				<th style="width: 12%">Imagen</th>
                   				<th>Producto</th>
                   				<th>Precio</th>
                   				<th>Cantidad</th>
                   				<th>Subtotal</th>
                   				<th>Quitar</th>
                   			</tr>
                   		</thead>
                   		<tbody>
                   			@foreach ($cart as $item)
                   			<tr>
                   				<td><img src="{{asset('store_productos/'.$item->foto)}}"></td>
                   				<td>{{ $item->nombre }}</td>
                   				<td>{{ number_format($item->precio_es,2) }}</td>
                   				<td>
                   					<input 
                   						class="form-inline"
										name="cant"
                   						type="number"  
                   						min="1"
                   						max="{{ $item->stock }}"
                   						value={{ $item->cantidad }}
                   						id="product_{{ $item->id }}" 
                   					>

                   					<a 
                   						href="#" 
                   						class="btn btn-warning btn-update-item btn-xs"
                   						data-href="{{ route('cart-update',$item->id)}}"
                   						data-id="{{ $item->id }}"
                   						>
                   						<i class="glyphicon glyphicon-refresh"></i>
                   							
                   					</a>

                   				</td>
                   				<td>{{ number_format($item->precio_es * $item->cantidad,2) }}</td>
                   				<td>
                   					<a href="{{ route('cart-delete',$item->id) }}" class="btn btn-danger btn-xs">
                   						<i class="glyphicon glyphicon-remove-sign"></i>
                   					</a>
                  				</td>
                   			</tr>
                   			@endforeach
                   		</tbody>
                   	</table><hr/>

                   </div>
					<h3>
						<span class="label label-success"></span>
						Total: S/. {{ number_format($total,2) }}
					</h3>
                </div>
            </div>
            @else
            	<div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="box">
                        No ha agregado items al carrito de compras.
                       <br>:(
                    </div>
                </div>
            </div>
            @endif
            <hr/>
            <p>
            	<a href="{{ url('cliente') }}" class="btn btn-primary btn-lg">
            		<i class="glyphicon glyphicon-circle-arrow-left"></i>Seguir comprando
            	</a>
                @if (count($cart))
            	<a href="{{ route('order-detail') }}" class="btn btn-primary btn-lg">Continuar
            		<i class="glyphicon glyphicon-circle-arrow-right"></i>
            	</a>
              @endif
            </p>
            
        </div>
     
       
    </section>
@stop