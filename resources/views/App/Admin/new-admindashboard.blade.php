
@extends('Layouts.new-master')
 @section('title')<title>Dragbox | Adminstrative Dashboard</title> @endsection  
   
    
@section('content')
    <main class="main-content">
      @include('Includes.newheader')
      <div class="conatiner-fluid content-inner mt-6 py-0">
        <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body d-grid gap-2">
                     <h5 class="card-title">Welcome {{ Auth::user()->name }} !</h5>
                     <p class="card-text text-muted">To Dragbox Adminstrative Section</p>
                     <hr>
                     <div class="row">
                         <div class="col-md-4">
                             <a href="{{ route('user.dashboard') }}"  class="btn btn-primary">Go To Dashboard &nbsp;&nbsp;<i class="fas fa-layer-group"></i></a>
                         </div>

                         <div class="col-md-4">
                             <a href="{{ route('auth.logout') }}" style="width:170px;" class="btn btn-secondary">Logout &nbsp;&nbsp;<i class="fas fa-power-off"></i></a>
                         </div>
                     </div>                
                  </div>
               </div>
            </div>     
         </div>

         <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pb-xxl-0">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
                            <div class="col">
                                <div class="card  mb-xxl-0 iq-purchase" data-iq-gsap="onStart" data-iq-position-y="50" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.out" data-iq-opacity="0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h5 class="text-primary">
                                            Total Users
                                        </h5>
                                        <a href="javascript:void(0);">
                                            <i class="fas fa-users"></i>
                                        </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                        <h3>{{ $totalUsers }}</h3>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card  mb-xxl-0 iq-purchase"  data-iq-gsap="onStart" data-iq-position-y="150" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.out" data-iq-opacity="0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h5 class="text-primary">
                                            Projects
                                        </h5>
                                        <a href="javascript:void(0);">
                                                <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.98493 13.8462C4.11731 13.8462 0.814453 14.431 0.814453 16.7729C0.814453 19.1148 4.09636 19.7205 7.98493 19.7205C11.8525 19.7205 15.1545 19.1348 15.1545 16.7938C15.1545 14.4529 11.8735 13.8462 7.98493 13.8462Z" stroke="#7B60E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.98489 10.5059C10.523 10.5059 12.5801 8.44782 12.5801 5.90972C12.5801 3.37163 10.523 1.31448 7.98489 1.31448C5.44679 1.31448 3.3887 3.37163 3.3887 5.90972C3.38013 8.43925 5.42394 10.4973 7.95251 10.5059H7.98489Z" stroke="#7B60E7" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                        <h3>63</h3>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card  iq-purchase"  data-iq-gsap="onStart" data-iq-position-y="250" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.out" data-iq-opacity="0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h5 class="text-primary">
                                            Ongoing Projects
                                        </h5>
                                        <a href="javascript:void(0);">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6.49905L6.0014 11.4984L16 1.49976" stroke="#7B60E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                        <h3>10</h3>
                                        <p class="mb-0 ms-2">+1 last/d</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card iq-purchase"  data-iq-gsap="onStart" data-iq-position-y="350" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.out" data-iq-opacity="0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h5 class="text-primary">
                                            Sale
                                        </h5>
                                        <a href="javascript:void(0);">
                                            <svg width="15" height="13" viewBox="0 0 15 17" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.72461 0.75L7.72461 15.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1.701 6.7998L7.725 0.749804L13.75 6.7998" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        </a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                        <h3>50</h3>
                                        <p class="mb-0 ms-2">+1 last/d</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>           
            </div>                 
        </div>
      </div>
      @include('Includes.newfooter') 
     </main>
@endsection
 
@section('script')

@endsection