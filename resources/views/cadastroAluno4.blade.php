@extends('layouts.app')

@section('section')
<main>
    <div class="return-div">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <form>
            <nav>
                <h5 class="h5-register">Selecione as disciplinas:</h5>
                <div class="register03-div">
                    <div class="row choose-subject">
                        <div class="col-6">
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="disciplina01">
                                <label class="form-check-label" for="disciplina01">Disciplina01</label>
                            </div>
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="disciplina02">
                                <label class="form-check-label" for="disciplina02">Disciplina02</label>
                            </div>
                            <div class="form-group form-check form-register03S">
                                <input type="checkbox" class="form-check-input" id="disciplina03">
                                <label class="form-check-label" for="disciplina03">Disciplina03</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="disciplina04">
                                <label class="form-check-label" for="disciplina04">Disciplina04</label>
                            </div>
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="disciplina05">
                                <label class="form-check-label" for="disciplina05">Disciplina05</label>
                            </div>
                            <div class="form-group form-check form-register03S">
                                <input type="checkbox" class="form-check-input" id="disciplina06">
                                <label class="form-check-label" for="disciplina06">Disciplina06</label>
                            </div>
                        </div>
                    </div>
                    <div >
                        <a href="#" class="btn btn-block font-button"
                            role="button"><strong>Cadastrar</strong></a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection