@extends('layouts.app')

@section('section')

<main>
    <div class="return-div02">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <div class="row row-student">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body student-card">
                        <h5 class="card-title">Salas e Laboratórios Reservados</h5><br>
                        <a href="#" class="btn" role="button">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body student-card">
                        <h5 class="card-title">Reservar Salas e Laboratórios</h5><br>
                        <a href="#" class="btn" role="button">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection