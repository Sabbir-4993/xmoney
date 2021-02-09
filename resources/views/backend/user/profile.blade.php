@extends('backend.user.layouts.master')
@include('backend.user.layouts.partials.dashboard_top')
@include('backend.user.layouts.partials.newsletter')
@include('backend.user.layouts.partials.sidebar')

@section('content')
    @yield('top')

    <!--Dashboard Bottom-->
    <section class="section-padding-sm-2 blue-bg-2">
        <div class="container">
            <div class="row justify-content-center">
                @yield('sidebar')

                {{--Code--}}
                <div class="col-xl-9 col-lg-9 col-md-12 mb-20">
                    <div class="card mb-30">
                        <div class="card-header">
                            Profile Info <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile info"><i class="ti-pencil"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="profile-card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb text-right">
                                            <img src="{{asset('Frontend/assets/images/new-user/1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <div class="left-info text-right">
                                            <p>Name</p>
                                            <p>Date of Birth</p>
                                            <p>Address</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <div class="right-info">
                                            <p>Clark Mcbride</p>
                                            <p>05-12-1990</p>
                                            <p>2040  Kennedy Court, Worcester-1250, Massachusetts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-30">
                        <div class="card-header">
                            Security <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Security info"><i class="ti-pencil"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="profile-card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <div class="left-info text-right">
                                            <p>Password</p>
                                            <p>Mobile Number</p>
                                            <p>2F Verification</p>
                                            <p>Security question</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <div class="right-info">
                                            <p>*************</p>
                                            <p>(+012) 345 678 90</p>
                                            <p><i class="ti-control-stop cl-red"></i> Off</p>
                                            <p><i class="ti-control-stop cl-red"></i>Off</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-30">
                        <div class="card-header">
                            Email Info<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Email info"><i class="ti-pencil"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="profile-card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <div class="left-info text-right">
                                            <p>Primary Email</p>
                                            <p>Secondary Email</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <div class="right-info">
                                            <p>clarkmc@outlook.com</p>
                                            <p>loveforguys@outlook.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-30">
                        <div class="card-header">
                            Account Settings<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Account info"><i class="ti-pencil"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="profile-card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <div class="left-info text-right">
                                            <p>Account Status</p>
                                            <p>Language</p>
                                            <p>Time Zone</p>
                                            <p>Account Type</p>
                                            <p>Logged In Devices</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <div class="right-info">
                                            <p><i class="ti-heart cl-primary"></i> Active</p>
                                            <p>English (United States)</p>
                                            <p>(GMT-04: 00) Washington, DC</p>
                                            <p>Personal</p>
                                            <p>Desktop Chrome Windows 10</p>
                                            <p>iPhone X</p>
                                            <p>Mozila Firefox</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Account Closing
                        </div>
                        <div class="card-body">
                            <div class="profile-card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <div class="left-info text-right">
                                            <p>Want to Close?</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <div class="right-info">
                                            <a href="#"><i class="ti-close cl-red"></i> Close Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Dashboard Bottom-->

    @yield('newsletter')
@endsection
