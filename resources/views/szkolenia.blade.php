@extends('layouts.base-layout')

@section('pageTitle', 'Kursy programowania, Szkolenia programistyczne PHP, Krzysztof Stanio, Boot Camp 2017 - zostań z nami webdeveloperem')
@section('description','Kursy programowania Od zera do Webdeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'Kursy programowania, szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

@section('livechat')
    @include('livechat')
@endsection
@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 thumb-box5">
                <h2 class="center indent">Kursy<br>programowania</h2>
                <p class="center">
                    Prowadzimy praktyczne szkolenia, dla osób które chcą nauczyć się programowania. Naukę zaczynamy od
                    podstaw, dlatego każdy, kto chce zdobyć nową wiedzę może zapisać się na nasze szkolenie.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Zajęcia prowadzone są w kilkuosobowej grupie, dzięki czemu, każdy uczestnik może liczyć
                                na indywidualne porady i ćwiczenia. Szkolenia dopasowane są do potrzeb rynku, na którym
                                wciąż brakuje programistów. Sami od lat zajmujemy się programowaniem, dlatego najlepiej
                                znamy wymagania pracodawców i możemy odpowiednio ukierunkować uczestników szkolenia.
                            </li>
                            <li><b style="color:green;">Dla uczestników szkolnia spoza Krakowa mamy przygotowane wygodne
                                    pokoje z możliwoscią
                                    noclegu :)</b>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Zajęcia prowadzone są w formie warsztatów przez doświadczonych trenerów i programistów -
                                m.in. Krzysztofa Stanio, który prowadzi kanał na Youtube "App". Stawiamy
                                na praktykę, dlatego każdy z uczestników kursu, będzie samodzielnie pisać podstawowe
                                skrypty, aby stopniowo rozwijać swoje umiejętności i tworzyć coraz bardziej
                                skomplikowane programy.
                            </li>
                            <li>Aby uczestniczyć w zajęciach należy posiadać własny laptop. Podczas startu szkolenia
                                pomagamy w konfiguracji środowiska programistycznego.
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 thumb-box5">
                <h2 class="center indent">Najbliższa <br> edycja</h2>
                <p class="center">
                    Aby zarezerwować miejsce na szkoleniu wpłacisz opłatę rezerwacyjną w kwocie 100 zł, resztę zapłacisz
                    przed szkoleniem.
                    Po rejestracji na szkolenie będą ustalał indywidualne spotkania z każdym z Was po to aby przygotować
                    Wasze środowisko pracy</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li> Start najbliższej edycji: <b style="color:green;">25 maja 2017</b></li>
                            <li>Czas trwania:<b> 6 tygodni (edycja weekendowo-wieczorowa)</b></li>
                            <li>Liczba godzin:<b> 157 </b></li>
                            <li>Opłata za rezerwację:<b> 100 zł</b></li>
                            <li style="color:green;">Całkowity koszt szkolenia:<b> 4000 zł</b></li>
                            <li><b>Możliwość płatności w 4 ratach po 1000zł</b></li>
                            <li>Jeśli masz pytania związane z ofertą, zadzwoń:<b> 535 001 087</b></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Harmonogram weekendowego zjazdu:
                                <b><br> piątek 18:00-22:00 <br> sobota 10:00-19:00 <br> niedziela 10:00-19:00 </b></li>
                        </ul>
                        <a href=#zgloszenie class="btn-default btn1">Zgłoś się na szkolenie</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumb-box6 center">
            <div class="container">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>1. Moduł:<br> HTML5 + CSS3, Bootstrap - warstwa prezentacyjna</h3>
                    <h4>Podczas tego modułu poznasz:</h4>
                    <p>
                    <ul class="list1-1">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Prekompilator CSS SASS</li>
                        <li>Bootstrap</li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>2. Moduł:<br> Podstawy programowania w języku PHP</h3>
                    <h4>Podczas tego modułu poznasz:</h4>
                    <p>
                    <ul class="list1-1">
                        <li>PHP strukturalne</li>
                        <li>Serwer Apache 2</li>
                        <li>Baza danych MySQL</li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>3. Moduł:<br> Podstawy budowy nowoczesnych witryn</h3>
                    <h4>Połączymy poznane technologie aby zbudować dynamiczną stronę WWW</h4>
                    <p>
                    <ul class="list1-1">
                        <li>Dodawanie/Edycja/Usuwanie/Pobieranie danych z bazy MySQL</li>
                        <li>PDO</li>
                        <li>Co to jest CMS (content management system)</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="thumb-box8 center">
            <div class="container">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>4. Moduł:<br> Programowanie obiektowe</h3>
                    <h4>Podczas tego modułu nauczysz się:</h4>
                    <p>
                    <ul class="list1-1">
                        <li>Czym jest programowanie obiektowe</li>
                        <li>Popularne wzorce projektowe</li>
                        <li>Jak działa przestrzeń nazw (Namespace)</li>
                        <li>Manager zależności Composer</li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>5. Moduł:<br> Podstawy Javascript, jQuery</h3>
                    <h4>Podczas tego modułu poznasz: </h4>
                    <p>
                    <ul class="list1-1">
                        <li>Czysty JavaScript</li>
                        <li>Bibliotekę jQuery</li>
                        <li>Na czym polega asynchroniczność</li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>6. Moduł:<br> Framework Laravel</h3>
                    <h4>Podczas tego modułu nauczysz się jak zbudować kompletną stronę w Laravelu<br>
                        zawierającą takie elementy jak:</h4>
                    <p>
                    <ul class="list1-1">
                        <li>Logowanie użytkowników</li>
                        <li>Zarządzanie zawartością strony (CMS content management system)</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="global2">
            <!--content-->
            <div class="thumb-box2 center">
                <div class="container">
                    <br>
                    <h2 class="center">Zobacz jak wygląda nasze biuro</h2>
                    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                        <iframe title="Kursy programowania"
                                src="https://www.youtube.com/embed/LU1zceBNT0g?wmode=opaque&amp;theme=dark"
                                frameborder="0"
                                allowfullscreen="" name="fitvid0"></iframe>
                    </div>
                </div>
                <br>
            </div>
        </div>


        <div class="thumb-box9" id="zgloszenie">
            <div class="container">
                <h2 class="wow fadeInUp">Formularz zgłoszeniowy</h2>
                <p class="wow fadeInUp">Jesteś zainteresowany udziałem w szkoleniu? Chcesz zarezerwować miejsce?</p>
            <p>Wypełnij poniższy formularz - na adres e-mail prześlemy Ci szczegółowe informacje
                na temat warunków uczestnictwa w kursie oraz opłat.</p>

                <div class="row">
                    <div class="col-lg-12 wow fadeInUp">

                        {!! Form::open(['method' => 'POST',
                         'route' => 'training.sendEmail',
                          'id' => 'training']) !!}
                        <br>

                        {!! Form::text('nazwisko', '', array('placeholder' => 'Imię i nazwisko')) !!}
                        <div style="color:red">
                            @if($errors->has('nazwisko'))
                                {{ $errors->first('nazwisko')}}
                                <br><br>
                            @endif
                        </div>

                        {!! Form::text('telefon', '', array('placeholder' => 'numer telefonu')) !!}
                        <div style="color:red">
                            @if($errors->has('telefon'))
                                {{ $errors->first('telefon')}}
                                <br><br>
                            @endif
                        </div>

                        {!! Form::email('e-mail', '', array('placeholder' => 'e-mail'))  !!}
                        <div style="color:red">
                            @if($errors->has('e-mail'))
                                {{ $errors->first('e-mail')}}
                                <br><br>
                            @endif
                        </div>

                        {{ Form::checkbox('regulamin', 1, null, ['id'=>'regulamin', 'class' => 'training']) }}

                        <label for="regulamin">Oświadczam, że zapoznałem/łam się z </label><b><a href="javascript:window.open('/regulamin','Regulamin','width=500,height=730')"> regulaminem</a></a></b>

                        <div style="color:red">
                            @if($errors->has('regulamin'))
                                {{ $errors->first('regulamin')}}
                            @endif
                        </div>
                        <br><br>

                        {!! Form::submit('Wyślij!', array()) !!}

                        {!! Form::close() !!}
                    </div>
                    <h2 class="wow fadeInUp">{{ Session::get('message') }}</h2>
                </div>
            </div>
        </div>



@endsection