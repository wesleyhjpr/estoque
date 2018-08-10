@extends('layouts.principal')

@section('content')
@if(empty($produtos))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    Você não tem nenhum produto cadastrado.
</div>
@else
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
            <a href="/produtos/mostra/{{$p->id}}"><span class="fas fa-search"></span></a>&nbsp;
            <a href="{{action('ProdutoController@remove', $p->id)}}"><span class="fas fa-trash"></span></a>
        </td>
        {{-- <td><a href="/produtos/mostra?id={{$p->id}}"><span class="fas fa-search"></span></a></td>--}}
    </tr>
    @endforeach
    </tbody>
</table>
@endif  
<h4>
    <span class="badge badge-danger float-right">
    Um ou menos itens no estoque
    </span>
</h4>
@if (old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong>
    O produto {{ old('nome') }} foi adicionado.
</div>
@endif  
@endsection