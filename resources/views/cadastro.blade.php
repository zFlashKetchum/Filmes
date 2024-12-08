@extends('layout')
@section('content')
<div class="container mt-5">
    <h2>Cadastro de Filme</h2>
    <form method="post" action="{{route('cadastrarfilme')}}">
        @csrf
        <div class="form-group">
            <label for="nomeFilme">Nome do Filme:</label>
            <input type="text" class="form-control" id="nomeFilme" name="nomeFilme" placeholder="Digite o nome do filme" required>
        </div>
        <div class="form-group">
            <label for="duracaoFilme">Duração do Filme:</label>
            <input type="text" class="form-control" id="duracaoFilme" name="duracaoFilme" placeholder="Digite a duração do filme (ex: 120 minutos)" required>
        </div>
        <div class="form-group">
            <label for="roteiristaFilme">Roteirista:</label>
            <input type="text" class="form-control" id="roteiristaFilme" name="roteiristaFilme" placeholder="Nome do roteirista" required>
        </div>
        <div class="form-group">
            <label for="classidadeFilme">Classificação Etária:</label>
            <input type="text" class="form-control" id="classidadeFilme" name="classidadeFilme" placeholder="Classificação etária (ex: 16 anos)" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Filme</button>
    </form>
</div>
@endsection
