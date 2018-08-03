@extends('layouts.principal')

@section('content')
<h1>Novo produto</h1>
<form action="/action_page.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome">
    </div>
    <div class="form-group">
      <label for="descricao">Descricao:</label>
      <input type="text" class="form-control" id="descricao">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="text" class="form-control" id="valor">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input type="number" class="form-control" id="quantidade">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection