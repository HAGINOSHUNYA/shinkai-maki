<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!--ウェブページのビューポート（表示領域）の設定-->
  <!--width=device-width:デバイスの幅にビューポートの幅に合わせる-->
  <!--inital-scale=1.0:ページの初期表示にページ全体を1倍の拡大率で表示する-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>【薪販売】シンカイ銘木　富山市の薪の販売 【薪ストーブ用】</title>
  <meta name="keywords" content="薪,薪販売,薪ストーブ,富山,シンカイ銘木,薪配達,集成材,立木伐採">
  <meta name="description" content="富山の薪販売・配達承っております。お気軽にご相談ください。">

  <meta name="google-site-verification" content="S5qAsUTcNBqjamgOcs2FzxfCVGv5dGQ2AIA14liyu5U" />
  <meta name="msvalidate.01" content="F48BC425FFA9BC8041A44F0F298B2D21" />


  {{-- BootStrap --}}
  <!--CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
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
<body>
  @include('layouts.header')
  <main>
          
                @yield('content')
          
  </main>


  @include('layouts.footer')
</body>