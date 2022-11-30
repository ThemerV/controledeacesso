@extends('layouts.app')

@section('section')

<main>
    <div class="return-div02">
        <i class="fa-solid fa-arrow-rotate-left icon-return"></i>
        <a href="index.html" class="return-button">Página Inicial</a>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">E-MAIL</th>
                    </tr>
                </thead>
                @if ($teachers)
                @foreach ($teachers as $teacher)
                <tbody>
                    <tr>
                        <th scope="col">{{ $teacher->name }}</th>
                        <th scope="col">{{ $teacher->email }}</th>
                    </tr>
                </tbody>
                @endforeach
                @else
                <p>Sem registro</p>
                @endif
            </table>          
        </div>
    </div>
</main>

@endsection