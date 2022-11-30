@extends('layouts.app')

@section('section')
<main>
    <div class="return-div">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <h5 class="h5-register-student02">Selecione o curso:</h5>
        <div class="div-choose-button">
            <a href="cadastroAluno03.html" class="btn btn-block font-button" role="button"><strong>Análise e Desenvolvimento de
                    Sistemas</strong></a>
            <a href="cadastroAluno03.html" class="btn btn-block font-button" role="button"><strong>Gestão
                    Empresarial</strong></a>
            <a href="cadastroAluno03.html" class="btn btn-block font-button" role="button"><strong>Gestão
                    de Energia e Eficiência Energética</strong></a>
            <a href="cadastroAluno03.html" class="btn btn-block font-button" role="button"><strong>Gestão
                    da Tecnologia da Informação</strong></a>
            <a href="cadastroAluno03.html" class="btn btn-block font-button" role="button"><strong>Processos Químicos</strong></a>
        </div>
    </div>
</main>
@endsection