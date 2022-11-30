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
                        <h5 class="card-title">Lista de Professores</h5><br>
                        <a href="listaProfessor.html" class="btn" role="button">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body student-card">
                        <h5 class="card-title">Novo Professor</h5><br>
                        <a href="cadastroProf.html" class="btn" role="button">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection