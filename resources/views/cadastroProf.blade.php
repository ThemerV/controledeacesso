@extends('layouts.app')

@section('section')
<main>
    <div class="return-div">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf
            <nav>
                <h5 class="h5-register">Preencha os dados abaixo para iniciar o cadastro de um professor:
                </h5>
                <div class="register-div">
                    <div>
                        <label for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo"><br>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"><br>
                    </div>
                    <div>
                        <label for="password">Senha</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Senha"><br>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block font-button"
                            role="button"><strong>Próximo</strong></a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection