<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ウェブページのビューポート（表示領域）の設定-->
  <!--width=device-width:デバイスの幅にビューポートの幅に合わせる-->
  <!--inital-scale=1.0:ページの初期表示にページ全体を1倍の拡大率で表示する-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>薪販売【富山市の薪ストーブ用】｜配達も承るシンカイ銘木</title>
  <meta name="keywords" content="薪,薪ストーブ,富山,薪配達,シンカイ銘木,立木伐採,集成材">
  <meta name="description" content="富山の薪販売・配達承っております。お気軽にご相談ください。">

  <meta name="google-site-verification" content="S5qAsUTcNBqjamgOcs2FzxfCVGv5dGQ2AIA14liyu5U" />
  <meta name="msvalidate.01" content="F48BC425FFA9BC8041A44F0F298B2D21" />

<!--ogpタグ-->
  <meta property="og:title" content="薪販売【富山市の薪ストーブ用】｜シンカイ銘木">
  <meta property="og:description" content="富山市で薪ストーブ用の薪を販売しています。配達も可能で便利！">
  <meta property="og:image" content="URL_TO_IMAGE">
  <meta property="og:url" content="URL_TO_PAGE">
  <meta property="og:type" content="website">
<!--ogpタグ-->




  {{-- BootStrap --}}
  <!--CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!--javascript-->
  <script src="{{ asset('/js/app.js') }}"></script>
  
  {{-- Google Fonts --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
 
     <link href="{{ asset('css/style.css') }}" rel="stylesheet" >

  {{--アイコン--}}
  <script src="https://kit.fontawesome.com/22ccb04945.js" crossorigin="anonymous"></script>

     
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Dela+Gothic+One&family=Potta+One&display=swap" rel="stylesheet">
</head>
<body class="page-style">
  @include('layouts.header')
  <main>
          
                @yield('content')
          
  </main>


  @include('layouts.footer')
</body>