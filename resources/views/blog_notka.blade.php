@extends('layouts.base-layout')

@section('pageTitle'){{$posts['seo_title']}}@endsection
@section('description'){{$posts['meta_description']}}@endsection
@section('keywords'){{$posts['meta_keywords']}}@endsection

@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 thumb-box4">
                    <h2 class="center indent">blog</h2>
                    <div class="thumb-pad7 clearfix">
                        <div class="extra-wrap">
                            <div>
                                <div class="badge">

                                    {!! polDay($posts) !!}
                                    <span>{!! polMonth($posts) !!}</span>
                                    <strong>{!! commentsNumber($posts) !!}<img src="/img/page2_icon1.png"
                                                                               alt=""></strong>
                                </div>
                            </div>
                            <a href="/blog/notka/{{$posts['slug']}}" class="lnk">{{$posts['title']}}</a>
                            <p class="post">Wysłane {{$posts['created_at']}}, w
                                kategorii {!! categoryName($posts, $categories) !!}
                                <br>
                            </p>
                            <p> {!!$posts['body']!!}</p>
                        </div>
                            <h2 class="center indent">dyskusja</h2>

                            <?php if (isset($chatterPosts)) { ?>
                            @include('chatter_comments')
                            <?php } else { ?>
                            <p>Ten wpis nie został jeszcze skomentowany.</p>
                            <p>Zapraszam na <a href="/forum">forum.</a></p>
                        </div>
                        <?php } ?>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 thumb-box4">
                    <h2 class="center indent">Kategorie wpisów</h2>
                    <ul class="list1-1 indent">
                        @foreach($categories as $category)
                            <li><a href="/blog/kategoria/{{$category['slug']}}">{{$category['name']}}</a></li>
                        @endforeach
                    </ul>
                    <h2 class="center indent">Najnowsze wpisy</h2>
                    <ul class="list1-1 indent">
                        @foreach($fiveLastPosts as $post)
                            <li><a href="/blog/notka/{{$post['slug']}}">{{$post['title']}}</a></li>
                        @endforeach
                    </ul>
                    <h2 class="center indent">Archiwum wpisów</h2>
                    <ul class="list1-1 indent">
                        @foreach($postsByDates as $post)
                            <li>
                                <a href="/blog/archiwum/{{$post->year}}/{{$post->month}}">{!! fullMonth($post) !!} {{$post->year}}  </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            @if( Session::has('message') )
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif

        </div>
    </div>

@endsection