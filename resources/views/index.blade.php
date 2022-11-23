@extends('layouts.app')

@section('section')
<main>
    <div class="container">
        <div class="row" id="row-index">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <i class="fa-solid fa-user-graduate"></i>
                  <h5 class="card-title">Aluno</h5>
                  <p class="card-text">Visualizar alunos cadastrados. Registrar novo cadastro de um aluno. Editar ou excluir cadastro já existente.</p>
                  <a href="{{route('student.index')}}" class="btn" role="button">Acessar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <i class="fa-solid fa-person-chalkboard"></i>
                  <h5 class="card-title">Professor</h5>
                  <p class="card-text">Visualizar professores cadastrados. Registrar novo cadastro. Editar ou excluir cadastro já existente.</p>
                  <a href="#" class="btn" role="button">Acessar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <i class="fa-sharp fa-solid fa-door-open"></i>
                    <h5 class="card-title">Salas e Laboratórios</h5>
                    <p class="card-text">Visualizar salas e laboratórios reservados. Reservar, editar ou excluir reserva de salas e laboratórios.</p>
                    <a href="salasLabs.html" class="btn" role="button">Acessar</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection