<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSQ: Hair Care Products</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('images/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li>
                        <a href="#"><i class="fa-regular fa-user"></i> LOGIN / REGISTER</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-cart-shopping"></i> CART
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer>
        <div class="container">
            <div class="py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <img src="{{ url('images/logo.png') }}" alt="">
                        </div>
                        <p class="text-justify">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
                        </p>
                        <div class="social-links">
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="my-3">Quick Links</h3>

                        <ul class="m-0 p-0">
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h3 class="my-3">Important Links</h3>

                        <ul class="m-0 p-0">
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Terms
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Certificates
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Terms of Use
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Guideline
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Support
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="py-3">
                <div class="row">
                    <div class="col-lg-6">
                        &copy; Copyright {{ date('Y') }}. All rights reserved.
                    </div>
                    <div class="col-lg-6 text-end">
                        Designed &amp; Developed By: <a href="https://rudrakshatech.com" target="_blank" rel="dofollow">Rudraksha Tech</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" defer></script>
    <script src="{{ url('js/app.js') }}" defer></script>
</body>
</html>