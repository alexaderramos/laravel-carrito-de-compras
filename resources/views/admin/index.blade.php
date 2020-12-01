@extends('layouts.admin')
@section('content')
      <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Centro de Control</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Centro de control</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-group"></i>
                        <div class="count">11.500</div>
                        <div class="title">Visitas diarias</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="count">7.538</div>
                        <div class="title">Compras</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <div class="count">4.362</div>
                        <div class="title">Ordenes</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count">1.426</div>
                        <div class="title">Stock</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

            </div>
            <!--/.row-->


            <div class="row">
                <div class="col-lg-9 col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-map-marker red"></i><strong>Ubicacion</strong></h2>
                            <div class="panel-actions">
                                <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body-map">
                            <div id="map" style="height:380px;"></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <!-- List starts -->
                    <ul class="today-datas">
                        <!-- List #1 -->
                        <li>
                            <!-- Graph -->
                            <div><span id="todayspark1" class="spark"></span></div>
                            <!-- Text -->
                            <div class="datas-text">11,500 visitas/dia</div>
                        </li>
                        <li>
                            <div><span id="todayspark2" class="spark"></span></div>
                            <div class="datas-text">15,000 Vistas</div>
                        </li>
                        <li><center></center>
                            <div><span id="todayspark3" class="spark"></span></div>
                            <div class="datas-text">30.55% Porcentajes</div>
                        </li>
                        <li>
                            <div><span id="todayspark4" class="spark"></span></div>
                            <div class="datas-text">$916,00 Ingresos/Dia</div>
                        </li>
                        <li>
                            <div><span id="todayspark5" class="spark"></span></div>
                            <div class="datas-text">12,000000 Visitas durante el Mes</div>
                        </li>
                    </ul>
                </div>


            </div>


            <!-- Today status end -->



            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Usuarios Registrados</strong></h2>
                            <div class="panel-actions">
                                <a href=#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                                <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Performance</th>
                                    </tr>
                                </thead>
                                 @foreach ($clientes as $cliente)
                                <tbody>
                                    
                                   
                                        <tr>
                                            
                                            <td>{{ $cliente->id }}</td>
                                            <td>{{ $cliente->name }}</td>
                                            <td>{{ $cliente->email }}</td>
                                            <td>
                                                <div class="progress thin">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                                    </div>
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                                    </div>
                                                </div>
                                                <span class="sr-only">73%</span>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>

                    </div>

                </div>
                <!--/col-->
                <div class="col-md-3">

                    <div class="social-box facebook">
                        <i class="fa fa-facebook"></i>
                        <ul>
                            <li>
                                <strong>256k</strong>
                                <span>Amigos</span>
                            </li>
                            <li>
                                <strong>359</strong>
                                <span>Seguidores</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->
                </div>
                <div class="col-md-3">

                    <div class="social-box google-plus">
                        <i class="fa fa-google-plus"></i>
                        <ul>
                            <li>
                                <strong>962</strong>
                                <span>Seguidores</span>
                            </li>
                            <li>
                                <strong>256</strong>
                                <span>Grupos</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->

                </div>
                <!--/col-->
                <div class="col-md-3">

                    <div class="social-box twitter">
                        <i class="fa fa-twitter"></i>
                        <ul>
                            <li>
                                <strong>1562k</strong>
                                <span>Seguidores</span>
                            </li>
                            <li>
                                <strong>2562</strong>
                                <span>tweets</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->

                </div>
                <!--/col-->

            </div>



            <!-- statics end -->

        </section>
        <div class="text-right">
@stop
