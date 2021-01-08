@extends('frontend.layouts.master')
@include('frontend.layouts.breadcrumb')

@section('content')
    @yield('faq')

    <!-- Faq Section -->
    <section class="section-padding blue-bg dots-after">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <div class="section-title cl-white">
                        <h4><span>New</span>Any asking?</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="faq-content mb-30">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="bttn-small btn-fill active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Essentials</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="bttn-small btn-fill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Recomended</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="bttn-small btn-fill" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Important</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to play?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>What is the chance?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to invest?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to find games?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>What is the payment?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>Will I get paid?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to find games?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>What is the payment?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>Will I get paid?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to play?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>What is the chance?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to invest?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to play?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>What is the chance?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to invest?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>How to find games?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>What is the payment?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-faq-box">
                                            <h4>Will I get paid?</h4>
                                            <p>Deleniti dolorem nisi. Aperiam dolore dolor enim id architecto inventore, cum pariatur iste, reiciendis, quaerat neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 centered">
                    <a href="contact.html" class="bttn-mid btn-fill">Still asking?</a>
                </div>
            </div>
        </div>
    </section><!-- /Faq Section -->

@endsection
