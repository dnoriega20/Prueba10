@extends('layouts.principal')
@section('content')

<div class="tener">
{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
  <div class="form-group">
  {!!Form::label('Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
 
  </div>
   <div class="form-group">
  {!!Form::label('Apellido:')!!}
  {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
  </div>
  <div class="form-group">
  {!!Form::label('Correo:')!!}
  {!!Form::email('correo',null,['class'=>'form-control','placeholder'=>'Correo'])!!}
  </div>
   <div class="form-group">
  {!!Form::label('Direccion:')!!}
  {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
  </div>
  
  
    {!!Form::submit('Registrar',['class'=>'btn btn-default'])!!}

{!!Form::close()!!}
</div>

@stop