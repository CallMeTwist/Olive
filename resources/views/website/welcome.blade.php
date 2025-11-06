@extends('layouts.master', [
    $title = 'Welcome',
])

@push('styles')
    <link rel="stylesheet" type="text/css" href="/assets/css/theme2.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/collection2.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/blog2.css">

    <style>
        .product-image img {
            width: 100%;
            height: 400px; /* adjust as needed */
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{asset('/assets/js/theme2.js')}}"></script>

@endpush

@push('notification-bar')
    <div class="notification-bar ptb-13 dominant-bg">
        <div class="notification-marquee d-flex overflow-hidden">
            <div class="notification-marquee-row d-flex">
                <div class="extra-color text-uppercase heading-weight text-nowrap">Enjoy an extra 25% off with code <span class="blinking">25VEPPO</span>!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Grab free shipping on orders over <span class="blinking">$50</span>!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Need-help: <a href="tel:+3612345678" class="extra-color">+36 1 234 5678</a></div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Flat <span class="blinking">30% off</span> sitewide-shop now!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Buy 1, Get 1 Free on select items!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Exclusive deal: <span class="blinking">15% off</span> for members!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Save <span class="blinking">$10</span> on orders above $100!</div>
            </div>
            <div class="notification-marquee-row d-flex">
                <div class="extra-color text-uppercase heading-weight text-nowrap">Enjoy an extra 25% off with code <span class="blinking">25VEPPO</span>!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Grab free shipping on orders over <span class="blinking">$50</span>!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Need-help: <a href="tel:+3612345678" class="extra-color">+36 1 234 5678</a></div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Flat <span class="blinking">30% off</span> sitewide-shop now!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Buy 1, Get 1 Free on select items!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Exclusive deal: <span class="blinking">15% off</span> for members!</div>
                <div class="extra-color text-uppercase heading-weight text-nowrap">Save <span class="blinking">$10</span> on orders above $100!</div>
            </div>
        </div>
    </div>
@endpush

@section('content')
    <section class="slider-content">
        <div class="home-slider swiper" id="home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-md-6">
                            <div class="slider-image height-md-100">
                                <img src="assets/image/index2/slider-1.jpg" class="w-100 height-md-100 img-fluid" alt="slider-1">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 section-ptb body-bg bg-img" data-bgimg="assets/image/index2/slider-bgimg.png">
                            <div class="col-xl-11 col-xxl-10 mx-xl-auto height-md-100 d-md-flex flex-md-column align-items-md-start justify-content-md-center plr-15 plr-md-30 slider-text-info">
                                <div class="slider-sub-title dominant-color font-18 text-uppercase meb-6 meb-sm-14 meb-xl-17 meb-xxl-20">Elegant pieces starting at ₦1,000</div>
                                <h2 class="font-32 font-sm-40 font-xl-64 font-xxl-72 section-heading-family section-heading-text section-heading-weight section-heading-lh">Handcrafted elegance</h2>
                                <div class="slider-feature mst-26 mst-sm-34 mst-xl-40 mst-xxl-43">
                                    <ul class="ul-mt30">
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-1.1.png" class="width-40 img-fluid" alt="slider-1.1">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Beaded Necklace</h6>
                                                    <p class="d-block mst-4">Timeless design</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-1.2.png" class="width-40 img-fluid" alt="slider-1.2">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Shell Choker</h6>
                                                    <p class="d-block mst-4">Classic beauty</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{route('store.index')}}" class="btn-style dominant-btn mst-23 mst-sm-33 mst-xl-43 mst-xxl-48">Shop collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-md-6">
                            <div class="slider-image height-md-100">
                                <img src="assets/image/index2/slider-2.jpg" class="w-100 height-md-100 img-fluid" alt="slider-2">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 section-ptb body-bg bg-img" data-bgimg="assets/image/index2/slider-bgimg.png">
                            <div class="col-xl-11 col-xxl-10 mx-xl-auto height-md-100 d-md-flex flex-md-column align-items-md-start justify-content-md-center plr-15 plr-md-30 slider-text-info">
                                <div class="slider-sub-title dominant-color font-18 text-uppercase meb-6 meb-sm-14 meb-xl-17 meb-xxl-20">Best starting price $18.00</div>
                                <h2 class="font-32 font-sm-40 font-xl-64 font-xxl-72 section-heading-family section-heading-text section-heading-weight section-heading-lh">Earrings that glow elegantly</h2>
                                <div class="slider-feature mst-26 mst-sm-34 mst-xl-40 mst-xxl-43">
                                    <ul class="ul-mt30">
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-2.1.png" class="width-40 img-fluid" alt="slider-2.1">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Teardrop diamond</h6>
                                                    <p class="d-block mst-4">It is a long established</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-2.2.png" class="width-40 img-fluid" alt="slider-2.2">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Marquise diamond</h6>
                                                    <p class="d-block mst-4">It is a long established</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a href="collection.html" class="btn-style dominant-btn mst-23 mst-sm-33 mst-xl-43 mst-xxl-48">Shop collecion</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-md-6">
                            <div class="slider-image height-md-100">
                                <img src="assets/image/index2/slider-3.jpg" class="w-100 height-md-100 img-fluid" alt="slider-3">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 section-ptb body-bg bg-img" data-bgimg="assets/image/index2/slider-bgimg.png">
                            <div class="col-xl-11 col-xxl-10 mx-xl-auto height-md-100 d-md-flex flex-md-column align-items-md-start justify-content-md-center plr-15 plr-md-30 slider-text-info">
                                <div class="slider-sub-title dominant-color font-18 text-uppercase meb-6 meb-sm-14 meb-xl-17 meb-xxl-20">Best starting price $18.00</div>
                                <h2 class="font-32 font-sm-40 font-xl-64 font-xxl-72 section-heading-family section-heading-text section-heading-weight section-heading-lh">Pearlsets that feel timeless</h2>
                                <div class="slider-feature mst-26 mst-sm-34 mst-xl-40 mst-xxl-43">
                                    <ul class="ul-mt30">
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-3.1.png" class="width-40 img-fluid" alt="slider-3.1">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Round diamond</h6>
                                                    <p class="d-block mst-4">It is a long established</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-3.2.png" class="width-40 img-fluid" alt="slider-3.2">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Baroque diamond</h6>
                                                    <p class="d-block mst-4">It is a long established</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a href="collection.html" class="btn-style dominant-btn mst-23 mst-sm-33 mst-xl-43 mst-xxl-48">Shop collecion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-buttons d-none">
                <div class="swiper-buttons-wrap">
                    <button type="button" class="swiper-prev swiper-prev-homeslider" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                    <button type="button" class="swiper-next swiper-next-homeslider" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                </div>
            </div>
            <div class="swiper-dots d-none position-absolute bottom-0 start-50 translate-middle-x z-1 meb-15 meb-sm-30">
                <div class="swiper-pagination swiper-pagination-homeslider d-flex flex-wrap"></div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->
    <!-- category-slider start -->
    <section class="category-slider section-ptb extra-bg">
        <div class="container">
            <div class="cat-block position-relative">
                <div class="cat-dot position-absolute start-0 width-16 height-16 rounded-circle"></div>
                <div class="cat-dot position-absolute end-0 width-16 height-16 rounded-circle"></div>
                <div class="cat-block-wrap">
                    <div class="cat-category">
                        <div class="section-capture text-center" data-animate="animate__fadeIn">
                            <div class="section-title">
                                <h2 class="section-heading">Shop by diamond</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="cat-wrap">
                                    <div class="cat-slider swiper" id="cat-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-1.png" class="width-64 img-fluid" alt="cat-1"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Round shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-2.png" class="width-64 img-fluid" alt="cat-2"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Princess shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-3.png" class="width-64 img-fluid" alt="cat-3"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Oval shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-4.png" class="width-64 img-fluid" alt="cat-4"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Marquise shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-5.png" class="width-64 img-fluid" alt="cat-5"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Emerald shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-6.png" class="width-64 img-fluid" alt="cat-6"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Radiant shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-7.png" class="width-64 img-fluid" alt="cat-7"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="primary-link">Heart shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none primary-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons">
                                        <div class="swiper-buttons-wrap">
                                            <button type="button" class="swiper-prev swiper-prev-cat" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                            <button type="button" class="swiper-next swiper-next-cat" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper-dots" data-animate="animate__fadeIn">
                                        <div class="swiper-pagination swiper-pagination-cat"></div>
                                    </div>
                                    <div class="view-button d-none" data-animate="animate__fadeIn">
                                        <a href="{{route('store.index')}}" class="btn-style secondary-btn">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-slider end -->
    <!-- category-slider end -->
    <!-- collection-tab start -->
    <section class="collection-tab section-ptb extra-bg bst">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="section-capture mb-xl-0 text-center text-xl-start">
                        <div class="section-title" data-animate="animate__fadeIn">
                            <h2 class="section-heading">Best a collection jewellery catalog</h2>
                        </div>
                        <div class="tab mst-13 mst-sm-23 mst-xl-40" data-animate="animate__fadeIn">
                            <ul class="nav nav-tabs flex-xl-column justify-content-center border-0" role="tablist">
                                @foreach($categories as $index => $category)
                                    <li role="presentation">
                                    <a href="#tab{{ $index + 1 }}" data-bs-toggle="tab" class="d-block {{ $loop->first ? 'show active' : '' }}" role="tab">
                                        <span class="collection-tab-title-mobile d-inline-block d-xl-none">{{ $category->name }}</span>
                                        <div class="collection-tab-title-desktop d-none d-xl-flex flex-wrap">
                                            <span class="collection-tab-img width-48"><img src="assets/image/index2/collection-tab1.png" class="w-100 img-fluid" alt="collection-tab1"></span>
                                            <div class="collection-tab-title width-calc-96 plr-15">
                                                <h6 class="font-18">{{ $category->name }}</h6>
                                                <p class="d-block mst-4">Only up to 60% off</p>
                                            </div>
                                            <div class="collection-tab-counter-icon width-48">
                                                <div class="position-relative width-48 height-48 d-flex align-items-center justify-content-center extra-bg border-full rounded-circle overflow-hidden">
                                                    <span class="collection-tab-counter dominant-color">{{ $category->products_count }}+</span>
                                                    <span class="collection-tab-icon extra-color icon-16 position-absolute top-0 end-0 bottom-0 start-0 d-flex align-items-center justify-content-center z-1"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="view-button d-none d-xl-block text-xl-start" data-animate="animate__fadeIn">
                        <a href="{{route('store.index')}}" class="btn-style secondary-btn">View catalog</a>
                    </div>
                </div>

                @php
                    // These are your static homepage banners (not from DB)
                    $banners = [
                        ['assets/image/index2/collection-banner1.1.jpg', 'assets/image/index2/collection-banner1.2.jpg'],
                        ['assets/image/index2/collection-banner2.1.jpg', 'assets/image/index2/collection-banner2.2.jpg'],
                        ['assets/image/index2/collection-banner3.1.jpg', 'assets/image/index2/collection-banner3.2.jpg'],
                    ];
                @endphp

                <div class="col-12 col-xl-8">
                    <div class="tab-content">
                        @foreach($categories as $index => $category)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="tab{{ $index + 1 }}">
                                <div class="collection-banner">
                                    <div class="row row-mtm">
                                        @foreach($banners[$index] as $banner)
                                            <div class="col-6" data-animate="animate__fadeIn">
                                                <!-- ✅ Dynamic link to category products -->
                                                <a href="{{ route('store.index', ['category' => $category->slug]) }}"
                                                   class="d-block position-relative br-hidden">
                                                    <img src="{{ asset($banner) }}"
                                                         class="w-100 img-fluid"
                                                         alt="{{ $category->name }} banner">

                                                    <span class="collection-banner-label secondary-color position-absolute bottom-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 text-center text-uppercase heading-weight lh-1 rounded-circle">
                                                        Only<span class="dominant-color mst-6 text-uppercase">$15.00</span>
                                                    </span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="view-button d-xl-none" data-animate="animate__fadeIn">
                        <a href="{{route('store.index')}}" class="btn-style secondary-btn">View catalog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection-tab end -->
    <!-- category-product start -->
    <section class="category-product section-ptb">
        <div class="container-fluid">
            <div class="collection-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Trending product</h2>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="collection-slider swiper" id="trend-product-slider">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="{{ route('store.product.show', $product->slug) }}" class="pro-img">
                                                        <img src="{{ asset('storage/' . $product->images[0]->path) }}" class="w-100 img-fluid img1" alt="{{$product->title}}">
                                                        <img src="{{ asset('storage/' . $product->images[1]->path) }}" class="w-100 img-fluid img2" alt="{{$product->title}}">
                                                    </a>
                                                    <div class="product-action">
{{--                                                        <a href="javascript:void(0)" class="add-to-wishlist">--}}
{{--                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>--}}
{{--                                                            <span class="tooltip-text">wishlist</span>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="product-comparison.html" class="add-to-compare">--}}
{{--                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>--}}
{{--                                                            <span class="tooltip-text">compare</span>--}}
{{--                                                        </a>--}}
                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">quickview</span>
                                                        </a>
                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                            <span class="tooltip-text">add to cart</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-cat-variant">
                                                    <div class="pro-cat-variant">
                                                        <div class="product-cat">
                                                            <span class="d-block">{{$product->category->name}}</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="gleam-band-color" class="cust-checkbox" value="aliceblue" checked>
                                                                        <span class="d-block cust-check aliceblue"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="gleam-band-color" class="cust-checkbox" value="antiquewhite">
                                                                        <span class="d-block cust-check antiquewhite"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="gleam-band-color" class="cust-checkbox" value="azure">
                                                                        <span class="d-block cust-check azure"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="product-title">
                                                    <span class="d-block heading-weight"><a href="{{ route('store.product.show', $product->slug) }}" class="d-block w-100 dominant-link text-truncate">{{$product->title}}</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">₦{{ number_format($product->price, 0) }}</span>
                                                        @if($product->old_price)
                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">₦{{ number_format($product->old_price, 0) }}</span></span>
                                                        @else
                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">₦{{ number_format(0, 0) }}</span></span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="product-ratting">
                                                            <span class="review-ratting">
                                                                <span class="review-star">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-line"></i>
                                                                </span>
                                                                <span class="review-caption">No reviews</span>
                                                            </span>
                                                </div>
                                                <div class="product-description">
                                                    <p>{{$product->description}}</p>
                                                </div>
                                                <div class="product-action">
{{--                                                    <a href="javascript:void(0)" class="add-to-wishlist">--}}
{{--                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>--}}
{{--                                                        <span class="tooltip-text">wishlist</span>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="product-comparison.html" class="add-to-compare">--}}
{{--                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>--}}
{{--                                                        <span class="tooltip-text">compare</span>--}}
{{--                                                    </a>--}}
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-trend-product" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                            <button type="button" class="swiper-next swiper-next-trend-product" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-trend-product"></div>
                    </div>
                    <div class="view-button d-none" data-animate="animate__fadeIn">
                        <a href="collection.html" class="btn-style secondary-btn">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-product end -->
    <!-- brand-logo start -->
    <div class="brand-logo section-pt extra-bg">
        <div class="container">
            <div class="brand-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="brand-logo-text ptb-14">
                        <h6 class="font-18">Greatest prices and deals save <span class="dominant-color text-uppercase blinking">20%off</span> men & women store.</h6>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-slider swiper" id="brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="brand-content text-center">
                                    <a href="collection.html" class="d-block">
                                        <span class="d-inline-block width-120 mx-auto"><img src="assets/image/index2/brand-logo1.png" class="w-100 img-fluid" alt="brand-logo1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="brand-content text-center">
                                    <a href="collection.html" class="d-block">
                                        <span class="d-inline-block width-120 mx-auto"><img src="assets/image/index2/brand-logo2.png" class="w-100 img-fluid" alt="brand-logo2"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="brand-content text-center">
                                    <a href="collection.html" class="d-block">
                                        <span class="d-inline-block width-120 mx-auto"><img src="assets/image/index2/brand-logo3.png" class="w-100 img-fluid" alt="brand-logo3"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="brand-content text-center">
                                    <a href="collection.html" class="d-block">
                                        <span class="d-inline-block width-120 mx-auto"><img src="assets/image/index2/brand-logo4.png" class="w-100 img-fluid" alt="brand-logo4"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="brand-content text-center">
                                    <a href="collection.html" class="d-block">
                                        <span class="d-inline-block width-120 mx-auto"><img src="assets/image/index2/brand-logo5.png" class="w-100 img-fluid" alt="brand-logo5"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <!-- brand-logo end -->--}}
{{--    <!-- home-about start -->--}}
    <section class="home-about section-ptb extra-bg">
        <div class="container">
            <div class="d-flex flex-wrap br-hidden">
                <div class="col-12 col-lg-4 bg-img dominant-bg text-center text-lg-start" data-bgimg="assets/image/index2/home-about-bgpattern.png" data-animate="animate__fadeIn">
                    <div class="height-lg-100 d-lg-flex flex-lg-column align-items-lg-start justify-content-lg-between ptb-30 ptb-xl-50 plr-15 plr-sm-30 plr-xxl-50">
                        <div class="home-about-content">
                            <span class="d-inline-block width-88 spin"><img src="assets/image/index2/home-about-label.png" class="w-100 img-fluid" alt="home-about-label"></span>
                            <h2 class="section-heading text-white mst-14 mst-xl-19">The earrings save only 20%</h2>
                            <p class="text-white mst-20 mst-xl-28">The point of using lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using.</p>
                        </div>
                        <div class="mst-23">
                            <a href="about-us.html" class="btn-style tertiary-btn">About story</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-animate="animate__fadeIn">
                    <div class="home-about-banner height-md-100">
                        <img src="assets/image/index2/home-about-banner.jpg" class="w-100 height-md-100 img-fluid" alt="home-about-banner">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 body-bg position-relative z-1 text-center overflow-hidden" data-animate="animate__fadeIn">
                    <div class="height-lg-100 d-lg-flex flex-lg-column align-items-lg-center justify-content-lg-between ptb-30 ptb-xl-50 plr-15 plr-sm-30 plr-xxl-50">
                        <div class="home-about-collection">
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2 class="section-heading">Diamond ring!</h2>
                                </div>
                            </div>
                            <span class="d-inline-block"><img src="assets/image/index2/home-about-img.png" class="w-100 img-fluid" alt="home-about-img"></span>
                        </div>
                        <div class="view-button">
                            <a href="collection.html" class="btn-style secondary-btn">Shop now</a>
                        </div>
                    </div>
                    <div class="home-about-text-img position-absolute bottom-0 start-0 end-0 z-n1">
                        <img src="assets/image/index2/home-about-bgimg.png" class="w-100 img-fluid" alt="home-about-bgimg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about end -->
    <!-- testimonial start -->
    <!-- testimonial start -->
    <section class="testimonial section-ptb">
        <div class="container">
            <div class="testi-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Happy client say</h2>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="testi-slider swiper" id="testi-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="testi-content extra-bg br-hidden">
                                    <div class="row">
                                        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-md-center ptb-30 text-center text-md-start">
                                            <div class="plr-15 plr-sm-30 per-md-0">
                                                <span class="extra-color product-label-discount d-inline-flex align-items-center ptb-5 plr-15 meb-23 border-radius"><i class="ri-star-fill font-12 mer-5"></i>5.0</span>
                                                <p>Exquisite craftsmanship and timeless designs! Absolutely love these pieces.</p>
                                                <div class="mst-16">
                                                    <span class="primary-color font-32 extra-font fw-normal">Wesley bates</span>
                                                    <h6 class="font-18 mst-6">Luxury expert</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-md-flex align-items-md-end text-center">
                                            <img src="assets/image/index2/testi-1.png" class="w-100 img-fluid" alt="testi-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="testi-content extra-bg br-hidden">
                                    <div class="row">
                                        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-md-center ptb-30 text-center text-md-start">
                                            <div class="plr-15 plr-sm-30 per-md-0">
                                                <span class="extra-color product-label-discount d-inline-flex align-items-center ptb-5 plr-15 meb-23 border-radius"><i class="ri-star-fill font-12 mer-5"></i>4.0</span>
                                                <p>Elegant and trendy jewelry that enhances any outfit. A must-have collection!</p>
                                                <div class="mst-16">
                                                    <span class="primary-color font-32 extra-font fw-normal">Carla houston</span>
                                                    <h6 class="font-18 mst-6">Fashion stylist</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-md-flex align-items-md-end text-center">
                                            <img src="assets/image/index2/testi-2.png" class="w-100 img-fluid" alt="testi-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="testi-content extra-bg br-hidden">
                                    <div class="row">
                                        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-md-center ptb-30 text-center text-md-start">
                                            <div class="plr-15 plr-sm-30 per-md-0">
                                                <span class="extra-color product-label-discount d-inline-flex align-items-center ptb-5 plr-15 meb-23 border-radius"><i class="ri-star-fill font-12 mer-5"></i>4.0</span>
                                                <p>Brilliant quality and intricate details. These designs truly stand out!</p>
                                                <div class="mst-16">
                                                    <span class="primary-color font-32 extra-font fw-normal">Ashley rosa</span>
                                                    <h6 class="font-18 mst-6">Jewelry designer</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-md-flex align-items-md-end text-center">
                                            <img src="assets/image/index2/testi-3.png" class="w-100 img-fluid" alt="testi-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="testi-content extra-bg br-hidden">
                                    <div class="row">
                                        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-md-center ptb-30 text-center text-md-start">
                                            <div class="plr-15 plr-sm-30 per-md-0">
                                                <span class="extra-color product-label-discount d-inline-flex align-items-center ptb-5 plr-15 meb-23 border-radius"><i class="ri-star-fill font-12 mer-5"></i>4.0</span>
                                                <p>Brilliant quality and intricate details. These designs truly stand out!</p>
                                                <div class="mst-16">
                                                    <span class="primary-color font-32 extra-font fw-normal">Lisa resnick</span>
                                                    <h6 class="font-18 mst-6">Gemstone specialist</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-md-flex align-items-md-end text-center">
                                            <img src="assets/image/index2/testi-4.png" class="w-100 img-fluid" alt="testi-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-testi" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                            <button type="button" class="swiper-next swiper-next-testi" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-testi"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->
    <!-- testimonial end -->
    <!-- service-area start -->
    <section class="service-area section-ptb bst">
        <div class="container">
            <div class="row row-mtm justify-content-md-center">
                <div class="col-12 col-md-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex flex-column align-items-center text-center">
                        <span class="service-icon dominant-color icon-40"><i class="ri-box-3-line d-block lh-1"></i></span>
                        <div class="service-text mst-25">
                            <h6 class="font-18">100% Hallmark</h6>
                            <p class="d-block mst-8">Every piece you get fully check</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex flex-column align-items-center text-center">
                        <span class="service-icon dominant-color icon-40"><i class="ri-truck-line d-block lh-1"></i></span>
                        <div class="service-text mst-25">
                            <h6 class="font-18">Free shipping</h6>
                            <p class="d-block mst-8">We ship for free a 100% safe</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex flex-column align-items-center text-center">
                        <span class="service-icon dominant-color icon-40"><i class="ri-reset-right-line d-block lh-1"></i></span>
                        <div class="service-text mst-25">
                            <h6 class="font-18">30 Days return</h6>
                            <p class="d-block mst-8">If ever feel like exchange</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex flex-column align-items-center text-center">
                        <span class="service-icon dominant-color icon-40"><i class="ri-store-2-line d-block lh-1"></i></span>
                        <div class="service-text mst-25">
                            <h6 class="font-18">24x7 live support</h6>
                            <p class="d-block mst-8">Every time customer support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-area end -->
    <!-- blog-area start -->
    <section class="blog-area section-ptb extra-bg">
        <div class="container">
            <div class="blog-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Every recent blog</h2>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="blog-slider swiper" id="blog-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="article-left.html" class="d-block banner-img position-relative br-hidden">
                                            <img src="assets/image/index2/article/a-1.jpg" class="w-100 img-fluid" alt="a-1">
                                            <span class="secondary-color font-20 position-absolute start-0 bottom-0 width-64 height-64 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 msl-20 meb-20 text-center heading-weight lh-1 border-radius">25<span class="dominant-color font-12 mst-5 text-uppercase">Nov</span></span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content pst-15">
                                        <h6 class="font-18">Gold ring best for you</h6>
                                        <p class="mst-8">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator!</p>
                                        <a href="article-left.html" class="btn-style secondary-btn mst-13">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="article-left.html" class="d-block banner-img position-relative br-hidden">
                                            <img src="assets/image/index2/article/a-2.jpg" class="w-100 img-fluid" alt="a-2">
                                            <span class="secondary-color font-20 position-absolute start-0 bottom-0 width-64 height-64 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 msl-20 meb-20 text-center heading-weight lh-1 border-radius">25<span class="dominant-color font-12 mst-5 text-uppercase">Nov</span></span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content pst-15">
                                        <h6 class="font-18">Shiny gems look so new</h6>
                                        <p class="mst-8">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator!</p>
                                        <a href="article-left.html" class="btn-style secondary-btn mst-13">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="article-left.html" class="d-block banner-img position-relative br-hidden">
                                            <img src="assets/image/index2/article/a-3.jpg" class="w-100 img-fluid" alt="a-3">
                                            <span class="secondary-color font-20 position-absolute start-0 bottom-0 width-64 height-64 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 msl-20 meb-20 text-center heading-weight lh-1 border-radius">25<span class="dominant-color font-12 mst-5 text-uppercase">Nov</span></span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content pst-15">
                                        <h6 class="font-18">Fine hoop drop nice set</h6>
                                        <p class="mst-8">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator!</p>
                                        <a href="article-left.html" class="btn-style secondary-btn mst-13">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="article-left.html" class="d-block banner-img position-relative br-hidden">
                                            <img src="assets/image/index2/article/a-4.jpg" class="w-100 img-fluid" alt="a-4">
                                            <span class="secondary-color font-20 position-absolute start-0 bottom-0 width-64 height-64 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 msl-20 meb-20 text-center heading-weight lh-1 border-radius">25<span class="dominant-color font-12 mst-5 text-uppercase">Nov</span></span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content pst-15">
                                        <h6 class="font-18">Pure glow band top pick</h6>
                                        <p class="mst-8">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator!</p>
                                        <a href="article-left.html" class="btn-style secondary-btn mst-13">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="article-left.html" class="d-block banner-img position-relative br-hidden">
                                            <img src="assets/image/index2/article/a-5.jpg" class="w-100 img-fluid" alt="a-5">
                                            <span class="secondary-color font-20 position-absolute start-0 bottom-0 width-64 height-64 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 msl-20 meb-20 text-center heading-weight lh-1 border-radius">25<span class="dominant-color font-12 mst-5 text-uppercase">Nov</span></span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content pst-15">
                                        <h6 class="font-18">Necklace gift for her now</h6>
                                        <p class="mst-8">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator!</p>
                                        <a href="article-left.html" class="btn-style secondary-btn mst-13">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="article-left.html" class="d-block banner-img position-relative br-hidden">
                                            <img src="assets/image/index2/article/a-6.jpg" class="w-100 img-fluid" alt="a-6">
                                            <span class="secondary-color font-20 position-absolute start-0 bottom-0 width-64 height-64 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 msl-20 meb-20 text-center heading-weight lh-1 border-radius">25<span class="dominant-color font-12 mst-5 text-uppercase">Nov</span></span>
                                        </a>
                                    </div>
                                    <div class="blog-post-content pst-15">
                                        <h6 class="font-18">Charm studs love this buy</h6>
                                        <p class="mst-8">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator!</p>
                                        <a href="article-left.html" class="btn-style secondary-btn mst-13">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-blog" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                            <button type="button" class="swiper-next swiper-next-blog" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-blog"></div>
                    </div>
                    <div class="view-button d-none" data-animate="animate__fadeIn">
                        <a href="blog.html" class="btn-style secondary-btn">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->
@endsection
