@extends('layouts.app')

@section('section')

<main>
    <div class="return-div02">
        <i  class="fa-solid fa-arrow-rotate-left icon-return" ></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">NOME COMPLETO</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">HISTORICO DE PRESENÇA</th>
                    </tr>
                </thead>
            @if ($students)
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th scope="col">{{$student->name}}</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Sem registro</p>
            @endif
        </div> 
    </div>
</main>

@endsection