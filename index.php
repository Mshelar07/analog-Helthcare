<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body>
<?php include 'nav.php'; ?>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/banner-new.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 content-banner" style="max-width: 1200px;">
                            <img class="w-100 wow zoomIn" src="img/logo_new.png" alt="Image">
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 content-banner" style="max-width: 1200px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>                            <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: #adb5bde3;">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
   <!--  <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp about-h" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Collaborative and Innovative Environment for Our Researchers</h1>
                    </div>
                    <p class="mb-4">While enjoying unprecedented growth, healthcare across the globe is facing ever-growing challenges: an aging population, rising costs, service integration, and a pandemic that is causing great uncertainty etc. As high-quality and advanced healthcare in most situations is still not affordable for most people, at Mindray believes it’s time for the healthcare industry to give every life respect and put patient care first.</p>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Read More</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow rollIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp product-bg" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Product</h5>
                <h1 class="mb-0">Providing one of a kind solution, and progressively getting bigger</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-1.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Humastar 100</h4></a>
                                    <p class="m-0 show-1">HumaStar 100 is the first choice for laboratories processing up to 500 measurements / shift. Its ease of use exceeds those of most other instruments.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="product_detail.php">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Humastar 100</h4>
                                    <p class="p-2">HumaStar 100 is the first choice for laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-2.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Humacount 30TS</h4></a>
                                    <p class="m-0 show-1">HumaCount 30TS is the first choice for small laboratories with high standards and restricted budgets – even in remote care settings. </p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="product_detail.php">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Humacount 30TS</h4>
                                    <p class="p-2">HumaCount 30TS is the first choice for small laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-3.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Maglumi 2000 Plus</h4></a>
                                    <p class="m-0 show-1">Maglumi 2000 Plus is the first choice for laboratories processing up to 500 measurements / shift. Its ease of use exceeds those of most other instruments.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="product_detail.php">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Maglumi 2000 Plus</h4>
                                    <p class="p-2">Maglumi 2000 Plus is the first choice for laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-4.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">DSX 4-plate</h4></a>
                                    <p class="m-0 show-1">The trusted standard – DSX®. An open, modular ELISA processing system by Dynex Technologies, designed specifically for busy laboratories that require advanced automation.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="product_detail.php">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">DSX 4-plate</h4>
                                    <p class="p-2">The trusted standard – DSX®. An open, modular ELISA processing...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-1.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Humastar 100</h4></a>
                                    <p class="m-0 show-1">HumaStar 100 is the first choice for laboratories processing up to 500 measurements / shift. Its ease of use exceeds those of most other instruments.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="product_detail.php">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Humastar 100</h4>
                                    <p class="p-2">HumaStar 100 is the first choice for laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-2.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Humacount 30TS</h4></a>
                                    <p class="m-0 show-1">HumaCount 30TS is the first choice for small laboratories with high standards and restricted budgets – even in remote care settings. </p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Humacount 30TS</h4>
                                    <p class="p-2">HumaCount 30TS is the first choice for small laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-3.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Maglumi 2000 Plus</h4></a>
                                    <p class="m-0 show-1">Maglumi 2000 Plus is the first choice for laboratories processing up to 500 measurements / shift. Its ease of use exceeds those of most other instruments.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Maglumi 2000 Plus</h4>
                                    <p class="p-2">Maglumi 2000 Plus is the first choice for laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-4.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">DSX 4-plate</h4></a>
                                    <p class="m-0 show-1">The trusted standard – DSX®. An open, modular ELISA processing system by Dynex Technologies, designed specifically for busy laboratories that require advanced automation.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">DSX 4-plate</h4>
                                    <p class="p-2">The trusted standard – DSX®. An open, modular ELISA processing...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-3.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">Maglumi 2000 Plus</h4></a>
                                    <p class="m-0 show-1">Maglumi 2000 Plus is the first choice for laboratories processing up to 500 measurements / shift. Its ease of use exceeds those of most other instruments.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">Maglumi 2000 Plus</h4>
                                    <p class="p-2">Maglumi 2000 Plus is the first choice for laboratories...</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item bg-white rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product/pro-4.png" alt="">
                                <div class="team-social">
                                    <a href="#"><h4 class="mb-3 show-1">DSX 4-plate</h4></a>
                                    <p class="m-0 show-1">The trusted standard – DSX®. An open, modular ELISA processing system by Dynex Technologies, designed specifically for busy laboratories that require advanced automation.</p>
                                    <a class="btn btn-lg btn-primary rounded show-1" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">DSX 4-plate</h4>
                                    <p class="p-2">The trusted standard – DSX®. An open, modular ELISA processing...</p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Associated brand logo</h5>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Features Start -->
    <section class="why-choose">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 100%;">
                    <h5 class="fw-bold text-uppercase" style="color:#211d1d;">Why Choose Us</h5>
                    <h1 class="mb-0" style="color:#211d1d;">Our excellent team is ready to be part of your team to work into the different areas of diagnoses. Scientists helping scientists.</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn why-choose-text" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center justify-content-center mb-3 bg-icon">
                                    <img class="img-fluid w-100" src="img/icon/quality.png" alt="">
                                </div>
                                <h4>High Quality Services</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn why-choose-text" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center justify-content-center mb-3 bg-icon">
                                   <img class="img-fluid w-100" src="img/icon/customer-service.png" alt="">
                                </div>
                                <h4>24/7 Customer Support</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn why-choose-text" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center justify-content-center mb-3 bg-icon">
                                    <img class="img-fluid w-100" src="img/icon/speed.png" alt="">
                                </div>
                                <h4>Fast Working Process</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn why-choose-text" data-wow-delay="0.8s">
                                <div class="d-flex align-items-center justify-content-center mb-3 bg-icon">
                                    <img class="img-fluid w-100" src="img/icon/group.png" alt="">
                                </div>
                                <h4>Expert Engineering Team</h4>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Start -->


    <!-- Service Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Cyber Security</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Data Analytics</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Apps Development</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO Optimization</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->

    <!-- Pricing Plan Start -->
<!--     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Basic Plan</h4>
                            <small class="text-uppercase">For Small Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Standard Plan</h4>
                            <small class="text-uppercase">For Medium Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For Large Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
<!--     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
<!--     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->   

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>