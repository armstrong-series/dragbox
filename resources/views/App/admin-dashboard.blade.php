@extends('Layouts.master')
@section('title')<title>Dragbox . Administrative Dashboard </title>@endsection
@section('content')

<div class="main-container" id="admin">
          @include("Includes.header")
            <div class="content-wrapper-scroll">
                <div class="content-wrapper">
                    <div class="row gutters">                       
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-violet-pink card-150">
                                <div class="card-body">
                                    <div class="sales-tile3">
                                        <div class="sales-tile3-block">
                                            <div class="sales-tile3-icon peach"><i
                                                    class="icon-sentiment_satisfied_alt"></i></div>
                                            <div class="sales-tile3-details">
                                                <h5>Signups</h5>
                                                <h2>271</h2><span>+3.7% since last month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-green card-150">
                                <div class="card-body">
                                    <div class="sales-tile3">
                                        <div class="sales-tile3-block">
                                            <div class="sales-tile3-icon green"><i
                                                    class="icon-shopping_basket animate__animated animate__swing animate__infinite infinite"></i>
                                            </div>
                                            <div class="sales-tile3-details">
                                                <h5>Orders</h5>
                                                <h2>927</h2><span>+8.2% since last month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    <div class="row gutters">
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-green card-170">
                                <div class="card-body">
                                    <div class="uploading-container"><a href="#" class="pause" id="play-pause"><i
                                                class="icon-pause_circle_outline"></i></a>
                                        <div class="upload-progress-container">
                                            <div class="upload-icon"><img src="{{ asset('assets/img/upload.svg') }}" alt="Download"></div>
                                            <div class="upload-progress">
                                                <div class="upload-space-container">
                                                    <div>45<span>%</span><span class="ms-2">Uploading...</span></div>
                                                    <div>100<span>GB</span></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-teal-cream card-170">
                                <div class="card-body">
                                    <div class="notifications-container">
                                        <div class="notify-details-block">
                                            <div class="notify-icon"><i
                                                    class="icon-notifications_none blocks-img animate__animated animate__swing animate__infinite infinite"></i>
                                            </div>
                                            <div class="notify-details">
                                                <h5>Notifications</h5>
                                                <h3>125</h3>
                                                <div class="notify-high-low">+7.8%</div>
                                            </div>
                                        </div>
                                        <div id="notificationsGraph" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-yellow card-170">
                                <div class="card-body">
                                    <div class="active-users-container">
                                        <div class="active-users-details">
                                            <div class="details">
                                                <h6>Active Users</h6>
                                                <h3>6500</h3><span class="active-users-high-low">+21.5%</span>
                                            </div>
                                            <div id="signupsGraph" class="apex-hide-lines"></div>
                                            <div class="active-users-icon"><i class="icon-av_timer"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-peach3 card-170">
                                <div class="card-body">
                                    <div class="upgrade-plan">
                                        <div><img src="{{ asset('assets/img/award.svg') }}" alt="Award" /></div>
                                        <div class="plan-details">
                                            <h5>Upgrade your plan and get complete access.</h5><a href="pricing.html"
                                                class="btn">Upgrade Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('Includes.footer')
            </div>
        </div>
@endsection