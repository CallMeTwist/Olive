@extends('layouts.master', [
])

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/product.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/store-custom.css') }}">
@endpush

@push('cart-js')
    <script src="{{asset('/assets/js/cart.js')}}"></script>
@endpush


@section('breadcrumb')
    <div class="breadcrumb-area ptb-15" data-bgimg="{{asset('/assets/image/other/breadcrumb-bgimg.jpg')}}">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / {{$product->title}} </span>
        </div>
    </div>
@endsection

@section('content')
    <!-- product-detail start -->
    <section class="product-detail section-pt">
        <!-- product prev-next start -->
        <a href="product6.html" class="d-none d-xl-block position-fixed top-50 translate-middle-y z-2 np-product prev">
            <span class="d-block body-secondary-color msl-5 heading-weight text-uppercase lh-1">Prev</span>
        </a>
        <a href="product2.html" class="d-none d-xl-block position-fixed top-50 translate-middle-y z-2 np-product next">
            <span class="d-block body-secondary-color mer-5 heading-weight text-uppercase lh-1">Next</span>
        </a>
        <!-- product prev-next end -->
        <div class="container">
            <div class="row row-mtm align-items-lg-start">
                <div class="col-12 col-lg-6 p-lg-sticky top-0">
                    <!-- product-detail-slider start -->
                    <div class="product-detail-slider per-xxl-10">
                        <div class="row ul-mt15">
                            <div class="col-12" data-animate="animate__fadeIn">
                                <!-- product-img-big start -->
                                <div class="product-img-big slider-big-h position-relative br-hidden">
                                    <div class="swiper" id="slider-big-h">
                                        <div class="swiper-wrapper product-swiper-wrapper">
                                            @foreach ($product->images as $image)
                                                <div class="swiper-slide product-swiper-slide">
                                                    <div class="product-item-img position-relative">
                                                        <a href="{{ asset('storage/' . $image->path) }}"
                                                           class="full-view product-thumbnail heading-color position-absolute top-0 end-0 width-40 height-40 d-flex align-items-center justify-content-center body-bg z-1 mst-15 mer-15 rounded-circle box-shadow"
                                                           aria-label="Image full view">
                                                            <i class="ri-fullscreen-line d-block lh-1"></i>
                                                        </a>

                                                        <img src="{{ asset('storage/' . $image->path) }}"
                                                             data-zoom="{{ asset('storage/' . $image->path) }}"
                                                             class="w-100 img-fluid zoom"
                                                             alt="{{ $product->title }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="swiper-buttons">
                                        <button type="button" class="swiper-prev swiper-prev-big secondary-btn icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                        <button type="button" class="swiper-next swiper-next-big secondary-btn icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                    </div>
                                </div>
                                <!-- product-img-big end -->
                            </div>
                            <div class="col-12" data-animate="animate__fadeIn">
                                <!-- product-img-small start -->
                                <div class="product-img-small slider-small-h">
                                    <div class="swiper" id="slider-small-h">
                                        <div class="swiper-wrapper">
                                            @foreach ($product->images as $image)
                                                <div class="swiper-slide product-swiper-slide">
                                                    <div class="product-item-img br-hidden">
                                                        <a href="javascript:void(0)" class="d-block product-thumbnail">
                                                            <img src="{{ asset('storage/' . $image->path) }}"
                                                                 class="w-100 img-fluid"
                                                                 alt="{{ $product->title }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <!-- product-img-small end -->
                            </div>
                        </div>
                    </div>
                    <!-- product-detail-slider end -->
                </div>
                <div class="col-12 col-lg-6 p-lg-sticky top-0">
                    <!-- product-detail-info start -->
                    <form class="product-detail-info psl-xxl-10">
                        <div class="product-info" data-animate="animate__fadeIn">
                            <div class="product-sku">
                                <span class="font-14 text-uppercase">SKU-{{ $product->sku ?? 'N/A' }}</span>
                            </div>
                        </div>
                        <div class="product-info mst-5" data-animate="animate__fadeIn">
                            <div class="product-title">
                                <h2 class="font-24">{{ $product->title }}</h2>
                            </div>
                        </div>
                        @php
                            $oldPrice = $product->old_price ?? null;
                            $newPrice = $product->price;
                            $discount = $oldPrice && $oldPrice > 0
                                ? round((($oldPrice - $newPrice) / $oldPrice) * 100)
                                : 0;
                        @endphp
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-price">
                                <div class="price-box font-20">
                                    <span class="new-price dominant-color heading-weight">${{ number_format($newPrice, 2) }}</span>
                                    @if ($oldPrice)
                                        <span class="old-price heading-weight">
											<span class="mer-3">~</span>
											<span class="text-decoration-line-through">${{ number_format($oldPrice, 2) }}</span>
										</span>
                                        <span class="discount-price secondary-color">-{{ $discount }}% off</span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-availability">
                                @if ($product->stock > 0)
                                    <span class="d-inline-block text-success">
										<span class="heading-color heading-weight mer-10">Availability:</span>In stock
									</span>
                                @else
                                    <span class="d-inline-block text-danger">
										<span class="heading-color heading-weight mer-10">Availability:</span>Out of stock
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if ($product->stock > 0)
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-stock">
                                <span class="d-inline-block stock-fill text-success ptb-10 plr-15 bg-success heading-weight border-success border-radius">
									Hurry up! only <span class="available-stock">{{ $product->stock }}</span> products left in stock!
									</span>
                            </div>
                        </div>
                        @endif
                        <div class="product-info mst-25" data-animate="animate__fadeIn">
                            <div class="product-border bst"></div>
                        </div>
                        <div class="product-info mst-20" data-animate="animate__fadeIn">
                            <div class="product-desc">
                                <p>{{ $product->description ?? 'No description available.' }}</p>
                            </div>
                        </div>
                        @if ($product->sale_ends_at)
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-timer text-danger ptb-10 plr-15 bg-danger border-danger border-radius countdown" data-time="{{ $product->sale_ends_at->format('Y/m/d H:i:s') }}">
                                <div class="ul-mt10 justify-content-between">
                                    <div class="product-timer-text"><i class="ri-timer-line d-inline-block icon-16 mer-4 blinking"></i><span class="heading-weight">Hurry up! sales end soon!</span></div>
                                    <div class="product-timer-countdown">
                                        <ul class="ul-mt10">
                                            <li>
                                                <span><span class="day heading-weight"></span>d</span>
                                            </li>
                                            <li>
                                                <span><span class="hrs heading-weight"></span>h</span>
                                            </li>
                                            <li>
                                                <span><span class="min heading-weight"></span>m</span>
                                            </li>
                                            <li>
                                                <span><span class="sec heading-weight"></span>s</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <form id="add-to-cart-form"
                              method="POST"
                              action="{{ route('cart.add', $product->id) }}"
                              data-product-id="{{ $product->id }}"
                              class="product-info mst-25"
                              data-animate="animate__fadeIn">
                            @csrf
                            <div class="product-variant">
                                <div class="product-variant-option">
                                    <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Size:</span><a href="#size-modal" data-bs-toggle="modal" class="msl-15 msl-sm-30 text-uppercase heading-weight text-decoration-underline">Size guide</a></span>
                                    <div class="product-option-block size">
                                        <ul class="ul-mt5">
                                            @foreach ($product->available_sizes ?? [] as $size)
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input
                                                            type="radio"
                                                            name="size"
                                                            class="cust-checkbox"
                                                            value="{{ $size }}">
                                                        <span class="d-block cust-check border-full border-radius">
                                                            {{ $size }}
                                                        </span>
                                                    </label>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>

{{--                            --}}{{-- Size selector --}}
{{--                            @if(!empty($product->available_sizes))--}}
{{--                                <div class="product-sizes mst-20">--}}
{{--                                    <span class="heading-color heading-weight mer-10">Size:</span>--}}
{{--                                    <ul class="d-flex flex-wrap gap-2 list-unstyled">--}}
{{--                                        @foreach ($product->available_sizes as $size)--}}
{{--                                            <li>--}}
{{--                                                <label class="cust-checkbox-label">--}}
{{--                                                    <input--}}
{{--                                                        type="radio"--}}
{{--                                                        name="size"--}}
{{--                                                        value="{{ $size }}"--}}
{{--                                                        class="cust-checkbox"--}}
{{--                                                        {{ $loop->first ? 'checked' : '' }}>--}}
{{--                                                    <span class="d-block cust-check border-full border-radius">{{ $size }}</span>--}}
{{--                                                </label>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            @endif--}}

                            {{-- Quantity selector --}}
                            <div class="product-quantity d-flex flex-wrap align-items-center">
                                <span class="heading-color heading-weight mer-10">Quantity:</span>
                                <div class="js-qty-wrapper">
                                    <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                        <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item">
                                            <i class="ri-subtract-line d-block lh-1"></i>
                                        </button>
                                        <input
                                            type="number"
                                            id="quantity-input"
                                            name="quantity"
                                            class="js-qty-num p-0 text-center border-0"
                                            value="1"
                                            min="1">
                                        <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item">
                                            <i class="ri-add-line d-block lh-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="product-button mst-15">
                                <div class="row btn-row15">
                                    <div class="col-12 col-sm-6">
                                        <button
                                            type="button"
                                            id="add-to-cart-btn"
                                            class="w-100 btn-style quaternary-btn add-to-cart">
                                            <span class="product-icon">
                                                <span class="product-bag-icon">Add to cart</span>
                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <a href="{{route('cart.index')}}" class="w-100 btn-style secondary-btn">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="ul-row">
{{--                                <div class="product-wishlist">--}}
{{--                                    <a href="javascript:void(0)" class="add-to-wishlist heading-color"><i class="ri-heart-line icon-16 mer-4"></i>Wishlist</a>--}}
{{--                                </div>--}}
{{--                                <div class="product-compare">--}}
{{--                                    <a href="product-comparison.html" class="add-to-compare heading-color"><i class="ri-stack-line icon-16 mer-4"></i>Compare</a>--}}
{{--                                </div>--}}
                                <div class="product-ask">
                                    <a href="#question-modal" data-bs-toggle="modal" class="ask-question heading-color"><i class="ri-edit-box-line icon-16 mer-4"></i>Ask a question</a>
                                </div>
                                <div class="product-share">
                                    <a href="#share-modal" data-bs-toggle="modal" class="share heading-color"><i class="ri-share-line icon-16 mer-4"></i>Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-offer">
                                <p class="heading-color"><i class="ri-discount-percent-line icon-16 mer-4"></i>Offers available for you <a href="#offers-modal" data-bs-toggle="modal" class="text-uppercase heading-weight text-decoration-underline">View details</a></p>
                            </div>
                        </div>
                        <div class="product-info mst-10" data-animate="animate__fadeIn">
                            <div class="product-pickup">
                                <p class="heading-color"><i class="ri-shopping-bag-2-line icon-16 mer-4"></i>Choose pickup and save time! Opt for our convenient pickup option and get your favorite items faster than ever. Simply select <span class="heading-weight">pickup</span> at checkout. Click here to know more about pickup <a href="#pickup-modal" data-bs-toggle="modal" class="text-uppercase heading-weight text-decoration-underline">View information</a></p>
                            </div>
                        </div>
                        <div class="product-info mst-20" data-animate="animate__fadeIn">
                            <div class="product-border bst"></div>
                        </div>
                        <div class="product-info mst-25" data-animate="animate__fadeIn">
                            <div class="product-delivery">
                                <span class="d-inline-block"><i class="ri-check-line heading-color icon-16 mer-4"></i>Your order will reach you within 5-7 business days</span>
                            </div>
                        </div>
{{--                        <div class="product-info mst-20" data-animate="animate__fadeIn">--}}
{{--                            <div class="product-payment">--}}
{{--                                <ul class="payment-ul">--}}
{{--                                    <li class="payment-li ul-mt5">--}}
{{--                                        <a href="javascript:void(0)" class="d-block"><img src="assets/image/other/paying-american.png" class="width-40 img-fluid border-radius" alt="paying-american"></a>--}}
{{--                                        <a href="javascript:void(0)" class="d-block"><img src="assets/image/other/paying-club.png" class="width-40 img-fluid border-radius" alt="paying-club"></a>--}}
{{--                                        <a href="javascript:void(0)" class="d-block"><img src="assets/image/other/paying-discover.png" class="width-40 img-fluid border-radius" alt="paying-discover"></a>--}}
{{--                                        <a href="javascript:void(0)" class="d-block"><img src="assets/image/other/paying-maestro.png" class="width-40 img-fluid border-radius" alt="paying-maestro"></a>--}}
{{--                                        <a href="javascript:void(0)" class="d-block"><img src="assets/image/other/paying-paypal.png" class="width-40 img-fluid border-radius" alt="paying-paypal"></a>--}}
{{--                                        <a href="javascript:void(0)" class="d-block"><img src="assets/image/other/paying-visa.png" class="width-40 img-fluid border-radius" alt="paying-visa"></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-service">
                                <div class="ul-mt15">
                                    <div class="col-6 col-sm-3 d-flex">
                                        <div class="w-100 heading-color d-flex flex-column align-items-center ptb-15 plr-15 extra-bg text-center br-hidden">
                                            <span class="icon-24"><i class="ri-box-3-line d-block lh-1"></i></span>
                                            <span class="mst-12">Return & exchange</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-3 d-flex">
                                        <div class="w-100 heading-color d-flex flex-column align-items-center ptb-15 plr-15 extra-bg text-center br-hidden">
                                            <span class="icon-24"><i class="ri-hand-coin-line d-block lh-1"></i></span>
                                            <span class="mst-12">Cash on delivery</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-3 d-flex">
                                        <div class="w-100 heading-color d-flex flex-column align-items-center ptb-15 plr-15 extra-bg text-center br-hidden">
                                            <span class="icon-24"><i class="ri-truck-line d-block lh-1"></i></span>
                                            <span class="mst-12">Free delivery</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-3 d-flex">
                                        <div class="w-100 heading-color d-flex flex-column align-items-center ptb-15 plr-15 extra-bg text-center br-hidden">
                                            <span class="icon-24"><i class="ri-secure-payment-line d-block lh-1"></i></span>
                                            <span class="mst-12">Safe payment</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="frequent section-pt">
                <h2 class="font-18 meb-25" data-animate="animate__fadeIn">Frequently bought together</h2>
                <div class="frequent-group">
                    <form method="post" action="javascript:void(0)" class="frequent-form">
                        <div class="row row-mtm">
                            <div class="col-12 col-lg-7" data-animate="animate__fadeIn">
                                <div class="frequent-detail per-xxl-10">
                                    <div class="frequent-image">
                                        <ul class="d-flex flex-wrap">
                                            <li class="col-4">
                                                        <span class="d-block freq-img active">
                                                            <img src="assets/image/product/frequent-1.jpg" class="w-100 img-fluid ptb-3 plr-3 border-full border-radius" alt="frequent-1" data-img-id="gleam-band">
                                                        </span>
                                            </li>
                                            <li class="col-4">
                                                        <span class="d-block freq-img">
                                                            <img src="assets/image/product/frequent-2.jpg" class="w-100 img-fluid ptb-3 plr-3 border-full border-radius" alt="frequent-2" data-img-id="luxe-loop">
                                                        </span>
                                            </li>
                                            <li class="col-4">
                                                        <span class="d-block freq-img">
                                                            <img src="assets/image/product/frequent-3.jpg" class="w-100 img-fluid ptb-3 plr-3 border-full border-radius" alt="frequent-3" data-img-id="opal-stud">
                                                        </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="frequent-info mst-15">
                                        <button type="button" class="w-100 btn-style secondary-btn freq-select-btn meb-15">Select all</button>
                                        <button type="button" class="w-100 btn-style secondary-btn freq-deselect-btn meb-15">Deselect all</button>
                                        <div class="row row-mtm15">
                                            <div class="frequent-content">
                                                <label class="cust-checkbox-label heading-color disabled">
                                                    <input type="checkbox" id="gleam-band" name="gleam-band" class="cust-checkbox" data-img-id="gleam-band" checked disabled>
                                                    <span class="d-block cust-check"></span>
                                                    <span class="freq-title mer-5">Gleam band</span>
                                                    <span class="freq-price heading-weight">
                                                                <span class="freq-new-price dominant-color" data-new-price="$79.00">$0.00</span>
                                                                <span class="body-color heading-weight">~ <span class="freq-old-price text-decoration-line-through" data-old-price="$89.00">$0.00</span></span>
                                                            </span>
                                                </label>
                                            </div>
                                            <div class="frequent-content">
                                                <label class="cust-checkbox-label heading-color">
                                                    <input type="checkbox" id="luxe-loop" name="luxe-loop" class="cust-checkbox" data-img-id="luxe-loop">
                                                    <span class="d-block cust-check"></span>
                                                    <span class="freq-title mer-5">Luxe loop</span>
                                                    <span class="freq-price heading-weight">
                                                                <span class="freq-new-price dominant-color" data-new-price="$49.00">$0.00</span>
                                                                <span class="body-color heading-weight">~ <span class="freq-old-price text-decoration-line-through" data-old-price="$59.00">$0.00</span></span>
                                                            </span>
                                                </label>
                                                <a href="#luxe-loop-collapse" data-bs-toggle="collapse" class="d-inline-flex align-items-center text-uppercase mst-5 msl-20" aria-expanded="false">Choose option <i class="ri-arrow-down-s-line d-block icon-16 lh-1"></i></a>
                                                <div class="frequent-collapse collapse" id="luxe-loop-collapse">
                                                    <div class="frequent-variant-qty psl-20 ptb-20">
                                                        <div class="frequent-variant">
                                                            <div class="frequent-variant-option">
                                                                <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Size:</span>16cm</span>
                                                                <div class="frequent-option-block size">
                                                                    <ul class="ul-mt5">
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="luxe-loop-size" class="cust-checkbox" value="16cm" checked>
                                                                                <span class="d-block cust-check border-full border-radius">16cm</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label disabled">
                                                                                <input type="radio" name="luxe-loop-size" class="cust-checkbox" value="18cm">
                                                                                <span class="d-block cust-check border-full border-radius">18cm</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="luxe-loop-size" class="cust-checkbox" value="20cm">
                                                                                <span class="d-block cust-check border-full border-radius">20cm</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="luxe-loop-size" class="cust-checkbox" value="22cm">
                                                                                <span class="d-block cust-check border-full border-radius">22cm</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="frequent-variant-option mst-20">
                                                                <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Color:</span>Aliceblue</span>
                                                                <div class="frequent-option-block color">
                                                                    <ul class="ul-mt10">
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="luxe-loop-color" class="cust-checkbox" value="aliceblue" checked>
                                                                                <span class="d-block cust-check aliceblue"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label disabled">
                                                                                <input type="radio" name="luxe-loop-color" class="cust-checkbox" value="antiquewhite">
                                                                                <span class="d-block cust-check antiquewhite"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="luxe-loop-color" class="cust-checkbox" value="azure">
                                                                                <span class="d-block cust-check azure"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="frequent-quantity mst-20">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="heading-color heading-weight mer-10">Quantity:</span>
                                                                <div class="js-qty-wrapper">
                                                                    <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                        <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                        <input type="number" name="luxe-loop-16cm-aliceblue" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                        <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="frequent-content">
                                                <label class="cust-checkbox-label heading-color">
                                                    <input type="checkbox" id="opal-stud" name="opal-stud" class="cust-checkbox" data-img-id="opal-stud">
                                                    <span class="d-block cust-check"></span>
                                                    <span class="freq-title mer-5">Opal stud</span>
                                                    <span class="freq-price heading-weight">
                                                                <span class="freq-new-price dominant-color" data-new-price="$69.00">$0.00</span>
                                                                <span class="body-color heading-weight">~ <span class="freq-old-price text-decoration-line-through" data-old-price="$79.00">$0.00</span></span>
                                                            </span>
                                                </label>
                                                <a href="#opal-stud-collapse" data-bs-toggle="collapse" class="d-inline-flex align-items-center text-uppercase mst-5 msl-20">Choose option <i class="ri-arrow-down-s-line d-block icon-16 lh-1"></i></a>
                                                <div class="frequent-collapse collapse" id="opal-stud-collapse">
                                                    <div class="frequent-variant-qty psl-20 ptb-20">
                                                        <div class="frequent-variant">
                                                            <div class="frequent-variant-option">
                                                                <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Size:</span>16cm</span>
                                                                <div class="frequent-option-block size">
                                                                    <ul class="ul-mt5">
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="opal-stud-size" class="cust-checkbox" value="16cm" checked>
                                                                                <span class="d-block cust-check border-full border-radius">16cm</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label disabled">
                                                                                <input type="radio" name="opal-stud-size" class="cust-checkbox" value="18cm">
                                                                                <span class="d-block cust-check border-full border-radius">18cm</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="opal-stud-size" class="cust-checkbox" value="20cm">
                                                                                <span class="d-block cust-check border-full border-radius">20cm</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="opal-stud-size" class="cust-checkbox" value="22cm">
                                                                                <span class="d-block cust-check border-full border-radius">22cm</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="frequent-variant-option mst-20">
                                                                <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Color:</span>Aliceblue</span>
                                                                <div class="frequent-option-block color">
                                                                    <ul class="ul-mt10">
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="opal-stud-color" class="cust-checkbox" value="aliceblue" checked>
                                                                                <span class="d-block cust-check aliceblue"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label disabled">
                                                                                <input type="radio" name="opal-stud-color" class="cust-checkbox" value="antiquewhite">
                                                                                <span class="d-block cust-check antiquewhite"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="cust-checkbox-label">
                                                                                <input type="radio" name="opal-stud-color" class="cust-checkbox" value="azure">
                                                                                <span class="d-block cust-check azure"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="frequent-quantity mst-20">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="heading-color heading-weight mer-10">Quantity:</span>
                                                                <div class="js-qty-wrapper">
                                                                    <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                        <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                        <input type="number" name="opal-stud-16cm-aliceblue" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                        <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5" data-animate="animate__fadeIn">
                                <div class="frequent-total psl-xxl-10">
                                    <span class="d-block meb-8">Price for selected product</span>
                                    <div class="frequent-total-price">
                                        <div class="freq-total-box price-box font-20 heading-weight">
                                            <span class="freq-new-total new-price dominant-color" data-new-total="$79.00">$0.00</span>
                                            <span class="old-price"><span class="mer-3">~</span><span class="freq-old-total text-decoration-line-through" data-old-total="$89.00">$0.00</span></span>
                                        </div>
                                        <div class="freq-price-text text-danger font-18 mst-11 heading-weight">Save <span class="freq-price-save" data-price-save="$10.00">$0.00</span></div>
                                    </div>
                                    <div class="frequent-action mst-15">
                                        <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">Selected add to cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                        </button>
                                    </div>
                                    <span class="d-block freq-dis-text mst-10">Get a <span class="freq-discount-price heading-color font-20 heading-weight" data-discount-price="11%">0%</span> discount from selected product while buying together</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- size-modal start -->
        <div class="size-modal modal fade" id="size-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="size-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Size guide</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="size-modal-content text-center">
                            <div class="table-responsive">
                                <table class="table w-100">
                                    <thead>
                                    <tr>
                                        <th scope="row" class="heading-color heading-weight text-nowrap border-full">Size</th>
                                        <th scope="row" class="heading-color heading-weight text-nowrap border-full">US</th>
                                        <th scope="row" class="heading-color heading-weight text-nowrap border-full">Bust</th>
                                        <th scope="row" class="heading-color heading-weight text-nowrap border-full">Waist</th>
                                        <th scope="row" class="heading-color heading-weight text-nowrap border-full">Low Hip</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap border-full">XS</td>
                                        <td class="text-nowrap border-full">2</td>
                                        <td class="text-nowrap border-full">32</td>
                                        <td class="text-nowrap border-full">24-25</td>
                                        <td class="text-nowrap border-full">33-34</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-full">S</td>
                                        <td class="text-nowrap border-full">4</td>
                                        <td class="text-nowrap border-full">34-35</td>
                                        <td class="text-nowrap border-full">26-27</td>
                                        <td class="text-nowrap border-full">35-26</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-full">M</td>
                                        <td class="text-nowrap border-full">6</td>
                                        <td class="text-nowrap border-full">36-37</td>
                                        <td class="text-nowrap border-full">28-29</td>
                                        <td class="text-nowrap border-full">38-40</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-full">L</td>
                                        <td class="text-nowrap border-full">8</td>
                                        <td class="text-nowrap border-full">38-29</td>
                                        <td class="text-nowrap border-full">30-31</td>
                                        <td class="text-nowrap border-full">42-44</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-full">XL</td>
                                        <td class="text-nowrap border-full">10</td>
                                        <td class="text-nowrap border-full">40-41</td>
                                        <td class="text-nowrap border-full">32-33</td>
                                        <td class="text-nowrap border-full">45-47</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-img mx-auto">
                                <img src="assets/image/product/size-guide.png" class="w-100 img-fluid" alt="size-guide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- size-modal end -->
        <!-- question-modal start -->
        <div class="question-modal modal fade" id="question-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <form method="post" action="javascript:void(0)">
                            <div class="question-modal-header d-flex align-items-center justify-content-between meb-30">
                                <h6 class="font-18">Ask a question?</h6>
                                <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                            </div>
                            <div class="question-modal-form">
                                <div class="row field-row">
                                    <div class="col-12 field-col">
                                        <label for="name" class="field-label">Name</label>
                                        <input type="text" id="name" name="name" class="w-100" placeholder="Full name" autocomplete="name" required>
                                    </div>
                                    <div class="col-12 field-col">
                                        <label for="email" class="field-label">Email</label>
                                        <input type="email" id="email" name="email" class="w-100" placeholder="Email" autocomplete="email" required>
                                    </div>
                                    <div class="col-12 field-col">
                                        <label for="phone" class="field-label">Phone number</label>
                                        <input type="text" id="phone" name="phone" class="w-100" placeholder="Phone number" autocomplete="tel" required>
                                    </div>
                                    <div class="col-12 field-col">
                                        <label for="message" class="field-label">Message</label>
                                        <textarea rows="5" id="message" name="message" class="w-100" placeholder="Message" autocomplete="off" required></textarea>
                                    </div>
                                </div>
                                <div class="question-form-btn mst-20 mst-sm-30">
                                    <button type="submit" class="w-100 btn-style secondary-btn question-form-submit">Submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- question-modal end -->
        <!-- share-modal start -->
        <div class="share-modal modal fade" id="share-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="share-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Share</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="share-modal-content">
                            <div class="product-link d-md-flex">
                                <input type="text" id="copy-link" class="copy-url width-100 text-center text-md-start" readonly>
                                <button type="button" class="copy-btn width-100 width-md-auto btn-style secondary-btn mst-15 mst-md-0 text-nowrap">Copy</button>
                            </div>
                            <div class="product-social mst-15">
                                <ul class="social-ul ul-mt15">
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="dribbble icon-16" aria-label="Social link"><i class="ri-dribbble-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="facebook icon-16" aria-label="Social link"><i class="ri-facebook-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="instagram icon-16" aria-label="Social link"><i class="ri-instagram-fill d-block instagram lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="linkedin icon-16" aria-label="Social link"><i class="ri-linkedin-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="pinterest icon-16" aria-label="Social link"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="twitter icon-16" aria-label="Social link"><i class="ri-twitter-x-fill d-block lh-1"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- share-modal end -->
        <!-- offers-modal start -->
        <div class="offers-modal modal fade" id="offers-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="pickup-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Offers for you</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="row row-mtm15 pickup-modal-content">
                            <div class="col-12">
                                <div class="ul-mtm-15">
                                    <span><a href="collection.html">👉 Get up to<span class="heading-weight"> 50% off</span> on selected products! Limited time offer!</a></span>
                                    <span><a href="collection.html">👉 Buy<span class="heading-weight"> 2</span> and Get<span class="heading-weight"> 15% off</span> on all products!, Use code<span class="heading-weight"> "BUY2SAVE"</span></a></span>
                                    <span><a href="collection.html">👉 Get<span class="heading-weight"> 11% off</span> your first order!, Use code<span class="heading-weight"> "11%OFF"</span></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offers-modal end -->
        <!-- pickup-modal start -->
        <div class="pickup-modal modal fade" id="pickup-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="pickup-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Choose Pickup and Save Time!</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="row row-mtm15 pickup-modal-content">
                            <div class="col-12">
                                <span class="d-block heading-color meb-19 heading-weight">👉 Why choose pickup?</span>
                                <div class="ul-mtm-15">
                                    <span><span class="heading-color heading-weight">Speedy service:</span> Skip the wait and grab your items on the same day.</span>
                                    <span><span class="heading-color heading-weight">No shipping fees:</span> Save money by picking up your order in-store.</span>
                                    <span><span class="heading-color heading-weight">Flexible pickup times:</span> Choose a time that suits your schedule.</span>
                                    <span><span class="heading-color heading-weight">Expert assistance:</span> Our friendly staff are on hand to help with any queries.</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-block heading-color meb-19 heading-weight">👉 How it works:</span>
                                <div class="ul-mtm-15">
                                    <span><span class="heading-color heading-weight">Select pickup:</span> During checkout, choose the pickup option.</span>
                                    <span><span class="heading-color heading-weight">Receive confirmation:</span> You'll receive an email confirmation once your order is ready for pickup.</span>
                                    <span><span class="heading-color heading-weight">Visit the store:</span> Head to your chosen store location at your convenience.</span>
                                    <span><span class="heading-color heading-weight">Collect your order:</span> Present your confirmation email at the pickup point, and our team will hand over your items.</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-block heading-color meb-19 heading-weight">👉 Frequently asked questions:</span>
                                <ul class="ul-mt15">
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">Is pickup available for all items?</span>
                                            <span class="d-block">Pickup is available for most items. If an item is eligible, you'll see the pickup option during checkout.</span>
                                        </div>
                                    </li>
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">When will my order be ready for pickup?</span>
                                            <span class="d-block">Orders are typically ready for pickup within a few hours. You'll receive an email notification once your order is ready.</span>
                                        </div>
                                    </li>
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">Can someone else pick up my order for me?</span>
                                            <span class="d-block">Yes, you can authorize someone else to pick up your order. Simply forward them the confirmation email, and they can collect the items on your behalf.</span>
                                        </div>
                                    </li>
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">Is there a cutoff time for same-day pickup?</span>
                                            <span class="d-block">Yes, orders placed before [insert cutoff time] are usually available for same-day pickup. Orders placed after this time will be ready the following day.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pickup-modal end -->
    </section>
    <!-- product-detail end -->
    <!-- product-detail-tab start -->
    <section class="product-detail-tab section-pt">
        <div class="container">
            <div class="product-tab horizontal-tab">
                <div class="product-tab-nav beb" data-animate="animate__fadeIn">
                    <ul class="nav nav-tabs ul-tab border-0" role="tablist">
                        <li>
                            <a href="#pro-desc-tab" class="d-block peb-11 heading-weight active" data-bs-toggle="tab" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li>
                            <a href="#pro-ai-tab" class="d-block peb-11 heading-weight" data-bs-toggle="tab" role="tab" aria-selected="false">Additional-info</a>
                        </li>
                        <li>
                            <a href="#pro-review-tab" class="d-block peb-11 heading-weight" data-bs-toggle="tab" role="tab" aria-selected="false">Reviews</a>
                        </li>
                        <li>
                            <a href="#pro-video-tab" class="d-block peb-11 heading-weight"  data-bs-toggle="tab" role="tab" aria-selected="false">Video</a>
                        </li>
                    </ul>
                </div>
                <div class="product-tab-info tab-content mst-30" data-animate="animate__fadeIn">
                    <div class="tab-pane fade active show" id="pro-desc-tab">
                        <div class="product-tab-description">
                            <div class="product-description-info">
                                <h6>About this item</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>As Cicero would put it, “Um, not so fast.”</li>
                                    <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</li>
                                    <li>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                                    <li>Nor is there anyone who loves or pursues or desires to obtain pain of itself.</li>
                                    <li>Because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-ai-tab">
                        <div class="product-tab-ai">
                            <table class="w-100">
                                <tbody>
                                <tr>
                                    <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Vendor</th>
                                    <td class="ptb-10 plr-15 border-full"><a href="index.html" class="body-dominant-color text-decoration-underline">Veppo</a></td>
                                </tr>
                                <tr>
                                    <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Type</th>
                                    <td class="ptb-10 plr-15 border-full"><a href="collection.html" class="body-dominant-color text-decoration-underline">Collection name</a></td>
                                </tr>
                                <tr>
                                    <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Size</th>
                                    <td class="body-color ptb-10 plr-15 border-full">16cm, 18cm, 20cm, 22cm</td>
                                </tr>
                                <tr>
                                    <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Color</th>
                                    <td class="body-color ptb-10 plr-15 border-full">Aliceblue, Antiquewhite, Azure</td>
                                </tr>
                                <tr>
                                    <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Sku</th>
                                    <td class="body-color ptb-10 plr-15 border-full">RT89GT</td>
                                </tr>
                                <tr>
                                    <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Weight</th>
                                    <td class="body-color ptb-10 plr-15 border-full">5.52kg</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-review-tab">
                        <div class="product-tab-review">
                            <div class="product-review">
                                <form method="post" action="javascript:void(0)">
                                    <div class="row row-mtm">
                                        <div class="product-review-info">
                                            <div class="row row-mtm">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <h6 class="font-18 meb-18">Customer reviews</h6>
                                                    <div class="product-review-rating"><span class="heading-color fs-3" data-id>0</span>/<span data-score="5">0</span></div>
                                                    <div class="product-star">
                                                        <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star icon-16">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                        </span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-review-text mst-12">Based on <span data-base>0</span> reviews</div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="row row-mtm15">
                                                        <div class="product-review-count d-flex align-items-center">
                                                            <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">5<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                            <span class="product-review-progress mlr-10">
                                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                                    </span>
                                                            <span class="product-review-number lh-1" data-number="1"></span>
                                                        </div>
                                                        <div class="product-review-count d-flex align-items-center">
                                                            <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">4<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                            <span class="product-review-progress mlr-10">
                                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                                    </span>
                                                            <span class="product-review-number lh-1" data-number="0"></span>
                                                        </div>
                                                        <div class="product-review-count d-flex align-items-center">
                                                            <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">3<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                            <span class="product-review-progress mlr-10">
                                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                                    </span>
                                                            <span class="product-review-number lh-1" data-number="1"></span>
                                                        </div>
                                                        <div class="product-review-count d-flex align-items-center">
                                                            <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">2<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                            <span class="product-review-progress mlr-10">
                                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                                    </span>
                                                            <span class="product-review-number lh-1" data-number="0"></span>
                                                        </div>
                                                        <div class="product-review-count d-flex align-items-center">
                                                            <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">1<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                            <span class="product-review-progress mlr-10">
                                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                                    </span>
                                                            <span class="product-review-number lh-1" data-number="0"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 text-md-end">
                                                    <button type="button" class="d-none width-100 width-md-auto btn-style secondary-btn write-review-btn">Write a review</button>
                                                    <button type="button" class="width-100 width-md-auto btn-style secondary-btn close-review-btn">Close review</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-review-form">
                                            <div class="row field-row">
                                                <div class="col-12 col-md-6 field-col">
                                                    <label for="review-name" class="field-label">Name</label>
                                                    <input type="text" id="review-name" name="review-name" class="w-100" placeholder="Demo name" autocomplete="name" required>
                                                </div>
                                                <div class="col-12 col-md-6 field-col">
                                                    <label for="review-email" class="field-label">Email</label>
                                                    <input type="email" id="review-email" name="review-email" class="w-100" placeholder="Email address" autocomplete="email" required>
                                                </div>
                                                <div class="col-12 field-col">
                                                    <label class="field-label">Rating</label>
                                                    <div class="product-review-ratting">
                                                        <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star icon-16">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 field-col">
                                                    <label for="review-title" class="field-label">Review title</label>
                                                    <input type="text" id="review-title" name="review-title" class="w-100" placeholder="Review title" autocomplete="off" required>
                                                </div>
                                                <div class="col-12 field-col">
                                                    <label for="review-message" class="field-label">Review message</label>
                                                    <textarea rows="10" id="review-message" name="review-message" class="w-100" placeholder="Review message" autocomplete="off" required></textarea>
                                                </div>
                                                <div class="col-12 field-col">
                                                    <label class="field-label">Upload attachment</label>
                                                    <div class="field-attachment ptb-30 plr-15 plr-sm-30 text-center">
                                                        <div class="review-attachment-upload d-flex flex-column align-items-center">
                                                            <label for="review-img" class="review-attachment-file-upload dominant-link text-decoration-underline">Upload here</label>
                                                            <div class="review-attachment-count d-none mst-10 meb-26">0 attachments</div>
                                                            <input type="file" id="review-img" name="review-img" class="w-100 review-attachment-file" multiple hidden>
                                                            <div class="field-attached">
                                                                <ul class="ul-mt15 review-attachment-uploaded"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review-button mst-20 mst-sm-30">
                                                <div class="row btn-row">
                                                    <div class="col-12 col-sm-6 col-xl-3">
                                                        <button type="submit" class="w-100 btn-style quaternary-btn review-submit">Submit review</button>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-xl-3">
                                                        <button type="button" class="w-100 btn-style secondary-btn review-cancel">Cancel review</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-review-comment">
                                            <div class="row row-mtm">
                                                <div class="product-review-detail">
                                                    <div class="product-reviewer-info d-flex flex-wrap align-items-center">
                                                        <span class="width-48 height-48 secondary-color icon-16 d-flex align-items-center justify-content-center overflow-hidden rounded-circle"><i class="ri-user-line d-block lh-1"></i></span>
                                                        <h6 class="product-reviewer-name width-calc-48 font-18 psl-15">Noah james</h6>
                                                    </div>
                                                    <div class="product-reviewer-date mst-12">Reviwed on Oct 30, 2021</div>
                                                    <div class="product-review-love mst-11">
                                                        <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star icon-16">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                        </span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-reviewer-subject heading-color heading-weight mst-12">Very good</div>
                                                    <p class="product-reviewer-review mst-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    <div class="product-reviewer-attachment mst-8">
                                                        <ul class="ul-mt5">
                                                            <li><img src="assets/image/product/review-product1.jpg" class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden" alt="review-product1"></li>
                                                            <li><img src="assets/image/product/review-product2.jpg" class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden" alt="review-product2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-review-detail">
                                                    <div class="product-reviewer-info d-flex flex-wrap align-items-center">
                                                        <span class="width-48 height-48 secondary-color icon-16 d-flex align-items-center justify-content-center overflow-hidden rounded-circle"><i class="ri-user-line d-block lh-1"></i></span>
                                                        <h6 class="product-reviewer-name width-calc-48 font-18 psl-15">Carla houston</h6>
                                                    </div>
                                                    <div class="product-reviewer-date mst-12">Reviwed on Oct 30, 2021</div>
                                                    <div class="product-review-love mst-11">
                                                        <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star icon-16">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-reviewer-subject heading-color heading-weight mst-12">Good</div>
                                                    <p class="product-reviewer-review mst-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-video-tab">
                        <div class="product-tab-video">
                            <div class="product-video">
                                <div class="video position-relative">
                                    <div class="video-loader position-absolute w-100 h-100 z-1">
                                        <span class="h-100 d-flex justify-content-center"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="1" cx="33" cy="33" r="30"></circle></svg></span>
                                    </div>
                                    <div class="video-img banner-img position-relative br-hidden">
                                        <button type="button" class="video-btn position-absolute top-50 start-50 translate-middle z-1" data-video-id="0Aja_yP93PY" aria-label="Video button"><span class="banner-video-icon secondary-color icon-16 width-80 height-80 d-flex align-items-center justify-content-center extra-bg rounded-circle"><i class="ri-play-large-fill d-block lh-1"></i></span></button>
                                        <img src="assets/image/product/video.jpg" class="w-100 img-fluid" alt="video">
                                    </div>
                                    <div class="video-frame position-absolute top-0 start-0 w-100 h-100 br-hidden"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-detail-tab end -->
    <!-- related-product start -->
    <section class="related-area section-ptb">
        <div class="container">
            <div class="collection-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Related product</h2>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="related-slider swiper" id="related-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a href="product.html" class="pro-img">
                                                <img src="assets/image/index/product/p-1.jpg" class="w-100 img-fluid img1" alt="p-1">
                                                <img src="assets/image/index/product/p-2.jpg" class="w-100 img-fluid img2" alt="p-2">
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist.html" class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span class="d-block meb-8">Ring / Shine</span>
                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gleam band</a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color">$79.00</span>
                                                            <span class="old-price text-decoration-line-through">$89.00</span>
                                                        </div>
                                                        <div class="product-action">
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
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$79.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$89.00</span></span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-sku-variant">
                                                <div class="product-sku-variant">
                                                    <div class="pro-sku">
                                                        <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                    </div>
                                                    <div class="pro-select-variant">
                                                        <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                        <select id="gleam-band-size" name="gleam-band-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                            <option value="16cm" selected>16cm</option>
                                                            <option value="18cm">18cm</option>
                                                            <option value="20cm">20cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a href="product.html" class="pro-img">
                                                <img src="assets/image/index/product/p-3.jpg" class="w-100 img-fluid img1" alt="p-3">
                                                <img src="assets/image/index/product/p-4.jpg" class="w-100 img-fluid img2" alt="p-4">
                                                <span class="product-label product-label-new product-label-left">New</span>
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist.html" class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span class="d-block meb-8">Ring / Chic</span>
                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Luxe loop</a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color">$49.00</span>
                                                            <span class="old-price text-decoration-line-through">$59.00</span>
                                                        </div>
                                                        <div class="product-action">
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
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$49.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$59.00</span></span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-sku-variant">
                                                <div class="product-sku-variant">
                                                    <div class="pro-sku">
                                                        <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                    </div>
                                                    <div class="pro-select-variant">
                                                        <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                        <select id="luxe-loop-size" name="luxe-loop-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                            <option value="16cm" selected>16cm</option>
                                                            <option value="18cm">18cm</option>
                                                            <option value="20cm">20cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a href="product.html" class="pro-img">
                                                <img src="assets/image/index/product/p-5.jpg" class="w-100 img-fluid img1" alt="p-5">
                                                <img src="assets/image/index/product/p-6.jpg" class="w-100 img-fluid img2" alt="p-6">
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist.html" class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span class="d-block meb-8">Ears / Glow</span>
                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Opal stud</a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color">$69.00</span>
                                                            <span class="old-price text-decoration-line-through">$79.00</span>
                                                        </div>
                                                        <div class="product-action">
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
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$69.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$79.00</span></span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-sku-variant">
                                                <div class="product-sku-variant">
                                                    <div class="pro-sku">
                                                        <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                    </div>
                                                    <div class="pro-select-variant">
                                                        <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                        <select id="opal-stud-size" name="opal-stud-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                            <option value="16cm" selected>16cm</option>
                                                            <option value="18cm">18cm</option>
                                                            <option value="20cm">20cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a href="product.html" class="pro-img">
                                                <img src="assets/image/index/product/p-7.jpg" class="w-100 img-fluid img1" alt="p-7">
                                                <img src="assets/image/index/product/p-8.jpg" class="w-100 img-fluid img2" alt="p-8">
                                                <span class="product-label product-label-discount product-label-left">-5% off</span>
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist.html" class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span class="d-block meb-8">Ears / Bold</span>
                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Ruby hoop</a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color">$49.00</span>
                                                            <span class="old-price text-decoration-line-through">$54.00</span>
                                                        </div>
                                                        <div class="product-action">
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
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$49.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$54.00</span></span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-sku-variant">
                                                <div class="product-sku-variant">
                                                    <div class="pro-sku">
                                                        <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                    </div>
                                                    <div class="pro-select-variant">
                                                        <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                        <select id="ruby-hoop-size" name="ruby-hoop-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                            <option value="16cm" selected>16cm</option>
                                                            <option value="18cm">18cm</option>
                                                            <option value="20cm">20cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a href="product.html" class="pro-img">
                                                <img src="assets/image/index/product/p-9.jpg" class="w-100 img-fluid img1" alt="p-9">
                                                <img src="assets/image/index/product/p-10.jpg" class="w-100 img-fluid img2" alt="p-10">
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist.html" class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span class="d-block meb-8">Neck / Soft</span>
                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Pearl link</a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color">$89.00</span>
                                                            <span class="old-price text-decoration-line-through">$99.00</span>
                                                        </div>
                                                        <div class="product-action">
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
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$89.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$99.00</span></span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-sku-variant">
                                                <div class="product-sku-variant">
                                                    <div class="pro-sku">
                                                        <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                    </div>
                                                    <div class="pro-select-variant">
                                                        <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                        <select id="pearl-link-size" name="pearl-link-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                            <option value="16cm" selected>16cm</option>
                                                            <option value="18cm">18cm</option>
                                                            <option value="20cm">20cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a href="product.html" class="pro-img">
                                                <img src="assets/image/index/product/p-11.jpg" class="w-100 img-fluid img1" alt="p-11">
                                                <img src="assets/image/index/product/p-12.jpg" class="w-100 img-fluid img2" alt="p-12">
                                                <span class="product-label product-label-sale product-label-left">Sale</span>
                                            </a>
                                            <div class="product-action">
                                                <a href="wishlist.html" class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span class="d-block meb-8">Wrist / Rich</span>
                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gold bead</a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color">$79.00</span>
                                                            <span class="old-price text-decoration-line-through">$84.00</span>
                                                        </div>
                                                        <div class="product-action">
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
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span class="new-price dominant-color">$79.00</span>
                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$84.00</span></span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-sku-variant">
                                                <div class="product-sku-variant">
                                                    <div class="pro-sku">
                                                        <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                    </div>
                                                    <div class="pro-select-variant">
                                                        <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                        <select id="gold-bead-size" name="gold-bead-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                            <option value="16cm" selected>16cm</option>
                                                            <option value="18cm">18cm</option>
                                                            <option value="20cm">20cm</option>
                                                        </select>
                                                    </div>
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
                            <button type="button" class="swiper-prev swiper-prev-related" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                            <button type="button" class="swiper-next swiper-next-related" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-related"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
