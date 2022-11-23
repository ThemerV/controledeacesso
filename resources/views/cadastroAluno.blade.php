@extends('layouts.app')

@section('section')
<main>
    <div class="div-voltar">
        <i class="fa-solid fa-arrow-rotate-left" id="i-voltar"></i>
        <a href="{{route('student.index')}}" class="voltar">Voltar</a>
    </div>
    <div class="container">
        <form>
            <nav>
                <p class="p-cadastro">Preencha os dados abaixo para realizar o cadastro de um aluno:</p>
                <div class="row">
                    <div class="col-6" id="containerCadastroAluno">
                        <div>
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo"><br>
                        </div>
                        <div>
                            <label for="ra">RA do aluno</label>
                            <input type="text" class="form-control" id="ra" placeholder="RA do aluno"><br>
                        </div>
                        <div>
                            <label for="curso">Curso</label>
                            <select class="form-control" id="curso">
                                <option selected>Curso</option>
                                <option>Análise e Desenvolvimento de Sistemas</option>
                                <option>Gestão Empresarial</option>
                                <option>Gestão da Tecnologia da Informação</option>
                                <option>Processos Químicos</option>
                                <option>Gestão de Energia e Eficiência Energética</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="semestre">Semestre</label>
                            <select class="form-control">
                                <option selected>Semestre</option>
                                <option>1º Semestre</option>
                                <option>2º Semestre</option>
                                <option>3º Semestre</option>
                                <option>4º Semestre</option>
                                <option>5º Semestre</option>
                                <option>6º Semestre</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="tag">Número de série da Tag</label>
                            <input type="text" class="form-control" id="tag" placeholder="Número de série da Tag">
                        </div>
                    </div>
                    <div class="col-5" id="escolhaDiscip">
                        <div class="form-inline" id="divDisciplina">
                            <input class="form-control mr-sm-2" type="search"
                                placeholder="Pesquisar por curso, semestre ou disciplina" aria-label="Pesquisar"
                                id="search">
                            <button class="btn  my-2 my-sm-0" type="submit" id="searchButton">Pesquisar
                            </button>
                        </div>
                        <p>Escolha as disciplinas que estão sendo cursadas pelo aluno:</p>
                        <!-- AS disciplinas serão carregadas de acordo com o curso e o semestre escolhido -->
                        <div class="row">
                            <div class="col-6" id="grupoDisciplina">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="disciplina1">
                                    <label class="form-check-label" for="disciplina1">Disciplina 01</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="disciplina2">
                                    <label class="form-check-label" for="disciplina2">Disciplina 02</label>
                                </div>
                            </div>
                            <div class="col-6" id="grupoDisciplina02">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="disciplina3">
                                    <label class="form-check-label" for="disciplina3">Disciplina 03</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="disciplina4">
                                    <label class="form-check-label" for="disciplina4">Disciplina 04</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection