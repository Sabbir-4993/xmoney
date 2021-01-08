@extends('frontend.layouts.master')
@include('frontend.layouts.breadcrumb')

@section('content')
    @yield('howitworks')

    <!--How It works-->
    <section class="steps-area section-padding-2 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <div class="section-title cl-white">
                        <h4><span>Start</span>How It works?</h4>
                        <h2>How It works</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-steps">
                        <div class="step-number">1</div>
                        <i class="flaticon-007-user"></i>
                        <h4>Signin account</h4>
                        <p>Nobis, quasi porro eligendi eos inventore dignissimos, velit necessitatibus quaerat</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-steps">
                        <div class="step-number">2</div>
                        <i class="flaticon-009-percentage"></i>
                        <h4>Get bonus</h4>
                        <p>Nobis, quasi porro eligendi eos inventore dignissimos, velit necessitatibus quaerat</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-steps">
                        <div class="step-number">3</div>
                        <i class="flaticon-034-bank"></i>
                        <h4>Start Transaction</h4>
                        <p>Nobis, quasi porro eligendi eos inventore dignissimos, velit necessitatibus quaerat</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-steps">
                        <div class="step-number">4</div>
                        <i class="flaticon-038-agreement"></i>
                        <h4>Happy Earnings</h4>
                        <p>Nobis, quasi porro eligendi eos inventore dignissimos, velit necessitatibus quaerat</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/How It works-->

    <!--Packages-->
    <section class="section-padding-2 blue-bg-2 dots-before">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title cl-white centered">
                        <h4><span>Hot</span>Best Packages</h4>
                        <h2>Hotlight Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="jackpots owl-carousel">
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/1jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Horus</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">85% MRP <i class="fa fa-arrow-up cl-primary"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/2jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Frogs</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">25% MRP <i class="fa fa-arrow-down cl-red"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/3jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Warfare</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">25% MRP <i class="fa fa-arrow-down cl-red"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/4jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Tiger man</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">85% MRP <i class="fa fa-arrow-up cl-primary"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/5jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Dragons paw</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">25% MRP <i class="fa fa-arrow-down cl-red"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/6jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Fox flier</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">85% MRP <i class="fa fa-arrow-up cl-primary"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                        <div class="single-jackpot">
                            <a href="#">
                                <img src="{{ asset('frontend/assets/images/jackpots/4jpg') }}" alt="">
                                <div class="content">
                                    <div class="name">Fox flier</div>
                                    <div class="price-play">$5,268 <span><i class="fa fa-play"></i></span></div>
                                    <div class="mrp">85% MRP <i class="fa fa-arrow-down cl-red"></i></div>
                                    <span class="bttn-small btn-fill w-100">Get now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Packages-->

    <!--Call to action-->
    <section class="section-padding-2 blue-bg dots-before">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 mb-30">
                    <div class="call-to-action">
                        <h4>Get the bonus up to</h4>
                        <h1>$199<span>for</span></h1>
                        <div class="cat-btns">
                            <a href="#" class="bttn-mid btn-fill">Signup now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="last-winners">
                        <h4>Lastest bonus winners</h4>
                        <div class="single-winner">
                            <div class="thumb">P</div>
                            <div class="content">
                                <p>Potrik won <span>$199</span> from reefer his friends</p>
                            </div>
                        </div>
                        <div class="single-winner">
                            <div class="thumb">K</div>
                            <div class="content">
                                <p>Kevin won <span>$199</span> from reefer his friends</p>
                            </div>
                        </div>
                        <div class="single-winner">
                            <div class="thumb">S</div>
                            <div class="content">
                                <p>Soul won <span>$199</span> from reefer his friends</p>
                            </div>
                        </div>
                        <div class="single-winner">
                            <div class="thumb">Y</div>
                            <div class="content">
                                <p>York won <span>$199</span> from reefer his friends</p>
                            </div>
                        </div>
                        <div class="single-winner">
                            <div class="thumb">R</div>
                            <div class="content">
                                <p>Rick won <span>$199</span> from reefer his friends</p>
                            </div>
                        </div>
                        <div class="single-winner">
                            <div class="thumb">T</div>
                            <div class="content">
                                <p>Toress won <span>$199</span> from reefer his friends</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Call to action-->
@endsection
