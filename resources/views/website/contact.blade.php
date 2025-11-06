@extends('layouts.master')

@push('styles')
    <!-- other css -->
    <link rel="stylesheet" type="text/css" href="assets/css/other.css">
@endpush
@push('scripts')
    <script src="{{asset('/assets/js/theme.js')}}"></script>
@endpush

@section('breadcrumb')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-15" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="/" class="extra-color">Home</a> / Contact us</span>
        </div>
    </div>
    <!-- breadcrumb-area end -->
@endsection

@section('content')
    <!-- contact-map start -->
    <div class="contact-map section-pt">
        <div class="container">
            <div class="section-capture text-center" data-animate="animate__fadeIn">
                <div class="section-title">
                    <h2 class="section-heading">Get in touch</h2>
                </div>
            </div>
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093743!2d144.9556513156168!3d-37.81731367975168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1b1f5b3%3A0x2f3e10c62b5d1b8b!2sMelbourne%20Central!5e0!3m2!1sen!2sau!4v1690839464351!5m2!1sen!2sau" class="d-block w-100 br-hidden" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Location" data-animate="animate__fadeIn"></iframe>--}}
        </div>
    </div>
    <!-- contact-map end -->
    <!-- contact-form-touch start -->
    <section class="contact-form-touch section-ptb">
        <div class="container">
            <div class="row row-mtm">
                <div class="col-12 col-md-6">
                    <h6 class="font-18 meb-30" data-animate="animate__fadeIn">Drop us message</h6>
                    <!-- contact-form start -->
                    <div class="contact-form">
                        <form method="post" action="javascript:void(0)">
                            <div class="row field-row">
                                <div class="col-12 field-col" data-animate="animate__fadeIn">
                                    <label for="name" class="field-label">Name</label>
                                    <input type="text" id="name" name="name" class="w-100" placeholder="Full name" autocomplete="name">
                                </div>
                                <div class="col-12 field-col" data-animate="animate__fadeIn">
                                    <label for="email" class="field-label">Email</label>
                                    <input type="email" id="email" name="email" class="w-100" placeholder="Email" autocomplete="email">
                                </div>
                                <div class="col-12 field-col" data-animate="animate__fadeIn">
                                    <label for="phone" class="field-label">Phone number</label>
                                    <input type="text" id="phone" name="phone" class="w-100" placeholder="Phone number" autocomplete="tel">
                                </div>
                                <div class="col-12 field-col" data-animate="animate__fadeIn">
                                    <label for="message" class="field-label">Message</label>
                                    <textarea rows="5" id="message" name="message" class="w-100" placeholder="Message" autocomplete="off"></textarea>
                                </div>
                            </div>
                            <div class="contact-form-btn mst-20 mst-sm-30">
                                <div class="row">
                                    <div class="col-12 meb-11" data-animate="animate__fadeIn">
                                        <label class="cust-checkbox-label checkbox-agree">
                                            <input type="checkbox" class="cust-checkbox checkboxbtn">
                                            <span class="d-block cust-check"></span>
                                            <span class="login-read">I agree to the <a href="terms-condition.html" class="body-secondary-color text-decoration-underline">rules & policies</a> and acknowledge that my info will be stored safely following the data guidelines.</span>
                                        </label>
                                    </div>
                                    <div class="col-12" data-animate="animate__fadeIn">
                                        <button type="submit" class="w-100 btn-style secondary-btn hide-btn opacity-50 disabled pe-none">Submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- contact-form end -->
                </div>
                <div class="col-12 col-md-6">
                    <h6 class="font-18 meb-30" data-animate="animate__fadeIn">Get in touch</h6>
                    <!-- contact-touch start -->
                    <div class="contact-touch">
                        <div class="row row-mtm30">
                            <div class="col-12" data-animate="animate__fadeIn">
                                <div class="contact-touch-content d-flex flex-wrap align-items-center">
                                    <span class="contact-touch-icon width-80 height-80 primary-color icon-24 d-flex align-items-center justify-content-center extra-bg rounded-circle"><i class="ri-map-pin-range-line d-block lh-1"></i></span>
                                    <div class="contact-touch-info width-calc-80 psl-15">
                                        <div class="ul-mtm-15">
                                            <span>1234 MG road, Bengaluru</span>
                                            <span>Karnataka 560001, India</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" data-animate="animate__fadeIn">
                                <div class="contact-touch-content d-flex flex-wrap align-items-center">
                                    <span class="contact-touch-icon width-80 height-80 primary-color icon-24 d-flex align-items-center justify-content-center extra-bg rounded-circle"><i class="ri-phone-line d-block lh-1"></i></span>
                                    <div class="contact-touch-info width-calc-80 psl-15">
                                        <div class="ul-mtm-15">
                                            <span><a href="tel:+919876543210" class="d-inline-block body-primary-color">+91 98765-43210</a></span>
                                            <span><a href="tel:+919988765432" class="d-inline-block body-primary-color">+91 99887-65432</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" data-animate="animate__fadeIn">
                                <div class="contact-touch-content d-flex flex-wrap align-items-center">
                                    <span class="contact-touch-icon width-80 height-80 primary-color icon-24 d-flex align-items-center justify-content-center extra-bg rounded-circle"><i class="ri-mail-line d-block lh-1"></i></span>
                                    <div class="contact-touch-info width-calc-80 psl-15">
                                        <div class="ul-mtm-15">
                                            <span><a href="mailto:info@demowebsite.com" class="d-inline-block body-primary-color">info@demowebsite.com</a></span>
                                            <span><a href="mailto:hello@demowebsite.com" class="d-inline-block body-primary-color">hello@demowebsite.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contact-touch end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-touch end -->
@endsection
