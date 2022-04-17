
@extends('Layouts.new-master')
 @section('title')<title>Dragbox | User Management</title> @endsection  
   
    
@section('content')
    <main class="main-content" id="usermanagement">
      @include('Includes.newheader')
      <div class="conatiner-fluid content-inner mt-6 py-0">
      <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3"  v-for="(userData, index) in getUsers" >
               <div class="card">
                 <a href="javascript:void(0);" @click="deleteUser(index)"><img src="{{ asset('users.png')}}" class="card-img-top"  alt="#"></a>
                  <div class="card-body">
                     <h5 v-cloak class="card-title text-center">@{{ userData.name }}</h5>
                     <a  v-cloak href="#" @click="selectUser(index)" data-bs-target="#editMember" data-bs-toggle="modal"class="btn btn-sm btn-outline-primary">@{{ userData.email }}</a>
                  </div>
               </div>
            </div>



            <div class="modal fade" id="editMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                @csrf
                <div class="modal-dialog"  class="p-3" role="document">
                    <div class="modal-content"class="p-3">
                    <!-- <div class="modal-header" style="border-bottom: none;">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit User </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div> -->
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="mobile">Name</label>
                            <input type="text" v-model="updateUser.name" class="form-control" name="" id="" >
                        </div>

                        <div class="form-group">
                        <label for="mobile"> Email</label>
                            <input type="text" v-model="updateUser.email" class="form-control" name="" id="" >
                        </div>

                        <div class="form-group">
                            <label for="mobile"> Mobile</label>
                            <input type="text" v-model="updateUser.mobile" class="form-control" name="" id="" >
                        </div>

                        <div class="form-group">
                            <label>Role Priviledges</label> 
                            <select v-model="updateUser.role" class="form-control">
                            @if(Auth::user()->roles === "super_admin")
                                <option value="admin">Admin</option>
                            @endif
                                <option value="team">Team</option>
                                <option value="support">Support</option>    
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer" style="border-bottom: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" @click="updateUserDetails()" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
         </div>

         <textarea name="" id="users" style="display:none;" cols="30" rows="10">{{ json_encode($users) }}</textarea>
        <textarea name="" id="createUser" cols="30" style="display:none" rows="10">{{ route('admin.user.create') }}</textarea>
        <textarea name="" id="update" cols="30" style="display:none" rows="10">{{ route('admin.user.update') }}</textarea>
        <textarea name="" id="delete" cols="30" style="display:none" rows="10">{{ route('admin.user.delete') }}</textarea>
      </div>
      @include('Includes.newfooter') 
     </main>
@endsection
 
@section('script')
    <script src="{{ asset('App/js/usermanagement.js') }}"></script>

@endsection