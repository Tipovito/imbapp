@extends('template')

@section('conteudo')
    {{-- Carrossel --}}

    <div class="container mt-4">
        <div class="shadow-lg bg-body rounded">
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
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="priv">ablueablueablue</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/gatinho.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/lamp.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>O privilégio de ter um gatinho verde.</p>
                        </div>
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
    </div>
    <div>
        <div class="apresentacao bg-verde col-md-12">
            <h3 class="title-apresentacao">Preparamos tudo para seu e nosso futuro!</h3>
            <h4 class="sub-apresentacao">Da nossa casa para o mundo</h4>
            <p class="p-sus">Temos como objetivo construir sonhos dentro de um plano sustentável
                para transformar o mundo, investimos a cada dia em meios de inovar nossos processos,
                E é atráves da dificuldade que ganhamos motivação para implementar nossos projetos em pessoas
                e também no meio ambiente, de maneira que deixemos um legado sustentável
                para nossas futuras gerações.
            </p>
            <h3 class="title-apresentacao-2">Trabalhando sempre em armônia com a natureza</h3>
            <h4 class="sub-apresentacao-2"></h4>

        </div>
    </div>

    <h4 class="c-vendas mt-5">Casas à venda</h4>
    <section class="row cards-1">
        <div class="col-md-4">
            <div class="card">
                <img src="/img/casa-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/img/casa-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/img/casa-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
    </section>
@endsection
