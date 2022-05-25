<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body>
<?php include 'nav.php'; ?>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <div class="container-fluid p-0 bredcrumb">
        <div class="container py-1" style="margin-bottom: 30px; margin-top: 100px;">
            <div class="row py-5">
                <div class="col-12 text-left">
                    <a href="index.php" class="h5 text-dark">Home</a>
                    <i class="far fa-circle text-dark px-2"></i>
                    <a href="about.php" class="h5 text-dark">Product Details</a>
                    <h4 class="display-6 text-dark animated zoomIn">Product Details</h4>
                </div>
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="owl-carousel pro-details_slider text-center">
                        <img src="img/product-details/1.jpg" alt="">
                        <img src="img/product-details/2.jpg" alt="">
                        <img src="img/product-details/3.jpg" alt="">
                        <img src="img/product-details/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h1 class="text-dark">BeneSphera H33s</h1>
                    <h6>Overview</h6>
                    <!-- <ul>
                       <li class="pb-2"><b>Bank Offer</b> 5% Unlimited Cashback on  Bank Credit Card <b>T&C</b></li>
                       <li><b>Bank Offer</b> 5% Instant Discount on EMI with Bank Credit and Debit Cards <b>T&C</b></li>
                    </ul> -->
                    <p class="mb-4">Avantor’s new l ine of hematology analyzer, BeneSphera
                        H33s is compact yet powerful, full featured yet affordable
                        3-part analyzer. Detailed flag information never before seen on a 3-part analyzer.
                        Provides information useful for diagnosis including WBC flag, RBC flag
                        and PLT flag. Different flag information provided
                        according to parameter results together
                        with histograms.</p>
                    <div class="video_download">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="video">
                                    <iframe width="200" height="130" src="https://www.youtube.com/embed/j2mWRsXRhjk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="downlaod_btn">
                                    <!-- <button class=""></button> -->

                                    <a href="https://dvmedialabs.com/magnum_admin/uploads/images/The_Cinta_drawio.pdf" download="download" class="brochure-btn scrollto d-inline-flex align-items-center justify-content-center align-self-center" data-redirect-file="" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i><span>Brochure Download</span></a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
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