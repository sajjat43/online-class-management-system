@extends('website.master')
@section('content')

<main>
      <!-- hero-area-start -->
      <div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-course-1-text">
                     <h2>Student <span class="down-mark-line">Profile</span> </h2>
                  </div>
                  <div class="course-title-breadcrumb">
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- hero-area-end -->
      <!-- course-detailes-area-start -->
      <div class="course-detalies-area pt-120 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3">
                  <div class="course-instructors-img mb-30">
                     <img src="{{url('/uploads/',auth()->user()->image)}}" alt="nstructors-img">
                  </div>
               </div>
               <div class="col-xl-8 col-lg-9">
                  <div class="course-detelies-wrapper">
                     <div class="course-detiles-tittle mb-30">
                        <h3>{{auth()->user()->name}}</h3><br><br>
                        <ul>
                           <li>
                               <span class="title-span">Full Name : </span>
                               <span class="info-span">{{auth()->user()->name}}</span>
                           </li>

                           <li>
                               <span class="title-span">Mobile : </span>
                               <span class="info-span">{{auth()->user()->mobile}}</span>
                           </li>
                           <li>
                               <span class="title-span">Email : </span>
                               <span class="info-span">{{auth()->user()->email}}</span>
                           </li>
                           <li>
                               <span class="title-span">Gender : </span>
                               <span class="info-span">{{auth()->user()->gender}}</span>
                           </li>
                           <li>
                               <span class="title-span">Parents Contact : </span>
                               <span class="info-span">{{auth()->user()->father_mobile}}</span>
                           </li>
                       </ul>
                     </div>
                     
                     <div class="course-bio-text pt-45 pb-20">
                        <p>Hello, I am {{auth()->user()->name}}. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur maiores id quo optio illum vero odit et recusandae dolore quod earum, animi sequi est ut? Cum ipsa dignissimos dolorum tenetur laborum deleniti optio quia, totam sapiente velit hic nam quasi, tempore commodi sequi vero corporis ut ullam distinctio amet. Quasi ut distinctio enim vel eaque deleniti porro veniam ducimus laudantium.</p>
                     </div>
                     <div class="course-bio-text pt-45 pb-20">
                        <h3>Address</h3>
                        <p>{{auth()->user()->address}}</p>
                     </div>
                     <div class="col-auto text-end float-end ms-auto">
                        <a href="{{route('website.profile.edit',auth()->user()->id)}}" class="btn btn-outline-primary me-2"><i
                                class="fas fa-pen"></i>
                            Edit Info</a>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- course-detailes-area- end -->
   </main>
@endsection
