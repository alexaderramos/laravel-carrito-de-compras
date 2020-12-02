<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Panaderia: La Buena Saz&oacute;n</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    {!!Html::style('assets/css/bootstrap.min.css')!!}
    {!!Html::style('assets/css/main.css')!!}

    {!!Html::script('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')!!}
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-52602196-1', 'auto');
        ga('send', 'pageview');

    </script>

    @yield('styles')
</head>
<body class="theme-4 no-perspective" data-spy="scroll" data-target=".main-nav" data-offset="60">
<section id="theme-swatch">
    <ul class="colors">
        <li><a href="#" class="theme-1 color-swatch"></a></li>
        <li><a href="#" class="theme-2 color-swatch"></a></li>
        <li><a href="#" class="theme-3 color-swatch"></a></li>
        <li><a href="#" class="active theme-4 color-swatch"></a></li>
        <li><a href="#" class="theme-5 color-swatch"></a></li>
    </ul>
</section>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="background"></div>
    <div class="container">
        <div class="col-sm-12">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button class="open-login mobile-login"><i class="entyp-user-1"></i></button>
                <a class="navbar-brand" href="{{ url('/') }}"><i class="entyp-feather"></i>La Buena Saz&oacute;n</a>
            </div>
            <div class="collapse navbar-collapse main-nav" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{request()->is('cliente')?'active':''}}">
                        <a href="{{ url('cliente') }}">
                            <div class="big">Inicio</div>
                            <hr/>
                            <div class="small">Resumen</div>
                        </a>

                    </li>
                    <li class="{{request()->is('cart/show')?'active':''}}">
                        <a href="{{ route('cart-show') }}">
                            <div class="big">Mi Carrito</div>
                            <hr/>
                            <div class="small">Carrito</div>
                        </a>
                    </li>



                    @if (Auth::check())
                        <li class="{{request()->is('pedidos')?'active':''}}">
                            <a href="{{ route('pedidos.index') }}">
                                <div class="big">Mis Compras</div>
                                <hr/>
                                <div class="small">Pedidos</div>
                            </a>
                        </li>
                        <li>
                            @if (Auth::user()->is_admin)
                                <a href="{{ url('admin') }}" class="ignore init-login-popover">
                                    @else
                                        <a href="{{ url('cliente') }}" class="ignore init-login-popover">
                                            @endif

                                            <div class="big"><i class="entyp-user-1"></i>{{ Auth::user()->name }}</div>
                                            <hr/>
                                            <div class="small">Bienvenido</div>
                                        </a>
                                        <ul>
                                            <li><a href="{{ url('/logout') }}">Salir</a></li>
                                        </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/login') }}" class="ignore init-login-popover">
                                <div class="big"><i class="entyp-user-1"></i>Acceder</div>
                                <hr/>
                                <div class="small">o Registrate</div>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h2>Latest Posts</h2>
                    <div class="widget-content latest-post">
                        <ul>
                            <li>
                                <h3><a href="blog-single.html">Jelly I love apple pie tart tootsie roll tiramisu.</a>
                                </h3>
                                <p> I love I love cookie cotton candy. Danish candy muffin lollipop.</p>
                                <span class="date">August 25</span>
                            </li>
                            <li>
                                <h3><a href="blog-single.html">Jelly I love apple pie tart tootsie roll tiramisu.</a>
                                </h3>
                                <p> I love I love cookie cotton candy. Danish candy muffin lollipop.</p>
                                <span class="date">August 25</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h2>Contactanos</h2>
                    <div class="widget-content">
                        <address>
                            Los Algarrobos,<br/> Piura, Perú
                        </address>
                        <address>
                            <strong>Telefono: 0500 - 9876542</strong> <br/>
                            <strong>E-mail: emailme@hotmail.com</strong>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h2>Instagram</h2>
                    <div class="widget-content instagram">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram01.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram02.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram03.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram04.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram05.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram06.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram07.jpg" alt=""/></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#"><img src="assets/content/instagram08.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h2>Comparte</h2>
                    <div class="footer-info text-right">
                        <ul class="footer-social">
                            <li><a href="#"><i class="entyp-twitter-1"></i></a></li>
                            <li><a href="#"><i class="entyp-facebook-1"></i></a></li>
                            <li><a href="#"><i class="entyp-gplus-1"></i></a></li>
                            <li><a href="#"><i class="entyp-pinterest"></i></a></li>
                            <li><a href="#"><i class="entyp-dribbble-1"></i></a></li>
                        </ul>
                    </div>
                    <h2>Suscribete</h2>
                    <form role="form" class="newsletter">
                        <input type="email" name="subscribe-email" id="subscribe-email" class="form-control"/>
                        <button type="submit" class="btn btn-primary btn-empty btn-xs entyp-right-bold"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
</main>

    {!!Html::script('assets/js/vendor/jquery-1.11.0.min.js')!!}
    {!!Html::script('assets/js/vendor/jquery.cookie.js')!!}
    {!!Html::script('assets/js/vendor/bootstrap.min.js')!!}
    {!!Html::script('http://maps.google.com/maps/api/js?sensor=false&amp;language=es')!!}
    {!!Html::script('assets/js/vendor/gmap3.min.js')!!}
    {!!Html::script('assets/js/vendor/jquery.bxslider.min.js')!!}
    {!!Html::script('assets/js/vendor/jquery.isotope.min.js')!!}
    {!!Html::script('assets/js/vendor/jquery.isotope.perfectmasonry.js')!!}
    {!!Html::script('assets/js/vendor/jquery.hoverdir.js')!!}
    {!!Html::script('assets/js/vendor/jquery.inview.min.js')!!}
    {!!Html::script('assets/js/vendor/jquery.selectric.js')!!}
    {!!Html::script('assets/js/main.js')!!}

@yield('scripts')
@yield('js')


</body>
</html>