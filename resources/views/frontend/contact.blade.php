@extends('frontend.layouts.master')
@include('frontend.layouts.breadcrumb')

@section('content')
    @yield('contact')

    <!--Contact Section-->
    <section class="section-padding-2 blue-bg shaded-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                    <div class="section-title cl-white">
                        <h4><span>New</span>Any query?</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="site-form mb-30">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="text" placeholder="First Name" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="text" placeholder="Last Name" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="text" placeholder="Phone" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="email" placeholder="Email" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <textarea name="msg" rows="4" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Contact Section-->

@endsection
