@extends('frontend.layouts.master')

@section('content')

<div class="main-content">
    <!-- Banner Section Start -->
    <div id="sc-banner" class="sc-banner banner-bg position-relative" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.507), rgba(0, 0, 0, 0.527)), url({{ asset('frontend/assets/images/njorocollege.jpg') }}); background-position: center; background-size: cover; ">
        <div class="container">
            <div class="row">
                <div>
                    <div class="banner-content" style="text-align: center;">
                        <h2 style="color: rgba(255, 255, 255, 0.774)">Welcome to Njoro College of Proffesional Studies</h2>
                        <h4 style="color: rgba(255, 255, 255, 0.842);">Where we empower youth through Knowlegde</h4>
                        <div class="banner-btn wow fadeInUp" data-wow-delay="300ms" data-wow-duration="3500ms">
                            <a class="readon" href="contact.html">Start Learning <i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Categories Section Start -->
    <div id="sc-categories" class="sc-categories style1 pt-115 pb-90 md-pt-75 md-pb-50">
        <div class="container">
            <div class="sec-title mb-30 md-mb-10">
                <div class="sub-title position-relative">
                    Popular Category <span class="heading-border-line"></span>
                </div>
                <h2 class="title mb-0">
                    Popular Category for learn
                </h2>
            </div>
            <div class="sc-carousel owl-carousel nav-style1" data-loop="true" data-items="6" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="6" data-md-device-nav="true" data-md-device-dots="false">
                <div class="categories-inner-top">
                    <a class="categories-item" href="course.html">
                    <div class="icon-part">
                        <i class="flaticon flaticon-laptop"></i>
                    </div>
                    <div class="content-part">
                        <h4 class="title">
                            Computer<br>
                            Packages
                        </h4><span class="courses">11 Courses</span>
                    </div></a>
                </div>
                <div class="categories-inner-top">
                    <a class="categories-item" href="course.html">
                    <div class="icon-part">
                        <i class="flaticon flaticon-helmet"></i>
                    </div>
                    <div class="content-part">
                        <h4 class="title">
                            School of<br>
                            Engineering
                        </h4><span class="courses">06 Courses</span>
                    </div></a>
                </div>
                <div class="categories-inner-top">
                    <a class="categories-item" href="course.html">
                    <div class="icon-part">
                        <i class="flaticon flaticon-apartment"></i>
                    </div>
                    <div class="content-part">
                        <h4 class="title">
                            Hospitality<br>
                            Department
                        </h4><span class="courses">10 Courses</span>
                    </div></a>
                </div>
                <div class="categories-inner-top">
                    <a class="categories-item" href="course.html">
                    <div class="icon-part">
                        <i class="flaticon flaticon-computer"></i>
                    </div>
                    <div class="content-part">
                        <h4 class="title">
                            Computer<br>
                            Packages
                        </h4><span class="courses">05 Courses</span>
                    </div></a>
                </div>
                <div class="categories-inner-top">
                    <a class="categories-item" href="course.html">
                    <div class="icon-part">
                        <i class="flaticon flaticon-briefcase"></i>
                    </div>
                    <div class="content-part">
                        <h4 class="title">
                            Business<br>
                            Studies
                        </h4><span class="courses">05 Courses</span>
                    </div></a>
                </div>
                <div class="categories-inner-top">
                    <a class="categories-item" href="course.html">
                    <div class="icon-part">
                        <i class="flaticon flaticon-book"></i>
                    </div>
                    <div class="content-part">
                        <h4 class="title">
                            School of<br>
                            Business
                        </h4><span class="courses">15 Courses</span>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->
    
    <!-- About Section Start -->
    <div id="sc-about" class="sc-about gray-bg pt-90 pb-170 md-pt-50 md-pb-70 position-relative arrow-animation-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-part position-relative">
                        <img class="" src="{{ asset('frontend/assets/images/njorocollege3.png') }}" alt="About Image" style="height: 500px; width: 800px;">
                        <div class="about-experience text-center">
                            <span>12+</span> Years Experience
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-90 md-pl-15 md-mt-90">
                    <div class="sec-title mb-20">
                        <div class="sub-title position-relative">
                            About Us <span class="heading-border-line"></span>
                        </div>
                        <h2 class="title mb-20">
                            Good Qualificatio Services and Better Skills
                        </h2>
                        <div class="des">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        </div>
                    </div>
                    <ul class="check-square two-line mb-20">
                        <li>Qualified Teachers
                        </li>
                        <li>Certified Courses
                        </li>
                        <li>Recognized Examinations 
                        </li>
                        <li>Adequate Equipments
                        </li>
                        <li>Adhere to Industry practices
                        </li>
                        <li>Develop Skills
                        </li>
                    </ul>
                    <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon" href="about.html">Learn More <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="animated-arrow-1 animated-arrow left-right-new">
            <img src="{{ asset('frontend/assets/images/arrow-1.png') }}" alt="">
        </div>
        <div class="animated-arrow-2 animated-arrow up-down-new">
            <img src="{{ asset('frontend/assets/images/arrow-2.png') }}" alt="">
        </div>
        <div class="animated-arrow-3 animated-arrow up-down-new">
            <img src="{{ asset('frontend/assets/images/arrow-3.png') }}" alt="">
        </div>
        <div class="animated-arrow-4 animated-arrow left-right-new">
            <img src="{{ asset('frontend/assets/images/arrow-3.png') }}" alt="">
        </div>
    </div>
    <!-- About Section End -->

    <!-- Course Section Start -->
    <div id="sc-popular-courses" class="sc-popular-courses main-home pt-115 pb-90 md-pt-70 md-pb-50">
        <div class="container">
            <div class="row align-items-center mb-30 md-mb-10">
                <div class="col-md-8">
                    <div class="sec-title">
                        <div class="sub-title position-relative">
                            Popular Courses <span class="heading-border-line"></span>
                        </div>
                        <h2 class="title mb-0">
                            Our Most Reknowned Courses
                        </h2>
                    </div>
                </div>
                <div class="col-md-4 sm-mt-30">
                    <div class="btn-part sm-text-left text-end wow fadeInRight" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon" href="course.html">Learn More <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="sc-carousel owl-carousel nav-style1" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="course-single.html"><img src="{{ asset('frontend/assets/images/courses/2.jpg') }}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="course-single.html">Business & Management</a>
                            </h3>
                            <div class="des">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            </div>
                            <div class="bottom-part mt-3" style="display: flex; justify-content: space-between; align-items: center;">
                                <a href="" class="btn btn-sm" style="background: #ff0157; color: white;">Apply Course</a>
                                <a href="" class="btn btn-sm" style="background: #ff0157; color: white;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="course-single.html"><img src="{{ asset('frontend/assets/images/courses/3.jpg') }}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="course-single.html">Social Economics Courses</a>
                            </h3>
                            <div class="des">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            </div>
                            <div class="bottom-part mt-3" style="display: flex; justify-content: space-between; align-items: center;">
                                <a href="" class="btn btn-sm" style="background: #ff0157; color: white;">Apply Course</a>
                                <a href="" class="btn btn-sm" style="background: #ff0157; color: white;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="course-single.html"><img src="{{ asset('frontend/assets/images/courses/4.jpg') }}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="course-single.html">Web Design Courses</a>
                            </h3>
                            <div class="des">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            </div>
                            <div class="bottom-part mt-3" style="display: flex; justify-content: space-between; align-items: center;">
                                <a href="" class="btn btn-sm" style="background: #ff0157; color: white;">Apply Course</a>
                                <a href="" class="btn btn-sm" style="background: #ff0157; color: white;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Section End -->

    <!-- About Instructor Section Start -->
    <div id="sc-about-instructor" class="sc-about-instructor pt-80 pb-90 md-pt-50 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 md-mb-45">
                    <div class="img-part position-relative">
                        <img class="" src="{{ asset('frontend/assets/images/about/instructor.png') }}" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-7 pl-85 md-pl-15">
                    <div class="sec-title mb-20">
                        <div class="sub-title position-relative">
                            Learn Step <span class="heading-border-line"></span>
                        </div>
                        <h2 class="title mb-20">
                            Learn Full Computer packages<br>
                        </h2>
                        <div class="des mb-40">
                           Intake in progress for computer packages. Our training includes Microsoft Word, Microsoft Excel, MS Access, Power Point, Microsoft Edge
                        </div>
                    </div>
                    <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon" href="contact.html">Apply Now <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Instructor Section End -->
    
</div>
@endsection
