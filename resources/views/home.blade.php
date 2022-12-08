@extends('template')

@section('conteudo')
{{-- Barra de pesquisa/imóveis --}}
<div class="container-pesq bg-verde d-flex">
    <h1 class="filtro-busca">Encontre seu imóvel:</h1>
    <div class="dropdown">
        <h2 class="filtro-tipo">Qual tipo?</h2>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Tipo
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </div>
    <div>
        <form class="d-flex">
            <h2 class="filtro-onde">Onde?</h2>
            <input class="form-control" type="text"placeholder="Digite uma Cidade, Bairro ou rua" aria-label="text">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</div>
@endsection
