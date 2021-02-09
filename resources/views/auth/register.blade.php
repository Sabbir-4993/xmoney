@extends('frontend.layouts.master')
@include('frontend.layouts.breadcrumb')

@section('content')
    @yield('register')
    <!--Signup Section -->
    <section class="section-padding blue-bg shaded-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                    <div class="section-title cl-white">
                        <h4><span>New</span>Create account</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="site-form mb-30">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input id="name" type="text" placeholder="Full Name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input id="phone" type="text" placeholder="Phone" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input id="password-confirm" type="password" placeholder="Re-Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12 pt-2 pb-2">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" value="1">

                                    <label class="form-check-label" for="terms">
                                        Agree with the <a href="{{route('tos')}}" style="color: yellow">privacy policy</a>
                                        <a href="{{route('privacy')}}" style="color: yellow">terms & conditions</a>
                                    </label>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill w-100">Register now</button>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <div class="extra-links">
                                        <a href="{{route('login')}}" class="cl-white">Login Account?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Signup Section-->
@endsection
