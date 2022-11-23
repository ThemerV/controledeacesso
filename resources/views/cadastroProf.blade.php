@extends('layouts.app')

@section('section')
<main>
    <div class="div-voltar">
        <i  class="fa-solid fa-arrow-rotate-left" id="i-voltar"></i>
        <a href="professor.html" class="voltar">Voltar</a>
    </div>
    <div class="container">
        <form>
            <nav>
                <p class="p-cadastro">Preencha os dados abaixo para realizar o cadastro de um professor:</p>
                <div class="row">
                    <div class="col-6" id="containerCadastroProf">
                        <div>
                            <label for="nomeProfessor">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeProfessor" placeholder="Nome Completo"><br>
                        </div>
                        <div>
                            <label for="emailProfessor">E-mail</label>
                            <input type="email" class="form-control" id="emailProfessor" placeholder="E-mail"><br>
                        </div>
                        <div>
                            <label for="senhaProfessor">Senha</label>
                            <input type="text" class="form-control" id="senhaProfessor" placeholder="Senha"><br>
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
                        <p>Escolha as disciplinas ministradas pelo professor:</p>
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