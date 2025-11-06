@extends('layouts.master')

@push('styles')
    <!-- other css -->
    <link rel="stylesheet" type="text/css" href="assets/css/other.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/theme.css">
@endpush

@push('scripts')
    <script src="{{asset('/assets/js/theme.js')}}"></script>
@endpush

@section('breadcrumb')
    <div class="breadcrumb-area ptb-15" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="/" class="extra-color">Home</a> / Faq's</span>
        </div>
    </div>
@endsection

@section('content')
    <!-- faqs start -->
    <section class="faqs section-ptb">
        <div class="container">
            <div class="section-capture text-center" data-animate="animate__fadeIn">
                <div class="section-title">
                    <h2 class="section-heading">Frequently asked questions</h2>
                </div>
            </div>
            <div class="row row-mtm50">
                <div class="col-12">
                    <h6 class="faqs-tab-title font-18 meb-30" data-animate="animate__fadeIn"><span>Shop guide</span></h6>
                    <div class="row">
                        <div class="other-tabs" id="faqs1-collapse">
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse1" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="true">
                                    <span class="width-calc-16 font-18 heading-weight">How do i find the right product size?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse show" id="faqs1-collapse1" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">Each product page includes a size guide to help you find the perfect fit.</p>
                                            <p class="p-bullets">Simply click on the "size guide" link near the size options to view detailed measurements and fit suggestions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse2" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">What payment methods can i use?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs1-collapse2" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">We accept various payment methods, including credit/debit cards (Visa, MasterCard, AMEX), PayPal, Apple Pay, and Google Pay. You can select your preferred payment option at checkout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse3" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">Is it safe to shop on your website?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs1-collapse3" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">Yes, shopping on our website is safe and secure. We use SSL encryption to protect your personal and payment information.</p>
                                            <p class="p-bullets">Additionally, we never store your payment details on our servers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse4" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">How do i know if an item is in stock?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs1-collapse4" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">The availability of each item is displayed on the product page. If a specific size or color is out of stock, it will be indicated as "sold out."</p>
                                            <p class="p-bullets">You can also sign up for restock notifications by entering your email on the product page.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse5" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">What should i do if the item i want is out of stock?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs1-collapse5" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">If an item you want is out of stock, you can sign up to be notified when it becomes available. Just enter your email address on the product page, and we’ll send you an alert once it’s back in stock..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse6" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">Can i place an order over the phone?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs1-collapse6" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">Yes, our customer service team can assist you with placing an order over the phone. Simply call our toll-free number at <a href="tel:18001234567" class="primary-link">1-800-123-4567</a>, and have the product details ready.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs1-collapse7" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">How do i apply a discount code to my order?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs1-collapse7" data-bs-parent="#faqs1-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">To apply a discount code, enter it in the "promo code" field at checkout. Click "apply," and the discount will be deducted from your total. Make sure to check the expiration date and terms of the promo code.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h6 class="faqs-tab-title font-18 meb-30" data-animate="animate__fadeIn"><span>Return loop</span></h6>
                    <div class="row">
                        <div class="other-tabs" id="faqs2-collapse">
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs2-collapse1" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="true">
                                    <span class="width-calc-16 font-18 heading-weight">What is your return policy?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse show" id="faqs2-collapse1" data-bs-parent="#faqs2-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">We offer a 30-day return policy from the date of purchase. If you’re not completely satisfied with your purchase, you can return it for a full refund or exchange. The item must be unused, in its original packaging, and accompanied by the receipt or proof of purchase.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs2-collapse2" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">How do i initiate a return?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs2-collapse2" data-bs-parent="#faqs2-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">To start a return, visit our Returns page, enter your order number and email, and follow the instructions provided. Once your return request is approved, you will receive a return shipping label via email.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs2-collapse3" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">Are there any items that cannot be returned?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs2-collapse3" data-bs-parent="#faqs2-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">Yes, certain items are non-returnable. These include personalized products, perishable goods, and items marked as final sale. Please check the product description for details on return eligibility before making your purchase.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h6 class="faqs-tab-title font-18 meb-30" data-animate="animate__fadeIn"><span>Money map</span></h6>
                    <div class="row">
                        <div class="other-tabs" id="faqs3-collapse">
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs3-collapse1" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="true">
                                    <span class="width-calc-16 font-18 heading-weight">What payment methods do you accept?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse show" id="faqs3-collapse1" data-bs-parent="#faqs3-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">We accept a variety of payment methods, including major credit cards (Visa, MasterCard, American Express), PayPal, Apple Pay, Google Pay, and other secure payment gateways. You can select your preferred method at checkout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs3-collapse2" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">Is it safe to use my credit card on your website?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs3-collapse2" data-bs-parent="#faqs3-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">Yes, your payment security is our top priority. Our website uses SSL encryption to protect your personal and payment information. We also comply with PCI-DSS standards to ensure safe and secure transactions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs3-collapse3" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">Can i pay with multiple payment methods?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs3-collapse3" data-bs-parent="#faqs3-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">At this time, we only allow one payment method per order. If you have store credit or a gift card, you can combine it with another payment method.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other-tab" data-animate="animate__fadeIn">
                                <a href="#faqs3-collapse4" class="primary-link d-flex flex-wrap align-items-baseline" data-bs-toggle="collapse" aria-expanded="false">
                                    <span class="width-calc-16 font-18 heading-weight">Do you offer payment plans or financing options?</span>
                                    <span class="other-tab-icon width-16 icon-16"><i class="ri-add-line d-block lh-1"></i></span>
                                </a>
                                <div class="collapse" id="faqs3-collapse4" data-bs-parent="#faqs3-collapse">
                                    <div class="pst-9">
                                        <div class="p-mtm15">
                                            <p class="p-bullets">Yes, we offer financing options through [Afterpay, Klarna, Affirm, etc.], allowing you to pay for your purchase in installments. Choose the financing option at checkout to see if you qualify.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faqs end -->
@endsection
