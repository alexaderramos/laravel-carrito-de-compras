@extends('layouts.normal')
@section('content')
	<main role="main" class="main-container with-padding">
    <section class="line fill-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-icon">
                        <i class="entyp-paper-plane"></i>
                    </div>
                    <h1>Contactanos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="text" name="message-name" id="message-name" placeholder="Nombre" class="form-control"/>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" name="message-email" id="message-email" placeholder="Email" class="form-control"/>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Mensaje" name="message" id="message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Enviar Mensaje"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="map-overlay">
                            <address>
                                <strong><i class="entyp-location-1"></i> Ubicacion:</strong> 350 5th Ave, New York, NY 10118, United States <br/>
                                <strong><i class="entyp-phone-1"></i> Tel&eacute;fono:</strong> 0500 - 9876542 <br/>
                                <strong><i class="entyp-mail-1"></i> Email:</strong> emailme@hotmail.com <br/>
                            </address>
                            <ul class="contact-icons">
                                <li><a href="#"><i class="entyp-facebook-1"></i></a></li>
                                <li><a href="#"><i class="entyp-twitter-1"></i></a></li>
                                <li><a href="#"><i class="entyp-linkedin-1"></i></a></li>
                                <li><a href="#"><i class="entyp-gplus-1"></i></a></li>
                                <li><a href="#"><i class="entyp-skype-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-container"></div>
        </div>
    </section>
@stop