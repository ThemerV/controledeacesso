@extends('layouts.app')

@section('section')

<main>
    <div class="div-voltar02">
        <i class="fa-solid fa-arrow-rotate-left" id="i-voltar"></i>
        <a href="index.html" class="voltar">Voltar</a>
    </div>
    <div class="container">
        <div id="p-teacher">
            <h5>Lista de professores cadastrados</h5>
        </div>
        <!-- <div> -->
            
                <!-- <nav class="nav">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search"
                    placeholder="Pesquisar por curso, semestre ou disciplina" aria-label="Pesquisar" id="search">
                    <button class="btn " type="submit" id="searchButton">Pesquisar
                    </button>
                    </form>
                    
                    <button class="btn" type="submit" id="cadastrarProf">Cadastrar professor</button>
                </nav> -->
                
        <!-- </div> -->


        

        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">E-MAIL</th>
                    </tr>
                </thead>
                <!-- Tabela será completa com os dados dos professores de acordo com o banco de dados-->
            </table>
            <p>Sem registro</p>
        </div>
    </div>
</main>

@endsection