@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/account.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/checkout.css') }}">
    <style>

    </style>

@endpush

@push('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endpush
@section('breadcrumb')
    <div class="breadcrumb-area ptb-15" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Checkout</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- checkout start -->
    <section class="checkout-area section-ptb">
        <form method="post" action="javascript:void(0)">
            <div class="container">
                <div class="row row-mtm flex-lg-row-reverse align-items-lg-start">
                    <div class="col-12 col-lg-5 p-lg-sticky top-0" data-animate="animate__fadeIn">
                        <div class="checkout-summary">
                            <div class="checkout-orderview">
                                <h6 class="font-18 meb-25">Shopping cart <span class="checkcart-count"></span></h6>
                                <div class="row row-mtm15">
                                    @forelse($items as $item)
                                        <div class="checkitem-content">
                                            <div class="ul-mt15 d-flex flex-wrap align-items-center">
                                                <div class="checkitem-img width-88">
                                                    <div class="position-relative">
                                                        @if($item->product && $item->product->primaryImage)
                                                            <img src="{{ Storage::url($item->product->primaryImage->path) }}"
                                                                 class="w-100 img-fluid border-radius"
                                                                 alt="{{ $item->product->title }}">
                                                        @else
                                                            <img src="{{ asset('assets/image/placeholder.png') }}"
                                                                 class="w-100 img-fluid border-radius"
                                                                 alt="No Image">
                                                        @endif
                                                        <span class="checkitem-qty extra-color font-11 position-absolute d-flex align-items-center justify-content-center secondary-bg rounded-circle lh-1">
                                                            {{ $item->quantity }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="checkitem-info width-calc-88">
                                                    <div class="checkitem-detail h-100 d-flex flex-column justify-content-between">
                                                        <div class="checkitem-text">
                                                            <a href="product.html" class="primary-link heading-weight">
                                                                {{ $item->product->title ?? 'Unavailable Product' }}
                                                            </a>

                                                            @if($item->size)
                                                                <div class="mst-8">{{ $item->size }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="checkitem-price mst-23 text-end">
                                                            <div class="heading-color heading-weight">
                                                                ₦{{ number_format($item->subtotal, 2) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="text-center py-5">
                                            <p>Your cart is empty 🛒</p>
                                            <a href="{{ route('store.index') }}" class="btn btn-primary">Continue Shopping</a>
                                        </div>
                                    @endforelse
                                </div>

                            </div>
                            <div class="checkout-costview">
                                <div class="checkout-cost mst-30 pst-30 bst">
                                    <h6 class="font-18 meb-22">Cost summary</h6>
                                    <div class="row row-mtm20">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight">₦{{ number_format($subtotal, 2) }}</span>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Discount</span>
                                            <span class="text-danger heading-weight">{{$percentSaving}}</span>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Shipping</span>
                                            <span class="text-success heading-weight">{{$shipping}}</span>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Tax</span>
                                            <span class="heading-color heading-weight">{{$tax}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-cost mst-30 pst-30 bst">
                                    <div class="row row-mtm20">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight">₦{{ number_format($subtotal, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 p-lg-sticky top-0">
                        <div class="checktab-overview">
                            <div class="col-11 col-sm-9 mx-auto d-flex align-items-center meb-60 checkout-tab" data-animate="animate__fadeIn">
                                <div class="checktab-progress position-absolute start-0 primary-bg z-n1"></div>
                            </div>
                            <div class="checktab-content">
                                <div class="checktab-detail" data-animate="animate__fadeIn">
                                    <div class="checktab-data">
                                        <div class="checktab-info">
                                            <div class="acc-info">
                                                <div class="acc-title d-flex align-items-center justify-content-between">
                                                    <h6 class="font-18">Payment methods</h6>
                                                    <button type="button" class="acc-edit d-none body-secondary-color icon-16" aria-label="Edit"><i class="ri-edit-2-line d-block lh-1"></i></button>
                                                </div>
                                                <div class="acc-detail mst-22">
                                                    <div class="acc-detail-form">
                                                        <div class="acc-detail-field">
                                                            <div class="working-on-section mt-4 p-4 border-radius text-center position-relative overflow-hidden">
                                                                <div class="working-animation mb-3">
                                                                    <lottie-player
                                                                        src="https://assets10.lottiefiles.com/packages/lf20_tno6cg2w.json"
                                                                        background="transparent"
                                                                        speed="1"
                                                                        style="width: 160px; height: 160px; margin: 0 auto;"
                                                                        loop
                                                                        autoplay>
                                                                    </lottie-player>
                                                                </div>

                                                                <h5 class="heading-color fw-semibold mb-2">
                                                                    💳 We’re working on adding more payment options!
                                                                </h5>
                                                                <p class="body-secondary-color mb-4">
                                                                    Our team is currently building secure payment gateways so you’ll soon be able to checkout directly on our site.
                                                                    <br>In the meantime, please place your order via WhatsApp — it’s fast, safe, and friendly 💬
                                                                </p>

                                                                <div class="working-pointer position-absolute top-0 end-0 pe-3 pt-2 d-none d-md-block">
                                                                    <lottie-player
                                                                        src="https://assets10.lottiefiles.com/packages/lf20_y9ljt8mj.json"
                                                                        background="transparent"
                                                                        speed="1"
                                                                        style="width: 100px; height: 100px;"
                                                                        loop
                                                                        autoplay>
                                                                    </lottie-player>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="acc-detail-button mst-20 mst-sm-30"f>
                                                            <div class="row btn-row">
                                                                <div class="col-12 col-sm-6">
                                                                    <form action="{{ route('checkout.whatsapp') }}" method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="btn-whatsapp w-100 btn-style quaternary-btn"
                                                                                style="
                                                                                background: #25D366;
                                                                                color: white;
                                                                                padding: 15px 30px;
                                                                                border: none;
                                                                                border-radius: 8px;
                                                                                font-size: 16px;
                                                                                cursor: pointer;
                                                                                pointer-events: auto;
                                                                                position: relative;
                                                                                z-index: 10000;
                                                                                " > Order via WhatsApp
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <a href="{{route('cart.index')}}" class="w-100 btn-style secondary-btn">Back to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="checktab-btn d-flex flex-column flex-md-row-reverse justify-content-md-between mst-30 pst-30 bst">--}}
{{--                                            <button type="button" class="checktab-next width-100 width-md-auto btn-style secondary-btn">Back to Cart</button>--}}
{{--                                            <button type="button" class="checktab-back primary-link d-flex align-items-center justify-content-center mst-15 mst-md-0"><i class="ri-arrow-left-s-line icon-16 mer-5"></i>Back to cart</button>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- checkout end -->
@endsection

<div class="col-12 col-sm-6">
    <form action="{{ route('checkout.whatsapp') }}" method="POST">
        @csrf
        <button type="submit" class="btn-whatsapp w-100 btn-style quaternary-btn"
                style="
                                                                                background: #25D366;
                                                                                color: white;
                                                                                padding: 15px 30px;
                                                                                border: none;
                                                                                border-radius: 8px;
                                                                                font-size: 16px;
                                                                                cursor: pointer;
                                                                                pointer-events: auto;
                                                                                position: relative;
                                                                                z-index: 10000;
                                                                                " > Order via WhatsApp
        </button>
    </form>
</div>
