
@extends('Layouts.frontend-master')

@section('title') <title>Dragbox | Blockchain </title>@endsection

@section('content')

        <!--=====================================-->
        <!--=       Experts  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding expert-counterup-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Experts in field</span>
                            <h2>What makes us special?</h2>
                            <p class="mb--50">In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                            <!-- <a href="contact.html" class="axil-btn btn-large btn-fill-primary">Careers</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="row" id="no-equal-gallery">
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                                <div class="counterup-progress counterup-style-2 active">
                                    <div class="icon">
                                        <img class="dark-icon" src="{{ asset('frontend/assets/media/icon/icon-10.png') }}" alt="Icon">
                                        <img class="light-icon" src="{{ asset('frontend/assets/media/icon/icon-7.png') }}" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count" data-count="15">15</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Years of operation</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 mt--90 mt_md--0 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="{{ asset('frontend/assets/media/icon/icon-11.png') }}" alt="Icon">
                                        <img class="light-icon" src="{{ asset('frontend/assets/media/icon/icon-8.png') }}" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count" data-count="360">360</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Projects deliverd</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-12.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-9.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count" data-count="600">600</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Specialist</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/apple-black.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/apple.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count" data-count="64">64</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Years of operation</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Service  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title">Services we can <br> help you with</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/media/icon/icon-1.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-design.html">Design</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-design.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/media/icon/icon-2.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Development</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="#" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/media/icon/icon-3.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Online Marketing</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="#" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/media/icon/icon-4.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Business</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="#" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/media/icon/icon-5.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-technology.html">Technology</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="#" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{ asset('frontend/assets/media/icon/icon-6.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-content-strategy.html">Content strategy</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="#" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ asset('frontend/assets/media/others/chat-group.png') }}" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image" src="{{ asset('frontend/assets/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img class="paralax-image" src="{{ asset('frontend/assets/media/others/bill-pay.png') }}" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="{{ asset('frontend/assets/media/others/bubble-12.png') }}" alt="Comments"></li>
                <li class="shape shape-2"><img src="{{ asset('frontend/assets/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-3"><img src="{{ asset('frontend/assets/media/others/bubble-13.png') }}" alt="Comments"></li>
                <li class="shape shape-4"><img src="{{ asset('frontend/assets/media/others/bubble-14.png') }}" alt="Comments"></li>
                <li class="shape shape-5"><img src="{{ asset('frontend/assets/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-6"><img src="{{ asset('frontend/assets/media/others/bubble-15.png') }}" alt="Comments"></li>
                <li class="shape shape-7"><img src="{{ asset('frontend/assets/media/others/bubble-16.png') }}" alt="Comments"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
      
    @endsection
 
@section('scripts')
@endsection