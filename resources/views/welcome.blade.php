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
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Contact Us</a>
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

    <!-- Banner Slider Start -->
    <section>
        <div id="bannerSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for($i = 1; $i <= 3; $i++)
                <div class="carousel-item{{ $i === 1 ? ' active' : ''}}">
                    <div class="position-absolute slider-text">
                        <div class="container">
                            <div class="row align-self-center">
                                <div class="col-lg-6">
                                    <h3>
                                        Your Hair, We Care
                                    </h3>
                                    <p>"Neque porro quisquam est qui  dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                                    <a href="" class="btn btn-outline-light round-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative banner-slide">
                        <img src="{{ url('images/girl.png') }}" class="girl-image" alt="">
                        <img src="{{ url('images/boy.png') }}" class="boy-image" alt="">
                    </div>
                </div>
                @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#bannerSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Banner Slider End -->

    <!-- Product Overview Start -->
    <section class="product-overview-section pb-5">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <div>
                            <i class="fa-solid fa-question"></i>
                        </div>
                        <div>
                            How It Works?
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <div>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                        <div>
                            Product's Overview
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <div>
                            <i class="fa-solid fa-list-ul"></i>
                        </div>
                        <div>
                            Key Features
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="video-box">
                                <img src="{{ url('images/video-poster.jpg') }}" alt="">
                                <div class="overlay">
                                    <button class="play-circle">
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>How It Works?</h4>
                            <h3>Hair Growth Solutions</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <ul class="p-0 m-0">
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    What is Lorem Ipsum?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Why do we use it?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Where does it come from?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Where can I get some?
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                        <div class="col-lg-5">
                            <div class="video-box">
                                <img src="{{ url('images/video-poster.jpg') }}" alt="">
                                <div class="overlay">
                                    <button class="play-circle">
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>How It Works?</h4>
                            <h3>Hair Growth Solutions</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <ul class="p-0 m-0">
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    What is Lorem Ipsum?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Why do we use it?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Where does it come from?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Where can I get some?
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                        <div class="col-lg-5">
                            <div class="video-box">
                                <img src="{{ url('images/video-poster.jpg') }}" alt="">
                                <div class="overlay">
                                    <button class="play-circle">
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h4>How It Works?</h4>
                            <h3>Hair Growth Solutions</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <ul class="p-0 m-0">
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    What is Lorem Ipsum?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Why do we use it?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Where does it come from?
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    Where can I get some?
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Overview End -->

    <!-- Product Details Start -->
    <section class="bg-white product-details">
        <div class="row g-0">
            <div class="col-lg-6 text-center">
                <div class="p-5">
                    <!-- <img src="{{ url('images/box.png') }}" class="img-fluid" class="img-fluid"> -->
                    <ul class="product-slider">
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 bg-primary text-white p-5">
                <h3>
                    LSQ Hair Kit
                </h3>
                <p>A Potential Treatment for Healthy Hair.</p>
                <table class="w-100">
                    <tr>
                        <th class="text-start">ASIN:</th>
                        <td>B09VH448X8</td>
                    </tr>
                    <tr>
                        <th class="text-start">Item part number:</th>
                        <td>LSQ-12</td>
                    </tr>
                    <tr>
                        <th class="text-start">Net Quantity:</th>
                        <td>200.00 Count</td>
                    </tr>
                    <tr>
                        <th class="text-start">Country of Origin:</th>
                        <td>India</td>
                    </tr>
                </table>
                <div class="mt-5">
                    <button class="btn btn-lg btn-outline-light round-btn">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Buy Now
                    </button>
                    <a href="#" class="btn btn-lg btn-light round-btn text-primary">
                        <i class="fa-solid fa-plus"></i>
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details End -->

    <!-- Product Ingredients Start -->
    <section>
        <div class="row g-0">
            @for($i = 1; $i <= 12; $i++)
            <div class="col-lg-2">
                <div class="image-box">
                    <img src="{{ url('images/gradients/1.jpg') }}" class="w-100" alt="">
                    <div class="overlay">
                        <h3 class="m-0">COD LIVER OIL</h3>
                        <p>Neque porro  quisquam est qui do lorem ipsum quia dolor sit  amet, consectetur, adipisci velit..</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
    <!-- Product Ingredients End -->

    <!-- Product Details Start -->
    <section class="bg-white product-details">
        <div class="row g-0">
            <div class="col-lg-6 text-center">
                <div class="p-5">
                    <!-- <img src="{{ url('images/box.png') }}" class="img-fluid" class="img-fluid"> -->
                    <ul class="product-slider">
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                        <li data-thumb="{{ url('images/box.png') }}">
                            <img src="{{ url('images/box.png') }}" class="img-fluid mh-100" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 bg-primary text-white p-5">
                <h3>
                    LSQ Hair Kit
                </h3>
                <p>A Potential Treatment for Healthy Hair.</p>
                <table class="w-100">
                    <tr>
                        <th class="text-start">ASIN:</th>
                        <td>B09VH448X8</td>
                    </tr>
                    <tr>
                        <th class="text-start">Item part number:</th>
                        <td>LSQ-12</td>
                    </tr>
                    <tr>
                        <th class="text-start">Net Quantity:</th>
                        <td>200.00 Count</td>
                    </tr>
                    <tr>
                        <th class="text-start">Country of Origin:</th>
                        <td>India</td>
                    </tr>
                </table>
                <div class="mt-5">
                    <button class="btn btn-lg btn-outline-light round-btn">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Buy Now
                    </button>
                    <a href="#" class="btn btn-lg btn-light round-btn text-primary">
                        <i class="fa-solid fa-plus"></i>
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details End -->

    <!-- Product Ingredients Start -->
    <section>
        <div class="row g-0">
            @for($i = 1; $i <= 12; $i++)
            <div class="col-lg-2">
                <div class="image-box">
                    <img src="{{ url('images/gradients/1.jpg') }}" class="w-100" alt="">
                    <div class="overlay">
                        <h3 class="m-0">COD LIVER OIL</h3>
                        <p>Neque porro  quisquam est qui do lorem ipsum quia dolor sit  amet, consectetur, adipisci velit..</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
    <!-- Product Ingredients End -->

    <section class="py-5 bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center section-heading mb-5">
                        <h4>What our customers says</h4>
                        <h3>Client's Testimonials</h3>
                    </div>
                    <div class="testimonial-box">
                        <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ url('images/user.jpg') }}" class="rounded-circle" alt="">
                                        </div>
                                        <div>
                                            <blockquote>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
                                                roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                                years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                                College in Virginia, looked up one of the more obscure Latin words, 
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of 
                                                the word in classical literature, discovered the undoubtable source.
                                            </blockquote>
                                            <div>
                                                <strong>
                                                - Robin Donald
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ url('images/user.jpg') }}" class="rounded-circle" alt="">
                                        </div>
                                        <div>
                                            <blockquote>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
                                                roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                                years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                                College in Virginia, looked up one of the more obscure Latin words, 
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of 
                                                the word in classical literature, discovered the undoubtable source.
                                            </blockquote>
                                            <div>
                                                <strong>
                                                - Robin Donald
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ url('images/user.jpg') }}" class="rounded-circle" alt="">
                                        </div>
                                        <div>
                                            <blockquote>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
                                                roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                                years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                                College in Virginia, looked up one of the more obscure Latin words, 
                                                consectetur, from a Lorem Ipsum passage, and going through the cites of 
                                                the word in classical literature, discovered the undoubtable source.
                                            </blockquote>
                                            <div>
                                                <strong>
                                                - Robin Donald
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center section-heading mb-5">
                        <h4>What is in your mind?</h4>
                        <h3>Frequently Asked Questions</h3>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @for($i = 1; $i <= 6; $i++)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button{{ $i === 1 ? ' show' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{ $i }}" aria-expanded="false" aria-controls="flush-collapseOne-{{ $i }}">
                                    The standard Lorem Ipsum passage, used since the 1500s
                                </button>
                            </h2>
                            <div id="flush-collapseOne-{{ $i }}" class="accordion-collapse collapse{{ $i === 1 ? ' show' : '' }}" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s,</div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>