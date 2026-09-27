<div
    id="mainCarousel"
    class="carousel slide hero-carousel"
    data-bs-ride="carousel"
    data-bs-interval="5000">


    {{-- インジケーター --}}
    <div class="carousel-indicators">

        <button
            type="button"
            data-bs-target="#mainCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="スライド1">
        </button>

        <button
            type="button"
            data-bs-target="#mainCarousel"
            data-bs-slide-to="1"
            aria-label="スライド2">
        </button>

        <button
            type="button"
            data-bs-target="#mainCarousel"
            data-bs-slide-to="2"
            aria-label="スライド3">
        </button>

    </div>


    {{-- 画像 --}}
    <div class="carousel-inner">

        <div class="carousel-item active">

            <img
                src="{{ asset('img/logo.jpg') }}"
                class="d-block w-100 hero-carousel-image"
                alt="シンカイ銘木">

        </div>


        <div class="carousel-item">

            <img
                src="{{ asset('img/img9.jpg') }}"
                class="d-block w-100 hero-carousel-image"
                alt="シンカイ銘木の薪">

        </div>


        <div class="carousel-item">

            <img
                src="{{ asset('img/img7.jpg') }}"
                class="d-block w-100 hero-carousel-image"
                alt="薪販売">

        </div>

    </div>


    {{-- 前へ --}}
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide="prev">

        <span
            class="carousel-control-prev-icon"
            aria-hidden="true">
        </span>

        <span class="visually-hidden">
            前へ
        </span>

    </button>


    {{-- 次へ --}}
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide="next">

        <span
            class="carousel-control-next-icon"
            aria-hidden="true">
        </span>

        <span class="visually-hidden">
            次へ
        </span>

    </button>

</div>