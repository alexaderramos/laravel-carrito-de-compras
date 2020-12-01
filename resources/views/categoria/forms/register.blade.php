{!! Form::open([ 'route'=>'admin.categoria.store','class'=>'form-horizontal','method'=>'POST']) !!}
<div class="form-group">
    {!! Form::label('Nombre',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
    {!!Form::text('nombrec', null, ['class'=>'form-control',  'placeholder'=>'Nombre']) !!}
    </div>
</div>

  <div class="form-group">
   {!! Form::label('Descripcion',null,['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
    {!!Form::text('descripcion', null, ['class'=>'form-control',  'placeholder'=>'Descripcion']) !!}
    </div>
</div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    {!! Form::submit('Guardar', ['class'=>'btn btn-danger']) !!}
    </div>
  </div>
{!! Form::close() !!}