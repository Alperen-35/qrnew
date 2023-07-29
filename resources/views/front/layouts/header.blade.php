<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <title>DN Kreatif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="front/css/materialize.css">
    <link rel="stylesheet" href="front/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="front/css/normalize.css">
    <link rel="stylesheet" href="front/css/owl.carousel.css">
    <link rel="stylesheet" href="front/css/owl.theme.css">
    <link rel="stylesheet" href="front/css/owl.transitions.css">
    <link rel="stylesheet" href="front/css/fakeLoader.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="shortcut icon" href="front/img/favicon.png">
    {{-- <style>
        .footer {
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 200px;
            padding: 15px;
        }
    </style> --}}
</head>
<body>
    <!-- navbar top -->
    <div class="navbar-top">
        <div class="side-nav-panel-left">
            <a href="#" data-activates="slide-out-left" class="side-nav-left"><i class="fa fa-bars"></i></a>
        </div>
        <!-- site brand	 -->
        <div class="site-brand">
            <a href="{{route('/')}}">
                <h1>DN Kreatif</h1>
            </a>
        </div>
        <!-- end site brand	 -->
        <div class="side-nav-panel-right">
            <a href="contact.html" class="side-nav-right"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
    <!-- end navbar top -->
    <!-- side nav left-->
    <div class="side-nav-panel-left">
        <ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
            <li class="profil">
				<h2>DN Kafe</h2>
				<h6>HOŞGELDİNİZ</h6>
			</li>
                <li data-filter="all" class="active"><a>Hepsini Göster</a></li>
                @foreach ($cate as $item)
                    <li data-filter="{{ $item->id }}" class="active"><a>{{$item->name}}</a></li>
                @endforeach
        </ul>
    </div>
    <!-- end side nav left-->


{{-- 

    <ul>
        <li data-filter="all" class="active">
            <span>Hepsini Göster</span>
        </li>
        @foreach ($cate as $item)
        <li data-filter="{{ $item->id }}" class="active">
            <span>{{ $item->name }}</span>
        </li>
        @endforeach

    </ul> --}}