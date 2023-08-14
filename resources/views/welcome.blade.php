<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <title>E-Invoice System</title>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Product+Sans:300,400,500|Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        body {
            font-family: 'Cairo';
            font-size: 22px;
        }

        @-webkit-keyframes appear {
            0% {
                opacity: 0;
            }
            10% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes appear {
            0% {
                opacity: 0;
            }
            10% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        body {
            font-weight: 400;
            background-color: #fff;
            color: #000;
            padding-bottom: 4rem;
        }

        a img {
            visibility: visible;
        }

        a span:first-child {
            visibility: visible;
        }

        .google-logo {
            background: url({{asset('imgs/logo.png')}}) no-repeat 50% 50%;
            background-size: 110px 80px;
            width: 100%;
            height: 100%;
            color: #4285F4;
            display: block;
            position: absolute;
            top: -0.7rem;
            right: 1.5rem;
            z-index: 2;
            border-radius: 11px;
        }

        }
        .google-logo a {
            display: block;
            width: 120px;
            height: 44px;
        }

        @media screen and (max-width: 530px) {
            .google-logo {
                background-position: -18px 3px;
                transform: scale(0.8);
            }
        }

        @media screen and (max-width: 255px) {
            .google-logo .google_logo {
                display: none;
            }
        }

        #top {
            padding-bottom: 25px;
            padding-top: 30px;
            background-color: #1a3864;
            border-bottom: 1px solid #ebebeb;
        }

        #search {
            border-color: transparent;
            margin-bottom: 2rem;
            width: 100%;
            max-width: 632px;
            height: 44px;
        }

        @media screen and (max-width: 530px) {
            #search {
                padding: 10px;
                height: 60px;
            }

            #search a {
                max-width: 80px;
            }
        }

        #search form {
            display: inline;
        }

        #search form #GoogleSearch input {
            position: relative;
            line-height: 34px;
            margin-bottom: 5px;
            width: 100%;
            height: 34px;
            font: 16px arial, sans-serif;
            padding-left: 16px;
            border-color: transparent;
            background-color: #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            height: 44px;
            border-radius: 3px;
            transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        #search form #GoogleSearch input:hover, #search form #GoogleSearch input:focus {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        #search form #GoogleSearch button {
            width: 47px;
            height: 43px;
            cursor: pointer;
            position: absolute;
            left: -45px;
        }

        .menu-wrapper {
            width: 80px;
            height: 80px;
            position: fixed;
            top: 15px;
            right: 10px;
            z-index: 3;
        }

        .menu-wrapper img {
            width: 34px;
            height: 60px;
        }

        @media screen and (max-width: 900px) {
            .menu-wrapper {
                top: -8px;
                right: -8px;
                width: 40px;
                height: 40px;
            }
        }

        .menu-wrapper:hover .menu {
            width: 200px;
            height: 275px;
            border-radius: 3px;
            z-index: 999;
        }

        .menu-wrapper:hover .menu img {
            opacity: 0;
            transition: all 50ms ease-in;
        }

        .menu-wrapper:hover .menu ul {
            display: block;
            list-style-type: none;
            color: #fff;
            display: block;
            position: absolute;
            top: 0;
            width: 100%;
            text-align: center;
            margin: 5px 0;
            padding: 0;
            font-size: 22px;
        }

        .menu-wrapper:hover .menu ul li {
            transition: all 200ms ease-in;
            width: 180px;
            margin: 0 auto;
        }

        .menu-wrapper:hover .menu ul li a {
            font-weight: 400;
            text-decoration: none;
            display: block;
            width: 180px;
            color: #aaa;
            padding: 7px 0;
            margin: 5px 0;
            border-radius: 4px;
            transition: all 100ms ease-in;
            border-bottom: 1px solid;
        }

        .menu-wrapper:hover .menu ul li a:hover {
            color: #4285F4;
            background-color: #fafafa;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            -webkit-appearance: none;
        }

        .menu-wrapper:hover .menu ul li a:focus, .menu-wrapper:hover .menu ul li a:active {
            color: #fff;
            background-color: #4285F4;
        }

        .menu-wrapper .menu {
            width: 60px;
            height: 60px;
            top: 25px;
            right: 20px;
            border-radius: 50%;
            background-color: #fff;
            box-shadow: 1px 1px 10px 0px;
            text-align: center;
            color: #fff;
            position: fixed;
            cursor: pointer;
            z-index: 3;
            box-shadow: 0 2px 2.5px 0 rgba(0, 0, 0, 0.12), 0 2px 2px 0 rgba(0, 0, 0, 0.24);
            transition: all 200ms ease-in-out;
        }

        .menu-wrapper .menu ul {
            display: none;
            -webkit-animation: appear 1000ms;
            animation: appear 1000ms;
        }

        @media screen and (max-width: 900px) {
            .menu-wrapper .menu {
                top: -5px;
                right: -5px;
                width: 40px;
                height: 40px;
                border-radius: 5px;
            }

            .menu-wrapper .menu img {
                width: 25px;
                height: 43px;
                margin-left: -3px;
            }
        }

        .sites {
            color: inherit;
            display: flex;
            flex-flow: row wrap;
            align-content: space-between;
            justify-content: center;
        }

        .sites a {
            color: inherit;
            font-size: 1.3rem;
            background: black;
            border-radius: 4px;
            width: 188px;
            height: 120px;
            margin: 1rem;
            line-height: 120px;
            text-align: center;
            color: #4584ee;
            box-sizing: border-box;
            display: block;
            vertical-align: middle;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.28);
            transition: all 250ms cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-appearance: none;
        }

        .sites a:hover, .sites a:focus, .sites a:active {
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
        }

        .sites a span:nth-child(1) {
            padding-right: 0;
            font-size: 55px;
        }

        .sites a span#title {
            opacity: 0;
            position: absolute;
            font-size: 16px;
            font-weight: 400;
            text-rendering: optimizeLegibility;
            transition: all ease-in-out 150ms;
            position: absolute;
            top: 77px;
            left: 0;
            color: #bbb;
            width: 188px;
            height: 1rem;
            text-align: center;
            text-shadow: none;
        }

        .sites a:hover span#title {
            opacity: 1;
        }

        .sites a img {
            width: 55px;
        }

        + .sites a:nth-child(3n) {
            page-break-after: always;
        }

        .sites a:hover, .sites a:focus, .sites a:active {
            transform: translateY(-5px);
            text-decoration: none;
            color: #4584ee;
        }

        #Amazon {
            background: #0b0c07;
        }

        #Amazon img {
            filter: invert(1);
        }

        #Apple {
            background: #999;
        }

        #Apple img {
            filter: invert(1);
        }

        #Behance {
            background: #1769ff;
        }

        #Behance img {
            filter: invert(1);
        }

        #Bootstrap {
            background: #563d7c;
        }

        #Bootstrap img {
            filter: invert(1);
        }

        #ChromeStore {
            background: #e3e4e5;
        }

        #ChromeStore img {
            filter: invert(0);
            width: 65px;
        }

        #Codepen {
            background: #181818;
        }

        #Codepen img {
            filter: invert(1);
        }

        #Dribbble {
            background: #e84c88;
        }

        #Dribbble img {
            filter: invert(1);
        }

        #Dropbox {
            background: #007ee5;
        }

        #Dropbox img {
            filter: invert(1);
        }

        #Facebook {
            background: #3b5998;
        }

        #Facebook img {
            filter: invert(1);
        }

        #Feedly {
            background: #6cc655;
        }

        #Feedly img {
            filter: invert(1);
        }

        #Flickr {
            background: #0063dc;
        }

        #Flickr img {
            filter: invert(1);
        }

        #Flipboard {
            background: #df272e;
        }

        #Flipboard img {
            filter: invert(1);
        }

        #Firefox {
            background: #c13832;
        }

        #Firefox img {
            filter: invert(1);
        }

        #GitHub {
            background: #25292e;
        }

        #GitHub img {
            filter: invert(1);
        }

        #Google {
            background: #4285F4;
        }

        #Google img {
            filter: invert(1);
        }

        #Keep {
            background: #ffbb00;
        }

        #Keep img {
            filter: invert(0);
        }

        #GoogleMusic {
            background: #ff5722;
        }

        #GoogleMusic img {
            filter: invert(1);
        }

        #GooglePlay {
            background: #607d8b;
        }

        #GooglePlay img {
            filter: invert(1);
        }

        #Hangouts {
            background: #0c9d58;
        }

        #Hangouts img {
            filter: invert(1);
        }

        #Heroku {
            background: #430098;
        }

        #Heroku img {
            filter: invert(1);
        }

        #Hulu {
            background: #66aa33;
        }

        #Hulu img {
            filter: invert(1);
            width: 75px;
        }

        #Imgur {
            background: #34373c;
        }

        #Imgur img {
            filter: invert(0);
            width: 100px;
        }

        #Inbox {
            background: #4285F4;
        }

        #Inbox img {
            filter: invert(0);
        }

        #Instagram {
            background: #e4405f;
        }

        #Instagram img {
            filter: invert(1);
        }

        #Instapaper {
            background: #1f1f1f;
        }

        #Instapaper img {
            filter: invert(1);
        }

        #JSFiddle {
            background: #3fa1f5;
        }

        #JSFiddle img {
            filter: invert(1);
        }

        #LinkedIn {
            background: #0077b5;
        }

        #LinkedIn img {
            filter: invert(1);
        }

        #Medium {
            background: #00ab6c;
        }

        #Medium img {
            filter: invert(1);
        }

        #Messenger {
            background: #0084ff;
        }

        #Messenger img {
            filter: invert(0);
        }

        #Netflix {
            background: #e50914;
        }

        #Netflix img {
            filter: invert(1);
        }

        #OperaAddons {
            background: #ff1b2d;
        }

        #OperaAddons img {
            filter: invert(1);
        }

        #Pinterest {
            background: #bd081c;
        }

        #Pinterest img {
            filter: invert(1);
        }

        #Pocket {
            background: #ef3f56;
        }

        #Pocket img {
            filter: invert(1);
        }

        #ProductHunt {
            background: #da552f;
        }

        #ProductHunt img {
            filter: invert(0);
        }

        #Quora {
            background: #a82400;
        }

        #Quora img {
            filter: invert(1);
        }

        #Reddit {
            background: #ff4500;
        }

        #Reddit img {
            filter: invert(1);
        }

        #RSS {
            background: #ffa500;
        }

        #RSS img {
            filter: invert(1);
        }

        #Slack {
            background: #6ecadc;
        }

        #Slack img {
            filter: invert(1);
        }

        #Spotify {
            background: #2ebd59;
        }

        #Spotify img {
            filter: invert(1);
        }

        #Twitch {
            background: #6441a5;
        }

        #Twitch img {
            filter: invert(1);
        }

        #Twitter {
            background: #1da1f2;
        }

        #Twitter img {
            filter: invert(1);
        }

        #Vimeo {
            background: #1ab7ea;
        }

        #Vimeo img {
            filter: invert(1);
        }

        #Wikipedia {
            background: #fff;
        }

        #Wikipedia img {
            filter: invert(0);
        }

        #YouTube {
            background: #fd0016;
        }

        #YouTube img {
            filter: invert(1);
            width: 65px;
        }

        #YouTubeMusic {
            background: #191919;
        }

        #YouTubeMusic img {
            filter: invert(0);
        }

        #Instagram {
            background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
        }

        #gh-star {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }

        #gh-fork {
            position: absolute;
            top: 1rem;
            left: 4.5rem;
        }

        .hsites {
            text-align: right;
            padding: 27px;
            font-size: 29px;
            font-weight: 600;
        }

        table.paleBlueRows {
            border: 1px solid #FFFFFF;
            width: 100%;
            height: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        table.paleBlueRows td, table.paleBlueRows th {
            border: 1px solid #FFFFFF;
            padding: 3px 2px;
        }
        table.paleBlueRows tbody td {
            font-size: 13px;
        }
        table.paleBlueRows tr:nth-child(even) {
            background: #D0E4F5;
        }
        table.paleBlueRows thead {
            background: #0B6FA4;
            border-bottom: 5px solid #FFFFFF;
        }
        table.paleBlueRows thead th {
            font-size: 17px;
            font-weight: bold;
            color: #FFFFFF;
            text-align: center;
            border-left: 2px solid #FFFFFF;
        }
        table.paleBlueRows thead th:first-child {
            border-left: none;
        }

        table.paleBlueRows tfoot td {
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="menu-wrapper">
    <div class="menu">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/icon--menu.svg"/>
        <ul>
            @guest
            <li><a href="#">انضم ألينا الأن</a></li>
            <li><a href="{{route('login')}}">تسجيل الدخول</a></li>
            <li><a href="{{route('register')}}">حساب جديد</a></li>
            @endguest
            @auth
                    <form id="logout" action="{{ route("logout") }}" method="POST" style="display: none">
                        @csrf
                    </form>
                    <li><a href="#"> مرحبا بك {{auth()->user()->name}}  </a></li>
                    <li><a onclick="document.getElementById('logout').submit()" href="#"> تسجيل الخروج</a></li>
                @endauth
        </ul>
    </div>
</div>
<div class="fluid-container">
    <div class="d-flex justify-content-center" id="top">
        <div class="col-2"><span class="google-logo"></span><a href="#"></a></div>
        <div class="col-6">
            <div id="search">
                <form class="form-search w-100" method="get" action="/">
                    <div class="input-group" id="GoogleSearch">
                        <input class="form-control input-lg" type="search" value="{{request()->q}}" name="q" placeholder="ابحث عن فاتورتك الأن ...." autocomplete="off"/>
                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @auth
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="hsites">فواتيري : </h3>
                </div>
                <div class="col-md-12">
                    <table id="myTable" class="paleBlueRows">
                        <thead>
                        <tr>
                            <th>رقم الفاتورة</th>
                            <th>المتجر</th>
                            <th>عدد المنتجات</th>
                            <th>تاريخ الفاتورة</th>
                            <th>المجموع</th>
                            <th>الضريبة [15 %]</th>
                            <th>المجموع الكلى</th>
                            <th>طباعة</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($invoices))
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>#{{$invoice->number}}</td>
                                    <td>{{optional($invoice->store)->name}}</td>
                                    <td>{{count($invoice->items)}}</td>
                                    <td>{{ date('Y-m-d H:m A', strtotime($invoice->date)) }}</td>
                                    <td>{{number_format($invoice->subtotal, 2)}}</td>
                                    <td>{{number_format($invoice->total - $invoice->subtotal, 2)}}</td>
                                    <td>{{number_format($invoice->total, 2)}}</td>
                                    <td><a class="btn btn-primary"><i class="fa fa-print text-white"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8">لا يوجد فواتير</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endauth

   @guest
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="hsites">عملائنا : </h3>
                </div>
            </div>
        </div>

        <div class="sites">
            <a id="Twitter" href="https://twitter.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--twitter.svg"/>
                <span id="title">Twitter</span></a>
            <a id="YouTube" href="https://youtube.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--youtube.svg"/>
                <span id="title">YouTube</span></a>
            <a id="CodePen" href="https://codepen.io">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--codepen-white.svg"/>
                <span id="title">CodePen</span></a>
            <a id="Facebook" href="https://facebook.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--facebook.svg"/>
                <span id="title">Facebook</span></a>
            <a id="Messenger" href="https://messenger.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--messenger.svg"/>
                <span id="title">Messenger</span></a>
            <a id="Instagram" href="https://instagram.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--instagram.svg"/>
                <span id="title">Instagram</span></a>
            <a id="GitHub" href="https://github.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--github.svg"/>
                <span id="title">GitHub</span></a><a id="Inbox" href="https://inbox.google.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--inbox.svg"/>
                <span id="title">Inbox</span></a><a id="Reddit" href="https://reddit.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--reddit.svg"/>
                <span id="title">Reddit</span></a>
            <a id="Keep" href="https://keep.google.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--keep.svg"/>
                <span id="title">Keep</span></a>
            <a id="Imgur" href="https://imgur.com">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--imgur.svg"/>
                <span id="title">Imgur</span></a>
            <a id="Behance" href="https://behance.net"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--behance.svg"/><span
                        id="title">Behance</span></a><a id="ProductHunt" href="https://producthunt.com"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--producthunt.svg"/><span id="title">Product Hunt</span></a><a
                    id="YouTubeMusic" href="https://music.youtube.com"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--youtube-music.svg"/><span id="title">YouTube Music</span></a><a
                    id="ChromeStore" href="https://https://goo.gl/CJzpdp"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--chromestore.svg"/><span id="title">Chrome Store</span></a><a
                    id="Dribbble" href="https://dribbble.com"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--dribbble.svg"/><span id="title">Dribbble</span></a><a
                    id="Hulu" href="https://hulu.com"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--hulu.svg"/><span
                        id="title">Hulu</span></a>
            <a id="Netflix" href="https://netflix.com"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/59615/logo--netflix.svg"/><span
                        id="title">Netflix</span></a>
        </div>
    @endguest
</div>
</body>
</html>
