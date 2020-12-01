@extends('layouts.normal')
@section('content')
	<main role="main" class="main-container">
    <section class="line" id="common">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-users-1"></i>
                    </div>
                    <h1>Sobre Nosotros</h1>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="box">
                        Somos una empresa que cuenta con mucha experiencia en el sector productivo de panes.
                        Contamos con personal muy eficiente y comprometido.
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-box">
                        <div class="title">Habilidades</div>
                        <h3>Enfoque del cliente</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%">90%</div>
                        </div>
                        <h3>Profesionalismo</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%">80%</div>
                        </div>
                        <h3>Habilidades Tecnicas</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%">80%</div>
                        </div>
                        <h3>Disponibilidad</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%">100%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-box">
                        <div class="title">Conocenos m&aacute;s</div>
                        <div class="panel-group toggles" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                                           Nuestro lema
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-one" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    ¡Donde comer uno, no es suficiente!
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-two" class="collapsed">
                                            Mision
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Somos una empresa que brinda panes como productos básicos para consumo diario en las modalidades de venta y distribución.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three" class="collapsed">
                                            Vision
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Ser unas de las empresas más reconocidas a nivel de Región Norte brindando panes y otros productos afines para consumo diario.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-users-1"></i>
                    </div>
                    <h1>El Equipo</h1>
                </div>
                <div class="col-xs-12">
                    <div class="team">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <article class="team-member">
                                    <figure>
                                        <img src="assets/content/team-1.jpg" alt=""/>
                                        <div class="overlay">
                                            <div class="inner">
                                                <ul class="social-icons">
                                                    <li><a href="#"><i class="entyp-facebook-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-linkedin-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-twitter-1"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="background"></div>
                                        </div>
                                    </figure>
                                    <div class="info">
                                        <div class="name">Jesus Arellano Morante</div>
                                        <div class="position">Colaborador</div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 ">
                                <article class="team-member">
                                    <figure>
                                        <img src="assets/content/team-2.jpg" alt=""/>
                                        <div class="overlay">
                                            <div class="inner">
                                                <ul class="social-icons">
                                                    <li><a href="#"><i class="entyp-facebook-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-linkedin-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-twitter-1"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="background"></div>
                                        </div>
                                    </figure>
                                    <div class="info">
                                        <div class="name">Manuel Quizpe Dominguez</div>
                                        <div class="position">Productor</div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 ">
                                <article class="team-member">
                                    <figure>
                                        <img src="assets/content/team-3.jpg" alt=""/>
                                        <div class="overlay">
                                            <div class="inner">
                                                <ul class="social-icons">
                                                    <li><a href="#"><i class="entyp-facebook-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-linkedin-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-twitter-1"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="background"></div>
                                        </div>
                                    </figure>
                                    <div class="info">
                                        <div class="name">Cristhian Culquicondor Ramos</div>
                                        <div class="position">Colaborador</div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 ">
                                <article class="team-member">
                                    <figure>
                                        <img src="assets/content/team-4.jpg" alt=""/>
                                        <div class="overlay">
                                            <div class="inner">
                                                <ul class="social-icons">
                                                    <li><a href="#"><i class="entyp-facebook-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-linkedin-1"></i></a></li>
                                                    <li><a href="#"><i class="entyp-twitter-1"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="background"></div>
                                        </div>
                                    </figure>
                                    <div class="info">
                                        <div class="name">Enrique Guzman Sandoval</div>
                                        <div class="position">Colaborador</div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-users-1"></i>
                    </div>
                    <h1>Nuestros Clientes</h1>
                </div>
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