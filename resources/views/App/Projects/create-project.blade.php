
@extends('Layouts.new-master')
 @section('title')<title>Dragbox | Project-create</title> @endsection  
   
    
@section('content')
    <main class="main-content" id="projects">
      @include('Includes.newheader')
      <div class="conatiner-fluid content-inner mt-6 py-0">
          <div class="row">
            <header>
                <div class="pb-2 float-end">
                    <a href="{{ route('admin.projects') }}" class="btn btn-sm btn-primary">Projects &leftarrow;</a>
                </div>
                </header>
            <div class="col-md-9">
                <div class="card p-3">
                   
                    <div class="card-body">
                       
                        <form>
                            <div class="form-group">
                                <!-- <label class="form-label" for="exampleInputText1">Title </label> -->
                                <input type="text" class="form-control" id="exampleInputText1" value="" placeholder="Enter Project  Title">
                            </div>
                            <div class="form-group">
                                
                                <div class="form-group">
                                    <label for="customFile1" class="form-label custom-file-input">Choose file</label>
                                    <input class="form-control" type="file" id="customFile1">
                                </div>

                                <div class="form-group">
                                    <!-- <label for="customFile1" class="form-label custom-file-input">Choose Niche</label> -->
                                    <select name="" id="" class="form-control">
                                        <option value="">Choose Niche</option>
                                        <option value="blockhain">Blockchain</option>
                                        <option value="saas">Saas</option>
                                        
                                    </select>
                                </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

                            </div>

                            <button v-if="!isLoading" type="button" @click="createProject()" class="btn btn-block btn-primary">Proceed</button>
                            <button v-if="isLoading" class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                            </button>
                        </form>
                    </div>
                </div>     
            </div>
            </div>
          
          </div>
      @include('Includes.newfooter') 
     </main>
@endsection
 
@section('script')
    <script src="{{ asset('App/js/projects.js') }}"></script>
@endsection