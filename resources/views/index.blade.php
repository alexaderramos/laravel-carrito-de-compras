@extends('layouts.master')
@section('content')
    <main role="main" class="main-container">
    <section class="slider-wrap" id="home">
        <div class="top-slider fxPressAway">
            <div class="item current">
                <div class="image-background" style="background-image: url('assets/content/homepage-slider02.jpg');"></div>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <div class="outer">
                        <div class="inner">
                            <div class="title">Donde comer <span>uno</span></div>
                            <div class="subtitle"><span>no es  </span>suficiente.</div>
                            <a href="{{ url('abut') }}" class="btn btn-primary btn-empty btn-lg">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image-background" style="background-image: url('assets/content/homepage-slider01.jpg');"></div>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <div class="outer">
                        <div class="inner">
                            <div class="title">Los mejores <span>precios</span>   </div>
                            <div class="subtitle"><span>Somos una empresa que siempre cuida de la economia de sus usuarios.</div>
                            <a href="{{ url('about') }}" class="btn btn-primary btn-empty btn-lg">Leer Mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image-background" style="background-image: url('assets/content/homepage-slider03.jpg');"></div>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <div class="outer">
                        <div class="inner">
                            <div class="title"><span>Los mejores</span> Productos</div>
                            <div class="subtitle">Saludable <span> y economico, el mejor producto de la region Norte.</div>
                            <a href="{{ url('about') }}" class="btn btn-primary btn-empty btn-lg">Leer Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="line">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-icon">
                        <i class="entyp-doc-text-1"></i>
                    </div>
                    <h1>Nuestro Servicios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="services-summary">
                        Somos la principal distribuidora a nivel regional.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <article class="service">
                        <div class="amber-icon extra-icon">
                            <i class="entyp-docs"></i>
                        </div>
                        <h4>Garantia</h4>
                        <div class="content">
                            Tiramisu soufflé sesame snaps. Powder liquorice icing bonbon.
                            Unerdwear.com pastry unerdwear.com jelly croissant tootsie roll.
                        </div>
                    </article>
                </div>
                <div class="col-sm-3">
                    <article class="service">
                        <div class="amber-icon extra-icon">
                            <i class="entyp-cog-1"></i>
                        </div>
                        <h4>Confianza</h4>
                        <div class="content">
                            Tiramisu soufflé sesame snaps. Powder liquorice icing bonbon.
                            Unerdwear.com pastry unerdwear.com jelly croissant tootsie roll.
                        </div>
                    </article>
                </div>
                <div class="col-sm-3">
                    <article class="service">
                        <div class="amber-icon extra-icon">
                            <i class="entyp-monitor"></i>
                        </div>
                        <h4>Amabilidad</h4>
                        <div class="content">
                            Tiramisu soufflé sesame snaps. Powder liquorice icing bonbon.
                            Unerdwear.com pastry unerdwear.com jelly croissant tootsie roll.
                        </div>
                    </article>
                </div>
                <div class="col-sm-3">
                    <article class="service">
                        <div class="amber-icon extra-icon">
                            <i class="entyp-picture-1"></i>
                        </div>
                        <h4>Responsabilidad</h4>
                        <div class="content">
                            Tiramisu soufflé sesame snaps. Powder liquorice icing bonbon.
                            Unerdwear.com pastry unerdwear.com jelly croissant tootsie roll.
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="line">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-camera-1"></i>
                    </div>
                    <h1>Algunos Productos</h1>
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
                <a href="{{ url('carta') }}" class="overlay">
                    <div class="background-color"></div>
                    <div class="outer">
                        <div class="inner">
                            <div class="title"> {{ $producto->nombre }} </div>
                            <div class="type">{{ $producto->descripcion }}</div>
                            <div class="amber-icon"><i class="entyp-eye-1"></i>Click para mas productos</div>
                        </div>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

       <div class="container">
            <div class="row "">
                <div class="col-xs-12" style="text-align: center;">
                      <a href="{{ url('carta') }}" type="button" class="btn btn-primary"> Ver más</a>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="line">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-user-1"></i>
                    </div>
                    <h1>Tabla de precios</h1>
                </div>
            </div>
            <div class="row">
           
                @php( $i = 0 )
                    @foreach ($productos as $prod)
                       @if ($i<3)
                        <div class="col-sm-4">
                          <div class="pricing-box">
                            <header>{{ $prod->nombre }}</header>
                            <div class="price">
                                <h3><span class="symbol">S/.</span>{{ $prod->precio_es }}</h3>
                                <h4>por unidad</h4>
                            </div>
                            <ul class="item-list">
                                <li><strong>Descripcion</strong><br>{{ $prod->descripcion }}</li>
                            </ul>
                            <button type="button" class="hidden-sm btn btn-success btn-icon entyp-thumbs-up-1">Comprar</button>
                            <button type="button" class="hidden-lg hidden-md hidden-xs btn btn-success entyp-thumbs-up-1 btn-xs">Comprar</button>
                             </div>
                        </div>
                       @else
                            @break
                       @endif
                       @php($i++)
                    @endforeach
               
            </div>
            
        </div>
    </section> --}}
    <section class="action-call parallax" style="background-image: url('assets/content/action-call.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text">¿Interesado en nuestro trabajo?</div>

                      <a href="{{ url('contact') }}" type="button" class="btn btn-empty btn-lg"> Contactenos</a>
                
                    
                </div>
            </div>
        </div>
        <div class="background-overlay"></div>
    </section>
    <section class="line">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-user-1"></i>
                    </div>
                    <h1>Nuestros Clientes</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="clients-wrap">
                        <div class="clients-slider">
                            <div class="item">
                               <ul class="clients">
                                        <li>
                                            <a href="#">
                                                <figure>
                                                    <img src="assets/content/client1.png" alt=""/>

                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <figure>
                                                    <img src="assets/content/client2.png" alt=""/>
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <figure>
                                                    <img src="assets/content/client3.png" alt=""/>
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                            <div class="item">
                               <ul class="clients">
                                   <li>
                                       <a href="#">
                                           <figure>
                                               <img src="assets/content/client4.png" alt=""/>
                                           </figure>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <figure>
                                               <img src="assets/content/client5.png" alt=""/>
                                           </figure>
                                       </a>
                                   </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="assets/content/client6.png" alt=""/>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="clients">
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="assets/content/client7.png" alt=""/>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="assets/content/client8.png" alt=""/>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="assets/content/client9.png" alt=""/>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

@stop
    