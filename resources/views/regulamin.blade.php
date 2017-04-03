@extends('layouts.base-layout')

@section('pageTitle', 'Regulamin')
@section('description','Od zera do WebDeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

@section('content')

    <div class="global indent">
        <div class="container">
{!! $regulamin['body'] !!}
        </div>
    </div>


@endsection