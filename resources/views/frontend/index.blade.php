@extends('frontend.layouts.master')

@section('content')
    <!--Hero Area-->
    <section class="hero-area gradient-overlay" style="background: url('{{asset('frontend/assets/images/banner/3.jpg')}}') no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <h4><span>new</span> Get investment and earn a lot</h4>
                        <h1>The lowest 1.55% fee wallet</h1>
                        <ul>
                            <li>Cupiditate error, ipsa quos quis nam</li>
                            <li>Odit, voluptatum iure</li>
                            <li>Dolore ex eligendi asperiores vitae voluptatibus</li>
                            <li>Psum dolor sit amet consectetur</li>
                        </ul>
                        <div class="hero-btn">
                            <a href="login.html" class="bttn-mid btn-fill"><i class="ti-crown"></i> Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12">
                    <form action="#" class="hero-form">
                        <h4>Send Money</h4>
                        <label for="validationTooltipUsername">You're sending</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">$</span>
                            </div>
                            <input type="text" class="form-control" value="500" id="validationTooltipUsername" aria-describedby="inputGroupPrepend" required>
                            <select name="currency" class="custom-select">
                                <option value="">USD</option>
                                <option value="">AUD</option>
                                <option value="">GBP</option>
                            </select>
                        </div>
                        <label for="validationCustomUsername">Recipient Gets</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend2">$</span>
                            </div>
                            <input type="text" class="form-control" value="688.74" id="validationCustomUsername" aria-describedby="inputGroupPrepend2" required>
                            <select name="currency" class="custom-select">
                                <option value="">CAD</option>
                                <option value="">AUD</option>
                                <option value="">USD</option>
                                <option value="">GBP</option>
                            </select>
                        </div>
                        <p>Total fees - 8.55 USD </p> <p>The current exchange rate is 1 USD = 1.40 CAD</p>
                        <button class="bttn-mid btn-fill w-100 mt-20"><i class="ti-check"></i>Continue</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="hero-bg-alimation">
            <ul class="box">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section><!--/Hero Area-->

    <!--Map-->
    <div class="section-padding pb-0 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <img src="{{ asset('frontend/assets/images/world-map-3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div><!--/Map-->

    <!--Why Choose Us-->
    <section class="section-padding-3 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <div class="section-title mb-60">
                        <h4><span>New</span> Why Choose us</h4>
                        <h2>We're Special</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-007-user"></i>
                        </div>
                        <div class="title">
                            <h3>Stable Useability</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-006-wallet"></i>
                        </div>
                        <div class="title">
                            <h3>Different Wallet</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-2991852"></i>
                        </div>
                        <div class="title">
                            <h3>Multiple Currency</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-2991872"></i>
                        </div>
                        <div class="title">
                            <h3>Low Rate</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-2991871"></i>
                        </div>
                        <div class="title">
                            <h3>Different Wallet</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-023-line-chart"></i>
                        </div>
                        <div class="title">
                            <h3>Multiple Currency</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-030-carrier"></i>
                        </div>
                        <div class="title">
                            <h3>Low Rate</h3>
                        </div>
                        <p>Voluptatibus, fugiat. Perspiciatis libero saepe ullam rem qui</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Why Choose Us-->

    <!--About Area-->
    <section class="section-padding-2 blue-bg-2 dots-after">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 cl-white mb-30">
                    <div class="section-title">
                        <h4><span>Top</span>What we do?</h4>
                        <h2>There is what we do</h2>
                    </div>
                    <p class="cl-white-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, veniam. Quisquam dicta, atque nemo error impedit necessitatibus, incidunt rem architecto optio facilis aut illo labore numquam et soluta quo. Ratione! Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem aliquam amet nulla eius voluptates rem numquam ipsa, dolores ratione soluta quo tempora, quis sit. Amet fugit autem nobis officiis eius.</p>
                    <div class="row mb-20">
                        <div class="col-xl-6 col-md-12">
                            <h5 class="mb-10">Mission</h5>
                            <p class="cl-white-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, velit. Facere pariatur iste cupiditate ea, animi nihil dolor iusto amet error libero aut deleniti quas laboriosam accusamus, unde quisquam dolorem. Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <h5 class="mb-10">Vission</h5>
                            <p class="cl-white-light">Inventore? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, inventore quae laudantium accusamus adipisci sequi veritatis saepe aspernatur libero fuga illo voluptas nihil. Sequi, quis aspernatur! Deserunt pariatur quas reiciendis!</p>
                        </div>
                    </div>

                    <a href="about.html" class="bttn-small btn-fill">Continue Reading</a>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/images/about.jpg') }}" alt="">
                        <a href="https://www.youtube.com/watch?v=DJyxwIGdl8Y" class="video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/About Area-->

    <!--Solutions Section-->
    <section class="section-padding-2 blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <div class="section-title">
                        <h4><span>new</span>Anyone can use</h4>
                        <h2>Solutions for</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="{{ asset('frontend/assets/images/users/1.jpg') }}" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Freelancer</a></h3>
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="{{ asset('frontend/assets/images/users/2.jpg') }}" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Internet Retailer</a></h3>
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="{{ asset('frontend/assets/images/users/3.jpg') }}" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Online Professional</a></h3>
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="{{ asset('frontend/assets/images/users/4.jpg') }}" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Affiliate Marketer</a></h3>
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Solutions Section-->

    <!-- What we do -->
    <section class="section-padding-2 blue-bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12 centered">
                    <div class="section-title">
                        <h4><span>new</span> What we're doing?</h4>
                        <h2>Follow this stepts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-ruler-pencil"></i>
                        </div>
                        <div class="title">
                            <h3>Send Money</h3>
                        </div>
                        <p>Quae omnis et alias quisquam quod? Laborum accusamus sed exercitationem quod</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-layout"></i>
                        </div>
                        <div class="title">
                            <h3>Currency Exchange</h3>
                        </div>
                        <p>Quae omnis et alias quisquam quod? Laborum accusamus sed exercitationem quod</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-cup"></i>
                        </div>
                        <div class="title">
                            <h3>Widthdraw</h3>
                        </div>
                        <p>Quae omnis et alias quisquam quod? Laborum accusamus sed exercitationem quod</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-package"></i>
                        </div>
                        <div class="title">
                            <h3>Deposit</h3>
                        </div>
                        <p>Quae omnis et alias quisquam quod? Laborum accusamus sed exercitationem quod</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /What we do -->

    <!--Packages-->
    <section class="section-padding-2 blue-bg dots-before">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/1.jpg') }}" alt="">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/2.jpg') }}" alt="">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/3.jpg') }}" alt="">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/4.jpg') }}" alt="">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/5.jpg') }}" alt="">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/6.jpg') }}" alt="">
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
                                <img src="{{ asset('frontend/assets/images/jackpots/4.jpg') }}" alt="">
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
    <section class="section-padding-2 blue-bg-2 dots-before">
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

    <!-- New User Area -->
    <section class="section-padding blue-bg dots-after">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <div class="section-title cl-white">
                        <h4><span>New</span>Top Users</h4>
                        <h2>Best Users</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="John Harison">
                        <img src="{{ asset('frontend/assets/images/new-user/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verna Valdez">
                        <img src="{{ asset('frontend/assets/images/new-user/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Leticia Romero">
                        <img src="{{ asset('frontend/assets/images/new-user/3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Erica Rodriquez">
                        <img src="{{ asset('frontend/assets/images/new-user/4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nathan Murray">
                        <img src="{{ asset('frontend/assets/images/new-user/5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Kerry Dixon">
                        <img src="{{ asset('frontend/assets/images/new-user/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ollie Fleming">
                        <img src="{{ asset('frontend/assets/images/new-user/7.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lynda Gregory">
                        <img src="{{ asset('frontend/assets/images/new-user/8.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Leigh Bates">
                        <img src="{{ asset('frontend/assets/images/new-user/9.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wanda Boone">
                        <img src="{{ asset('frontend/assets/images/new-user/10.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cristina James">
                        <img src="{{ asset('frontend/assets/images/new-user/11.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emilio Fuller">
                        <img src="{{ asset('frontend/assets/images/new-user/12.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="John Harison">
                        <img src="{{ asset('frontend/assets/images/new-user/10.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verna Valdez">
                        <img src="{{ asset('frontend/assets/images/new-user/12.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Leticia Romero">
                        <img src="{{ asset('frontend/assets/images/new-user/11.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Erica Rodriquez">
                        <img src="{{ asset('frontend/assets/images/new-user/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nathan Murray">
                        <img src="{{ asset('frontend/assets/images/new-user/3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Kerry Dixon">
                        <img src="{{ asset('frontend/assets/images/new-user/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ollie Fleming">
                        <img src="{{ asset('frontend/assets/images/new-user/4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lynda Gregory">
                        <img src="{{ asset('frontend/assets/images/new-user/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Leigh Bates">
                        <img src="{{ asset('frontend/assets/images/new-user/5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wanda Boone">
                        <img src="{{ asset('frontend/assets/images/new-user/7.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cristina James">
                        <img src="{{ asset('frontend/assets/images/new-user/9.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="single-new-user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emilio Fuller">
                        <img src="{{ asset('frontend/assets/images/new-user/8.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 centered">
                    <a href="register.html" class="bttn-small btn-fill">Signup now</a>
                </div>
            </div>
        </div>
    </section><!-- New User Area -->

    <!-- Counter Area -->
    <section class="section-padding-2 gradient-overlay" style="background: url('{{asset('frontend/assets/images/banner/3.jpg')}}') no-repeat fixed;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-counter">
                        <i class="flaticon-011-share"></i>
                        <h3 class="count">5246</h3>
                        <h5>Lines of code</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-counter">
                        <i class="flaticon-028-coins"></i>
                        <h3 class="count">2016</h3>
                        <h5>Cup of coffee</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-counter">
                        <i class="flaticon-026-hierarchy"></i>
                        <h3 class="count">68</h3>
                        <h5>Project done</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-counter">
                        <i class="flaticon-2991877"></i>
                        <h3>$<span class="count">11.5</span>M</h3>
                        <h5>Daily Transaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Counter Area -->

    <!-- Testimonials -->
    <section class="section-padding blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 centered">
                    <div class="section-title">
                        <h4><span>new</span> What users say about us</h4>
                        <h2>You will get confident to start using us</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 centered">
                    <div class="testimonials owl-carousel">
                        <div class="single-testimonial">
                            <div class="text">
                                Rerum vitae commodi dicta error quaerat debitis magnam numquam earum! In vel dolorum repudiandae aspernatur praesentium incidunt molestias enim quis sapiente perspiciatis
                            </div>
                            <div class="person">
                                <img src="{{ asset('frontend/assets/images/reviewer/1.jpg') }}" alt="">
                                <h4>Nick Herison</h4>
                                <p>Freelancer</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="text">
                                Rerum vitae commodi dicta error quaerat debitis magnam numquam earum! In vel dolorum repudiandae aspernatur praesentium incidunt molestias enim quis sapiente perspiciatis
                            </div>
                            <div class="person">
                                <img src="{{ asset('frontend/assets/images/reviewer/2.jpg') }}" alt="">
                                <h4>Nick Herison</h4>
                                <p>Freelancer</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="text">
                                Rerum vitae commodi dicta error quaerat debitis magnam numquam earum! In vel dolorum repudiandae aspernatur praesentium incidunt molestias enim quis sapiente perspiciatis
                            </div>
                            <div class="person">
                                <img src="{{ asset('frontend/assets/images/reviewer/3.jpg') }}" alt="">
                                <h4>Nick Herison</h4>
                                <p>Freelancer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Testimonials -->

    <!-- Pricing Section-->
    <section class="section-padding-2 blue-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h4><span>New</span> Pricing</h4>
                        <h2>Price List</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-price-table">
                        <div class="pricing-title">
                            <i class="ti-settings"></i>
                            <h2>Basic</h2>
                        </div>
                        <div class="pricing-price">
                            <h4><sup>$</sup>25<span>/ Monthly</span></h4>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li><i class="ti-check"></i>Limited Man power</li>
                                <li><i class="ti-check"></i>Free Advertisement</li>
                                <li><i class="ti-check"></i>Advanced Options</li>
                                <li class="cross"><i class="ti-close"></i>24/7 Support</li>
                            </ul>
                        </div>
                        <a href="#" class="bttn-small btn-fill">Start now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-price-table">
                        <div class="pricing-title">
                            <i class="ti-medall-alt"></i>
                            <h2>Standard</h2>
                        </div>
                        <div class="feature-price"></div>
                        <div class="pricing-price">
                            <h4><sup>$</sup>49<span>/ Monthly</span></h4>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li><i class="ti-check"></i>Unlimited Man power</li>
                                <li><i class="ti-check"></i>Free Advertisement</li>
                                <li><i class="ti-check"></i>Advanced Options</li>
                                <li class="cross"><i class="ti-close"></i>24/7 Support</li>
                            </ul>
                        </div>
                        <a href="#" class="bttn-small btn-fill">Start now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-price-table">
                        <div class="pricing-title">
                            <i class="ti-crown"></i>
                            <h2>Advanced</h2>
                        </div>
                        <div class="pricing-price">
                            <h4><sup>$</sup>89<span>/ Monthly</span></h4>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li><i class="ti-check"></i>Unlimited Man power</li>
                                <li><i class="ti-check"></i>Free Advertisement</li>
                                <li><i class="ti-check"></i>Advanced Options</li>
                                <li><i class="ti-check"></i>24/7 Support</li>
                            </ul>
                        </div>
                        <a href="#" class="bttn-small btn-fill">Start now</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Pricing Section-->

    <!-- Mobile App -->
    <section class="section-padding-2 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 centered">
                    <div class="section-title">
                        <h4><span>New</span>Mobile app</h4>
                        <h2>Get your Mobile now</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="app-content">
                        <div class="single-app-content">
                            <h3>Use to pay bill</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                        <div class="single-app-content">
                            <h3>Monitor live</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                        <div class="single-app-content">
                            <h3>Instantly Transaction</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                        <div class="single-app-content">
                            <h3>Reliability</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="app-content">
                        <div class="app-content-slider owl-carousel">
                            <img class="middle-img" src="{{ asset('frontend/assets/images/mobile-4.png') }}" alt="">
                            <img class="middle-img" src="{{ asset('frontend/assets/images/mobile-5.png') }}" alt="">
                            <img class="middle-img" src="{{ asset('frontend/assets/images/mobile-2.png') }}" alt="">
                            <img class="middle-img" src="{{ asset('frontend/assets/images/mobile-3.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="app-content">
                        <div class="single-app-content">
                            <h3>Easy to manage</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                        <div class="single-app-content">
                            <h3>See Statistics</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                        <div class="single-app-content">
                            <h3>Use to pay bill</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                        <div class="single-app-content">
                            <h3>Use to pay bill</h3>
                            <p>Necessitatibus iure eum temporibus quo expedita officiis, amet, distinctio accusantium tempora saepe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Mobile App -->

    <!-- Team Section -->
    <section class="section-padding blue-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h4><span>new</span> Team</h4>
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>
            <div id="team-carousel" class="team-carousel owl-carousel">
                <div class="team-box">
                    <img src="{{ asset('frontend/assets/images/team/1.jpg') }}" alt="team">
                    <div class="hover">
                        <h4>Joy Burton</h4>
                        <p>CEO and Founder</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-medium"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-box">
                    <img src="{{ asset('frontend/assets/images/team/2.jpg') }}" alt="team">
                    <div class="hover">
                        <h4>Mega Rox</h4>
                        <p>CTO</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-box">
                    <img src="{{ asset('frontend/assets/images/team/3.jpg') }}" alt="team">
                    <div class="hover">
                        <h4>Lever Jhon</h4>
                        <p>Lead Engineer</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-box">
                    <img src="{{ asset('frontend/assets/images/team/4.jpg') }}" alt="team">
                    <div class="hover">
                        <h4>Naven Kaper</h4>
                        <p>Support Engineer</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-box">
                    <img src="{{ asset('frontend/assets/images/team/2.jpg') }}" alt="team">
                    <div class="hover">
                        <h4>Royal Cott</h4>
                        <p>Marketer</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->

    <!-- Blog Section -->
    <section class="section-padding blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 centered">
                    <div class="section-title">
                        <h4><span>new</span> Blog section</h4>
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>

            <!-- News Carousel -->
            <div class="news-carousel owl-carousel">
                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <ul class="info">
                            <li class="day">14th <span>Oct</span></li>
                            <li class="comments"><a href="#">10<span class="ti-comments"></span></a></li>
                        </ul>
                        <div class="content">
                            <img src="{{ asset('frontend/assets/images/blog/1.jpg') }}" alt="" />
                            <div class="author">Category: <a href="#">Wallet</a> by <a href="blog-single.html">Paylo</a></div>
                            <h3><a href="blog-single.html">Learn how to make Transaction</a></h3>
                            <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have..</div>
                            <div class="link-box"><a href="blog-single.html">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <ul class="info">
                            <li class="day">14th <span>Oct</span></li>
                            <li class="comments"><a href="#">10<span class="ti-comments"></span></a></li>
                        </ul>
                        <div class="content">
                            <img src="{{ asset('frontend/assets/images/blog/2.jpg') }}" alt="" />
                            <div class="author">Category: <a href="#">Wallet</a> by <a href="blog-single.html">Paylo</a></div>
                            <h3><a href="blog-single.html">Making the Transaction free and secure</a></h3>
                            <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have..</div>
                            <div class="link-box"><a href="blog-single.html">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <ul class="info">
                            <li class="day">14th <span>Oct</span></li>
                            <li class="comments"><a href="#">10<span class="ti-comments"></span></a></li>
                        </ul>
                        <div class="content">
                            <img src="{{ asset('frontend/assets/images/blog/3.jpg') }}" alt="" />
                            <div class="author">Category: <a href="#">Wallet</a> by <a href="blog-single.html">Paylo</a></div>
                            <h3><a href="blog-single.html">Your Transaction should perfect</a></h3>
                            <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have..</div>
                            <div class="link-box"><a href="blog-single.html">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Blog Section -->

    <!--Payments Area-->
    <section class="section-padding-3 blue-bg-2 dots-after">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="single-payments">
                        <a href="#"><img src="{{ asset('frontend/assets/images/payments/1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="single-payments">
                        <a href="#"><img src="{{ asset('frontend/assets/images/payments/2.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="single-payments">
                        <a href="#"><img src="{{ asset('frontend/assets/images/payments/3.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="single-payments">
                        <a href="#"><img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="single-payments">
                        <a href="#"><img src="{{ asset('frontend/assets/images/payments/5.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                    <div class="single-payments">
                        <a href="#"><img src="{{ asset('frontend/assets/images/payments/6.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Payments Area-->

    <!--newslatter-->
    <section class="section-padding blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="call-to-action centered">
                        <div class="section-title">
                            <h4><span>Top</span>Stay updated</h4>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-sm-12">
                                <div class="newslatter">
                                    <form action="#">
                                        <input type="email" placeholder="Email Address" required>
                                        <button type="submit">Subscribe</button>
                                    </form>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/newslatter-->
@endsection
