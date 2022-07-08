<div class="position-relative">
        <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar py-lg-0">
                <div class="container-fluid navbar-inner">
                    <a href="{{ route('user.dashboard') }}" class="navbar-brand">
                        <img src="{{ asset('dragbox-logo.png')}}"  width="50" height="50" alt="Dragbox">
                    </a>
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
                           
                                <a class="nav-link" title="create project" href="{{ route('project.create') }}" role="button" aria-haspopup="false" aria-expanded="true">
                                    <small><i class="text-muted fas fa-project-diagram"></i></small>
                                     Add Project
                                 
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
                                        <li><a class="dropdown-item " href="{{ route('settings.user') }}">Settings</a></li>
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