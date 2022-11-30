@extends('layouts.app')

@section('section')

<main>
    <div class="container">
        <h4 id="mensagem1">Bem-vindo, Anderson Luiz Barbosa</h4>
        <div class="row">
            <div class="col-md-6">
                <a href="engenhariadesoftware.html" class="btn btn-lg btn-block" role="button" id="disciplina1">Engenharia de Software I</a>

            </div>
            <div class="col-md-6">
                <a href="cadastroAluno.html" class="btn btn-lg btn-block" role="button" id="disciplina1">Banco de Dados</a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="cadastroAluno.html" class="btn btn-lg btn-block" role="button" id="disciplina2" >Gestão de Projetos</a>

            </div>
            <div class="col-md-6">
                <a href="cadastroAluno.html" class="btn btn-lg btn-block" role="button" id="disciplina2">Engenharia de Software III</a>
                    
            </div>
        </div>
    </div>
</main>

@endsection