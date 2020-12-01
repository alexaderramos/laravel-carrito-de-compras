@extends('layouts.admin')
@section('content')
	
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('admin') }}">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Clientes</li>
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

              <table class="table table-avanced  table-hover">
                <thead>
                  <tr>
                    <th># id</th>
                    <th> Nombre</th>
                    <th> Email</th>
                    <th> Action</th>
                  </tr>
                </thead>
                  
                    
                  
                  @foreach ($clientes as $cliente)
                  <tbody>
                    <tr>
                      <td>{{ $cliente->id }}</td>
                      <td>{{ $cliente->name }}</td>
                      <td>{{ $cliente->email }}</td>
                     

                      <td >
                        <div class="btn-group">
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                 
                </tbody>
              </table>
              <div   style="text-align: center;">
                {!! $clientes->render() !!}  
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
@stop