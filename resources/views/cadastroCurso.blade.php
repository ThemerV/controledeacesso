@extends('layouts.app')

@section('section')
<main>
    <div class="return-div">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <nav>
                <h5 class="h5-register">Preencha os dados abaixo para cadastrar um novo curso:
                </h5>
                <div class="register-div">
                    <div>
                        <label for="name">Curso</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Curso"><br>
                    </div>
                    <div>
                        <label for="initials">Sigla</label>
                        <input type="text" class="form-control" id="initials" name="initials" placeholder="Sigla"><br>
                    </div>
                    <div>
                        <label for="period">Periodo</label>
                        <input type="text" class="form-control" id="period" name="period" placeholder="Periodo"><br>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block font-button"
                            role="button"><strong>Cadastrar</strong></a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection