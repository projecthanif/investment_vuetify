@extends('layouts.app')

@section('app')
    <!------------------------------>
    <!--- Hero Banner Start--------->
    <!------------------------------>
    <section class="hero-banner position-relative overflow-hidden">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h1 class="mb-0 fw-bold">
                            Empower Your Future with Innovative Crowdfunding
                        </h1>
                        <p>Join Our Revolutionary Platform for Economic Growth and Social Impact.</p>
                        {{-- <a href="#" class="btn btn-warning btn-hover-secondery"><span
                                class="d-inline-block me-2"><i class="ti ti-playstation-triangle"></i></span> Discover
                            this Video</a> --}}
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="../assets/images/hero/right-image.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Hero Banner End--------->
    <!------------------------------>

    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>
    <section class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <img src="../assets/images/service/dot-shape.png" class="shape position-absolute">
            <div class="row">
                {{-- <div class="col-12"><small class="fs-7 d-block">Working Process</small></div> --}}
                <div
                    class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-4 text-black mb-0">Discover a unique opportunity to<br> grow your wealth </h2>
                    <a href="#" class="btn btn-warning btn-hover-secondery section-btn">Start Your Journey</a>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div
                                class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                <i class="ti ti-download text-primary position-relative"></i>
                            </div>
                            <h5 class="mb-0 fw-500">1</h5>
                            <h3 class="fs-4">High Turnover</h3>
                            <p class="fs-7 mb-0 fw-500">Experience rapid progression through our four-stage cycle,
                                ensuring continuous growth and opportunity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div
                                class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                <i class="ti ti-user text-primary position-relative"></i>
                            </div>
                            <h5 class="mb-0 fw-500">2</h5>
                            <h3 class="fs-4">Economic Empowerment</h3>
                            <p class="fs-7 mb-0 fw-500">Participate in a system designed to uplift individuals and
                                communities, fostering economic resilience and prosperity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div
                                class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                <i class="ti ti-gift text-primary position-relative"></i>
                            </div>
                            <h5 class="mb-0 fw-500">3</h5>
                            <h3 class="fs-4"> Transparent Process</h3>
                            <p class="fs-7 mb-0 fw-500">Gain full visibility into your financial journey with real-time
                                updates and clear milestones at every stage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>

    <!---------------------------------->
    <!--- Our Service sectin Start------>
    <!---------------------------------->
    <section class="our-service position-relative overflow-hidden" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="../assets/images/our-service/our-service.svg" class="img-fluid">
                </div>
                <div
                    class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xxl-0 ps-xl-0 ps-lg-3 ps-md-3 ps-sm-3 ps-3">
                    <small class="fs-7 d-block">About</small>
                    <h2 class="fs-3 text-black mb-0">Our Featured Service that We Provide</h2>
                    <p class="mb-0 fw-500 fs-7">
                        At [Platform Name], we're driven by a shared vision of empowerment and progress. Founded by a
                        team of passionate individuals, we're committed to revolutionizing the crowdfunding landscape in
                        Nigeria.
                    </p>
                    {{-- <ul class="list-unstyled mb-0 pl-0">
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">List of the tasks that require your attention.</span>
                        </li>
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">Google Calendar integration to see when interruptions will
                                happen</span>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Our Service sectin End---->
    <!------------------------------>

    <!------------------------------>
    <!-- Portfolio section Start---->
    <!------------------------------>
    <section class="portfolio position-relative bg-primary">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12"><small class="fs-7 d-block text-warning">Key Features</small></div>
                <div
                    class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-3 text-white mb-0">At [Platform Name]<br> We Provide.</h2>
                    <a href="#" class="btn btn-warning btn-hover-secondery section-btn">Open Portfolio</a>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center">
                                <i class="ti ti-brand-github text-white"></i>
                            </div>
                            <h3 class="fs-4 text-white">High Turnover Model</h3>
                            <p class="fs-7 mb-0 fw-500">Our platform offers a unique entry and exit strategy, ensuring
                                rapid turnover and continuous benefits for subscribers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon  mx-auto rounded-circle d-flex justify-content-center align-items-center">
                                <i class="ti ti-crown text-white"></i>
                            </div>
                            <h3 class="fs-4 text-white">One-Time Registration</h3>
                            <p class="fs-7 mb-0 fw-500">With a nominal fee of N10,000, gain access to a cycle of four
                                progressive stages and unlock the potential for financial prosperity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center">
                                <i class="ti ti-message-circle-2 text-white"></i>
                            </div>
                            <h3 class="fs-4 text-white">Community Driven</h3>
                            <p class="fs-7 mb-0 fw-500">Join a vibrant community of like-minded individuals committed
                                to mutual success, collaboration, and positive change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center">
                                <i class="ti ti-message-circle-2 text-white"></i>
                            </div>
                            <h3 class="fs-4 text-white">Community Driven</h3>
                            <p class="fs-7 mb-0 fw-500">Join a vibrant community of like-minded individuals committed
                                to mutual success, collaboration, and positive change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container position-relative">
            <div class="portfolio-wrap">
                <div class="owl-carousel owl-theme portfolio-slider">
                    <div class="item"><a href="#"><img src="../assets/images/portfolio/Portfolio.jpg"
                                class="w-100"></a></div>
                    <div class="item"><a href="#"><img src="../assets/images/portfolio/Portfolio.jpg"
                                class="w-100"></a></div>
                    <div class="item"><a href="#"><img src="../assets/images/portfolio/Portfolio.jpg"
                                class="w-100"></a></div>
                    <div class="item"><a href="#"><img src="../assets/images/portfolio/Portfolio.jpg"
                                class="w-100"></a></div>
                    <div class="item"><a href="#"><img src="../assets/images/portfolio/Portfolio.jpg"
                                class="w-100"></a></div>
                </div>
            </div>
        </div> --}}
    </section>
    <!------------------------------>
    <!-- Portfolio section End ----->
    <!------------------------------>

    <!------------------------------>
    <!-- Pricing section Start------>
    <!------------------------------>
    <section class="pricing position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <small class="fs-7 d-block">Why Choose Us</small>
                    {{-- <h2 class="fs-3 pricing-head text-black mb-0 position-relative">What’s About Our Pricing
                        Subscription</h2> --}}
                </div>
            </div>
            <div class="row justify-content-center price-plan">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Innovative Approach</small>
                            <p class="fs-7 text-center fw-500">We are revolutionizing traditional crowdfunding models
                                with cutting-edge technology and a fresh perspective tailored to the Nigerian market.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Proven Impact</small>
                            <p class="fs-7 text-center fw-500">Our platform is designed to empower individuals and
                                communities, driving economic empowerment and fostering social cohesion.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Trusted Platform</small>
                            <p class="fs-7 text-center fw-500">Backed by robust security measures and a dedicated
                                support team, your safety and satisfaction are our top priorities.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!-- Pricing section End-------->
    <!------------------------------>

    <section class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <img src="../assets/images/service/dot-shape.png" class="shape position-absolute">
            <div class="row">
                {{-- <div class="col-12"><small class="fs-7 d-block">Working Process</small></div> --}}
                <div
                    class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-4 text-black mb-0">Join the Movement</h2>
                    <a href="#" class="btn btn-warning btn-hover-secondery section-btn">Start Your Journey</a>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------>
    <!------ FAQ section Start------>
    <!------------------------------>
    <section class="faq position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <small class="fs-7 d-block">Frequently Asked Questions</small>
                    <h2 class="fs-3 text-black mb-0">Want to ask something from us?</h2>
                </div>
            </div>
            <div class="accordion-block">
                <div class="accordion row" id="accordionPanelsStayOpenExample">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button text-black fs-7" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Letraset sheets containing sum passages ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is
                                    coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    There are many variations ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is
                                    coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Lorem Ipsum generators on the Internet tend ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is
                                    coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                    Various versions have evolved over the ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is
                                    coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Finibus bonorum et malorum ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is
                                    coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                    Many desktop publishing packages ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingsix">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is
                                    coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!------ FAQ section End------>
    <!------------------------------>

    <!------------------------------>
    <!-----Contact section Start---->
    <!------------------------------>
    <section class="contact bg-primary position-relative overflow-hidden" id="register">
        <div class="container position-relative">
            <div class="dots-shape-left position-absolute"><img src="../assets/images/icons/dot-shape.png"></div>
            <div class="dots-shape-right position-absolute"><img src="../assets/images/icons/dot-shape.png"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <small class="fs-7 d-block text-warning">Join us Now</small>
                    <h2 class="fs-3 text-white mb-0">Ready to try the product for free?</h2>
                    <div class="owl-carousel owl-theme testimonial">
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece”
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden"><img
                                            src="../assets/images/contact/testimonial-image.png" class="img-fluid">
                                    </div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Merky Lester</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Managers</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece”
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden"><img
                                            src="../assets/images/contact/testimonial-image.png" class="img-fluid">
                                    </div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Merky Lester</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Managers</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <form class="position-relative">
                        <div class="row ps-xxl-5 ps-xl-5 ps-lg-3 ps-md-0 ps-sm-0 ps-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Full Name</label>
                                    <input type="text" class="form-control border-0" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">User Name</label>
                                    <input type="text" class="form-control border-0"
                                        placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Email address</label>
                                    <input type="email" class="form-control border-0"
                                        placeholder="Enter your email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Email Password</label>
                                    <input type="text" class="form-control border-0"
                                        placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="agree fs-7 fw-500">
                                By clicking on the Sign Up button, you agree to Rakon.<br><a href="#"
                                    class="text-warning text-decoration-none">terms and conditions of use.</a>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn btn-warning btn-hover-secondery text-capitalize mt-2 w-auto contact-btn">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!-----Contact section End----->
    <!------------------------------>
@endsection
