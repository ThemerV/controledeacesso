@extends('layouts.app')

@section('section')

<main>
    <div class="return-div02">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <h5 class="h5-student-list">
        Para verificar a lista de alunos cadastrados clique em uma opção de curso:
    </h5>
    <div class="container">
        <div class="div-choose-button">
            @foreach ($courses as $course)
            <a href="listaSemestres.html" class="btn btn-block font-button" role="button"><strong>{{ $course->name }}</strong></a>
            @endforeach
        </div>
    </div>
</main>

@endsection