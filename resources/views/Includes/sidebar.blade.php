<nav class="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#" class="logo">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Dragbbox " />
        </a>
    </div>
    <div class="sidebarMenuScroll">
        <div class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('user.dashboard') }}">
                    <i class="fas fa-tachometer-alt-average"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                   
                </li>
                @if(Auth::user()->roles === "super_admin" || Auth::user()->roles === "support")
                <li class="{{ $page === 'admin' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="icon-house_siding gradient-grey"></i>
                        <span class="menu-text">Administrator</span>
                    </a>   
                </li>
                @endif
                <li class="{{ $page === 'usermanagement' ? 'active' : '' }}">
                    <a href="{{ route('admin.user-management') }}"><i class="icon-settings_input_svideo gradient-grey"></i>
                    <span class="menu-text">User Management</span></a>
                    
                </li>

                <li class=""><a href="#"><i class="icon-model_training gradient-grey"></i>
                <span class="menu-text">Blockchain</span></a>
                   
                </li> 
                
                <li class="{{ $page === 'project' ? 'active' : '' }}"><a href="{{ route('admin.projects') }}">
                 <i class="icon-edit_road gradient-grey"></i>
                  <span class="menu-text">Projects</span></a>
                   
                </li> 
            </ul>
        </div>
    </div>
</nav>