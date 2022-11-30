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
                <h5 class="h5-register02">Selecione os cursos a serem ministrados pelo professor:</h5>
                <div class="register02-div">
                    <div class="row choose-subject">
                        <div class="col-6">
                            <div class="form-group form-check form-register">
                                <input type="checkbox" class="form-check-input" id="ads">
                                <label class="form-check-label" for="ads">Análise e Desenvolvimento de
                                    Sistemas</label>
                            </div>
                            <div class="form-group form-check form-register">
                                <input type="checkbox" class="form-check-input" id="ge">
                                <label class="form-check-label" for="ge">Gestão Empresarial</label>
                            </div>
                            <div class="form-group form-check form-register-gti">
                                <input type="checkbox" class="form-check-input" id="gti">
                                <label class="form-check-label" for="gti">Gestão da Tecnologia da Informação</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-check form-register">
                                <input type="checkbox" class="form-check-input" id="pq">
                                <label class="form-check-label" for="pq">Processos Químicos</label>
                            </div>
                            <div class="form-group form-check form-register">
                                <input type="checkbox" class="form-check-input" id="geee">
                                <label class="form-check-label" for="geee">Gestão de Energia e Eficiência
                                    Energética</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="cadastroProf03.html" class="btn btn-block font-button"
                            role="button"><strong>Próximo</strong></a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
</main>
@endsection