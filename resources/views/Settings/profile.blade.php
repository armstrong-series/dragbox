@extends('Layouts.settings-master')
 @section('title')<title>Dragbox | User Profile </title> @endsection  
 @section('content')
    <main class="main-content">
    @include('Includes.newheader')  
      
        <div class="container">
            <div class="row margin-top">
                <div class="col-lg-12 position-relative">
                    <div class="iq-main">
                    <div class="card mb-0 iq-content rounded-bottom">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mx-3 my-3">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="profile-img position-relative me-3 mb-3 mb-lg-0">
                                <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/user-profile/02.png" class="img-fluid avatar avatar-90 rounded-circle" alt="profile-image">
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div>
                                    <h4 class="me-2 text-primary">{{ Auth::user()->name }}</h4>
                                    <span><svg width="19" height="19" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"/>
                                        <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"/>
                                        </svg><small class="mb-0 text-dark">Lisbon, Portugal</small></span>
                                </div>
                                <div class="ms-4">
                                    @if(Auth::user()->roles === "super_admin")
                                        <p class="mb-0 text-dark">Administrator</p>
                                        @elseif(Auth::user()->roles === "support")
                                        <p class="mb-0 text-dark">Support Staff</p>
                                        @elseif(Auth::user()->roles === "team")
                                        <p class="mb-0 text-dark">Team Member</p>
                                    @endif
                                    <p class="me-2 mb-0 text-dark">Email - {{ Auth::user()->email }}</p>
                                </div> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="iq-header-img">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/user-profile/01.png" alt="header" class="img-fluid w-100 rounded mt-4" style="object-fit: contain;">
                    </div>
                    </div>
                    <div class="ellipse6">
                    <svg width="50" viewBox="0 0 50 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.5693 89.4047C31.2923 122.752 -5.69576 139.834 -39.0459 127.558C-72.3961 115.281 -89.479 78.2961 -77.2019 44.9487C-64.9249 11.6013 -27.9368 -5.4805 5.41332 6.79572C38.7635 19.0719 55.8464 56.0573 43.5693 89.4047Z" stroke="#FED0D4" stroke-width="4"/>
                    </svg>
                    </div>
                    <div class="ellipse7">
                    <svg width="25" viewBox="0 0 25 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse rx="29.4935" ry="29.4918" transform="matrix(0.938441 0.345441 -0.345486 0.938424 -5.33341 29.8518)" fill="#FDDA5F"/>
                    </svg>
                    </div>
                </div>
               
               
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="text-center me-3 mb-3">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/brands/08.png" class="img-fluid rounded mb-2" alt="">
                        <h6>Facebook</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/brands/09.png" class="img-fluid rounded mb-2" alt="">
                        <h6>Twitter</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/brands/10.png" class="img-fluid rounded mb-2" alt="">
                        <h6>Instagram</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/brands/11.png" class="img-fluid rounded mb-2" alt="">
                        <h6>Google Plus</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/brands/13.png" class="img-fluid rounded mb-2" alt="">
                        <h6>In</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/brands/12.png" class="img-fluid rounded mb-2" alt="">
                        <h6>YouTube</h6>
                    </div>
                </div>
            </div>
        </div>
    @include('Includes.newfooter')   
</main>
@endsection
 
@section('script')

@endsection
  