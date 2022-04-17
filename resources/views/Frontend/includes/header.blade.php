<header class="header axil-header header-style-2">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="{{ route('frontend.home') }}"><img class="light-version-logo" src="{{ asset('frontend/assets/media/logo-2.svg') }}" alt="logo"></a>
                            <a href="#"><img class="dark-version-logo" src="{{ asset('frontend/assets/media/logo-3.svg') }}" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="#">
                                                <img class="light-mode" src="{{ asset('frontend/assets/media/logo-2.svg') }}" alt="Site Logo">
                                                <img class="dark-mode" src="{{ asset('frontend/assets/media/logo-3.svg') }}" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Saas</a>
                                        <ul class="axil-submenu">
                                            <li><a href="#">EHR</a></li>
                                            <li><a href="#">Sales & Marketing</a></li>
                                
                                        </ul>
            
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Transport</a>
                                        <ul class="axil-submenu">
                                            <li><a href="#">Mobile</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Management</a>
                                        <ul class="axil-submenu">
                                            <li><a href="#">Team</a></li>   
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('page.blockhain') }}">Blockhain</a>
                                      
                                    </li>

                                    <li>
                                        <a href="{{ route('login') }}">Account</a>
                                      
                                    </li>
                                    <!-- <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Blog</a>
                                        <ul class="axil-submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-blog.html">Standard Post</a></li>
                                            <li><a href="single-blog-gallery.html">Gallery Post</a></li>
                                            <li><a href="single-blog-video.html">Video Post</a></li>
                                            <li><a href="single-blog-audio.html">Audio Post</a></li>
                                            <li><a href="single-blog-quote.html">Quote Post</a></li>
                                        </ul>
                                    </li> -->
                                 
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <!-- <li class="sidemenu-btn d-lg-block d-none">
                                    <button class="btn-wrap btn-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li> -->
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap btn-dark" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>