<aside class="sidebar sidebar-default navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-center">
            <a href="#" class="navbar-brand">
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
                   
                     <li class="nav-item">
                        <a class="nav-link {{ $page === 'dashboard' ? 'active' : '' }}" href="{{ route('user.dashboard') }}" role="button" aria-expanded="false" aria-controls="home">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                       
                    </li>
                    <li><hr class="hr-horizontal"></li>
                   
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-expanded="false" aria-controls="sidebar-widget">
                            <i class="fas fa-project-diagram"></i>
                            <span class="item-name">Referral Link</span>
                        </a>                  
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-expanded="false" aria-controls="sidebar-widget">
                            <i class="fas fa-project-diagram"></i>
                            <span class="item-name">API Token</span>
                        </a>                  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#" role="button" aria-expanded="false" aria-controls="sidebar-maps">
                             <i class="fas fa-cube"></i>
                            <span class="item-name">Security</span>
                            
                        </a>
                        
                    </li>
                   
                </ul>
               
            </div>
               <div class="p-2 "></div> 
        </div>
      
      
    </aside>    