@extends('layouts.master', [
    $title = 'Welcome',
])

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
                                <div class="slider-sub-title dominant-color font-18 text-uppercase meb-6 meb-sm-14 meb-xl-17 meb-xxl-20">Best starting price $18.00</div>
                                <h2 class="font-32 font-sm-40 font-xl-64 font-xxl-72 section-heading-family section-heading-text section-heading-weight section-heading-lh">Necklaces that look stunning</h2>
                                <div class="slider-feature mst-26 mst-sm-34 mst-xl-40 mst-xxl-43">
                                    <ul class="ul-mt30">
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-1.1.png" class="width-40 img-fluid" alt="slider-1.1">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Oval diamond</h6>
                                                    <p class="d-block mst-4">It is a long established</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start">
                                                <img src="assets/image/index2/slider-1.2.png" class="width-40 img-fluid" alt="slider-1.2">
                                                <div class="psl-15">
                                                    <h6 class="font-18">Princess diamond</h6>
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
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Round shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-2.png" class="width-64 img-fluid" alt="cat-2"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Princess shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-3.png" class="width-64 img-fluid" alt="cat-3"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Oval shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-4.png" class="width-64 img-fluid" alt="cat-4"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Marquise shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-5.png" class="width-64 img-fluid" alt="cat-5"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Emerald shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-6.png" class="width-64 img-fluid" alt="cat-6"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Radiant shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="cat-content text-center">
                                                    <a href="collection.html" class="d-block cat-content-img position-relative pbp-100">
                                                        <span class="cat-img position-absolute top-0 end-0 bottom-0 start-0 d-flex flex-column align-items-center justify-content-center body-bg mtb-xl-25 mlr-xl-25 rounded-circle"><img src="assets/image/index2/cat-7.png" class="width-64 img-fluid" alt="cat-7"></span>
                                                        <div class="d-none cat-link position-absolute top-0 end-0 bottom-0 start-0 z-1 d-xl-flex align-items-center justify-content-center rounded-circle overflow-hidden"><span class="cat-link-btn extra-color text-uppercase heading-weight">Shop now</span></div>
                                                    </a>
                                                    <h6 class="font-18 mst-26"><a href="collection.html" class="dominant-link">Heart shape</a></h6>
                                                    <a href="collection.html" class="d-inline-block d-xl-none dominant-link text-uppercase heading-weight mst-12"><span class="d-inline-block cat-link-btn">Shop now</span></a>
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
                                        <a href="collections.html" class="btn-style secondary-btn">See more</a>
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
                                <li role="presentation">
                                    <a href="#tab1" data-bs-toggle="tab" class="d-block show active" role="tab">
                                        <span class="collection-tab-title-mobile d-inline-block d-xl-none">Rings</span>
                                        <div class="collection-tab-title-desktop d-none d-xl-flex flex-wrap">
                                            <span class="collection-tab-img width-48"><img src="assets/image/index2/collection-tab1.png" class="w-100 img-fluid" alt="collection-tab1"></span>
                                            <div class="collection-tab-title width-calc-96 plr-15">
                                                <h6 class="font-18">Rings</h6>
                                                <p class="d-block mst-4">Only up to 60% off</p>
                                            </div>
                                            <div class="collection-tab-counter-icon width-48">
                                                <div class="position-relative width-48 height-48 d-flex align-items-center justify-content-center extra-bg border-full rounded-circle overflow-hidden">
                                                    <span class="collection-tab-counter dominant-color">8+</span>
                                                    <span class="collection-tab-icon extra-color icon-16 position-absolute top-0 end-0 bottom-0 start-0 d-flex align-items-center justify-content-center z-1"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab2" data-bs-toggle="tab" class="d-block" role="tab">
                                        <span class="collection-tab-title-mobile d-inline-block d-xl-none">Earrings</span>
                                        <div class="collection-tab-title-desktop d-none d-xl-flex flex-wrap">
                                            <span class="collection-tab-img width-48"><img src="assets/image/index2/collection-tab2.png" class="w-100 img-fluid" alt="collection-tab2"></span>
                                            <div class="collection-tab-title width-calc-96 plr-15">
                                                <h6 class="font-18">Earrings</h6>
                                                <p class="d-block mst-4">Only up to 20% off</p>
                                            </div>
                                            <div class="collection-tab-counter-icon width-48">
                                                <div class="position-relative width-48 height-48 d-flex align-items-center justify-content-center extra-bg border-full rounded-circle overflow-hidden">
                                                    <span class="collection-tab-counter dominant-color">9+</span>
                                                    <span class="collection-tab-icon extra-color icon-16 position-absolute top-0 end-0 bottom-0 start-0 d-flex align-items-center justify-content-center z-1"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab3" data-bs-toggle="tab" class="d-block" role="tab">
                                        <span class="collection-tab-title-mobile d-inline-block d-xl-none">Bracelet</span>
                                        <div class="collection-tab-title-desktop d-none d-xl-flex flex-wrap">
                                            <span class="collection-tab-img width-48"><img src="assets/image/index2/collection-tab3.png" class="w-100 img-fluid" alt="collection-tab3"></span>
                                            <div class="collection-tab-title width-calc-96 plr-15">
                                                <h6 class="font-18">Bracelet</h6>
                                                <p class="d-block mst-4">Only up to 15% off</p>
                                            </div>
                                            <div class="collection-tab-counter-icon width-48">
                                                <div class="position-relative width-48 height-48 d-flex align-items-center justify-content-center extra-bg border-full rounded-circle overflow-hidden">
                                                    <span class="collection-tab-counter dominant-color">15+</span>
                                                    <span class="collection-tab-icon extra-color icon-16 position-absolute top-0 end-0 bottom-0 start-0 d-flex align-items-center justify-content-center z-1"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-button d-none d-xl-block text-xl-start" data-animate="animate__fadeIn">
                        <a href="collections.html" class="btn-style secondary-btn">View catalog</a>
                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab1">
                            <div class="collection-banner">
                                <div class="row row-mtm">
                                    <div class="col-6" data-animate="animate__fadeIn">
                                        <a href="collection.html" class="d-block position-relative br-hidden">
                                            <img src="assets/image/index2/collection-banner1.1.jpg" class="w-100 img-fluid" alt="collection-banner1.1">
                                            <span class="collection-banner-label secondary-color position-absolute bottom-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 mer-sm-30 mer-xxl-50 meb-15 meb-sm-30 meb-xl-50 text-center text-uppercase heading-weight lh-1 rounded-circle">Only<span class="dominant-color mst-6 text-uppercase">$15.00</span></span>
                                        </a>
                                    </div>
                                    <div class="col-6" data-animate="animate__fadeIn">
                                        <a href="collection.html" class="d-block position-relative br-hidden">
                                            <img src="assets/image/index2/collection-banner1.2.jpg" class="w-100 img-fluid" alt="collection-banner1.2">
                                            <span class="collection-banner-label secondary-color position-absolute top-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 mer-sm-30 mer-xxl-50 mst-15 mst-sm-30 mst-xl-50 text-center text-uppercase heading-weight lh-1 rounded-circle">Only<span class="dominant-color mst-6 text-uppercase">$8.00</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <div class="collection-banner">
                                <div class="row row-mtm">
                                    <div class="col-6" data-animate="animate__fadeIn">
                                        <a href="collection.html" class="d-block position-relative br-hidden">
                                            <img src="assets/image/index2/collection-banner2.1.jpg" class="w-100 img-fluid" alt="collection-banner2.1">
                                            <span class="collection-banner-label secondary-color position-absolute bottom-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 mer-sm-30 mer-xxl-50 meb-15 meb-sm-30 meb-xl-50 text-center text-uppercase heading-weight lh-1 rounded-circle">Only<span class="dominant-color mst-6 text-uppercase">$15.00</span></span>
                                        </a>
                                    </div>
                                    <div class="col-6" data-animate="animate__fadeIn">
                                        <a href="collection.html" class="d-block position-relative br-hidden">
                                            <img src="assets/image/index2/collection-banner2.2.jpg" class="w-100 img-fluid" alt="collection-banner2.2">
                                            <span class="collection-banner-label secondary-color position-absolute top-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 mer-sm-30 mer-xxl-50 mst-15 mst-sm-30 mst-xl-50 text-center text-uppercase heading-weight lh-1 rounded-circle">Only<span class="dominant-color mst-6 text-uppercase">$8.00</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            <div class="collection-banner">
                                <div class="row row-mtm">
                                    <div class="col-6" data-animate="animate__fadeIn">
                                        <a href="collection.html" class="d-block position-relative br-hidden">
                                            <img src="assets/image/index2/collection-banner3.1.jpg" class="w-100 img-fluid" alt="collection-banner3.1">
                                            <span class="collection-banner-label secondary-color position-absolute bottom-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 mer-sm-30 mer-xxl-50 meb-15 meb-sm-30 meb-xl-50 text-center text-uppercase heading-weight lh-1 rounded-circle">Only<span class="dominant-color mst-6 text-uppercase">$15.00</span></span>
                                        </a>
                                    </div>
                                    <div class="col-6" data-animate="animate__fadeIn">
                                        <a href="collection.html" class="d-block position-relative br-hidden">
                                            <img src="assets/image/index2/collection-banner3.2.jpg" class="w-100 img-fluid" alt="collection-banner3.2">
                                            <span class="collection-banner-label secondary-color position-absolute top-0 end-0 width-80 height-80 d-flex flex-column align-items-center justify-content-center extra-bg ptb-5 plr-5 mer-15 mer-sm-30 mer-xxl-50 mst-15 mst-sm-30 mst-xl-50 text-center text-uppercase heading-weight lh-1 rounded-circle">Only<span class="dominant-color mst-6 text-uppercase">$8.00</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-button d-xl-none" data-animate="animate__fadeIn">
                        <a href="collections.html" class="btn-style secondary-btn">View catalog</a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-1.jpg" class="w-100 img-fluid img1" alt="p-1">
                                                        <img src="assets/image/index2/product/p-2.jpg" class="w-100 img-fluid img2" alt="p-2">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Ring / Shine</span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gleam band</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$79.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$89.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-3.jpg" class="w-100 img-fluid img1" alt="p-3">
                                                        <img src="assets/image/index2/product/p-4.jpg" class="w-100 img-fluid img2" alt="p-4">
                                                        <span class="product-label product-label-new product-label-left">New</span>
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Ears / Glow</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="luxe-loop-color" class="cust-checkbox" value="beige" checked>
                                                                        <span class="d-block cust-check beige"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="luxe-loop-color" class="cust-checkbox" value="bisque">
                                                                        <span class="d-block cust-check bisque"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="luxe-loop-color" class="cust-checkbox" value="black">
                                                                        <span class="d-block cust-check black"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Luxe loop</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$49.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$59.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-5.jpg" class="w-100 img-fluid img1" alt="p-5">
                                                        <img src="assets/image/index2/product/p-6.jpg" class="w-100 img-fluid img2" alt="p-6">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Ears / Glow</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="opal-stud-color" class="cust-checkbox" value="cadetblue" checked>
                                                                        <span class="d-block cust-check cadetblue"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="opal-stud-color" class="cust-checkbox" value="chocolate">
                                                                        <span class="d-block cust-check chocolate"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="opal-stud-color" class="cust-checkbox" value="coral">
                                                                        <span class="d-block cust-check coral"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Opal stud</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$69.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$79.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-7.jpg" class="w-100 img-fluid img1" alt="p-7">
                                                        <img src="assets/image/index2/product/p-8.jpg" class="w-100 img-fluid img2" alt="p-8">
                                                        <span class="product-label product-label-discount product-label-left">-5% off</span>
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Ears / Bold</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="ruby-hoop-color" class="cust-checkbox" value="darkcyan" checked>
                                                                        <span class="d-block cust-check darkcyan"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="ruby-hoop-color" class="cust-checkbox" value="darkgoldenrod">
                                                                        <span class="d-block cust-check darkgoldenrod"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="ruby-hoop-color" class="cust-checkbox" value="darkgray">
                                                                        <span class="d-block cust-check darkgray"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Ruby hoop</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$49.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$54.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-9.jpg" class="w-100 img-fluid img1" alt="p-9">
                                                        <img src="assets/image/index2/product/p-10.jpg" class="w-100 img-fluid img2" alt="p-10">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Neck / Soft</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="pearl-link-color" class="cust-checkbox" value="floralwhite" checked>
                                                                        <span class="d-block cust-check floralwhite"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="pearl-link-color" class="cust-checkbox" value="gainsboro">
                                                                        <span class="d-block cust-check gainsboro"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="pearl-link-color" class="cust-checkbox" value="ghostwhite">
                                                                        <span class="d-block cust-check ghostwhite"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Pearl link</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$89.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$99.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-11.jpg" class="w-100 img-fluid img1" alt="p-11">
                                                        <img src="assets/image/index2/product/p-12.jpg" class="w-100 img-fluid img2" alt="p-12">
                                                        <span class="product-label product-label-sale product-label-left">Sale</span>
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Wrist / Rich</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="gold-bead-color" class="cust-checkbox" value="gold" checked>
                                                                        <span class="d-block cust-check gold"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="gold-bead-color" class="cust-checkbox" value="honeydew">
                                                                        <span class="d-block cust-check honeydew"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="gold-bead-color" class="cust-checkbox" value="hotpink">
                                                                        <span class="d-block cust-check hotpink"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gold bead</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$79.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$84.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-13.jpg" class="w-100 img-fluid img1" alt="p-13">
                                                        <img src="assets/image/index2/product/p-14.jpg" class="w-100 img-fluid img2" alt="p-14">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Ears / Flow</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="sway-drop-color" class="cust-checkbox" value="ivory" checked>
                                                                        <span class="d-block cust-check ivory"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="sway-drop-color" class="cust-checkbox" value="khaki">
                                                                        <span class="d-block cust-check khaki"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="sway-drop-color" class="cust-checkbox" value="lavender">
                                                                        <span class="d-block cust-check lavender"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Sway drop</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$29.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$39.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-15.jpg" class="w-100 img-fluid img1" alt="p-15">
                                                        <img src="assets/image/index2/product/p-16.jpg" class="w-100 img-fluid img2" alt="p-16">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Neck / Glow</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="star-charm-color" class="cust-checkbox" value="lavenderblush" checked>
                                                                        <span class="d-block cust-check lavenderblush"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="star-charm-color" class="cust-checkbox" value="lemonchiffon">
                                                                        <span class="d-block cust-check lemonchiffon"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="star-charm-color" class="cust-checkbox" value="lightblue">
                                                                        <span class="d-block cust-check lightblue"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Star charm</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$14.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$19.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-17.jpg" class="w-100 img-fluid img1" alt="p-17">
                                                        <img src="assets/image/index2/product/p-18.jpg" class="w-100 img-fluid img2" alt="p-18">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Wrist / Dazz</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="glim-cuff-color" class="cust-checkbox" value="mintcream" checked>
                                                                        <span class="d-block cust-check mintcream"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="glim-cuff-color" class="cust-checkbox" value="navajowhite">
                                                                        <span class="d-block cust-check navajowhite"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="glim-cuff-color" class="cust-checkbox" value="oldlace">
                                                                        <span class="d-block cust-check oldlace"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Glim cuff</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$64.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$74.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-19.jpg" class="w-100 img-fluid img1" alt="p-19">
                                                        <img src="assets/image/index2/product/p-20.jpg" class="w-100 img-fluid img2" alt="p-20">
                                                        <span class="product-label product-label-sold product-label-left">Sold</span>
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">quickview</span>
                                                        </a>
                                                        <a href="javascript:void(0)" class="add-to-cart disabled">
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
                                                            <span class="d-block">Neck / Pure</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="jade-bead-color" class="cust-checkbox" value="palegoldenrod" checked>
                                                                        <span class="d-block cust-check palegoldenrod"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="jade-bead-color" class="cust-checkbox" value="rebeccapurple">
                                                                        <span class="d-block cust-check rebeccapurple"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="jade-bead-color" class="cust-checkbox" value="saddlebrown">
                                                                        <span class="d-block cust-check saddlebrown"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Jade bead</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$34.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$44.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-cart disabled">
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-21.jpg" class="w-100 img-fluid img1" alt="p-21">
                                                        <img src="assets/image/index2/product/p-22.jpg" class="w-100 img-fluid img2" alt="p-22">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Wrist / Flex</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="twist-bangle-color" class="cust-checkbox" value="tan" checked>
                                                                        <span class="d-block cust-check tan"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="twist-bangle-color" class="cust-checkbox" value="violet">
                                                                        <span class="d-block cust-check violet"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="twist-bangle-color" class="cust-checkbox" value="wheat">
                                                                        <span class="d-block cust-check wheat"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Twist bangle</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$4.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$9.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image-col">
                                            <div class="product-image-cat-variant">
                                                <div class="product-image">
                                                    <a href="product.html" class="pro-img">
                                                        <img src="assets/image/index2/product/p-23.jpg" class="w-100 img-fluid img1" alt="p-23">
                                                        <img src="assets/image/index2/product/p-24.jpg" class="w-100 img-fluid img2" alt="p-24">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a href="product-comparison.html" class="add-to-compare">
                                                            <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">compare</span>
                                                        </a>
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
                                                            <span class="d-block">Neck / Luxe</span>
                                                        </div>
                                                        <div class="product-variant color">
                                                            <ul class="ul-mt5">
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="shiny-choke-color" class="cust-checkbox" value="turquoise" checked>
                                                                        <span class="d-block cust-check turquoise"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label disabled">
                                                                        <input type="radio" name="shiny-choke-color" class="cust-checkbox" value="yellow">
                                                                        <span class="d-block cust-check yellow"></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="radio" name="shiny-choke-color" class="cust-checkbox" value="yellowgreen">
                                                                        <span class="d-block cust-check yellowgreen"></span>
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
                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Shiny choke</a></span>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$9.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$14.00</span></span>
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="product-comparison.html" class="add-to-compare">
                                                        <span class="product-icon"><i class="ri-arrow-left-right-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">compare</span>
                                                    </a>
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
    <!-- brand-logo end -->
    <!-- home-about start -->
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
                                                    <span class="dominant-color font-32 extra-font fw-normal">Wesley bates</span>
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
                                                    <span class="dominant-color font-32 extra-font fw-normal">Carla houston</span>
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
                                                    <span class="dominant-color font-32 extra-font fw-normal">Ashley rosa</span>
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
                                                    <span class="dominant-color font-32 extra-font fw-normal">Lisa resnick</span>
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
