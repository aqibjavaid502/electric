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
    @media (max-width: 767px) {

        .pb_cover,
        .pb_cover_v1,
        .pb_cover_v2,
        .pb_cover_v3,
        .pb_cover_v4 {
            text-align: center !important;
            padding: 0 !important;
        }

        .pb_cover>.container>.row,
        .pb_cover_v1>.container>.row,
        .pb_cover_v2>.container>.row,
        .pb_cover_v3>.container>.row,
        .pb_cover_v4>.container>.row {
            height: inherit;
            padding: 0 !important;
        }

        .pb_btn-pill {
            margin: 10px !important;
        }
    }
</style>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Emergency Electrician</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="ion-navicon"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="probootstrap-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-pricing">Pricing</a></li>
                    <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="#" target="_blank"><span class="pb_rounded-4 px-4">Get
                                Call Us</span></a></li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- END nav -->
    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-call-us">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="md-6 text-center">
                    <h2 class="pb-3 mt-3 font-weight-bold" style="font-size: 30px; font-weight: 1000;">
                        Great News - We have 3 engineers available near your post code ({{$responseData->result->postcode}}).
                    </h2>
                    @include('adds.form3')
                    <div class="heading">
                        <!-- <p class="mb-4" style="font-size: 24px; font-weight: bold;">
                            Act quickly if your enquiry is urgent to secure an appointment today.
                        </p>
                        <p class="mb-5" style="font-size: 24px; font-weight: bold;">
                            Please note: Appointments are allocated on a first-come, first-served basis.
                        </p> -->
                        <div class="text-center">
                            <a href="tel:0123456789" class="btn btn-primary btn-lg pb_btn-pill smoothscroll" style="font-size: 28px; margin-right: 10px;">
                                Call Now: 01234 567 890
                            </a>
                            <!-- <a href="/index" class="btn btn-primary btn-lg pb_btn-pill smoothscroll" style="font-size: 28px; margin-left: 10px;">
                                Return to Website
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
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
@if(isset($message))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ $message }}");
</script>
@endif
<script>
    ! function(t, e) {
        var o, n, p, r;
        e.__SV || (window.posthog = e, e._i = [], e.init = function(i, s, a) {
            function g(t, e) {
                var o = e.split(".");
                2 == o.length && (t = t[o[0]], e = o[1]), t[e] = function() {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            }(p = t.createElement("script")).type = "text/javascript", p.async = !0, p.src = s.api_host + "/static/array.js", (r = t.getElementsByTagName("script")[0]).parentNode.insertBefore(p, r);
            var u = e;
            for (void 0 !== a ? u = e[a] = [] : a = "posthog", u.people = u.people || [], u.toString = function(t) {
                    var e = "posthog";
                    return "posthog" !== a && (e += "." + a), t || (e += " (stub)"), e
                }, u.people.toString = function() {
                    return u.toString(1) + ".people (stub)"
                }, o = "capture identify alias people.set people.set_once set_config register register_once unregister opt_out_capturing has_opted_out_capturing opt_in_capturing reset isFeatureEnabled onFeatureFlags getFeatureFlag getFeatureFlagPayload reloadFeatureFlags group updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures getActiveMatchingSurveys getSurveys".split(" "), n = 0; n < o.length; n++) g(u, o[n]);
            e._i.push([i, s, a])
        }, e.__SV = 1)
    }(document, window.posthog || []);
    posthog.init('phc_4Jo9mSectRb1hGxwr6S7spEXq7yI6rM9pZ70WdDxeMQ', {
        api_host: 'https://eu.posthog.com'
    })
</script>

</html>