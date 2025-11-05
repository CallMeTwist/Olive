@foreach ($products as $product)
    <div class="col-6 col-md-4 col-xl-3 d-flex shop-col" data-animate="animate__fadeIn">
        <div class="single-product w-100">
            <div class="row single-product-wrap">
                <div class="product-image">
                    <a href="{{ route('store.product.show', $product->id) }}" class="pro-img">
                        @if($product->images->count() >= 2)
                            <img src="{{ asset('storage/' . $product->images[0]->path) }}" class="w-100 img-fluid img1" alt="{{ $product->title }}">
                            <img src="{{ asset('storage/' . $product->images[1]->path) }}" class="w-100 img-fluid img2" alt="{{ $product->title }}">
                        @elseif($product->primaryImage)
                            <img src="{{ asset('storage/' . $product->primaryImage->path) }}" class="w-100 img-fluid img1" alt="{{ $product->title }}">
                        @endif
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
                                <span class="d-block meb-8">{{ $product->category->name ?? 'Uncategorized' }}</span>
                                <span class="d-block heading-weight">
                                                                <a href="{{ route('store.product.show', $product->slug) }}" class="d-block w-100 dominant-link text-truncate">
                                                                    {{ $product->title }}
                                                                </a>
                                                            </span>
                            </div>
                            <div class="pro-price-action">
                                <div class="price-box heading-weight">
                                    <span class="new-price dominant-color">₦{{ number_format($product->price, 0) }}</span>
                                    @if($product->old_price)
                                        <span class="old-price text-decoration-line-through">₦{{ number_format($product->old_price, 0) }}</span>
                                    @endif
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
                                <span class="new-price dominant-color">₦{{ number_format($product->price) }}</span>
                                @if($product->old_price)
                                    <span class="old-price text-decoration-line-through">₦{{ number_format($product->old_price) }}</span>
                                @endif
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
{{--                            <a href="javascript:void(0)" class="add-to-wishlist">--}}
{{--                                <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>--}}
{{--                                <span class="tooltip-text">wishlist</span>--}}
{{--                            </a>--}}
                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                <span class="tooltip-text">quickview</span>
                            </a>
                        </div>
                    </div>
                    <div class="pro-sku-variant">
                        <div class="product-sku-variant">
{{--                            <div class="pro-sku">--}}
{{--                                <span class="heading-color text-uppercase heading-weight">--}}
{{--                                    SKU: <span class="dominant-color msl-4">{{ $product->sku }}</span>--}}
{{--                                </span>--}}
{{--                            </div>--}}
                            @if($product->available_sizes)
                                <div class="pro-select-variant">
                                    <span class="heading-color text-uppercase heading-weight">Size:</span>
                                    <select class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                        @foreach($product->available_sizes as $size)
                                            <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
