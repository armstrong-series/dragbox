
@extends('Layouts.new-master')
 @section('title')<title>Dragbox |Projects</title> @endsection  
   
    
@section('content')
    <main class="main-content" id="projects">
      @include('Includes.newheader')
      <div class="conatiner-fluid content-inner mt-6 py-0">
 
           <header>
               <div class="pb-2 float-end">
                  <a href="{{ route('project.create') }}" class="btn btn-sm btn-primary">Create Project +</a>
               </div>
            </header>
         
          <div v-cloak class="row" v-for="(index, project) in projects">
                
            <div class="col-sm-12 col-lg-4">
               <div v-cloak class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h5 v-cloak class="card-title">@{{ project.niche }}</h5>
                     </div>
                  </div>
                  <div class="card-body">
                     <!-- <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p> -->
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/page-img/img-1.jpg" class="d-block w-100" alt="#">
                           </div>
                           <div class="carousel-item">
                              <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/page-img/img-1.jpg" class="d-block w-100" alt="#">
                           </div>
                           <div class="carousel-item">
                              <img src="https://templates.iqonic.design/gigz/html/dist/assets/images/page-img/img-1.jpg" class="d-block w-100" alt="#">
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                     </div>   
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-11" v-if="projects.length < 1">
               <div class="card">           
                     <div class="card-body">
                        <img src="{{ asset('project.jpg') }}" class="img-fluid" alt="...">
                     </div>
                  </div>
            </div>
         </div>
         

          <textarea name="" id="project" style="display:none;" cols="30" rows="10">{{ json_encode($projects) }}</textarea>

      </div>
      @include('Includes.newfooter') 
     </main>
@endsection
 
@section('script')
<script src="{{ asset('App/js/projects.js') }}"></script>
@endsection