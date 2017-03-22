@extends('layouts.base-layout')

@section('pageTitle', 'Dostęp')
@section('description','Od zera do WebDeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')


@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="panel panel-default" style="margin-top: 90px; margin-bottom: 200px;">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dostep') }}">
                        <label for="email" class="col-md-4 control-label">Podaj adres e-mail</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4"><br>
                                <button type="submit" class="btn-default btn1">
                                    Wejdź
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
