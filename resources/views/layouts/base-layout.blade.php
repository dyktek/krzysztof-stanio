<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('pageTitle') - od Zera do WebDeva</title>
    <meta charset="utf-8">
    <meta name="theme-color" content="#2E344B">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"/>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="dyktek" content="Krzysztof Stanio">
    <meta name="google-site-verification" content="w9Etyfjo_bLHsvSyLIQdVQE8bXUdeBEO-rCVwXX_cDs" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84651817-1', 'auto');
        ga('send', 'pageview');

    </script>
    @yield('livechat')

</head>

<!--CSS-->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/contact-form.css') }}"/>

<!--JS-->
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/formDialog.js?12') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/superfish.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.mobilemenu.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.ui.totop.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.equalheights.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/sForm.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.equalheights.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/TMForm.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/modal.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-filestyle.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/wow/wow.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.fitvids.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        if ($('html').hasClass('desktop')) {
            new WOW().init();
        }
    });
</script>

<script>
    $(document).ready(function () {
        $(".extra-wrap").fitVids();
    });
</script>

<script type="text/javascript">
    function myFunction(counter) {
        $('.myDropdown' + counter).toggle();
    }
    $(document).ready(function () {
        $('.form-comment-hidden').on('submit', function () {
            var content = $(this).find('.form-content').val();
            if (content == '') {
                alert('Wypełnij pola');
            }
            console.log(content);
            return true;
        });
    });
</script>

<!--[if lt IE 9]>
<div style='text-align:center'><a
        href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img
        src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42"
        width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a>
</div>
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<link rel="stylesheet" href="{{ URL::asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}">
<link rel="stylesheet" href="{{ URL::asset('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}">
<link rel="stylesheet" href="{{ URL::asset('css/ie.css') }}"/>
<![endif]-->
<body>
<!--header-->
<header class="clearfix">
    <div class="container">
        <div class="box clearfix">
            {{--<h1 class="navbar-brand navbar-brand_"><a href="{{URL::to('/') }}"><img--}}
            {{--src="{{ URL::asset('img/logo.png') }}" alt="logo" width="130" height="130"></a></h1>--}}
            <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                <ul class="nav sf-menu clearfix">
                    <li class="{{ Request::is('/') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('/')}}">start</a></li>
                    <li class="{{ Request::is('blog') || Request::is('blog/*') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('blog')}}">blog</a></li>
                    <li class="{{ Request::is('kursy-programowania') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('kursy-programowania')}}">kursy programowania</a></li>
                    <li class="{{ Request::is('absolwenci') || Request::is('absolwent/*') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('absolwenci')}}">absolwenci kursu</a></li>
                    <li class="{{ Request::is('kontakt') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('kontakt')}}">kontakt</a></li>
                        {{--<li class="{{ Request::is('filmy') ? 'active sub-menu' : '' }}">--}}
                        {{--<a href="{{URL::to('filmy')}}">filmy</a></li>--}}
                        <li class="{{ Request::is('forum') ? 'active sub-menu' : '' }}">
                            <a href="{{URL::to('forum')}}">forum</a></li>
                    @if(Auth::user())
                    <li class="{{ Request::is('logout') ? 'active sub-menu' : '' }}">
                            <a href="{{URL::to('logout')}}">wyloguj użytkownika {{ Auth::user()->name }}</a></li>
                    @else
                        <li class="{{ Request::is('login') ? 'active sub-menu' : '' }}">
                            <a href="{{URL::to('login')}}">zaloguj się</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>

@section('footer')
    <footer>
        <div class="container">
            <p>Krzysztof Stanio &copy; <em id="copyright-year"></em></p>

            <p style="padding-left:10px;"><a title="Jak się uczyć programowania" href="http://krzysztof-stanio.pl/blog/notka/Jak-sie-uczyc-programowania-Jak-wygladaja-moje-kursy">Jak się uczyć programowania</a></p>
            <p style="padding-left:10px;"><a title="Kurs laravel" href="http://krzysztof-stanio.pl/blog/kategoria/kurs-laravel">Kurs laravel</a></p>
            <p style="padding-left:10px;"><a title="Szkolenia programistyczne" href="http://krzysztof-stanio.pl/kurs">Szkolenia programistyczne</a></p>
            <p class="foo_address">Ketlinga 1<br>32-020 Kraków</p>
        </div>
    </footer>

    <div class="dialogForm" style="display:none">
        <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
        <div class="elem">
            <h2>Odchodzisz? Zostaw swój e-mail <span><br> otrzymasz powiadomienia<br>o nowych wpisach i rabatach na kurs</span>
            </h2>
        </div>
        <div class="elem">
            <label for="email">Email: </label>
            <input class="email" id="email" type="email" placeholder="Podaj swój e-mail"/>
        </div>
        <div class="elem">
            <input class="send-email" id="send-email" type="button" value="Wyślij"/>
        </div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tm-scripts.js') }}"></script>
</body>
</html>

@stop

@yield('content')

@yield('footer')