@extends('layouts.principal')
@section('content')


<div class="tener">
{!!Form::open(['route'=>'producto.store', 'method'=>'POST'])!!}
  <div class="form-group">
   {!!Form::label('Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
  </div>
   <div class="form-group">
   {!!Form::label('Valor:')!!}
  {!!Form::text('valor',null,['class'=>'form-control','placeholder'=>'Valor'])!!}
  </div>

  
  
    {!!Form::submit('Guardar',['class'=>'btn btn-default'])!!}
    {!!Form::close()!!}

</form>
</div>




@stop