@extends('layouts.app')

@section('section')

<main>
    <div class="div-voltar02">
        <i  class="fa-solid fa-arrow-rotate-left" id="i-voltar"></i>
        <a href="aluno.html" class="voltar">Voltar</a>
    </div>
    <div class="container">
        <div id="p-student">
            <h5>Para verificar a lista de alunos cadastrados por curso selecione as opções abaixo:</h5>
        </div>
        <div class="row" id="row-view">
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
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">NOME COMPLETO</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">HISTORICO DE PRESENÇA</th>
                    </tr>
                    </thead>
                    <!-- Tabela será completa com os dados dos alunos de acordo com as opções escolhidas acima -->
            </table>
            <p>Sem registro</p>
        </div> 
    </div>
</main>
@endsection