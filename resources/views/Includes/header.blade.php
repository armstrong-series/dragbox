<div class="page-header">
                <div class="breadcrumb-container">
                    <div class="toggle-sidebar" id="toggle-sidebar"><i class="icon-menu"></i></div>
                   
                </div>
                <div class="header-actions-container">
                   
                    <ul class="header-actions">
                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                aria-haspopup="true"><span class="user-name d-none d-md-block">{{ Auth::user()->name }}</span><span
                                    class="avatar"><img src="{{ asset('assets/img/user.png') }}" alt="User Avatar"><span
                                        class="status online"></span></span></a>
                            <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                                <div class="header-profile-avatar"><img src="{{ asset('assets/img/user.png') }}" alt="Avatar"></div>
                                <div class="header-profile-block">
                                    <h5>{{ Auth::user()->name }}</h5>
                                    @if(Auth::user()->roles === "super_admin")
                                    <p>Administrator</p>
                                    @elseif(Auth::user()->roles === "team")
                                    <p>Team</p>
                                    @elseif(Auth::user()->roles === "support")
                                    <p>Support Staff</p> 
                                    @endif 
                                </div>
                                <div class="header-profile-actions"><a href="profile.html" class="gradient-blue"><i
                                            class="icon-person_outline"></i>Profile</a><a href="{{ route('settings') }}"
                                        class="gradient-green"><i class="icon-edit_road"></i>Settings</a><a
                                        href="{{ route('auth.logout') }}" class="gradient-red"><i
                                            class="icon-power_settings_new"></i>Logout</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>