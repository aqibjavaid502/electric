<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Emergency Electrician</title>
    <meta name="description" content="24/7 Emergency Electrician Services Across the UK">
    <meta name="keywords" content="Emergency Electrician, Electrical Services, 24/7 Electrician, Electrical Repairs, Electrical Emergencies, UK Electrician">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/font/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/helpers.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<style>
    /* Increase the font size for the headings and paragraphs in the "Call Us" section */
    #section-call-us h2,
    z #section-call-us p {
        font-size: 24px;
        /* Adjust the font size as needed */
    }

    /* Increase the font size for the button text in the "Call Us" section */
    #section-call-us .btn {
        font-size: 18px;
        /* Adjust the font size as needed */
    }

    @media (max-width: 767px) {

        .pb_cover>.container>.row,
        .pb_cover_v1>.container>.row,
        .pb_cover_v2>.container>.row,
        .pb_cover_v3>.container>.row,
        .pb_cover_v4>.container>.row {
            height: inherit;
            padding: 0.1em 0;
        }

        .pb_cover,
        .pb_cover_v1,
        .pb_cover_v2,
        .pb_cover_v3,
        .pb_cover_v4 {
            height: inherit;
            text-align: center !important;
            padding: 0.1em 0;
        }
    }
</style>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <header>
        <!-- Desktop navbar -->
        <!-- <nav class="navbar navbar-top-default navbar-expand-lg  nav-box-round" style="background: white;">
        <div class="container">
            <a href="{{ url('/') }}">
                @if(isset($setting->logo))
                    <img src="{{ asset('upload/settings/'.$setting->logo) }}" alt="logo" style="height: 100px; width: 100px">
                @endif
            </a>
            <div class="collapse navbar-collapse" id="wexim">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                    @if(Auth::user())

                        <style>

                            .action {
                                position: fixed;
                                top: 10px;
                                right: 30px;
                            }

                            .action .profile {
                                position: relative;
                                width: 45px;
                                height: 45px;
                                border-radius: 50%;
                                overflow: hidden;
                                cursor: pointer;
                            }

                            .action .profile img {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }

                            .action .menu {
                                position: absolute;
                                top: 120px;
                                right: -10px;
                                padding: 10px 20px;
                                background: #fff;
                                width: 200px;
                                box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
                                border-radius: 15px;
                                transition: 0.5s;
                                visibility: hidden;
                                opacity: 0;
                            }

                            .action .menu.active {
                                top: 80px;
                                visibility: visible;
                                opacity: 1;
                            }

                            .action .menu::before {
                                content: "";
                                position: absolute;
                                top: -5px;
                                right: 28px;
                                width: 20px;
                                height: 20px;
                                background: #fff;
                                transform: rotate(45deg);
                            }

                            .action .menu h3 {
                                width: 100%;
                                text-align: center;
                                font-size: 18px;
                                padding: 20px 0;
                                font-weight: 500;
                                color: #555;
                                line-height: 1.5em;
                            }

                            .action .menu h3 span {
                                font-size: 14px;
                                color: #cecece;
                                font-weight: 300;
                            }

                            .action .menu ul li {
                                list-style: none;
                                padding: 16px 0;
                                border-top: 1px solid rgba(0, 0, 0, 0.05);
                                display: flex;
                                align-items: center;
                            }

                            .action .menu ul li img {
                                max-width: 20px;
                                margin-right: 10px;
                                opacity: 0.5;
                                transition: 0.5s;
                            }

                            .action .menu ul li:hover img {
                                opacity: 1;
                            }

                            .action .menu ul li a {
                                display: inline-block;
                                text-decoration: none;
                                color: #555;
                                font-weight: 500;
                                transition: 0.5s;
                            }

                            .action .menu ul li:hover a {
                                color: #ff5d94;
                            }

                        </style>

                        <div class="action">
                            <div class="profile">
                                @if(Auth::user()->photo)
                                    <img src="{{ asset('upload/user/'. Auth::user()->photo) }}" alt="{{ Auth::user()->photo }}"/>
                                @else
                                    <img src="{{ asset('images/nophoto.jpg') }}" alt="no-photo"/>
                                @endif

                            </div>
                            <div class="menu">
                                {{--<h3>Someone Famous<br /><span>Website Designer</span></h3>--}}
                                <ul>
                                    <li>
                                        <img src="{{ asset('images/profile.png') }}" /><a href="{{ route('user.profile') }}">My profile</a>
                                    </li>
                                    {{--<li>--}}
                                    {{--<img src="./assets/icons/edit.png" /><a href="#">Edit profile</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <img src="{{ asset('images/logout.png') }}" /><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf</form>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    @else
                        <a class="nav-link btn btn-primary" href="{{ route('user.create.account') }}">Sign up</a>
                        <a class="nav-link btn btn-info" href="{{ route('front.user.login') }}" style="margin-left: 10px;">Login</a>
                    @endif
                </div>
            </div>
            <a href="#" aria-label="sidenav" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>

        </div>
    </nav> --> 


    </header>
    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 relative align-self-center">
                    <form action="{{ route('PostcodeArea') }}" class="bg-white rounded pb_form_v1" method="POST" id="availability-form">
                        @csrf <!-- Add CSRF token for security -->
                        <h3 class="mb-4 mt-0 text-center">Check Our Engineer Availability In Your Area - Simply Enter Your Details Below</h3>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" name="postcode" id="postcode" placeholder="Your Postcode">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" id="contactno" placeholder="Your Contact Number" name="contactno">
                        </div>
                        <div class="form-group">
                            <input id="changeURLButton" type="submit" name="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill btn-shadow-blue" value="Check Availability" disabled>
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </form>
                </div>
                <div class="col-md-6">
                    <h2 class="heading mb-3 font-weight-bold">24/7 Emergency Electrician Services Across the UK</h2>
                    <div class="sub-heading">
                        <p class="mb-4">We are your reliable partner for all electrical emergencies. Our expert
                            electricians are available around the clock, ready to assist you whenever you need us.</p>
                        <!-- <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-pricing"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Request Service</span></a></p> -->
                    </div>
                </div> 
            </div>
        </div>
    </section>
    
    @include('adds.form2')
    <!-- END nav -->
   
    <!-- Section 222222222222222222222222222 -->
    

    <!-- END section  -->
    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Our
                            Services</strong></h5>
                    <h2>Why Choose Us?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="ion-ios-stopwatch-outline pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">24/7 Availability</h5>
                            <p class="text-sans-serif">We are at your service round the clock, ready to respond to any
                                electrical emergency, day or night.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="ion-ios-people-outline pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Experienced Team</h5>
                            <p class="text-sans-serif">Our team of skilled electricians is highly experienced in
                                handling various electrical issues with precision.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="ion-ios-gear-outline pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Quality Work</h5>
                            <p class="text-sans-serif">We are committed to delivering high-quality electrical
                                solutions, ensuring your safety and satisfaction.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="ion-ios-person-outline pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Customer-Centric</h5>
                            <p class="text-sans-serif">Your needs are our priority. We strive to provide excellent
                                customer service and prompt solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="ion-ios-gear-outline pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Advanced Equipment</h5>
                            <p class="text-sans-serif">We utilize state-of-the-art equipment and technology to diagnose
                                and resolve electrical issues efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="ion-ios-star-outline pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Trusted Reputation</h5>
                            <p class="text-sans-serif">Our satisfied customers trust us for their electrical needs, and
                                we take pride in our stellar reputation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="pb_section pb_slant-light pb_pb-220" id="section-reviews">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
                        <strong>Customer Testimonials</strong>
                    </h5>
                    <h2>What Our Clients Say</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="pb_slide_testimonial_sync_v1">
                        <div class="pb_slider_content js-pb_slider_content2">
                            <div>
                                <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                    <div class="media-body">
                                        <div class="quote">&ldquo;</div>
                                        <blockquote class="mb-5">We were in a real bind when our power went out, but
                                            your team came to the rescue. Fast and professional service. Thank you!
                                        </blockquote>
                                        <p>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                        </p>
                                        <h3 class="heading">Sarah Johnson</h3>
                                        <span class="subheading">@sarah</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                    <div class="media-body">
                                        <div class="quote">&ldquo;</div>
                                        <blockquote class="mb-5">Outstanding service! Your team fixed an electrical
                                            issue in my home that others couldn't. I'm very impressed.</blockquote>
                                        <p>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                        </p>
                                        <h3 class="heading">John Anderson</h3>
                                        <span class="subheading">@john</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                    <div class="media-body">
                                        <div class="quote">&ldquo;</div>
                                        <blockquote class="mb-5">Prompt and efficient service. Your team saved the
                                            day during our electrical emergency. Highly recommended!</blockquote>
                                        <p>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                        </p>
                                        <h3 class="heading">Emily Davis</h3>
                                        <span class="subheading">@emily</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                    <div class="media-body">
                                        <div class="quote">&ldquo;</div>
                                        <blockquote class="mb-5">I'm extremely satisfied with your services. The
                                            electricians were professional and courteous. Thank you for a job well done!
                                        </blockquote>
                                        <p>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                            <i class="ion-ios-star text-warning"></i>
                                        </p>
                                        <h3 class="heading">Michael Roberts</h3>
                                        <span class="subheading">@michael</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END sync_v1 -->
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <!-- ENDs ection -->

    <!-- END section -->
    <footer class="pb_footer bg-light" role="contentinfo">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="pb_font-14">&copy; © 2023 All Rights Reserved By<br> <a href="#">Emergency
                            Electrician</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    document.getElementById("availability-form").addEventListener("submit", function(event) {
        var postcode = document.getElementById("postcode").value;
        var contactno = document.getElementById("contactno").value;

        if (postcode.trim() === "" || contactno.trim() === "") {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all required fields.");
        }
    });

    // Enable the submit button when both fields have input
    document.getElementById("postcode").addEventListener("input", toggleSubmitButton);
    document.getElementById("contactno").addEventListener("input", toggleSubmitButton);

    function toggleSubmitButton() {
        var postcode = document.getElementById("postcode").value;
        var contactno = document.getElementById("contactno").value;
        var changeURLButton = document.getElementById("changeURLButton");

        if (postcode.trim() !== "" && contactno.trim() !== "") {
            changeURLButton.disabled = false;
        } else {
            changeURLButton.disabled = true;
        }
    }
</script>
<script>
    @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }

    toastr.success("{{ session('message') }}");
    @endif
    @if(Session::has('error'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif
</script>

</html>