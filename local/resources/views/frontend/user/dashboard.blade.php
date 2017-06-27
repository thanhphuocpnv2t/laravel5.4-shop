@extends('frontend.layouts.main')
@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">
                    <div class="my-account">
                        <div class="page-title new_page_title">
                            <h2>My Dashboard</h2>
                        </div>
                        <div class="dashboard">
                            <div class="welcome-msg"> <strong>Hello, pranali deshmukh!</strong>
                                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                            </div>
                            <div class="recent-orders">
                                <div class="title-buttons"><strong>Recent Orders</strong> <a href="#">View All </a> </div>
                                <div class="table-responsive">
                                    <table class="data-table" id="my-orders-table">

                                        <thead>
                                        <tr class="first last">
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Ship to</th>
                                            <th><span class="nobr">Order Total</span></th>
                                            <th>Status</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="first odd">
                                            <td>500000002</td>
                                            <td>9/9/10 </td>
                                            <td>pranali d</td>
                                            <td><span class="price">$5.00</span></td>
                                            <td><em>Pending</em></td>
                                            <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                                        </tr>
                                        <tr class="last even">
                                            <td>500000001</td>
                                            <td>9/9/10 </td>
                                            <td>pranali d</td>
                                            <td><span class="price">$1,397.99</span></td>
                                            <td><em>Pending</em></td>
                                            <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-account">
                                <div class="page-title">
                                    <h2>Account Information</h2>
                                </div>
                                <div class="col2-set">
                                    <div class="col-1">
                                        <h5>Contact Information</h5>
                                        <a href="#">Edit</a>
                                        <p> pranali deshmukh<br>
                                            pranalid15@gmail.com<br>
                                            <a href="#">Change Password</a> </p>
                                    </div>
                                    <div class="col-2">
                                        <h5>Newsletters</h5>
                                        <a href="#">Edit</a>
                                        <p> You are currently not subscribed to any newsletter. </p>
                                    </div>
                                </div>
                                <div class="col2-set">
                                    <h4>Address Book</h4>
                                    <div class="manage_add"><a href="#">Manage Addresses</a> </div>
                                    <div class="col-1">
                                        <h5>Primary Billing Address</h5>
                                        <address>
                                            pranali d<br>
                                            aundh<br>
                                            tyyrt,  Alabama, 46532<br>
                                            United States<br>
                                            T: 454541 <br>
                                            <a href="#">Edit Address</a>
                                        </address>
                                    </div>
                                    <div class="col-2">
                                        <h5>Primary Shipping Address</h5>
                                        <address>
                                            pranali d<br>
                                            aundh<br>
                                            tyyrt,  Alabama, 46532<br>
                                            United States<br>
                                            T: 454541 <br>
                                            <a href="#">Edit Address</a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('frontend.user.user-menu')
            </div>
        </div>
    </div>
@stop