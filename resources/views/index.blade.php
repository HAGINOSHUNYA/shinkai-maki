@extends('layouts.app')


@section('content')


{{-- =====================================================
     メインビジュアル
===================================================== --}}

<section class="hero-section" id="top">

    {{-- 背景カルーセル --}}
    <div
        id="heroCarousel"
        class="carousel slide carousel-fade hero-carousel"
        data-bs-ride="carousel"
        data-bs-interval="6000">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/logo.jpg') }}" class="hero-image" alt="シンカイ銘木">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/img9.jpg') }}" class="hero-image" alt="薪の保管場所">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/img7.jpg') }}" class="hero-image" alt="広葉樹の薪">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="前の画像">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="次の画像">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>

        <div class="carousel-indicators hero-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="1枚目"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="2枚目"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="3枚目"></button>
        </div>
    </div>

    <div class="hero-dark-layer"></div>

    <div class="hero-main-content">
        <div class="hero-inner">

            <div class="hero-label">
                薪販売・配達 承ります!!
            </div>

            <h1 class="hero-main-title">
                富山の冬に、<br>
                あたたかな<span>薪</span>を。
            </h1>

            <p class="hero-lead">
                ナラやケヤキなどの広葉樹を<br>
                常時乾燥状態でご用意しております。
            </p>

            <div class="hero-features">
                <div class="hero-feature">
                    <div class="hero-feature-icon hero-tree">
                        <i class="fa-solid fa-tree"></i>
                    </div>
                    <div>
                        <strong>広葉樹</strong>
                        <small>ナラ・ケヤキなど</small>
                    </div>
                </div>

                <div class="hero-feature">
                    <div class="hero-feature-icon hero-sun">
                        <i class="fa-solid fa-sun"></i>
                    </div>
                    <div>
                        <strong>しっかり乾燥</strong>
                        <small>すぐに使える状態</small>
                    </div>
                </div>

                <div class="hero-feature">
                    <div class="hero-feature-icon hero-truck">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <div>
                        <strong>配達対応</strong>
                        <small>富山市内・近郊</small>
                    </div>
                </div>
            </div>

            <div class="hero-actions">
                <a href="#price" class="hero-action-primary">
                    <i class="fa-solid fa-cubes-stacked"></i>
                    <span>商品・価格を見る</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>

                <a href="#pickup" class="hero-action-secondary">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>引き取り場所を見る</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <a href="tel:0764518048" class="hero-mobile-phone">
                <i class="fa-solid fa-phone"></i>
                <span>
                    電話で問い合わせる
                    <strong>076-451-8048</strong>
                </span>
            </a>

        </div>
    </div>

    <a href="#product" class="hero-scroll">
        <span>SCROLL</span>
        <i class="fa-solid fa-chevron-down"></i>
    </a>

</section>


<div class="container main-container">


{{-- =====================================================
     商品紹介
===================================================== --}}

<section
    id="product"
    class="page-section">

    <h2 class="section-title">
        商品の紹介
    </h2>

    <div class="product-introduction">

        <img
            src="{{ asset('img/img5.jpg') }}"
            class="product-background"
            alt="保管されている薪">

        <div class="product-introduction-content">

            <div class="product-photo-area">

                <div class="product-badge">
                    <span>ナラやケヤキなどの</span>
                    <strong>広葉樹</strong>
                    <i class="fa-solid fa-leaf"></i>
                </div>

                <div class="product-photo-frame">
                    <img
                        src="{{ asset('img/img2.jpg') }}"
                        class="product-small-image"
                        alt="広葉樹の薪">
                </div>

            </div>

            <div class="product-introduction-text">

                <h3>
                    広葉樹の<span>薪</span>
                </h3>

                <p class="product-lead">
                    ナラやケヤキなどの広葉樹を
                    常時乾燥状態でご用意しております。
                </p>

                <div class="product-features">

                    <div class="product-feature">
                        <div class="product-feature-icon product-feature-tree">
                            <i class="fa-solid fa-tree"></i>
                        </div>
                        <h4>広葉樹の薪</h4>
                        <p>ナラやケヤキなど、火持ちの良い広葉樹を取り扱っています。</p>
                    </div>

                    <div class="product-feature">
                        <div class="product-feature-icon product-feature-sun">
                            <i class="fa-solid fa-sun"></i>
                        </div>
                        <h4>しっかり乾燥</h4>
                        <p>常時乾燥状態で、すぐに使いやすい薪をご用意しています。</p>
                    </div>

                    <div class="product-feature">
                        <div class="product-feature-icon product-feature-fire">
                            <i class="fa-solid fa-fire"></i>
                        </div>
                        <h4>薪ストーブに</h4>
                        <p>火持ちの良い広葉樹は、薪ストーブ用としておすすめです。</p>
                    </div>

                </div>

            </div>

        </div>

        <a href="#price" class="product-price-link">
            <i class="fa-solid fa-cubes-stacked"></i>
            <span>薪の価格を見る</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>

    </div>

</section>


{{-- =====================================================
     価格
===================================================== --}}

<section id="price" class="page-section">


    <h2 class="section-title">
        価格
    </h2>


    <div class="row align-items-center g-4">


        {{-- 商品画像 --}}
        <div class="col-12 col-md-7">

            @include('index.place-carousel')

        </div>


        {{-- 価格 --}}
        <div class="col-12 col-md-5">

            <div class="price-box">

                <h3>
                    メッシュカゴ
                </h3>


                <p class="product-volume">
                    約1㎥
                </p>


                <p class="price">

                    31,900

                    <span>
                        円（税込）
                    </span>

                </p>


                <div class="delivery-price">

                    <i class="fa-solid fa-truck"></i>

                    配達

                    <strong>
                        5,000円～
                    </strong>

                </div>


                <p class="price-note">

                    ※機材や道路状況に応じて
                    料金は変動します。<br>

                    詳しくはお問い合わせください。

                </p>


                {{-- PC表示 --}}
                <div class="pc-contact">

                    <p class="contact-title">
                        ご注文・お問い合わせ
                    </p>

                    <p class="contact-tel">

                        <i class="fa-solid fa-phone"></i>

                        076-451-8048

                    </p>

                    <p class="business-hours">
                        受付時間 9:00～17:00
                    </p>

                </div>


                {{-- スマホ表示 --}}
                <a
                    href="tel:0764518048"
                    class="mobile-call-button">

                    <i class="fa-solid fa-phone"></i>

                    <span>

                        電話で注文する

                        <strong>
                            076-451-8048
                        </strong>

                    </span>

                </a>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     引き取り場所
===================================================== --}}
<section id="pickup" class="page-section pickup-section">

    {{-- 見出し --}}
    <div class="pickup-heading">

        <div>
            <span class="pickup-heading-en">PICKUP</span>

            <div class="pickup-heading-title">
                <h2>引き取り場所</h2>
                <span class="pickup-heading-line"></span>
            </div>
        </div>

        <p class="pickup-heading-message">
            実際の保管場所で薪をご覧いただけます
        </p>

    </div>


    {{-- =================================================
         店舗情報カード
    ================================================== --}}
    <div class="pickup-card">

        {{-- 左：写真 --}}
        <div class="pickup-photo">

            <img
                src="{{ asset('img/img10.jpg') }}"
                alt="シンカイ銘木の薪保管場所"
            >

            <div class="pickup-photo-overlay"></div>

            <p class="pickup-photo-message">
                実際の保管場所で<br>
                薪をご覧いただけます
            </p>

        </div>


        {{-- =================================================
             右：店舗情報
        ================================================== --}}
        <div class="pickup-information">

            {{-- 店名 --}}
            <div class="pickup-shop-title">

                <i class="fa-solid fa-location-dot"></i>

                <h3>シンカイ銘木</h3>

            </div>


            {{-- 住所 --}}
            <div class="pickup-address">

                <p>
                    <span class="pickup-postal">
                        〒931-8434
                    </span>

                    <span class="pickup-address-text">
                        富山県富山市三上6
                    </span>
                </p>

            </div>


            {{-- 来店前連絡 --}}
            <div class="pickup-visit-notice">

                <i class="fa-solid fa-phone"></i>

                <p>
                    薪のお引き取りをご希望の方は<br>
                    <strong>
                        ご来店前にお電話ください。
                    </strong>
                </p>

            </div>


            {{-- =================================================
                 特徴
            ================================================== --}}
            <div class="pickup-features">

                {{-- 駐車場 --}}
                <div class="pickup-feature">

                    <div class="pickup-feature-icon">
                        <i class="fa-solid fa-car"></i>
                    </div>

                    <strong>
                        駐車スペース
                    </strong>

                    <span>
                        あり
                    </span>

                </div>


                {{-- 薪 --}}
                <div class="pickup-feature">

                    <div class="pickup-feature-icon">
                        <i class="fa-solid fa-tree"></i>
                    </div>

                    <strong>
                        保管中の薪を
                    </strong>

                    <span>
                        ご覧いただけます
                    </span>

                </div>


                {{-- 相談 --}}
                <div class="pickup-feature">

                    <div class="pickup-feature-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <strong>
                        薪について
                    </strong>

                    <span>
                        ご相談ください
                    </span>

                </div>

            </div>


            {{-- =================================================
                 ボタン
            ================================================== --}}
            <div class="pickup-buttons">

                {{-- Google Map --}}
                <a
                    href="https://www.google.com/maps/search/?api=1&query=富山県富山市三上6"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="pickup-map-button"
                >

                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        Googleマップで見る
                    </span>

                    <i class="fa-solid fa-chevron-right"></i>

                </a>


                {{-- 電話 --}}
                <a
                    href="tel:0764518048"
                    class="pickup-phone-button"
                >

                    <i class="fa-solid fa-phone"></i>

                    <span>
                        電話で問い合わせる
                    </span>

                    <strong>
                        076-451-8048
                    </strong>

                    <i class="fa-solid fa-chevron-right"></i>

                </a>

            </div>

        </div>

    </div>


    {{-- =================================================
         Google Map
    ================================================== --}}
    <div class="pickup-map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.032296665185!2d137.2572295764413!3d36.72178557226963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff799d46127647d%3A0x8295b7caa3b0a559!2z44K344Oz44Kr44Kk6YqY5pyo!5e0!3m2!1sja!2sjp!4v1734786127268!5m2!1sja!2sjp"
            width="100%"
            height="330"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="シンカイ銘木の地図">
        </iframe>

    </div>

</section>
{{-- =====================================================
     FAQ
===================================================== --}}

<section
    id="faq"
    class="page-section">


    <h2 class="section-title">
        よくある質問
    </h2>


    @include('index.accodion')


</section>



{{-- =====================================================
     会社概要
===================================================== --}}

<section
    id="company"
    class="page-section">


    <h2 class="section-title">
        会社概要・お問い合わせ
    </h2>


    <div class="row align-items-center g-4">


        <div class="col-12 col-md-5">

            <img
                src="{{ asset('img/logo.jpg') }}"
                class="company-image"
                alt="シンカイ銘木">

        </div>


        <div class="col-12 col-md-7">

            <div class="company-info">

                <dl>

                    <dt>会社名</dt>
                    <dd>シンカイ銘木</dd>

                    <dt>代表者</dt>
                    <dd>畠山真一</dd>

                    <dt>所在地</dt>
                    <dd>
                        〒931-8434<br>
                        富山県富山市三上6
                    </dd>

                    <dt>電話</dt>
                    <dd>076-451-8048</dd>

                    <dt>事業内容</dt>
                    <dd>
                        集成材加工・立木伐採・薪販売
                    </dd>

                    <dt>営業時間</dt>
                    <dd>
                        9:00～17:00
                    </dd>

                </dl>


                <p class="company-contact-text">
                    お問い合わせ・ご注文は、
                    電話にて承っています。
                </p>


                {{-- スマホのみ --}}
                <a
                    href="tel:0764518048"
                    class="mobile-call-button">

                    <i class="fa-solid fa-phone"></i>

                    <span>

                        電話で問い合わせる

                        <strong>
                            076-451-8048
                        </strong>

                    </span>

                </a>

            </div>

        </div>

    </div>

</section>


</div>


@endsection