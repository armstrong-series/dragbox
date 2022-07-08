<aside class="sidebar sidebar-default navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-center">
            <a href="{{ route('user.dashboard') }}" class="navbar-brand">
                <img src="{{ asset('dragbox.png')}}"  width="60" height="60" alt="Dragbox">
            </a>
            <div class="sidebar-toggle d-xl-none" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                     @if(Auth::user()->roles === "super_admin" || Auth::user()->roles === "support")
                     <li class="nav-item">
                        <a class="nav-link {{ $page === 'admin' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" role="button" aria-expanded="false" aria-controls="home">
                             <i class="fas fa-shield-alt"></i>
                            <span class="item-name">Admin</span>
                            
                        </a>
                       
                    </li>
                   
                    <li><hr class="hr-horizontal"></li>
                   
                      <li class="nav-item">
                        <a class="nav-link {{ $page === 'usermanagement' ? 'active' : '' }}"  href="{{ route('admin.user-management') }}" role="button" aria-expanded="false" aria-controls="utilities-error">
                        <!-- <i class="fas fa-users"></i> -->
                        <i class="fas fa-users-crown"></i>
                            <span class="item-name">User Management</span>    
                        </a>
                       
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{ $page === 'project' ? 'active' : '' }}" href="{{ route('admin.projects') }}" role="button" aria-expanded="false" aria-controls="sidebar-widget">
                        <i class="fas fa-project-diagram"></i>
                            <span class="item-name">Projects</span>
                            
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#" role="button" aria-expanded="false" aria-controls="sidebar-maps">
                             <i class="fas fa-cube"></i>
                            <span class="item-name">Blockchain</span>
                            
                        </a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="#" role="button" aria-expanded="false" aria-controls="sidebar-maps">
                            <i class="fas fa-tasks"></i>
                            <span class="item-name">Task</span>
                            
                        </a>
                        
                    </li>
                   
                </ul>
                <!-- Sidebar Menu End -->           
                 <!-- <div class="card bg-primary text-white text-center iq-post m-3">
                    <div class="card-body">
                        <h4 class="mb-2 text-white">Launch</h4>
                        <div class="border rounded-3 mb-3 mx-4">
                            <img src="{{ asset('dragbox.png')}}"  width="30" height="30" class="img-fluid avatar-130" alt="image">
                        </div>
                        <p class="text-white mb-5">Dragbox</p>
                        <a href="{{ route('user.dashboard') }}" class="btn btn-sm bg-white text-primary iq-btn">View Details</a>
                    </div>
                </div> -->
            </div>
               <div class="p-2 "></div> 
        </div>
      
      
    </aside>    