<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>薪販売【富山市の薪ストーブ用】｜配達も承るシンカイ銘木</title>

    <meta name="keywords"
          content="薪,薪ストーブ,富山,薪配達,シンカイ銘木,立木伐採,集成材">

    <meta name="description"
          content="富山の薪販売・配達承っております。お気軽にご相談ください。">

   {{-- Google Search Console（以前の認証） --}}
    <meta name="google-site-verification"
          content="5SqAsUTCNBqjamgOcs2FzxfCVGv5dGQ2AIA14liyu5U">

    {{-- Google Search Console（今回の認証） --}}
    <meta name="google-site-verification"
          content="ZoOWiXzi8sABhfyDeRn3FcEbQC87E49wXmxTEOMi64Y">
    {{-- Bing --}}
    <meta name="msvalidate.01"
          content="F48BC425FFA9BC8041A44F0F298B2D21">


     {{-- OGP --}}
      <meta property="og:title"
            content="薪販売【富山市の薪ストーブ用】｜シンカイ銘木">

      <meta property="og:description"
            content="富山市で薪ストーブ用の薪を販売しています。配達も可能です。">

      <meta property="og:image"
            content="{{ asset('img/ogp.jpg') }}">

      <meta property="og:url"
            content="{{ url('/') }}">

      <meta property="og:type"
            content="website">

      <meta property="og:site_name"
            content="シンカイ銘木">

    {{-- Google画像プレビュー --}}
      <meta name="robots"
            content="max-image-preview:large">


    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">


    {{-- Google Fonts --}}
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Dela+Gothic+One&family=Noto+Sans+JP:wght@400;500;700&family=Potta+One&display=swap"
        rel="stylesheet">


    {{-- CSS --}}
  <link href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}"
      rel="stylesheet">


    {{-- Font Awesome --}}
    <script
        src="https://kit.fontawesome.com/22ccb04945.js"
        crossorigin="anonymous">
    </script>

</head>


<body class="page-style" id="top">


    {{-- ヘッダー --}}
    @include('layouts.header')


    <main>
        @yield('content')
    </main>


    {{-- フッター --}}
    @include('layouts.footer')


    {{-- Bootstrap JavaScript --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous">
    </script>


    {{-- JavaScript --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>