<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <title>Administracion- La Buena Saz&oacute;n</title>

    <!-- Bootstrap CSS -->
{!!Html::style('assets/css/bootstrap.min.css')!!}
<!-- bootstrap theme -->
{!!Html::style('assets/css/bootstrap-theme.css')!!}
<!--external css-->
    <!-- font icon -->
{!!Html::style('assets/css/elegant-icons-style.css')!!}
{!!Html::style('assets/css/font-awesome.min.css')!!}
<!-- full calendar css-->
{!!Html::style('assets/assmin/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
{!!Html::style('assets/assmin/fullcalendar/fullcalendar/fullcalendar.css')!!}
<!-- easy pie chart-->
{!!Html::style('assets/assmin/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
<!-- owl carousel -->
{!!Html::style('assets/css/owl.carousel.css')!!}
{!!Html::style('assets/css/jquery-jvectormap-1.2.2.css')!!}
<!-- Custom styles -->
    {!!Html::style('assets/css/fullcalendar.css')!!}
    {!!Html::style('assets/css/widgets.css')!!}
    {!!Html::style('assets/css/style.css')!!}
    {!!Html::style('assets/css/style-responsive.css')!!}
    {!!Html::style('assets/css/xcharts.min.css')!!}
    {!!Html::style('assets/css/jquery-ui-1.10.4.min.css')!!}

    @yield('styles')
    <style>
        .modal-dialog{
            left: auto;
        }
    </style>


</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{ url('admin') }}" class="logo">PANEL <span class="lite">CONTROL</span></a>
        <!--logo end-->


        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
            {{-- contenido --}}
            <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{ asset('assets/images/admin/avatar1_small.jpg') }}">
                            </span>
                        <span class="username">{{ Auth::user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>

                        <li>
                            <a href="{{ url('/logout') }}"><i class="icon_key_alt"></i>Salir</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="{{ url('admin') }}">
                        <i class="icon_house_alt"></i>
                        <span>Centro de control</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Productos</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ url('admin/producto/create') }}">Nuevo Producto</a></li>
                        <li><a class="" href="{{ url('admin/producto') }}">Todos los productos</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_desktop"></i>
                        <span>Clientes</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ url('admin/cliente') }}">Todos los Clientes</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>Categorias</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ url('admin/categoria/create') }}">Nueva Categoria</a></li>
                        <li><a class="" href="{{ url('admin/categoria') }}">Todas las Categorias</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a class="" href="{{ url('logout') }}">
                        <i class="icon_key"></i>
                        <span>Finalizar Sesion</span>
                    </a>
                </li


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        @yield('content')
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
{{--{!!Html::script('assets/js/jquery-3.1.0.min.js')!!}--}}
{!!Html::script('assets/js/jquery-3.5.1.js')!!}
{!!Html::script('assets/js/custom.js')!!}
<!-- bootstrap -->
{!!Html::script('assets/js/jsadmin/bootstrap.min.js')!!}
<!-- nice scroll -->
{!!Html::script('assets/js/jsadmin/jquery.scrollTo.min.js')!!}
{!!Html::script('assets/js/jsadmin/jquery.nicescroll.js')!!}
<!-- charts scripts -->
{!!Html::script('assets/assmin/jquery-knob/js/jquery.knob.js')!!}
{!!Html::script('assets/js/jsadmin/jquery.sparkline.js')!!}
{!!Html::script('assets/assmin/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
{!!Html::script('assets/js/jsadmin/owl.carousel.js')!!}
<!-- jQuery full calendar -->
{!!Html::script('assets/js/jsadmin/fullcalendar.min.js')!!}

<!-- Full Google Calendar - Calendar -->
{!!Html::script('assets/assmin/fullcalendar/fullcalendar/fullcalendar.js')!!}

<!--script for this page only-->
{!!Html::script('assets/js/jsadmin/calendar-custom.js')!!}
{!!Html::script('assets/js/jsadmin/jquery.rateit.min.js')!!}
<!-- custom select -->
{!!Html::script('assets/js/jsadmin/jquery.customSelect.min.js')!!}
{!!Html::script('assets/assmin/chart-master/Chart.js')!!}
<!--custome script for all page-->
{!!Html::script('assets/js/jsadmin/scripts.js')!!}
<!-- custom script for this page-->
{!!Html::script('assets/js/jsadmin/sparkline-chart.js')!!}
{!!Html::script('assets/js/jsadmin/easy-pie-chart.js')!!}
{!!Html::script('assets/js/jsadmin/jquery-jvectormap-1.2.2.min.js')!!}
{!!Html::script('assets/js/jsadmin/jquery-jvectormap-world-mill-en.js')!!}
{!!Html::script('assets/js/jsadmin/xcharts.min.js')!!}
{!!Html::script('assets/js/jsadmin/jquery.autosize.min.js')!!}
{!!Html::script('assets/js/jsadmin/jquery.placeholder.min.js')!!}
{!!Html::script('assets/js/jsadmin/gdp-data.js')!!}
{!!Html::script('assets/js/jsadmin/morris.min.js')!!}
{!!Html::script('assets/js/jsadmin/sparklines.js')!!}
{!!Html::script('assets/js/jsadmin/charts.js')!!}
{!!Html::script('assets/js/jsadmin/jquery.slimscroll.min.js')!!}
@yield('scripts')

<script>
    //knob
    $(function () {
        $(".knob").knob({
            'draw': function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function () {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function () {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function (e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>

@yield('js')

</body>

</html>
