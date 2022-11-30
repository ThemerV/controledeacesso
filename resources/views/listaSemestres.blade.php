@extends('layouts.app')

@section('section')

<main>
    <div class="return-div02">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <h5 class="h5-student-list">
        Para verificar a lista de alunos cadastrados clique em uma opção de semestre:
    </h5>
    <div class="container">
        <div class="div-choose-button">
            <a href="listaDisciplinas.html" class="btn btn-block font-button" role="button"><strong>1º Semestre</strong></a>
            <a href="listaDisciplinas.html" class="btn btn-block font-button" role="button"><strong>2º Semestre</strong></a>
            <a href="listaDisciplinas.html" class="btn btn-block font-button" role="button"><strong>3º Semestre</strong></a>
            <a href="listaDisciplinas.html" class="btn btn-block font-button" role="button"><strong>4º Semestre</strong></a>
            <a href="listaDisciplinas.html" class="btn btn-block font-button" role="button"><strong>5º Semestre</strong></a>
            <a href="listaDisciplinas.html" class="btn btn-block font-button" role="button"><strong>6º Semestre</strong></a>
        </div>
    </div>
</main>

@endsection