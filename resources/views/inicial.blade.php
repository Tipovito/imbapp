@extends('template')

@section('conteudo')
    {{-- Barra de pesquisa/imóveis --}}
    <div class="container-pesq bg-verde d-flex">
        <h2>Encontre seu imóvel:</h2>
        <div class="dropdown">
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
                <input class="form-control" type="text"placeholder="Digite uma Cidade, Bairro ou rua" aria-label="text">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    {{-- Carrossel --}}

    <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/gatinho.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/gatinho.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/gatinho.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    {{-- <section class="row cards-1">
    <div class="col-md-3">
        <div class="card">
            <img src="/img/gatinho.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img src="/img/gatinho.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card ">
            <img src="/img/gatinho.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</section> --}}

    <div class="">
        <div class="apresentacao bg-verde">
            <h3>Preparamos tudo para seu e nosso futuro!</h3>
            <h4>Da nossa casa para o mundo</h4>
            <p class="p-sus">Temos como objetivo construir sonhos dentro de um plano sustentável
                para transformar o mundo, investimos a cada dia em meios de inovar nossos processos,
                E é atráves da dificuldade que ganhamos motivação para implementar nossos projetos em pessoas
                e também no meio ambiente, de maneira que deixemos um legado sustentável
                para nossas futuras gerações.
            </p>
        </div>
    </div>
@endsection
