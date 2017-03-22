@extends('layouts.base-layout')

@section('pageTitle', 'Nie odnaleziono strony')
@section('description','Od zera do WebDeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

@section('content')

<div class="global indent">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-lg-offset-2 errorBox">
                <figure><img src="img/error.png" alt=""></figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 errorBox1">
                <h2>Przepraszamy!<br>Strona nie została odnaleziona</h2>
                <p> Strona, której szukasz mogła zostać usunięta, zmieniła nazwę lub jest tymczasowo niedostępna.</p>
            </div>
        </div>
    </div>
</div>
@endsection