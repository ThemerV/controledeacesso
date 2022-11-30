@extends('layouts.app')

@section('section')
<main>
<main>
    <div class="return-div">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <form>
            <nav>
                <h5 class="h5-register">Selecione os semestres para filtrar as disciplinas:</h5>
                <div class="register03-div">
                    <div class="row choose-subject">
                        <div class="col-6">
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="semestre01">
                                <label class="form-check-label" for="semestre01">1º Semestre</label>
                            </div>
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="semestre02">
                                <label class="form-check-label" for="semestre02">2º Semestre</label>
                            </div>
                            <div class="form-group form-check form-register03S">
                                <input type="checkbox" class="form-check-input" id="semestre03">
                                <label class="form-check-label" for="semestre03">3º Semestre</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="semestre04">
                                <label class="form-check-label" for="semestre04">4º Semestre</label>
                            </div>
                            <div class="form-group form-check form-register03">
                                <input type="checkbox" class="form-check-input" id="semestre05">
                                <label class="form-check-label" for="semestre05">5º Semestre</label>
                            </div>
                            <div class="form-group form-check form-register03S">
                                <input type="checkbox" class="form-check-input" id="semestre06">
                                <label class="form-check-label" for="semestre06">6º Semestre</label>
                            </div>
                        </div>
                    </div>
                    <div >
                        <a href="cadastroProf04.html" class="btn btn-block font-button"
                            role="button"><strong>Próximo</strong></a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection