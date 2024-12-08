@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Alterar Registros do Filme</h2>
    
    <form method="POST" action="{{ route('alterarfilme', $registrosFilme->idFilme) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeFilme">Nome do Filme:</label>
            <input type="text" class="form-control" id="nomeFilme" name="nomeFilme" placeholder="Digite o nome do filme" required value="{{ $registrosFilme->nomeFilme }}">
        </div>
        <div class="form-group">
            <label for="duracaoFilme">Duração do Filme:</label>
            <input type="text" class="form-control" id="duracaoFilme" name="duracaoFilme" placeholder="Digite a duração do filme (ex: 120 minutos)" required value="{{ $registrosFilme->duracaoFilme }}">
        </div>
        <div class="form-group">
            <label for="roteiristaFilme">Roteirista:</label>
            <input type="text" class="form-control" id="roteiristaFilme" name="roteiristaFilme" placeholder="Nome do roteirista" required value="{{ $registrosFilme->roteiristaFilme }}">
        </div>
        <div class="form-group">
            <label for="classidadeFilme">Classificação Etária:</label>
            <input type="text" class="form-control" id="classidadeFilme" name="classidadeFilme" placeholder="Classificação etária (ex: 16 anos)" required value="{{ $registrosFilme->classidadeFilme }}">
        </div>
        <button type="submit" class="btn btn-primary">Alterar Filme</button>
    </form>
</div>

@endsection
