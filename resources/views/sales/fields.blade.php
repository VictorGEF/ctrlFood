<!-- Nit Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nit', 'Nit: *') !!}
    {!! Form::text('nit', null, ['class' => 'form-control', 'required','maxlength' => '15', '@keypress.enter'=>'getClientes($event)', '@blur'=>'getClientes($event)']) !!}
</div>

<!-- Razon Social Field -->
<div class="form-group col-sm-12">
    {!! Form::label('razon_social', 'Razón Social: *') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control', 'maxlength' => '50', 'required', 'id'=>'razon_social']) !!}
</div>

<!-- Concepto Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('concepto', 'Concepto:') !!}
    {!! Form::text('concepto', null, ['class' => 'form-control', 'required']) !!}
    <hr>
</div>

{!! Form::hidden('nit', null, ['class' => 'form-control', 'id'=>'nit_ci_cliente']) !!}
{!! Form::hidden('razon_social', null, ['class' => 'form-control', 'id'=>'razon_social_cliente']) !!}
{!! Form::hidden('cliente_id', null, ['class' => 'form-control', 'id'=>'cliente_id']) !!}

@include('sales.carrito')


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Finalizar venta e imprimir recibo', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sales.index') !!}" class="btn btn-default" onclick="return confirm('Seguro que quieres cancelar esta venta\nLos cambios realizados no se guardarán')">Cancelar</a>
</div>
