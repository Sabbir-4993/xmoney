@extends('frontend.layouts.master')
@include('frontend.layouts.breadcrumb')

@section('content')
    @yield('blog')

    <!--Blog-->
    <section class="section-padding blue-bg dots-before">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <div class="section-title">
                        <h4><span>New</span>Lastest articles</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="site-sidebar">
                        <div class="single-sidebar">
                            <h3>Search</h3>
                            <form action="#">
                                <input type="text" placeholder="Search" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar">
                            <h3>Important topic</h3>
                            <ul>
                                <li><a href="#">How to play</a></li>
                                <li><a href="#">Gambling Investments</a></li>
                                <li><a href="#">Earn more</a></li>
                                <li><a href="#">Payments Gateways</a></li>
                                <li><a href="#">How to win</a></li>
                            </ul>
                        </div>
                        <div class="single-sidebar">
                            <h3>Social Pages</h3>
                            <div class="social-follow">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="single-blog-block">
                        <a href="blog-details.html">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/blog/1.jpg') }}" alt="">
                            </div>
                            <div class="title">
                                <h2>Top Playing for mastermind</h2>
                            </div>
                            <div class="meta">
                                <div class="date">
                                    12th may, 2020
                                </div>
                                <div class="author">
                                    Robart husson
                                </div>
                            </div>
                            <div class="content">
                                <p>Nisi magnam iure, quis iusto ad expedita nulla? Rem minima exercitationem nesciunt ipsa, nemo doloribus voluptates dolore.</p>
                            </div>
                            <div class="read-more">
                                <span class="bttn-small btn-fill">Continue Reading</span>
                            </div>
                        </a>
                    </div>
                    <div class="single-blog-block">
                        <a href="blog-details.html">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/blog/2.jpg') }}" alt="">
                            </div>
                            <div class="title">
                                <h2>Best Playing for Dice player</h2>
                            </div>
                            <div class="meta">
                                <div class="date">
                                    12th may, 2020
                                </div>
                                <div class="author">
                                    Robart husson
                                </div>
                            </div>
                            <div class="content">
                                <p>Nisi magnam iure, quis iusto ad expedita nulla? Rem minima exercitationem nesciunt ipsa, nemo doloribus voluptates dolore.</p>
                            </div>
                            <div class="read-more">
                                <span class="bttn-small btn-fill">Continue Reading</span>
                            </div>
                        </a>
                    </div>
                    <div class="single-blog-block">
                        <a href="blog-details.html">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/blog/3.jpg') }}" alt="">
                            </div>
                            <div class="title">
                                <h2>Best Playing for Dice player</h2>
                            </div>
                            <div class="meta">
                                <div class="date">
                                    12th may, 2020
                                </div>
                                <div class="author">
                                    Robart husson
                                </div>
                            </div>
                            <div class="content">
                                <p>Nisi magnam iure, quis iusto ad expedita nulla? Rem minima exercitationem nesciunt ipsa, nemo doloribus voluptates dolore.</p>
                            </div>
                            <div class="read-more">
                                <span class="bttn-small btn-fill">Continue Reading</span>
                            </div>
                        </a>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!--/Blog-->

@endsection
