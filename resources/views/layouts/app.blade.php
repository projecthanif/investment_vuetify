<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment</title>
    <link rel="stylesheet" href="{{ asset('assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/iconfont/tabler-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>

<body>

    @include('layouts.nav')

    @yield('app')



    <!------------------------------>
    <!-----Footer Start------------->
    <!------------------------------>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo-col">
                        <a href="#"><img src="../assets/images/footer/Logo.svg"></a>
                        <p class="blue-light mb-0 fs-7 fw-500">Rakon is a simple, elegant, and secure way to build your
                            bitcoin and crypto portfolio.</p>
                        <div class="callus text-white fw-500 fs-7">
                            1989 Don Jackson Lane
                            <div class="blue-light">Call us: <a href="#"
                                    class="text-warning fw-500 fs-7 text-decoration-none">808-956-9599</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Social</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Company</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#about">About</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Legal & Privacy</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="subscribe">
                        <h5 class="text-white">Subscribe</h5>
                        <p class="blue-light fw-500">Subscribe to get the latest news form us
                        </p>
                        <div class="input-group">
                            <input type="email" class="form-control br-15" placeholder="Enter email address"
                                aria-label="Enter email address" aria-describedby="button-addon2">
                            <button
                                class="btn btn-warning btn-hover-secondery ms-xxl-2 ms-xl-2 ls-lg-0 ms-md-0 ms-sm-0 ms-0"
                                type="button" id="button-addon2">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center blue-light  fw-500">@<span id="autodate">2023</span> - All Rights
                Reserved by <a href="#" class="blue-light text-decoration-none">Vuetify.ng</a>
            </div>
        </div>
    </footer>
    <!------------------------------>
    <!-------Footer End------------->
    <!------------------------------>


    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/OwlCarousel-2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>

</body>

</html>
