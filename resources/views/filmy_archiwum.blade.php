@extends('layouts.base-layout')

@section('pageTitle', 'Filmy - archiwum')
@section('description','Od zera do WebDeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!')
@section('keywords', 'szkolenia, PHP, JavaScript, CSS, HTML5, kursy programistyczne, szkolenia programistyczne, jak zostać programistą, Kraków, boot camp, Krzysztof Stanio, symfony, angular, laravel, webdeveloper')

@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 thumb-box4">
                    <h2 class="center indent">filmy - archiwum</h2>
                    <div class="thumb-pad7 clearfix">
                        <div class="extra-wrap">
                            @foreach($movies as $movie)
                                <div class="badge">
                                    {!! polDay($movie) !!}
                                    <span>{!! polMonth($movie) !!}</span>
                                    <div class="badge_small">
                                        <strong>{!! commentsNumber($movie) !!}<img src="/img/page2_icon1.png"
                                                                                   alt=""></strong>
                                    </div>
                                </div>
                                <a href="/film/{{$movie['slug']}}" class="lnk">{{$movie['title']}}</a>
                                <p class="post">Wysłane {{$movie['created_at']}}, w
                                    kategorii {!! categoryName($movie, $moviesCategories) !!}
                                    <br></p>
                                <div class="thumbnail">
                                    <div class="caption">
                                        <p> {!!$movie['body']!!}.</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 thumb-box4">
                    <h2 class="center indent">Kategorie filmów</h2>
                    <ul class="list1-1 indent">
                        @foreach($moviesCategories as $movieCategory)
                            <li><a href="/filmy/kategoria/{{$movieCategory['name']}}">{{$movieCategory['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h2 class="center indent">Najnowsze wpisy</h2>
                    <ul class="list1-1 indent">
                        @foreach($fiveLastMovies as $movie)
                            <li><a href="/film/{{$movie['slug']}}">{{$movie['title']}}</a></li>
                        @endforeach
                    </ul>
                    <h2 class="center indent">Archiwum filmów</h2>
                    <ul class="list1-1">
                        @foreach($moviesByDates as $movie)
                            <li>
                                <a href="/filmy/archiwum/{{$movie->year}}/{{$movie->month}}">{!! fullMonth($movie) !!} {{$movie->year}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection