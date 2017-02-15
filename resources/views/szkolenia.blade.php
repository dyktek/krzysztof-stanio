@extends('layouts.base-layout')

@section('pageTitle', 'Kurs')
@section('description','App. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

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
                            <li>Dla uczestników szkolnia spoza Krakowa mamy przygotowane wygodne pokoje z możliwoscią
                                noclegu :)
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
                            <li> Start najbliższej edycji:<b> marzec 2017</b></li>
                            <li>Czas trwania:<b> 6 tygodni (edycja weekendowo-wieczorowa)</b></li>
                            <li>Liczba godzin:<b> 157 </b></li>
                            <li>Opłata za rezerwację:<b> 100 zł</b></li>
                            <li>Całkowity koszt szkolenia:<b> 3000 zł</b></li>
                            <li>Jeśli masz pytania związane z ofertą, zadzwoń:<b> 535 001 087</b></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="list1-1">
                            <li>Harmonogram weekendowego zjazdu:
                                <b><br> piątek 18:00-22:00 <br> sobota 10:00-19:00 <br> niedziela 10:00-19:00 </b></li>
                        </ul>
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
    </div>
    </div>
    </div>
@endsection