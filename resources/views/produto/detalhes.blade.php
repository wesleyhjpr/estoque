@extends('layouts.principal')

@section('content')
<h1>Detalhes do produto: {{$p->nome}}</h1>
<ul class="list-group ">
    <li class="list-group-item list-group-item-action">
        <b>Valor:</b> R$ {{$p->valor}}
    </li>
    <li class="list-group-item list-group-item-action">
        <b>Descrição:</b> {{$p->descricao }}
    </li>
    <li class="list-group-item list-group-item-action">
        <b>Quantidade em estoque:</b> {{$p->quantidade}}
    </li>
</ul>    
@endsection
