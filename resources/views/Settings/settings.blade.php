@extends('Layouts.settings-master')
 @section('title')<title>Dragbox | Settings</title> @endsection  
 @section('content')
     <main class="main-content">
         @include('Includes.newheader') 
      <div class="conatiner-fluid content-inner mt-6 py-0">
        <div>
         <div class="row">
            <div class="col-xl-3 col-lg-4">
               <div class="card">
                  
                  <div class="card-body">
                     <form>
                        <div class="form-group">
                           <div class="profile-img-edit position-relative">
                              <img class="profile-pic rounded avatar-100" src="https://templates.iqonic.design/gigz/html/dist/assets/images/avatars/01.png" alt="profile-pic">
                              <div class="upload-icone bg-primary">
                                 <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                    <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                 </svg>
                                 <input class="file-upload" type="file" accept="image/*">
                              </div>
                           </div>
                           
                        </div>
                       
                        
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-8">
               <div class="card">
                  
                  <div class="card-body">
                     <div class="new-user-info">
                        <form>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Name</label>
                                 <input type="text" class="form-control" id="fname" placeholder="{{ Auth::user()->name }}">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Email</label>
                                 <input type="text" class="form-control" id="lname" placeholder="{{ Auth::user()->email }}">
                              </div>
                             
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="mobno">Mobile Number:</label>
                                 <input type="text" class="form-control" id="mobno" placeholder="{{ Auth::user()->mobile }}">
                              </div>
                              
                           </div>
                           <hr>
                           <h5 class="mb-3">Security</h5>
                           <div class="row">
                        
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="pass">Password:</label>
                                 <input type="password" class="form-control" id="pass" placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="rpass">Repeat Password:</label>
                                 <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                              </div>
                           </div>
                           <div class="checkbox">
                              <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
                           </div>
                           <button type="submit" class="btn btn-primary">Add New User</button>
                        </form>
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
 