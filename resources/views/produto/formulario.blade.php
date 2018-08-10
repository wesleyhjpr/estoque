@extends('layouts.principal')

@section('content')
<h1>Novo produto</h1>
{{-- <form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="form-group">
      <label for="descricao">Descricao:</label>
      <input type="text" class="form-control" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="text" class="form-control" id="valor" name="valor">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>--}}
<script>
    $( document ).ready(function() {
        $(".alert").fadeTo(3500, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
        });
    });                   
</script>
@if (Request::is('*/editar'))                        
    {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}                        
@else
{!! Form::open(['url' => "/produtos/adiciona"]) !!}
@endif
    <div class="form-group">    
        {!! Form::label('nome', 'Nome') !!}                        
        {!! Form::text('nome', null, ['autofocus', 'class' => 'form-control', 'placeholder' => 'nome']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('valor', 'Valor') !!}
        {!! Form::text('valor', null, ['class' => 'form-control', 'placeholder' => 'Valor']) !!}                     
    </div>
    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade') !!}
        {!! Form::number('quantidade', null, ['class' => 'form-control', 'placeholder' => 'Quantidade']) !!} 
    </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}      
@endsection