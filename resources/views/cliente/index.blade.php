@extends('layouts.cliente')
@section('content')
 <main role="main" class="main-container">
    <section class="line" id="common">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-camera-1"></i>
                    </div>
                    <h1>Nuestros Productos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="box">
                        Cada producto esta hecho con calidad de primera.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="portfolio-filters">
                        <ul>
                            <li class="active">
                                <button data-filter="*" type="button" title="All">Todos</button>
                            </li>

                            @foreach ($categorias as $categoria)
                              <li>
                                <button data-filter=".{{ $categoria->id }}" type="button" title="{{ $categoria->nombrec }}">{{ $categoria->nombrec }}</button>
                              </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-wrap">
            @foreach ($productos as $producto)
              <article class="{{ $producto->categoria_id }}"
                     data-image="/store_productos/{{ $producto->foto }}">
                <div class="image-background"></div>
                <a href="{{ route('cart-add',$producto->id) }}" class="overlay">
                    <div class="background-color"></div>
                    <div class="outer">
                        
                        <div class="inner" >
                            <div class="pricing-box center-block" >
                            <header>{{ $producto->nombre }}</header>
                            <div class="price">
                                <h3><span class="symbol">S/.</span>{{ $producto->precio_es }}</h3>
                                <h4>por unidad</h4>
                            </div>
                           
                             </div>
                        </div>
                    </div>
                </a>
            </article>
            @endforeach
            
        </div>
       
    </section>
@stop