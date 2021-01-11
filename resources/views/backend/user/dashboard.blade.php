@extends('backend.user.layouts.master')

@section('content')
    <!--Dashboard top-->
    <section class="section-padding-sm-2 blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('frontend/assets/images/new-user/1.jpg') }}" alt=""> Profile <a href="profile.html"><i class="ti-arrow-top-right"></i></a>
                        </div>
                        <div class="card-body">
                            <p>Good Morning! <strong>Clark Mcbride</strong></p>
                            <p>Customer id: <strong>23658795</strong>; Last login: <strong>12-03-20</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                    <div class="card">
                        <div class="card-header">
                            Balance
                        </div>
                        <div class="card-body">
                            <p>US Doller: <strong>$568</strong></p>
                            <p>GB Pound: <strong>£785</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                    <div class="card">
                        <div class="card-header">
                            Bank account
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="ti-check cl-primary"></i> Padlock Holdings Bank Corp.</li>
                            <li class="list-group-item"><a href="#"><i class="ti-plus"></i> Add new Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Dashboard top-->

    <!--Dashboard Bottom-->
    <section class="section-padding-sm-2 blue-bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-20">
                    <div class="card mb-30">
                        <div class="card-header">
                            Someone to pay?
                        </div>
                        <div class="card-body">
                            <p>Boluptate quis optio, quibusdam quo unde cum dolores tempora veniam eius, voluptatum illum</p>
                            <a href="#" class="bttn-small btn-fill"><i class="ti-user"></i> Make a payment</a>
                        </div>
                    </div>
                    <div class="card mb-30">
                        <div class="card-header">
                            Earn $25 to invite
                        </div>
                        <div class="card-body">
                            <p>Boluptate quis optio, quibusdam quo unde cum dolores tempora veniam eius, voluptatum illum</p>
                            <a href="#" class="bttn-small btn-fill"><i class="ti-arrow-down"></i> refer a friend</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Receive a payment?
                        </div>
                        <div class="card-body">
                            <p>Boluptate quis optio, quibusdam quo unde cum dolores tempora veniam eius, voluptatum illum</p>
                            <a href="#" class="bttn-small btn-fill"><i class="ti-direction"></i> Receive payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 mb-20">
                    <div class="transaction-list table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Bank or Card</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>15 March, 2020</span></td>
                                <td><strong>Padlock Holdings Bank Corp</strong> <span>- Widthdraw</span></td>
                                <td><strong>- $589.20</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>13 March, 2020</span></td>
                                <td><strong>Rahul payment</strong> <span>- Refund</span></td>
                                <td><strong>- $589.9</strong></td>
                                <td><i class="ti-close cl-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancelled"></i></td>
                                <td><strong class="cl-primary">USD Bank of Rob</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>12 March, 2020</span></td>
                                <td><strong>Amazon Payment service</strong> <span>- Send</span></td>
                                <td><strong>- £239.85</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">GBP XXXX-5879</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>10 March, 2020</span></td>
                                <td><strong>Namecheap Domain Buy</strong><span> - Cost</span></td>
                                <td><strong>- $13.25</strong></td>
                                <td><i class="ti-flag-alt cl-yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Processing"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>08 March, 2020</span></td>
                                <td><strong>Nrvene Builders Ltd</strong><span> - Deposit</span></td>
                                <td><strong>+ $958.32</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>05 March, 2020</span></td>
                                <td><strong>Ronand Corporation</strong><span> - Widthdraw</span></td>
                                <td><strong>- $358.15</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>01 March, 2020</span></td>
                                <td><strong>Hexabon Payouts</strong><span> - Deposit</span></td>
                                <td><strong>- $1,236.02</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>15 March, 2020</span></td>
                                <td><strong>Padlock Holdings Bank Corp</strong> <span>- Widthdraw</span></td>
                                <td><strong>- $589.20</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>13 March, 2020</span></td>
                                <td><strong>Rahul payment</strong> <span>- Refund</span></td>
                                <td><strong>- $589.9</strong></td>
                                <td><i class="ti-close cl-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancelled"></i></td>
                                <td><strong class="cl-primary">USD Bank of Rob</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>12 March, 2020</span></td>
                                <td><strong>Amazon Payment service</strong> <span>- Send</span></td>
                                <td><strong>- £239.85</strong></td>
                                <td><i class="ti-check cl-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finished"></i></td>
                                <td><strong class="cl-primary">GBP XXXX-5879</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>10 March, 2020</span></td>
                                <td><strong>Namecheap Domain Buy</strong><span> - Cost</span></td>
                                <td><strong>- $13.25</strong></td>
                                <td><i class="ti-flag-alt cl-yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Processing"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td><span>10 March, 2020</span></td>
                                <td><strong>Namecheap Domain Buy</strong><span> - Cost</span></td>
                                <td><strong>- $13.25</strong></td>
                                <td><i class="ti-flag-alt cl-yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Processing"></i></td>
                                <td><strong class="cl-primary">USD XXXX-2359</strong></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="centered mt-30">
                            <a href="transactions.html" class="bttn-mid btn-fill">All Transactions</a>
                        </div>
                        <!-- Transaction Details Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="row no-gutters">
                                        <div class="col-sm-5 d-flex justify-content-center blue-bg-2 py-4">
                                            <div class="transaction-modal-left my-auto centered">
                                                <div class="mb-30"><i class="flaticon-006-wallet"></i></div>
                                                <h3 class="my-3">Padlock Holdings Bank Corp</h3>
                                                <h4 class="cl-white my-4">$598.20</h4>
                                                <p class="cl-white">10 Feb 2020</p>
                                                <div class="completed">Completed</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Transaction Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="transaction-modal-details">
                                                <div class="faq-contents">
                                                    <ul class="accordion">
                                                        <li>
                                                            <a href="#">Transaction details</a>
                                                            <p>
                                                                <strong>Transaction ID</strong> <br><span>35791598</span><br><br>
                                                                <strong>To</strong> <br><span>Namecheap Ltd.</span><br><br>
                                                                <strong>Description</strong> <br><span>Domain Purchasing cost felis id rhoncus eros dui</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a href="#">Transfer details</a>
                                                            <p>
                                                                <strong>Transfer ID</strong> <br><span>587935791598</span><br><br>
                                                                <strong>Transfer amount</strong> <br><span>5,326.36 USD</span><br><br>
                                                                <strong>Exchange rate</strong> <br><span>1 USD = 0.92 GBP</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a href="#">Transaction history</a>
                                                            <p>
                                                                <strong>Completed</strong> <br><span>15 Feb 2020</span><br><br>
                                                                <strong>Approved</strong> <br><span>15 Feb 2020</span><br><br>
                                                                <strong>Under review</strong> <br><span>15 Feb 2020</span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /Transaction Details Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Dashboard Bottom-->

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