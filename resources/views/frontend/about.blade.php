@extends('frontend.layouts.master')
@include('frontend.layouts.breadcrumb')

@section('content')
    @yield('about')
    <!--About Section-->
    <section class="section-padding-2 blue-bg-2 dots-before">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <img src="{{ asset('frontend/assets/images/feature.png') }}" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="about-content cl-white">
                        <div class="section-title">
                            <h4><span>Best</span>About us</h4>
                            <h2>Explore us, know about us</h2>
                        </div>
                        <p>Sit amet consectetur adipisicing elit. Doloremque, similique! Magni ullam quas deleniti et fugit cumque animi praesentium. Eum eos alias facere recusandae, quidem culpa magni officiis. Nisi, ullam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum voluptate</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quo deleniti non enim possimus unde ex sed odio rerum expedita aliquam corporis reiciendis architecto inventore assumenda obcaecati fuga, dolorum ea Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit vero consequuntur minus dolorem blanditiis laborum nemo. Error, quo aliquam reiciendis voluptatibus vero quam nostrum minima qui doloremque soluta officiis iusto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quod sed sit adipisci harum, facere consequatur cumque commodi, quaerat mollitia maiores libero est alias tempora odit dignissimos quo quas laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 cl-white">
                    <div class="about-content">
                        <h5 class="mb-20">Mission</h5>
                        <p class="mb-50">Voluptatum cupiditate amet ratione numquam accusamus assumenda, reprehenderit illum voluptatem sapiente vitae debitis reiciendis nesciunt qui! Maxime, nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aperiam animi placeat eaque cum optio ullam? Dolore, eveniet doloribus numquam molestias, distinctio natus culpa, quia quam in cumque voluptates sapiente! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, itaque corporis ipsa non, veritatis vel aliquam libero ratione nulla enim voluptates culpa mollitia dolores molestias rem. Necessitatibus quo id nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error veritatis possimus natus dignissimos doloribus? Maxime consequuntur optio obcaecati praesentium ad minus, deleniti nemo? Iure, itaque vitae ratione neque veritatis necessitatibus.</p>
                        <h5 class="mb-20">Vission</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat distinctio odio mollitia voluptatum cupiditate amet ratione numquam accusamus assumenda, reprehenderit illum voluptatem sapiente vitae debitis reiciendis nesciunt qui! Maxime, nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aperiam animi placeat eaque cum optio ullam? Dolore, eveniet doloribus numquam molestias, distinctio natus culpa, quia quam in cumque voluptates sapiente! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, itaque corporis ipsa non, veritatis vel aliquam libero ratione nulla enim voluptates culpa mollitia dolores molestias rem. Necessitatibus quo id nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error veritatis possimus natus dignissimos doloribus? Maxime consequuntur optio obcaecati praesentium ad minus, deleniti nemo? Iure, itaque vitae ratione neque veritatis necessitatibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/About Section-->


    <!--User Review Section-->
    <section class="section-padding-2 blue-bg dots-after">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <div class="section-title">
                        <h4><span>New</span>What our client says</h4>
                        <h2>Player Words</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="single-user-review">
                        <div class="quote-icon">
                            <img src="{{ asset('frontend/assets/images/quote.png') }}" alt="">
                        </div>
                        <div class="review">
                            <p>Got a best place to play with dream from them, it's amazing fast and get what I expect. Highly Recomended!!</p>
                        </div>
                        <div class="reviewer-thumb">
                            <img src="{{ asset('frontend/assets/images/reviewer/1.jpg') }}" alt="">
                            <p>Astron haat</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-user-review">
                        <div class="quote-icon">
                            <img src="{{ asset('frontend/assets/images/quote.png') }}" alt="">
                        </div>
                        <div class="review">
                            <p>Got a best place to play with dream from them, it's amazing fast and get what I expect. Highly Recomended!!</p>
                        </div>
                        <div class="reviewer-thumb">
                            <img src="{{ asset('frontend/assets/images/reviewer/2.jpg') }}" alt="">
                            <p>Astron haat</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-user-review">
                        <div class="quote-icon">
                            <img src="{{ asset('frontend/assets/images/quote.png') }}" alt="">
                        </div>
                        <div class="review">
                            <p>Got a best place to play with dream from them, it's amazing fast and get what I expect. Highly Recomended!!</p>
                        </div>
                        <div class="reviewer-thumb">
                            <img src="{{ asset('frontend/assets/images/reviewer/3.jpg') }}" alt="">
                            <p>Astron haat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/User Review Section-->
@endsection
