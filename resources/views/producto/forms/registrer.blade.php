{!! Form::open(['route'=>'admin.producto.store','method'=>'POST','files'=>true,'enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}

<div class="form-group">
    {!! Form::label('Nombre',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
    {!!Form::text('nombre', null, ['class'=>'form-control',  'placeholder'=>'Nombre','maxlength'=>15,'autocomplete'=>'off']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('Descripcion',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
    {!!Form::text('descripcion', null, ['class'=>'form-control',  'placeholder'=>'Descripcion']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('Stock',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
    {!!Form::input('number','stock', null, ['class'=>'form-control',  'placeholder'=>'Solo valores enteros']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Precio Estandar',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
      {!! Form::input('number', 'precio_es', null, ['class'=>'form-control','placeholder'=>'Ejemplo: 10.99','step'=>'0.01']) !!}
      <p class="help-block">Solo se tendran en cuenta dos decimales.Separacion de decimales: (.)</p>
    </div>
</div>

  <div class="form-group">
    {!! Form::label('Categoria',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">

      {!! Form::select('categoria_id', $categorias,'',['class'=>'form-control']) !!}
    </div>
  </div>
  
  <div class="form-group">
    {!! Form::label('Fotografia',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
     {!! Form::file('foto',['class'=>'form-control','accept'=>'image/*']) !!}
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      {!! Form::submit('Guardar', ['class'=>'btn btn-danger']) !!}
    </div>
  </div>

{!! Form::close() !!}