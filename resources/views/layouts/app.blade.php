<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Masjid An - Nabawi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/fe/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('assets/fe/lib/lightbox/css/lightbox.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/fe/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/fe/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/fe/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('layouts.header')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    @include('layouts.sidebar')
    <!-- Navbar & Hero End -->

    <!-- Services Start -->
    @yield('section')
    <!-- Services End -->
    <!-- Features Start -->
    {{-- <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Features</h4>
                <h1 class="display-5 mb-4">Connecting businesses, ideas, and people for greater impact.</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-chart-line fa-4x text-primary"></i>
                        </div>
                        <h4>Global Management</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-university fa-4x text-primary"></i>
                        </div>
                        <h4>Corporate Banking</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-file-alt fa-4x text-primary"></i>
                        </div>
                        <h4>Asset Management</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                        </div>
                        <h4>Investment Bank</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Features End -->


    <!-- Offer Start -->
    {{-- <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Offer</h4>
                <h1 class="display-5 mb-4">Benefits We offer</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">Lending money for investment of your new projects</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">Lending money for investment of your new projects</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">Mobile payment is more flexible and easy for all investors</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">all transaction is kept free for the member of pro traders</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('assets/fe/img/offer-1.jpg') }}"
                                        class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="img/offer-2.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="img/offer-3.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="img/offer-4.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                        amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                        dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Offer End -->

    <!-- Blog Start -->
    {{-- <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog & News</h4>
                <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0">October 9, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Non-Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0">October 9, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0">October 9, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item p-4">
                    <div class="blog-img mb-4">
                        <img src="img/service-4.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="blog-title">
                            <a href="#" class="btn">Non-Dividend Stocks</a>
                        </div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                        suscipit error corporis accusamus labore....
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ms-3">
                            <h5>Admin</h5>
                            <p class="mb-0">October 9, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- FAQs Start -->
    {{-- <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQs</h4>
                <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                    What Does This Tool Do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What Are The Disadvantages Of Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Is Online Trading Safe?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    What Is Online Trading, And How Dose It Work?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Which App Is Best For Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    How To Create A Trading Account?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended
                                    to demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="img/about-2.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- FAQs End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-5 mb-4">Meet Our Advisers</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-4">Our Clients Riviews</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/fe/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/fe/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/fe/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/fe/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/fe/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/fe/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/fe/js/main.js') }}"></script>

    @stack('script')
</body>

</html>
