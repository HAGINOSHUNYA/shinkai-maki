<div
    id="productCarousel"
    class="carousel slide product-carousel"
    data-bs-ride="carousel"
    data-bs-interval="5000">


    {{-- インジケーター --}}
    <div class="carousel-indicators">

        <button
            type="button"
            data-bs-target="#productCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="商品画像1">
        </button>

        <button
            type="button"
            data-bs-target="#productCarousel"
            data-bs-slide-to="1"
            aria-label="商品画像2">
        </button>

        <button
            type="button"
            data-bs-target="#productCarousel"
            data-bs-slide-to="2"
            aria-label="商品画像3">
        </button>

        <button
            type="button"
            data-bs-target="#productCarousel"
            data-bs-slide-to="3"
            aria-label="商品画像4">
        </button>

        <button
            type="button"
            data-bs-target="#productCarousel"
            data-bs-slide-to="4"
            aria-label="商品画像5">
        </button>

        <button
            type="button"
            data-bs-target="#productCarousel"
            data-bs-slide-to="5"
            aria-label="商品画像6">
        </button>

    </div>


    <div class="carousel-inner">


        <div class="carousel-item active">
            <img
                src="{{ asset('img/img1.jpg') }}"
                class="d-block w-100 product-carousel-image"
                alt="薪の商品画像1">
        </div>


        <div class="carousel-item">
            <img
                src="{{ asset('img/img2.jpg') }}"
                class="d-block w-100 product-carousel-image"
                alt="薪の商品画像2">
        </div>


        <div class="carousel-item">
            <img
                src="{{ asset('img/img3.jpg') }}"
                class="d-block w-100 product-carousel-image"
                alt="薪の商品画像3">
        </div>


        <div class="carousel-item">
            <img
                src="{{ asset('img/img4.jpg') }}"
                class="d-block w-100 product-carousel-image"
                alt="薪の商品画像4">
        </div>


        <div class="carousel-item">
            <img
                src="{{ asset('img/img6.jpg') }}"
                class="d-block w-100 product-carousel-image"
                alt="薪の商品画像5">
        </div>


        <div class="carousel-item">
            <img
                src="{{ asset('img/img8.jpg') }}"
                class="d-block w-100 product-carousel-image"
                alt="薪の商品画像6">
        </div>


    </div>


    {{-- 前へ --}}
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#productCarousel"
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
        data-bs-target="#productCarousel"
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