@extends('layouts.principal')

@section('content')

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
@if(Session::has('mensagem_sucesso'))
    <div  class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
@endif
@if (Request::is('*/editar'))
<h1>Editar produto</h1>                        
    {!! Form::model($produto, ['method' => 'PATCH', 'url' => action('ProdutoController@atualizar',$produto->id)]) !!}                        
@else
<h1>Novo produto</h1>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach 
    </ul>
</div>
@endif  
{!! Form::open(['url' => action('ProdutoController@adiciona')]) !!}
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
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}   
@endsection