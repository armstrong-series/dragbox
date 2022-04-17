<div class="position-relative">
        <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar py-lg-0">
                <div class="container-fluid navbar-inner">
                    <a href="{{ route('user.dashboard') }}" class="navbar-brand">
                        <svg width="80" height="26" viewBox="0 0 80 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.4453 8.66406H21.875C21.1367 3.95312 17.0586 0.671874 11.75 0.671874C5.46875 0.671874 0.757813 5.28906 0.757813 13.0234C0.757813 20.6172 5.25781 25.3281 11.8789 25.3281C17.8203 25.3281 22.0742 21.5078 22.0742 15.3203V12.4375H12.3359V15.8359H17.8672C17.7969 19.2578 15.5117 21.4258 11.9023 21.4258C7.88281 21.4258 5.12891 18.4141 5.12891 12.9766C5.12891 7.57422 7.92969 4.57422 11.8086 4.57422C14.7031 4.57422 16.6719 6.12109 17.4453 8.66406ZM31.286 0.999999H26.9383V25H31.286V0.999999ZM52.7321 8.66406H57.1618C56.4235 3.95312 52.3454 0.671874 47.0368 0.671874C40.7555 0.671874 36.0446 5.28906 36.0446 13.0234C36.0446 20.6172 40.5446 25.3281 47.1657 25.3281C53.1071 25.3281 57.361 21.5078 57.361 15.3203V12.4375H47.6227V15.8359H53.154C53.0837 19.2578 50.7985 21.4258 47.1891 21.4258C43.1696 21.4258 40.4157 18.4141 40.4157 12.9766C40.4157 7.57422 43.2165 4.57422 47.0954 4.57422C49.9899 4.57422 51.9587 6.12109 52.7321 8.66406ZM61.7798 25H79.5454V21.3555H67.1821L79.4751 3.70703V0.999999H61.7095V4.64453H74.0845L61.7798 22.293V25Z" fill="#1C1F34"/>
                        </svg>      </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <div class="input-group search-input">
                        <span class="input-group-text" id="search-input">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse rx="9.10146" ry="8.88476" transform="matrix(-1 0 0 1 10.8985 9.88498)" stroke="#8A93AD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.56836 16.5259L1.00007 20.0002" stroke="#8A93AD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <input type="search" class="form-control" placeholder="Search...">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    <span class="navbar-toggler-bar bar1 mt-2"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto top-menu navbar-nav align-items-center navbar-list mb-3 mb-lg-0">
                            <li class="dropdown nav-item mobile-menu">
                                <a class="nav-link dropdown-toggle" title="key performance indicator" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                <!-- <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true"> -->
                                   KPI
                                </a>
                                <ul class="dropdown-menu " data-popper-placement="bottom-start" >
                                    <!-- item-->
                                    <li><a class="dropdown-item" href="#">Pricing 1</a></li>
                                    <!-- item-->
                                </ul>
                            </li>
                         
                            <li>
                            <ul class="m-0 d-flex align-items-center navbar-list list-unstyled px-3 px-md-0">
                            
                                <li class="dropdown">
                                    <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/avatars/01.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-lg-end" aria-labelledby="navbarDropdown3">
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="{{ route('settings') }}">Profile</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        @if(Auth::user()->roles === "team"  || Auth::user()->roles === "support")
                                        <li><a class="dropdown-item" href="{{ route('auth.logout')}}">Logout</a></li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>     
       <!--Nav End-->
      </div>