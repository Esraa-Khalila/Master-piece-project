<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.Navbar')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/shutterstock_651730000-850x525.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top Farms in the country</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Farms </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/XqVd3tULZNgAvgnFTdNaTo.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top Farms in the country</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Farms</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/RS4956_182230177-low_0.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Booking Room Start-->
        <div class="booking-area">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <form action="">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">

                                <!-- select in date -->
                                <div class="single-select-box mb-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span> Check In Date:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <input id="datepicker1" placeholder="10/12/2020" />
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span>Check OutDate:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <input id="datepicker2" placeholder="12/12/2020" />
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <div class="boking-tittle">
                                        <span>Adults:</span>
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <div class="boking-tittle">
                                        <span>Children:</span>
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select2">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <div class="boking-tittle">
                                        <span>Rooms:</span>
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select3">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box pt-45 mb-30">
                                    <a href="#" class="btn select-btn">Book Now</a>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Room End-->

        <!-- ================================
    START HOTEL AREA
================================= -->
        <section
            class="hotel-area section-bg section-padding overflow-hidden padding-right-100px padding-left-100px mt-5 mb-5 customar-padding fix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h2 class="sec__title line-height-55">Most Popular Farm</h2>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row padding-top-50px">
                    <div class="col-lg-12">
                        <div class="hotel-card-wrap">
                            <div class="hotel-card-carousel carousel-action">
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (13).jfif" alt="hotel-img">
                                        </a>
                                        <span class="badge">Bestseller</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa Farm</a></h3>
                                        <p class="card-meta">Zarqa</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">4.4/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(30 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">70.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/istockphoto-539001578-612x612.jpg" alt="hotel-img">
                                        </a>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa Farm</a></h3>
                                        <p class="card-meta">Zarqa</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">4.4/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(30 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">80.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (13).jfif" alt="hotel-img">
                                        </a>
                                        <span class="badge">Featured</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraafarm</a></h3>
                                        <p class="card-meta">Zarqa</p>
                                        <div class="card-rating" <span class="badge text-white">4/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(30 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">150.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (20).jfif" alt="hotel-img">
                                        </a>
                                        <span class="badge">Popular</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa farm</a></h3>
                                        <p class="card-meta">Zarqa</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">3.5/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(52 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">160.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (13).jfif" alt="hotel-img">
                                        </a>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa farm</a></h3>
                                        <p class="card-meta"> Zarqa</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">4.1/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(15 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">150.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (12).jfif" alt="hotel-img">
                                        </a>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa farm</a></h3>
                                        <p class="card-meta">38-40 Rue Saint Séverin, Paris, Paris</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">4.4/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(30 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">$88.00</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (11).jfif" alt="hotel-img">
                                        </a>
                                        <span class="badge">Bestseller</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa farm</a></h3>
                                        <p class="card-meta">Zarqa</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">4.2/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(10 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">80.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a farm-single.php" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="farm-single" class="d-block">
                                            <img src="images/resize (10).jfif" alt="hotel-img">
                                        </a>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip"
                                            data-placement="top" title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="farm-single">Esraa farm</a></h3>
                                        <p class="card-meta">Zarqa</p>
                                        <div class="card-rating">
                                            <span class="badge text-white">4.4/5</span>
                                            <span class="review__text">Average</span>
                                            <span class="rating__text">(20 Reviews)</span>
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">50.00Jd</span>
                                                <span class="price__text">Per night</span>
                                            </p>
                                            <a href="farm-single" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end hotel-card-carousel -->
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </section><!-- end hotel-area -->

        <!-- Dining Start -->
        <div class="dining-area ">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our resturent</span>
                                <h3>Dining & Drinks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis
                                    nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Pool</span>
                                <h3>Swimming Pool</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis
                                    nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More <i
                                        class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dining End -->
        <section class="faq-area section-bg mt-5  customar-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h2 class="sec__title">Frequently Asked Questions</h2>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row padding-top-60px">
                    <div class="col-lg-7">
                        <div class="accordion accordion-item" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="faqHeadingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseOne"
                                            aria-expanded="true" aria-controls="faqCollapseOne">
                                            <span>What do I need to hire a car?</span>
                                            <i class="la la-minus"></i>
                                            <i class="la la-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus
                                            aliquid at, aut cumque cupiditate delectus dignissimos</p>
                                        <ul class="list-items py-2">
                                            <li>Mus accumsan venenatis hac</li>
                                            <li>Curabitur per quis parturient vel ut</li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="faqHeadingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseTwo"
                                            aria-expanded="false" aria-controls="faqCollapseTwo">
                                            <span>How old do I have to be to rent a car?</span>
                                            <i class="la la-minus"></i>
                                            <i class="la la-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority
                                            have suffered alteration in some form, by injected humour, or randomised
                                            words
                                            which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="faqHeadingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseThree"
                                            aria-expanded="false" aria-controls="faqCollapseThree">
                                            <span>Can I book a hire car for someone else?</span>
                                            <i class="la la-minus"></i>
                                            <i class="la la-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority
                                            have suffered alteration in some form, by injected humour, or randomised
                                            words
                                            which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="faqHeadingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseFour"
                                            aria-expanded="false" aria-controls="faqCollapseFour">
                                            <span>How do I find the cheapest car hire deal?</span>
                                            <i class="la la-minus"></i>
                                            <i class="la la-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority
                                            have suffered alteration in some form, by injected humour, or randomised
                                            words
                                            which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="faqHeadingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseFive"
                                            aria-expanded="false" aria-controls="faqCollapseFive">
                                            <span>What should I look for when I’m choosing a car?</span>
                                            <i class="la la-minus"></i>
                                            <i class="la la-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority
                                            have suffered alteration in some form, by injected humour, or randomised
                                            words
                                            which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="faqHeadingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link d-flex align-items-center justify-content-between"
                                            type="button" data-toggle="collapse" data-target="#faqCollapseSix"
                                            aria-expanded="false" aria-controls="faqCollapseSix">
                                            <span>Are all fees included in the rental price?</span>
                                            <i class="la la-minus"></i>
                                            <i class="la la-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority
                                            have suffered alteration in some form, by injected humour, or randomised
                                            words
                                            which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <div class="accordion-help-text pt-2">
                            <p class="font-size-14 font-weight-regular">Any questions? Just visit our <a
                                    href="#" class="color-text" style="color:rgb(73,160,51)">Help center</a> or
                                <a href="#" class="color-text"style="color:rgb(73,160,51)">Contact Us</a>
                            </p>
                        </div>
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="faq-forum pl-4">
                            <div class="form-box border">
                                <div class="form-title-wrap">
                                    <h3 class="title">Still have question?</h3>
                                </div><!-- form-title-wrap -->
                                <div class="form-content">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            <div class="input-box">
                                                <label class="label-text">Your Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        placeholder="Your name">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Your Email</label>
                                                <div class="form-group">
                                                    <span class="la la-envelope-o form-icon"></span>
                                                    <input class="form-control" type="email" name="email"
                                                        placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Message</label>
                                                <div class="form-group">
                                                    <span class="la la-pencil form-icon"></span>
                                                    <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-box">
                                                <button type="button" class="theme-btn"
                                                    style="background:rgb(73,160,51)">Send Message <i
                                                        class="la la-arrow-right ml-1"></i></button>
                                            </div>
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end form-content -->
                            </div><!-- end form-box -->
                        </div><!-- end faq-forum -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end faq-area -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="blog-area blog-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!-- Seciton Tittle  -->
                        <div class="font-back-tittle mb-50">
                            <div class="archivment-front">
                                <h3>Our News</h3>
                            </div>
                            <h3 class="archivment-back">Recent News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="assets/img/our_blog/Jordan-A-2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul>
                                        <li>by<a href="#"> Catherina Cunnane</a></li>
                                    </ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">PHOTOS: 54-acre farm with sheds guiding at
                                            €750,000</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg"
                                            alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"> <img
                                        src="assets/img/our_blog/carlow-farm-2-1-1068x801.jpg" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul>
                                        <li>by<a href="#"> Jhon Guru</a></li>
                                    </ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">A ‘two-horse race’ for €830k 46ac residential
                                            farm</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg"
                                            alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"><img
                                        src="assets/img/our_blog/Ballinameesda-Lower-Resized.jpg" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul>
                                        <li>by<a href="#"> Esraa</a></li>
                                    </ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">€425k 2-bed bungalow with garage on 7ac ‘ideal for
                                            hobby farmer’</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg"
                                            alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/resize (6).jfif" height="370px"
                                        width="100px"alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/resize (8).jfif" height="370px"
                                        width="100px" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/resize (7).jfif" height="370px"
                                        width="100px" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area black-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logoo.png" alt=""></a>
                            </div>
                            <div class="footer-social footer-social2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="footer-pera">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="ti-heart" aria-hidden="true"></i> by <a href=""
                                        target="_blank">Esraa</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About Farms</a></li>
                                    <li><a href="#">Our Best Farm</a></li>
                                    <li><a href="#">search</a></li>
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Reservations</h4>
                                <ul>
                                    <li><a href="#">Tel: +96207755555</a></li>
                                    <li><a href="#">Skype:esraakh</a></li>
                                    <li><a href="#">esraa.khalilah@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Our Location</h4>
                                <ul>
                                    <li><a href="#">AlGheish St,</a></li>
                                    <li><a href="#">Zarqa</a></li>
                                </ul>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->
    <!-- Template JS Files -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.countTo.min.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/jquery.ripples-min.js"></script>
    <script src="js/quantity-input.js"></script>
    <script src="js/main.js"></script>
</body>
<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>


</body>

</html>
