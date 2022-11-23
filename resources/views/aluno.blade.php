@extends('layouts.app')

@section('section')
<main>
    <div class="div-voltar02">
        <i  class="fa-solid fa-arrow-rotate-left" id="i-voltar"></i>
        <a href="index.html" class="voltar">Voltar</a>
    </div>
    <div class="container">
        <div id="p-student">
            <h5>Para verificar a lista de alunos cadastrados por curso selecione as opções abaixo:</h5>
        </div>
        <div class="row" id="row-student">
            <div class="form-group col-md-3">
                <select class="form-control">
                    <option selected>CURSO</option>
                    <option>Análise e Desenvolvimento de Sistemas</option>
                    <option>Gestão Empresarial</option>
                    <option>Gestão da Tecnologia da Informação</option>
                    <option>Processos Químicos</option>
                    <option>Gestão de Energia e Eficiência Energética</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <select class="form-control">
                    <option selected>SEMESTRE</option>
                    <option>1º Semestre</option>
                    <option>2º Semestre</option>
                    <option>3º Semestre</option>
                    <option>4º Semestre</option>
                    <option>5º Semestre</option>
                    <option>6º Semestre</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <select class="form-control">
                    <!-- As  opções de disciplina apareceram de acordo com o curso e o semestre escolhido -->
                    <option selected>DISCIPLINA</option> 
                </select>
            </div>
            <div class="form-group col-md-2">
                <a href="visualizacaoAluno.html" class="btn" role="button">Verificar</a>
            </div>
        </div>
        <hr>
        <div class="row" id="row-student2">
            <div class="form-group col-md-4">
                <h5>Realização de um novo cadastro de aluno:</h5>
            </div>
            <div class="form-group col-md-2" id="button-row-student2">
                <a href="{{route('student.create')}}" class="btn" role="button">Cadastrar</a>
            </div>
        </div>
    </div>
</main>
@endsection