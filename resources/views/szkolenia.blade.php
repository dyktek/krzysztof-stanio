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
                    Prowadzę praktyczne szkolenia dla osób, które chcą nauczyć się programowania. Naukę zaczynam od
                    podstaw, dlatego kierowane jest do wszystkich zainteresowanych.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Od czerwca 2017 r. zajęcia prowadzę w trybie <b>indywidualnym</b>, dzięki czemu każdy uczestnik może liczyć
                                na dopasowane porady i ćwiczenia. Szkolenia dostosowane są do potrzeb rynku pracy, na którym
                                wciąż brakuje programistów. Sam od lat zajmuję się programowaniem, dlatego najlepiej
                                znam wymagania pracodawców i dlatego mogę odpowiednio ukierunkować uczestników mojego szkolenia.
                            </li>
                            <li>Aby uczestniczyć w zajęciach należy posiadać własny laptop. Podczas startu szkolenia
                                pomogę Ci w konfiguracji środowiska programistycznego.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Zajęcia prowadzone są w formie <b>warsztatów i ćwiczeń</b>. Szkolenie prowadzone jest przez Krzysztofa
                                Stanio, znanego z popularnego kanału
                                <a href="https://www.youtube.com/channel/UCrSxel4Mheo6XA8IPMA-3ZQ"><u>Od zera do WebDeva</u></a>.
                            </li>
                            <li>Stawiam przede wszystkim na praktykę, dlatego każdy z uczestników kursu będzie samodzielnie
                                pisać podstawowe skrypty, aby stopniowo rozwijać swoje umiejętności i tworzyć coraz bardziej skomplikowane programy.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 thumb-box5">
                <h2 class="center indent">Najbliższe <br> szkolenie</h2>
                <p class="center">
                    Szkolenie prowadzone jest w trybie indywidualnym - oznacza to, że to właśnie Ty decydujesz, kiedy się rozpocznie
                    i od Twojego tempa nauki zależy, kiedy się skończy.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Możesz teraz łatwo dopasować godziny nauki i spotkań do swoich obowiązków zawodowych czy rodzinnych - możemy umawiać się na Skype, lub osobiście w Krakowie, Rzeszowie, Łodzi lub Gliwicach.</li>
                            <li>Ostateczny program zajęć zależy od Ciebie - jeśli jesteś początkujący, możemy poświęcić więcej czasu na rzetelne poznanie podstaw.</li>
                            <li>Jeśli jednak potrafisz już programować i nie chcesz realizować całego programu, np. interesuje Cię jedynie Laravel czy JavaScript, to nie ma problemu - dopasuję program do Twoich potrzeb.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">

                        <li>Przybliżona liczba godzin:<b> 157 h</b></li>
                        <li style="color:green;">Całkowity koszt szkolenia:<b> 4000 zł</b></li>
                        <li><b>Możliwość płatności w 4 ratach po 1000 zł</b></li>
                        <li>Jeśli masz pytania związane z ofertą, zadzwoń:<b> 535 001 087</b></li>
                        <a href=#zgloszenie class="btn-default btn1">Zgłoś się na szkolenie</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumb-box6 center">
            <div class="container">
                <h2 class="center" style="color:green;">Przykładowy plan szkolenia na poziomie podstawowym</h2>
                <br><br>
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

        <div class="thumb-box9" id="zgloszenie">
            <div class="container">
                <div class="row">
                    @if (Session::has('message'))
                        <h2 class="wow fadeInUp">{{ Session::get('message') }}</h2>
                    @else
                        <h2 class="wow fadeInUp">Formularz zgłoszeniowy</h2>
                        <p class="wow fadeInUp">Jesteś zainteresowany udziałem w szkoleniu?</p>
                        <p>Wypełnij poniższy formularz - na adres e-mail prześlę Ci szczegółowe informacje.</p>
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

                            {!! Form::textarea('descr', '', array('placeholder' => 'Tutaj napisz kilka słów o sobie - na jakim jesteś poziomie, czego oczekujesz od szkolenia', 'rows' => 5))  !!}
                            <div style="color:red">
                                @if($errors->has('descr'))
                                    {{ $errors->first('descr')}}
                                    <br><br>
                                @endif
                            </div>
                            {{--{{ Form::checkbox('regulamin', 1, null, ['id'=>'regulamin', 'class' => 'training']) }}--}}
                            {{--<label for="regulamin">Oświadczam, że zapoznałem/łam się z </label><b> <a href="/regulamin" target="_blank">regulaminem</a></b>--}}

                            <div style="color:red">
                                @if($errors->has('regulamin'))
                                    {{ $errors->first('regulamin')}}
                                @endif
                            </div>
                            <br><br>
                            {!! Form::submit('Wyślij!', array()) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection