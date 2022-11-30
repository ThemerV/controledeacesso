@extends('layouts.app')

@section('section')
<main>
    <div class="return-div">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <nav>
                <h5 class="h5-register">Preencha os dados abaixo para iniciar o cadastro de um aluno:</h5>
                <div class="register-student-div">
                    <div>
                        <label for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo"><br>
                    </div>
                    <div>
                        <label for="ra">RA do aluno</label>
                        <input type="text" class="form-control" id="ra" name="ra" placeholder="RA do aluno"><br>
                    </div>
                    <div>
                        <label for="tag">Número de série da Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag" placeholder="Número de série da Tag">
                    </div>
                    <div class="register-student-button">
                        <button type="submit" class="btn btn-block font-button" role="button"><strong>Próximo</strong></a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection