@extends('website.master')
@section('content')


<main>
      <!-- hero-area-sart -->
      <section class="slider-area hero-height position-relative fix " data-background="{{url('assets/img/slider/Image.jpg')}}">
         <img class="shape-3 d-none d-xxl-block" src="{{url('assets/img/shape/shape-03.png')}}" alt="image not found">
         <div class="container pt-30">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="hero-text pt-95">
                     <h5>Discover your journey</h5>
                     <h2>Discover <span class="down-mark-line">Courses</span>
                        from top Instructors
                        Around the World</h2>
                     <p>Take your learning organization to the next level. to the next level. Who'll
                        share their knowledge to people around the world.</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="hero-right position-relative">
                     <img data-depth="0.2" class="shape shape-1" src="{{url('assets/img/shape/shape-01.png')}}" alt="shape">
                     <img data-depth="0.2" class="shape-2" src="{{url('assets/img/shape/shape-02.png')}}" alt="shape">
                     <img class="shape-6" src="{{url('assets/img/shape/slider-shape-6.png')}}" alt="shape">
                     <div class="shape-4">
                        <img class="" src="{{url('assets/img/shape/shape-04.png')}}" alt="shape">
                        <h5 class="hero-shape-text">Top Rated
                           Instructors</h5>
                     </div>
                     <div class="shape-5">
                        <div class="course-card">
                           <img src="{{url('assets/img/shape/slider-card-1.png')}}" alt="image not found">
                           <img src="{{url('assets/img/shape/slider-card-2.png')}}" alt="image not found">
                           <img src="{{url('assets/img/shape/slider-card-3.png')}}" alt="image not found">
                           <img src="{{url('assets/img/shape/slider-card-4.png')}}" alt="image not found">
                           <span><i class="far fa-plus"></i></span>
                        </div>
                        <h5>More than <span>200+</span> Teachers
                           are here around the world</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->


      <!-- browser-course-area-start -->
      <div class="browser-course-area pt-30">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                  <div class="browser-course-wrapper course-height" data-background="">
                     <div class="browser-course-bg">
                        <img src="{{url('assets/img/browser-course/browser-course-01.jpg')}}" alt="image not found">
                     </div>
                     <div class="browser-course-content">
                        <span>Start from today</span>
                        <div class="browser-course-tittle">
                           <a href="instructor.html">Become an instructor
                              and spread your knowledge</a>
                        </div>
                        <div class="browser-btn">
                           <a class="course-btn" href="become-instructor.html">View details</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                  <div class="browser-course-wrapper course-height" data-background="">
                     <div class="browser-course-bg">
                        <img src="{{url('assets/img/browser-course/browser-course-02.jpg')}}" alt="image not found">
                     </div>
                     <div class="row">
                        <div class="col-xl-7 col-lg-7">
                           <div class="browser-course-content">
                              <span>Discover your gain</span>
                              <div class="browser-course-tittle">
                                 <a href="course-details.html">Keep your skilled centers of
                                    excellence competitive</a>
                              </div>
                              <div class="browser-btn">
                                 <a class="course-btn" href="course.html">Browse courses</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- browser-course-area-end -->

      <!-- education-area-start -->
      <section class="education-area position-relative pt-85">
         <div class="container">
            <img class="education-shape-2" src="{{url('assets/img/shape/education-shape-04.png')}}" alt="shape">
            <img class="education-shape-3" src="{{url('assets/img/shape/education-shape-01.png')}}" alt="shape">
            <img class="education-shape-4" src="{{url('assets/img/shape/education-shape-03.png')}}" alt="shape">
            <div class="row">
               <div class="col-xl-4 col-lg-4 offset-xl-2 offset-lg-2">
                  <div class="education-img mb-30">
                     <img src="{{url('assets/img/teacher/education.png')}}" alt="image not found">
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="section-title mb-30">
                     <h2>Transform Your
                        Life Through <span class="down-mark-line">Education</span></h2>
                  </div>
                  <div class="education-content mb-30">
                     <p>Helping employees gain skills and providing career development often take a back seat to
                        business priorities but workplace.</p>
                     <a class="edu-sec-btn" href="about.html">Watch how to start</a>
                  </div>
               </div>
            </div>
         </div>

      </section>
      <!-- education-area-end -->

     
   </main>







@endsection
