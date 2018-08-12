@extends('layouts.principal')

@section('content')
@if(empty($produtos))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    Você não tem nenhum produto cadastrado.
</div>
@else
@php
$qtd = 0
@endphp
<h1>Listagem de produtos</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>    
    @foreach ($produtos as $p)
    <tr class={{ $p->quantidade <= 1 ? 'table-danger' : '' }}>
        <td>{{ $p->nome }} </td>
        <td>{{ $p->valor }} </td>
        <td>{{ $p->descricao }} </td>
        <td>{{ $p->quantidade }} </td>
        <td>
            <a href="{{ action('ProdutoController@mostrar',$p->id) }}"><span class="fas fa-search"></span></a>&nbsp;
            <a href="{{ action('ProdutoController@editar',$p->id) }}"><span class="fas fa-edit"></span></a>
            {!! Form::open(['method' => 'DELETE', 'url' => action('ProdutoController@remove',$p->id), 'style' => 'display: inline;']) !!}                                    
            <button type="submit" class="fas fa-trash"></button>
            {!! Form::close() !!}
        </td>
        {{-- <td><a href="/produtos/mostra?id={{$p->id}}"><span class="fas fa-search"></span></a></td>--}}
    </tr>
    @php
        $p->quantidade <= 1 ? $qtd++ : null
    @endphp 
    @endforeach
    </tbody>
</table>
@endif
@if ($qtd > 0)
<h4>
    <span class="badge badge-danger float-right">
        Um ou menos itens no estoque
    </span>
</h4> 
@endif  

@if(Session::has('mensagem_sucesso'))
    <div  class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
@endif  
@endsection