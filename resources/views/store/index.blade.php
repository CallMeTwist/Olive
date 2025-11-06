@extends('layouts.master', [
    $title = 'Store',
])

@push('body-class')
    without-shop-sidebar
@endpush

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/store-custom.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/cart.js') }}"></script>
    <script src="{{ asset('assets/js/store-filter.js') }}"></script>
    <script src="{{asset('/assets/js/theme.js')}}"></script>
@endpush

@section('breadcrumb')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-15" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Collection without sidebar</span>
        </div>
    </div>
    <!-- breadcrumb-area end -->
@endsection

@section('content')
    <!-- shop-content start -->
    <section class="shop-content section-ptb">
        <div class="container">
            <!-- shop-sidebar start -->
            <div class="shop-sidebar-wrap shop-filter-sidebar" data-animate="animate__fadeIn">
                <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                <form class="shop-form" action="javascript:void(0)" id="shopForm">
                    <!-- shop-categories start -->
                    <!-- shop-categories start -->
                    <div class="shop-sidebar shop-categories">
                        <h6 class="font-18">Categories</h6>
                        <div class="shop-cat-post mst-22">
                            <div class="shop-cat ul-mtm-15">
                                <a href="javascript:void(0)"
                                   class="category-filter body-dominant-color d-flex align-items-center justify-content-between"
                                   data-category="all">
                                    <span>All Products</span>
                                    <span>{{ $products->total() }}</span>
                                </a>
                                @foreach($categories as $category)
                                    <a href="javascript:void(0)"
                                       class="category-filter body-dominant-color d-flex align-items-center justify-content-between"
                                       data-category="{{ $category->id }}">
                                        <span>{{ $category->name }}</span>
                                        <span>{{ $category->products_count }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- shop-categories end -->
                    <!-- shop-categories end -->
                    <!-- shop-availability start -->
                    <div class="shop-sidebar availability">
                        <h6 class="font-18">Availability</h6>
                        <div class="shop-header d-flex justify-content-between mst-22">
                            <span class="shop-selected">2 selected</span>
                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                        </div>
                        <div class="shop-element mst-23">
                            <ul class="shop-filters ul-mtm-15">
                                <li>
                                    <label class="cust-checkbox-label d-flex align-items-center justify-content-between">
                                        <input type="checkbox" id="shop-in-stock" name="shop-in-stock" class="cust-checkbox" value="in-stock" checked>
                                        <span class="d-block cust-check"></span>
                                        <span class="shop-name me-auto">In stock</span>
                                        <span class="shop-count">12</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cust-checkbox-label d-flex align-items-center justify-content-between disabled">
                                        <input type="checkbox" id="shop-out-of-stock" name="shop-out-of-stock" class="cust-checkbox" value="out-of-stock" checked>
                                        <span class="d-block cust-check"></span>
                                        <span class="shop-name me-auto">Out of stock</span>
                                        <span class="shop-count">1</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- shop-sidebar availability end -->
                    <!-- shop-sidebar price start -->
                    <div class="shop-sidebar price">
                        <h6 class="font-18">Price</h6>
                        <div class="shop-header d-flex justify-content-between mst-22">
                            <span class="shop-selected">The highest price is $89.00</span>
                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                        </div>
                        <div class="shop-element mst-26">
                            <div class="price-input-range">
                                <div class="price-range">
                                    <div class="price-container">
                                        <div class="price-slider"></div>
                                    </div>
                                    <div class="range-input position-relative">
                                        <input type="range" class="min-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="89" value="0" step="1">
                                        <input type="range" class="max-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="89" value="89" step="1">
                                    </div>
                                </div>
                                <div class="price-input d-flex align-items-center mst-30">
                                    <div class="price-field position-relative w-100">
                                        <span class="price-input-title position-absolute top-0 start-0">From</span>
                                        <span class="price-input-prefix position-absolute top-50 translate-middle-y">$</span>
                                        <input type="number" id="min-price" name="min-price" class="min-input w-100 h-100 text-end" min="0" max="89" value="0">
                                    </div>
                                    <div class="price-input-separator mlr-15">-</div>
                                    <div class="price-field position-relative w-100">
                                        <span class="price-input-title position-absolute top-0 start-0">To</span>
                                        <span class="price-input-prefix position-absolute top-50 translate-middle-y">$</span>
                                        <input type="number" id="max-price" name="max-price" class="max-input w-100 h-100 text-end" min="0" max="89" value="89">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- shop-sidebar end -->
            <!-- collection-info start -->
            <div class="row row-mtm" data-animate="animate__fadeIn">
                <!-- collection-img start -->
                <div class="collection-img">
                    <h6 class="font-18 meb-25">Collection without (12)</h6>
                    <img src="assets/image/collection/collection-banner.jpg" class="w-100 img-fluid border-radius" alt="collection-banner">
                </div>
                <!-- collection-img end -->
                <!-- shop-top-bar start -->
                <div class="shop-top-bar">
                    <div class="row row-mtm15 align-items-md-center">
                        <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                            <div class="shop-filter-view ul-mt15 align-items-center">
                                <!-- shop-filter start -->
                                <div class="shop-filter">
                                    <button type="button" class="shop-filter-btn secondary-color d-flex align-items-center"><i class="ri-filter-line icon-16 mer-5"></i>Filter</button>
                                </div>
                                <!-- shop-filter end -->
                                <!-- shop-view-mode start -->
                                <div class="shop-view-mode">
                                    <div class="ul-mt10">
                                        <button type="button" class="shop-view-btn dominant-color icon-16 opacity-100 disabled" data-view="grid" aria-label="Grid view"><i class="ri-layout-grid-line"></i></button>
                                    </div>
                                </div>
                                <!-- shop-view-mode end -->
                                <!-- shop-show-product start -->
                                <div class="shop-show-product">Showing 12 of 12 products</div>
                                <!-- shop-show-product end -->
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                            <!-- shop-short start -->
                            <div class="shop-short d-flex flex-wrap position-relative">
                                <label for="sortby" class="width-72 secondary-color heading-weight">Sort by:</label>
                                <select id="sortby" name="sortby" class="d-xl-none width-calc-72 h-auto ptb-0 bg-transparent border-0">
                                    <option value="manual">Featured</option>
                                    <option value="best-selling">Best selling</option>
                                    <option value="title-ascending" selected>Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-descending">Date, new to old</option>
                                    <option value="created-ascending">Date, old to new</option>
                                </select>
                                <a href="javascript:void(0)" class="short-title width-calc-72 body-color d-none d-xl-flex align-items-xl-start justify-content-xl-between">
                                    <span class="sort-title">Alphabetically, A-Z</span>
                                    <span class="sort-icon heading-weight"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                </a>
                                <ul class="collapse position-absolute top-100 start-0 end-0 ptb-5 body-bg z-1 DropDownSlide br-hidden box-shadow" id="select-wrap">
                                    <li><a href="javascript:void(0)" data-value="manual" class="d-block body-dominant-color ptb-5 plr-15">Featured</a></li>
                                    <li><a href="javascript:void(0)" data-value="best-selling" class="d-block body-dominant-color ptb-5 plr-15">Best selling</a></li>
                                    <li class="selected"><a href="javascript:void(0)" data-value="title-ascending" class="d-block secondary-color ptb-5 plr-15 extra-bg">Alphabetically, A-Z</a></li>
                                    <li><a href="javascript:void(0)" data-value="title-descending" class="d-block body-dominant-color ptb-5 plr-15">Alphabetically, Z-A</a></li>
                                    <li><a href="javascript:void(0)" data-value="price-ascending" class="d-block body-dominant-color ptb-5 plr-15">Price, low to high</a></li>
                                    <li><a href="javascript:void(0)" data-value="price-descending" class="d-block body-dominant-color ptb-5 plr-15">Price, high to low</a></li>
                                    <li><a href="javascript:void(0)" data-value="created-descending" class="d-block body-dominant-color ptb-5 plr-15">Date, new to old</a></li>
                                    <li><a href="javascript:void(0)" data-value="created-ascending" class="d-block body-dominant-color ptb-5 plr-15">Date, old to new</a></li>
                                </ul>
                            </div>
                            <!-- shop-short end -->
                        </div>
                    </div>
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-filter-list start -->
                <div class="shop-filter-list d-flex align-items-start justify-content-between">
                    <ul class="shop-filter-ul ul-mt5 align-items-center">
                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Out of stock<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">In stock<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Aliceblue<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">16cm<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Rings<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><button type="submit" class="shop-filter-active text-decoration-underline">Clear all</button></li>
                    </ul>
                    <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                </div>
                <!-- shop-filter-list end -->
                <div class="shop-product-wrap data-grid">
                    <!-- shop-grid start -->
                    <div class="row row-mtm30">
                        <div class="row">
                            @include('store.partials.product-grid', ['products' => $products])
                        </div>
                    </div>
                    <!-- shop-grid end -->
                    <!-- paginatoin start -->
                    <div class="paginatoin-area section-pt" data-animate="animate__fadeIn">
                        @include('store.partials.pagination', ['products' => $products])
                    </div>
                    <!-- paginatoin end -->
                </div>
            </div>
            <!-- collection-info end -->
        </div>
    </section>
    <!-- shop-content start -->
@endsection
