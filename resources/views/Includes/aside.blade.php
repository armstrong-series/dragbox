<aside class="sidebar sidebar-default navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-center">
            <a href="{{ route('user.dashboard') }}" class="navbar-brand">
                <svg width="80" height="26" viewBox="0 0 80 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.4453 8.66406H21.875C21.1367 3.95312 17.0586 0.671874 11.75 0.671874C5.46875 0.671874 0.757813 5.28906 0.757813 13.0234C0.757813 20.6172 5.25781 25.3281 11.8789 25.3281C17.8203 25.3281 22.0742 21.5078 22.0742 15.3203V12.4375H12.3359V15.8359H17.8672C17.7969 19.2578 15.5117 21.4258 11.9023 21.4258C7.88281 21.4258 5.12891 18.4141 5.12891 12.9766C5.12891 7.57422 7.92969 4.57422 11.8086 4.57422C14.7031 4.57422 16.6719 6.12109 17.4453 8.66406ZM31.286 0.999999H26.9383V25H31.286V0.999999ZM52.7321 8.66406H57.1618C56.4235 3.95312 52.3454 0.671874 47.0368 0.671874C40.7555 0.671874 36.0446 5.28906 36.0446 13.0234C36.0446 20.6172 40.5446 25.3281 47.1657 25.3281C53.1071 25.3281 57.361 21.5078 57.361 15.3203V12.4375H47.6227V15.8359H53.154C53.0837 19.2578 50.7985 21.4258 47.1891 21.4258C43.1696 21.4258 40.4157 18.4141 40.4157 12.9766C40.4157 7.57422 43.2165 4.57422 47.0954 4.57422C49.9899 4.57422 51.9587 6.12109 52.7321 8.66406ZM61.7798 25H79.5454V21.3555H67.1821L79.4751 3.70703V0.999999H61.7095V4.64453H74.0845L61.7798 22.293V25Z" fill="#1C1F34"/>
                </svg>        </a>
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
                        <i class="fas fa-users"></i>
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
                        <h3 class="mb-2 text-white">New Launch</h3>
                        <div class="border rounded-3 mb-3 mx-4">
                            <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/layouts/user-dashboard/12.png" class="img-fluid avatar-130" alt="image">
                        </div>
                        <p class="text-white mb-5">Dragbbox</p>
                        <a href="#" class="btn bg-white text-primary iq-btn">View Details</a>
                    </div>
                </div> -->
            </div>
               <div class="p-2 "></div> 
        </div>
      
      
    </aside>    