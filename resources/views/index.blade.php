<!DOCTYPE HTML>
<html>

<head>

    <title>M D Rehab </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/frontend/images/md_rehab.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="Resource-type" content="Document" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/smk-accordion.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/jquery.mmenu.all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css?v=2') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <meta name="facebook-domain-verification" content="kf438apfhgpg55f1dpzm0vnbvqz3ue" />

    <style>

    </style>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1147059522136756');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1147059522136756&ev=PageView&noscript=1" /></noscript>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10820085193"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10820085193');
    </script>

    <style type="text/css">
        .section_list li {
            line-height: 1.3
        }

        .progress_pic img {
            border-radius: 30px
        }

        .headerrightblk a:hover {
            color: #000
        }

        .headerrightblk .bookbtn {
            margin: 0 10px
        }

        .alert {
            color: green;
            font-size: 16px;
            text-align: center;
        }

        @media screen and (max-width:900px) {}


        .dots-container {
            display: inline-flex;
            margin-left: 10px;
        }

        .dot {
            width: 8px;
            height: 8px;
            margin: 0 2px;
            background-color: white;
            border-radius: 50%;
            opacity: 0;
            animation: blink 1.5s infinite both;
        }

        .dot:nth-child(1) {
            animation-delay: 0s;
        }

        .dot:nth-child(2) {
            animation-delay: 0.3s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes blink {

            0%,
            20%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }
    </style>

</head>

<body class="homepage">
    <div id="page" class="pagewrapper">
        <div class="body-wrapper">
            @if (Session::has('success'))
                <script>
                    alert("{{ Session::get('success') }}");
                </script>
            @endif

            <header>
                <div class="container flex-between">
                    <div class="logoblk">
                        {{-- <img src="{{ asset('assets/frontend/images/md_rehab.png') }}"
                            class="img-fluid" /> --}}
                    </div>
                    <div class="headerrightblk flex-between">
                        <div class="welcometext">Welcome to M D Rehab</div>

                        <a href="tel:+91 83558 73486" class="bookbtn telicon"><i
                                class="fi fi-rr-phone-call"></i><span>+91 83558 73486</span></a>

                        <!--<a href="tel:+918355873486" class="telicon"><i class="fi fi-rr-phone-call"></i></a>-->
                        <!--<a href="javascript:void(0);" class="mailicon"><i class="fi fi-rr-envelope"></i></a>-->
                        <a href="#menu" class="navicon"><i class="fi fi-rr-menu-burger"></i></a>
                    </div>
                </div>
                <div class="center-container">
                    <a href="#" class="bookbtnResponsive">TAKE FREE ONLINE ASSESSMENT</a>
                </div>
            </header>

            <nav id="menu">
                <ul>
                    <!--<li><a href="index.html">Home</a></li>-->
                    <li><a data-scroll-nav='0' href="#page" class="mm-close" aria-owns="page">Feel the Difference</a>
                    </li>
                    <li><a data-scroll-nav='1' href="#page" class="mm-close" aria-owns="page">Our Initial Approach</a>
                    </li>
                    <li><a data-scroll-nav='2' href="#page" class="mm-close" aria-owns="page">Patient Testimonials</a>
                    </li>
                    <li><a data-scroll-nav='3' href="#page" class="mm-close" aria-owns="page">Services</a></li>
                    <li><a data-scroll-nav='4' href="#page" class="mm-close" aria-owns="page">About M D Rehab</a>
                    </li>
                    <li><a data-scroll-nav='5' href="#page" class="mm-close" aria-owns="page">Why Us</a></li>
                    <li><a data-scroll-nav='6' href="#page" class="mm-close" aria-owns="page">Reach Us</a></li>
                </ul>
            </nav>



            <div class="bodywrapper">
                <section>
                    <div class="banner-wrapp">
                        <div class="banner-slider">

                            <div>
                                <div class="banner-blk banner1">
                                    <img src="{{ asset('assets/frontend/images/banner/banner2.webp') }}" alt=""
                                        class="img-res">

                                    <div class="banner-text">
                                        <div class="banner-ttl">
                                            AI based <br />
                                            <span>Advanced Robotic Physiotherapy Treatment</span>
                                        </div>
                                        <a href="#" class="bookbtn">FREE ONLINE
                                            ASSESSMENT</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="banner-blk banner1">
                                    <img src="{{ asset('assets/frontend/images/banner/banner.webp') }}"
                                        alt="" class="img-res">

                                    <div class="banner-text">
                                        <div class="banner-ttl">Say bye to your pain with,
                                            <br><span><span style="color: #0c1fff">M D</span> <span
                                                    style="color: #e30f0f">Rehab</span></span>
                                        </div>
                                        <div class="banner-para">5000+ happy patients, connect with us now to book your
                                            appointment. </div>

                                        <a href="#" class="bookbtn">FREE ONLINE
                                            ASSESSMENT</a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="banner-blk banner1">
                                    <img src="{{ asset('assets/frontend/images/banner/banner4.jpg') }}"
                                        alt="" class="img-res">

                                    <div class="banner-text">
                                        <div class="banner-ttl">Say bye to your pain with,
                                            <br><span>CMSE TEST</span>
                                        </div>
                                        <div class="banner-para">Achieve 95% Recovery with Our Specialized
                                            Physiotherapy </div>

                                        <a href="#" class="bookbtn">FREE ONLINE
                                            ASSESSMENT</a>
                                    </div>
                                </div>
                            </div>

                            {{-- <div>
                                <div class="banner-blk banner1">
                                    <img src="{{ asset('assets/frontend/images/images/banner/banner3.webp') }}"
                                        alt="" class="img-res">

                                    <div class="banner-text">
                                        <div class="banner-ttl"><span>Advanced Technology</span> <br> Paired with
                                            <span>Expert Doctors</span> <br> For Your relief
                                        </div>
                                        <a href="#enquire" class="bookbtn">Book Your Appointment</a>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                        <a href="#section2" class="bannerarrow"><i class="fi fi-rs-arrow-down"></i></a>
                    </div>
                </section>

                <section id="section2" data-scroll-index='0'>
                    <div class="container">
                        <div class="section-wrapp">
                            <div class="wow fadeInUp">
                                <div class="small-ttl">Feel the Difference from Day One with Cardiorescue.</div>
                                <div class="subheading">Empowering Hearts, Enriching Lives – Since 2017.</div>
                            </div>

                            <div class="coutnerwrap" id="counter">
                                <div class="counterinnerwrap">
                                    <div class="dflex">
                                        <div class="icon">
                                            <img src="{{ asset('assets/frontend/images/icon1.webp') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="icontxt">
                                            <div class="counterblk">
                                                <span class="counter-value" data-count="96">0</span> %
                                            </div>
                                            <div class="counter-innertxt">Success Rate</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="counterinnerwrap">
                                    <div class="dflex">
                                        <div class="icon">
                                            <img src="{{ asset('assets/frontend/images/icon2.webp') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="icontxt">
                                            <div class="counterblk">
                                                <span class="counter-value" data-count="6500">0</span> +
                                            </div>
                                            <div class="counter-innertxt">Patients</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="counterinnerwrap" data-aos="zoom-in" data-aos-easing="linear">
                                    <div class="dflex">
                                        <div class="icon">
                                            <img src="{{ asset('assets/frontend/images/icon3.webp') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="icontxt">
                                            <div class="counterblk">
                                                <span class="counter-value" data-count="50">0</span> <span
                                                    class="bntxt"> +</span>
                                            </div>
                                            <div class="counter-innertxt">Doctors</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ourservice_wrapper" data-scroll-index='1'>
                    <div class="container">
                        <div class="section-wrapp ourservice_blk">
                            <div class="small-ttl text-center">Our Initial Approach</div>

                            <div class="progresstreatment_blk ">
                                <div class="progrees_info">
                                    <div class="small-ttl">Average treatment progression period for most of the
                                        patients</div>
                                    <div class="progressbar_blk">
                                        <div class="progressitem">
                                            <div class="day_txt">Day 1</div>
                                            <div class="progressbar_item">
                                                <div class="baritem width90"></div>
                                                <div class="bar_percent">10% To 15%</div>
                                                <div class="bar_txt">Result in Pain & Mobility</div>
                                            </div>
                                        </div>
                                        <div class="progressitem">
                                            <div class="day_txt">Day 5</div>
                                            <div class="progressbar_item">
                                                <div class="baritem width80"></div>
                                                <div class="bar_percent">25% To 30%</div>
                                                <div class="bar_txt">Result in Pain & Mobility</div>
                                            </div>
                                        </div>
                                        <div class="progressitem">
                                            <div class="day_txt">Day 10</div>
                                            <div class="progressbar_item">
                                                <div class="baritem width50"></div>
                                                <div class="bar_percent">50% To 60%</div>
                                                <div class="bar_txt">Result in Pain & Mobility</div>
                                            </div>
                                        </div>
                                        <div class="progressitem">
                                            <div class="day_txt">Day 15</div>
                                            <div class="progressbar_item">
                                                <div class="baritem width30"></div>
                                                <div class="bar_percent">70% To 80%</div>
                                                <div class="bar_txt">Result in Pain & Mobility</div>
                                            </div>
                                        </div>
                                        {{-- <div class="progressitem">
                                            <div class="day_txt">Day 30</div>
                                            <div class="progressbar_item">
                                                <div class="baritem width10"></div>
                                                <div class="bar_percent">100%</div>
                                                <div class="bar_txt"> Pain & Mobility Restriction</div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="progress_pic">
                                    <div class="small-ttl">Average 92-95% Patients see result</div>
                                    <img src="{{ asset('assets/frontend/images/Mobility.webp') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class=" approachslider marTop40">
                                <div>
                                    <div class="service_item">
                                        <div class="service_pic">
                                            <img src="{{ asset('assets/frontend/images/Advanced-Assessment.webp') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="service_info">
                                            <div class="corcerns-ttl">Advanced Assessment</div>
                                            <div class="section_list">
                                                <ul>
                                                    <li>Assessing range of motion, muscle strength and neurological
                                                        exams.</li>
                                                    <li>Evaluating joint stability and pinpointing issues accurately.
                                                    </li>
                                                    <li>AssessingAssessing factors such as range of motion and sensation
                                                        to diagnose the problem's extent and cause.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service_item">
                                        <div class="service_pic">
                                            <img src="{{ asset('assets/frontend/images/Muscle-Testing.webp') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="service_info">
                                            <div class="corcerns-ttl">Muscle Testing</div>
                                            <div class="section_list">
                                                <ul>
                                                    <li>CMSE testing done to offer objective measures of muscle weakness
                                                        and grades muscle strength.</li>
                                                    <li>Grading muscle strength, helps facilitating personalized
                                                        treatment plans for accelerated progress.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service_item">
                                        <div class="service_pic">
                                            <img src="{{ asset('assets/frontend/images/Robotic.webp') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <div class="service_info">
                                            <div class="corcerns-ttl">Robotic and manual treatment (SMRT)</div>
                                            <div class="section_list">
                                                <ul>
                                                    <li>SMRT and Robotics treatment targets specific disorders such as
                                                        paralysis, knee issues, etc.</li>
                                                    <li>Tailored rehabilitation programs for these are facilitated by
                                                        SMRT and Robotics treatments.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="button-container-assing">
                            <a href="#" class="assingButton">FREE ONLINE ASSESSMENT</a>
                        </div>
                    </div>

                </section>

                <section class="sec6" data-scroll-index='2'>
                    <div class="container">

                        <div class="wow fadeInUp test">
                            <div class="small-ttl text-center whitetxt">Patient Testimonials</div>
                        </div>

                        <div class="testimonial-slider">

                            <div>
                                <div class="testimg wow zoomIn">
                                    <img src="{{ asset('assets/frontend/images/testimg10.webp?v=1') }}"
                                        class="img-fluid">
                                    <a href="javascript:void(0);" data-fancybox
                                        data-src="https://www.youtube.com/watch?v=3u7e-4eA5pc" class="playicon"><img
                                            src="{{ asset('assets/frontend/images/playicon.webp') }}"
                                            class="img-fluid"></a>
                                </div>
                            </div>
                            <div>
                                <div class="testimg wow zoomIn">
                                    <img src="{{ asset('assets/frontend/images/testimg1.webp?v=1') }}"
                                        class="img-fluid">
                                    <a href="javascript:void(0);" data-fancybox
                                        data-src="https://youtu.be/QuUecbQ8SRY" class="playicon"><img
                                            src="{{ asset('assets/frontend/images/playicon.webp') }}"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div>
                                <div class="testimg wow zoomIn">
                                    <img src="{{ asset('assets/frontend/images/testimg6.webp?v=1') }}"
                                        class="img-fluid">
                                    <a href="javascript:void(0);" data-fancybox data-src="video/testimonial6.mp4"
                                        class="playicon"><img
                                            src="{{ asset('assets/frontend/images/playicon.webp') }}"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div>
                                <div class="testimg wow zoomIn">
                                    <img src="{{ asset('assets/frontend/images/testimg7.webp?v=1') }}"
                                        class="img-fluid">
                                    <a href="javascript:void(0);" data-fancybox data-src="video/testimonial7.mp4"
                                        class="playicon"><img
                                            src="{{ asset('assets/frontend/images/playicon.webp') }}"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div>
                                <div class="testimg wow zoomIn">
                                    <img src="{{ asset('assets/frontend/images/testimg8.webp') }}" class="img-fluid">
                                    <a href="javascript:void(0);" data-fancybox data-src="video/testimonial8.mp4"
                                        class="playicon"><img
                                            src="{{ asset('assets/frontend/images/playicon.webp') }}"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div>
                                <div class="testimg wow zoomIn">
                                    <img src="{{ asset('assets/frontend/images/testimg9.webp') }}" class="img-fluid">
                                    <a href="javascript:void(0);" data-fancybox data-src="video/testimonial9.mp4"
                                        class="playicon"><img
                                            src="{{ asset('assets/frontend/images/playicon.webp') }}"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="section" data-scroll-index='3'>
                    <div class="container">
                        <div class="section-wrapp sec3">
                            <div class="tab">
                                <div class="tab__list maintab">
                                    <div class="small-ttl marTop40">Neurorescue</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item tab">
                                        <div class="tab__list painblk">
                                            <div class="tab__item">Paralysis</div>
                                            <div class="tab__item">Parkinson</div>
                                            <div class="tab__item">Spinal Cord Injuries</div>
                                        </div>
                                        <div class="tab__content">
                                            <div class="tab__content-item">
                                                <p class="text-center">Paralysis is weakness or inability to move parts
                                                    of the body. It happens when nerves carrying messages from the brain
                                                    are damaged. This damage can be temporary or permanent.</p>
                                                <div class="knee-injury">
                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Hemiplegia.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Hemiplegia</div>
                                                                <p>Hemiplegia is paralysis on one side of the body(left
                                                                    or right). It results from damage in the brain,
                                                                    often from a stroke, that disrupts communication
                                                                    with muscles on a particular side. </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>

                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Paraplegia.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Paraplegia</div>
                                                                <p>Paraplegia is paralysis affecting the lower half of
                                                                    the body. This typically stems from injury or
                                                                    disease damaging the spinal cord and interrupting
                                                                    signals to the legs and torso.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Quadriplegia.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Quadriplegia</div>
                                                                <p>Quadriplegia is paralysis in all four limbs and
                                                                    torso. It's caused by damage to the spinal cord in
                                                                    the neck, disrupting nerve signals to the body from
                                                                    the brain.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="tab__content-item">
                                                <p class="text-center">Spinal cord injuries (SCI) occur when damage to
                                                    the spinal cord disrupts the communication between the brain and the
                                                    body. This can lead to paralysis, weakness, and loss of sensation in
                                                    some or all parts of the body below the level of the injury.</p>
                                                <div class="knee-injury">

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Tremors.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Tremors</div>
                                                                <p>Parkinson tremors are involuntary rhythmic shaking in
                                                                    the body, often in the hands. </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Balance.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Balance </div>
                                                                <p>Parkinson's disease can cause postural instability,
                                                                    meaning difficulty maintaining balance. </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Tightness.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Tightness </div>
                                                                <p>Parkinson's disease brings on muscle stiffness, often
                                                                    described as tightness. This rigidity makes movement
                                                                    difficult and feels like a constant tension in the
                                                                    muscles. </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Slow_Movements.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Slow Movements </div>
                                                                <p>Parkinson's disease leads to bradykinesia, a term
                                                                    used for describing the slowness of movement. </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab__content-item">
                                                <p class="text-center">Spinal cord injuries (SCI) occur when damage to
                                                    the spinal cord disrupts the communication between the brain and the
                                                    body. This can lead to paralysis, weakness, and loss of sensation in
                                                    some or all parts of the body below the level of the injury.</p>
                                                <div class="knee-injury">
                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Injury_Rehab_Services.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Injury Rehab Services</div>
                                                                <p>Spinal cord injury rehabilitation is a comprehensive
                                                                    program designed to help people with SCI regain as
                                                                    much function and independence as possible.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="section-wrapp sec3">
                            <div class="tab">
                                <div class="tab__list maintab">
                                    <div class="small-ttl marTop40">Orthorescue</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item tab">
                                        <div class="tab__list painblk">
                                            <div class="tab__item">Knee Pain</div>
                                            <div class="tab__item">Spinal Cord</div>
                                            <div class="tab__item">Hip Related Problems</div>
                                            <div class="tab__item">Shoulder Pain</div>
                                        </div>
                                        <div class="tab__content">
                                            <div class="tab__content-item">
                                                <div class="knee-injury">
                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/1.png') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Pain & Swelling</div>
                                                                <p>Knee swelling, often accompanies knee pain. It arises
                                                                    from injury, overuse, or arthritis, limiting
                                                                    mobility.</p>
                                                            </div>

                                                            <div class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></div>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Arthritis.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Arthritis of the Knee</div>
                                                                <p>Knee osteoarthritis is the most common form of
                                                                    arthritis affecting the knee. It causes pain,
                                                                    stiffness, and swelling, making movement difficult.
                                                                </p>
                                                            </div>


                                                            <div class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></div>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/3.png') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Osteoporosis</div>
                                                                <p>Osteoporosis weakens bones, increasing fracture risk.
                                                                    It often progresses silently, with fractures being
                                                                    the first sign.</p>
                                                            </div>

                                                            <div class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></div>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/4.png') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Meniscus Ligament Tear</div>
                                                                <p>Meniscus tear, a knee cartilage injury, causes pain,
                                                                    swelling, and clicking. It can limit bending or
                                                                    straightening the knee.</p>
                                                            </div>


                                                            <div class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab__content-item">
                                                <div class="knee-injury">

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Cervical_Pain.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Cervical Pain</div>
                                                                <p>Cervical pain, or neck pain, is discomfort in the
                                                                    upper spine. It often stems from muscle strain, poor
                                                                    posture, or injury, causing stiffness and limiting
                                                                    movement. </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Lumbar_Pain.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Lumbar Pain</div>
                                                                <p>Lumbar pain is lower back discomfort. It's a common
                                                                    issue caused by strain, overuse, or disc problems.
                                                                    It can cause tightness, aches, and limit movement.
                                                                </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>

                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Sciatica.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Sciatica</div>
                                                                <p>Sciatica is leg pain radiating from the lower back.
                                                                    It arises from irritated nerves, causing burning
                                                                    pain, numbness, or weakness that runs down one leg.
                                                                </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Slip_Disc.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Slip Disc</div>
                                                                <p>A slipped disc, also called a herniated disc, occurs
                                                                    when the soft cushion between vertebrae bulges. This
                                                                    can press on nerves, causing pain, numbness, or
                                                                    weakness.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Disc_Bulge.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Disc Bulge</div>
                                                                <p>A disc bulge happens when the soft center of a spinal
                                                                    disc pushes outward. This bulge can press on nerves,
                                                                    causing immense pain, numbness, or weakness.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Upper_Lower_Back_Pain.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Upper/Lower Back Pain</div>
                                                                <p>Discomfort between the base of your neck and lower
                                                                    ribcage, often caused by posture, strain, or injury
                                                                    and aches or stiffness in the lower spine.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Neck_Pain.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Neck Pain</div>
                                                                <p>Neck pain often caused by muscle strain, poor
                                                                    posture, or injury. It can lead to stiffness and
                                                                    limit moving your neck freely.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab__content-item">
                                                <div class="knee-injury">
                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Hip_Rehabilitation.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Hip Rehabilitation</div>
                                                                <p>Hip rehab helps restore function after hip injury or
                                                                    surgery. It uses exercises to improve strength,
                                                                    flexibility, and movement in the hip joint, easing
                                                                    pain and improving mobility.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>

                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/hip.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Hip Arthritis</div>
                                                                <p>Hip osteoarthritis wears down cartilage in the hip
                                                                    joint. This breakdown leads to pain, stiffness, and
                                                                    difficulty moving, limiting your ability to walk or
                                                                    bend.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Avascular_Necrosis.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Avascular Necrosis</div>
                                                                <p>Avascular necrosis, also called bone death, occurs
                                                                    when blood flow cuts off to a bone, typically the
                                                                    hip. Weakening of the bone, pain and potentially
                                                                    collapse of the joint.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="tab__content-item">
                                                <p class="text-center">Shoulder pain can arise from various injuries,
                                                    overuse, or arthritis. It often manifests as aching, limiting
                                                    mobility and making everyday activities difficult.</p>
                                                <div class="knee-injury">

                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Sprain_and_Strain.web') }}p"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Sprain and Strain</div>
                                                                <p>Shoulder sprain refers to a tear in the ligaments
                                                                    surrounding the joint, while a strain indicates a
                                                                    tear in the muscles or tendons within the shoulder.
                                                                </p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>


                                                    <div class="width23">
                                                        <div class="corcerns-blk">
                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Frozen_Shoulder.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Frozen Shoulder</div>
                                                                <p>Frozen Shoulder restricts shoulder movement and if
                                                                    not treated correctly keeps restricting movement and
                                                                    causes immense pain.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Tendinitis.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Tendinitis</div>
                                                                <p>Tendinitis is inflammation of a tendon, the tissue
                                                                    connecting muscle to bone. It causes pain and
                                                                    tenderness near the affected joint.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="width23">
                                                        <div class="corcerns-blk">

                                                            <div class="corcerns-img">
                                                                <img src="{{ asset('assets/frontend/images/Bursitis.webp') }}"
                                                                    class="img-res" />
                                                            </div>
                                                            <div class="textwrapp">
                                                                <div class="corcerns-ttl">Bursitis</div>
                                                                <p>Shoulder bursitis specifically refers to inflammation
                                                                    of a bursa in the shoulder joint. The condition
                                                                    causes pain, tenderness, and limited movement in the
                                                                    shoulder.</p>
                                                            </div>

                                                            <a href="javascript:void(0);" class="services_arrow"><i
                                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


                <section data-scroll-index='4'>
                    <div class="container">
                        <div class="section-wrapp sec4">
                            <div class="wow fadeInUp sec4blk">
                                <div class="small-ttl whitetxt">About Cardiorescue.</div>
                                <div class="subheading whitetxt">From Relief to Recovery, The Cardiorescue Promise.
                                </div>

                                <p class="whitetxt">Cardiorescue offers leading solutions to all your problems since
                                    2017 we have served over 5000+ happy clients with visible differences in the 1st
                                    visit itself and results showing up in 3 weeks. Our expertise lies not in just
                                    providing relief but in making a full fledged recovery.</p>


                                <!--                        <a href="javascript:void(0);" class="bookbtn">Read More</a>-->
                            </div>
                            <div class="cardiorescue wow slideInRight">Cardiorescue Has Been a Trusted Recovery. </div>
                        </div>
                    </div>
                </section>
                <section data-scroll-index='5'>
                    <div class="container">
                        <div class="section-wrapp sec5">
                            <div class="whyusimg wow slideInLeft"><img
                                    src="{{ asset('assets/frontend/images/whyusimg.webp') }}" class="img-fluid">
                            </div>
                            <div class="whyustxt wow slideInRight">
                                <div class="small-ttl">Why Us</div>
                                <p><b>At Cardiorescue, we understand the challenges of living with paralysis especially
                                        and the various ailments : </b>Apart from offering a 90-95% positive result we
                                    make sure to provide:</p>
                                <ul class="number_bullets">
                                    <li><b>Advanced Techniques:</b> Our three-pronged approach utilizes CMSE testing,
                                        SMRT, and robotics to deliver the most effective treatment possible.</li>
                                    <li><b>Personalized Care:</b> Our skilled doctors across Mumbai collaborate with you
                                        to create a personalized plan that focuses on improving your mobility and
                                        well-being</li>
                                    <li><b>Proven Results:</b> Many of our patients experience significant improvements
                                        in pain management and mobility within just one month.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section data-scroll-index='6' id="enquire">
                    <div class="container">
                        <div class="section-wrapp wow zoomIn" style="margin-bottom:0">

                            <div class="wow fadeInUp test">
                                <div class="small-ttl text-center">Reach Out Today, We're Here to Help</div>
                                <div class="subheading  text-center">Connecting with Us is Easy - Let's Start the
                                    Conversation!</div>
                            </div>
                            <form class="dflex-center formblk" method="post" action="{{ route('info.store') }}"
                                id="appointmentForm">
                                @csrf
                                <div class="input_width">
                                    <input type="text" name="name" placeholder="Name*" required />
                                </div>

                                <div class="input_width">
                                    <input type="email" name="email" placeholder="Email ID*" required />
                                </div>

                                <div class="input_width">
                                    <input type="tel" name="contact" placeholder="Phone Number*" maxlength="10"
                                        pattern="[789][0-9]{9}" required />
                                </div>

                                <div class="input_width">
                                    <input type="text" name="pincode" placeholder="PIN Code*" required />
                                </div>

                                <div class="input_width message">
                                    <input type="text" name="describe_issue" placeholder="Describe Your Issue"
                                        required />
                                </div>

                                <div class="submit_button_wrap">
                                    <button type="submit" class="bookbtn" id="submitButton">SEND</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </section>

            </div>

            <footer>
                <div class="container common-padding">
                    <div class="social-wrapp">
                        <div class="social-left">
                            <!-- <ul class="footermenu">
                            <li><a href="javascript:void(0)">terms & Conditions </a></li>
                            <li><a href="javascript:void(0)">Privacy policy</a></li>
                            <li><a href="javascript:void(0)">disclaimer</a></li>
                        </ul> -->
                            <div class="copyright-text">Copyright 2024 Cadrio rescue. All Rights reserved</div>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="back-to-top">Back to Top</a>
    </div>
    <!-- Counter Script -->
    <script src="{{ asset('assets/frontend/js/jquery-1.11.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.mmenu.all.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#btnSubmit").on("click", function() {
                var isEmpty = false;
                jQuery("div.input_width input").each(function() {
                    // Check if the value is empty or whitespace
                    if ($.trim($(this).val()) === '') {
                        isEmpty = true;
                        return false;
                    }
                });

                if (!isEmpty) {
                    jQuery("#loading_gif").css("display", "inline-block");
                }
            });
        });
    </script>
    <script>
        $(function() {
            $("nav#menu").mmenu({
                offCanvas: {
                    position: "right",
                    zposition: "front",
                    moveBackground: "front",
                },
                navbars: [{
                    position: 'top',
                    content: [
                        'prev',
                        'title',
                        'close'
                    ]
                }, ],
                onClick: {
                    close: true,
                    preventDefault: true,
                }

            });
        });
    </script>

    <script type="text/javascript" src="{{ asset('assets/frontend/js/scrollIt.min.js') }}"></script>
    <script>
        $(function() {

            $.scrollIt({
                upKey: 38,
                downKey: 40,
                easing: 'linear',
                scrollTime: 650,
                activeClass: 'active',
                onPageChange: null,
                topOffset: 0,
            });


        });
    </script>

    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/smk-accordion.js') }}"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
    </script>

    <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.banner-slider').slick({
                dots: true,
                autoplay: true,
                adaptiveHeight: true,
            });


            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: true,
                focusOnSelect: true
            });

            $('.knee-injury-slider').slick({
                dots: false,
                autoplay: false,
                autoplaySpeed: 2500,
                slidesToShow: 4,
                slidesToScroll: 1,

                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 801,
                        settings: {
                            slidesToShow: 2,

                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,

                        }
                    }

                ]
            });


            $('.approachslider').slick({
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 2500,
                slidesToShow: 3,
                slidesToScroll: 1,

                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,

                        }
                    }

                ]
            });


            $('.testimonial-slider').slick({
                dots: false,
                autoplaySpeed: 2500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,

                responsive: [{
                        breakpoint: 801,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 601,
                        settings: {
                            slidesToShow: 1,

                        }
                    }


                ]


            });



            /* $('ul.tabs li').click(function() {
                 var tab_id = $(this).attr('data-tab');

                 $('ul.tabs li').removeClass('current');
                 $('.tab-content').removeClass('current');

                 $(this).addClass('current');
                 $("#" + tab_id).addClass('current');
             });*/



            $('.questans-item').hover(function() {
                var index = $(this).index();
                $('.questans-item').removeClass('activeitem');
                $('.answer-item').removeClass('activeitem');
                $(this).addClass('activeitem');
                $('.answer-item').eq(index).addClass('activeitem');
            });

            $(".accordion_example").smk_Accordion({
                showIcon: true, //boolean
                animation: true, //boolean
                closeAble: false, //boolean
                slideSpeed: 200 //integer, miliseconds
            });

            $(function() {
                $('.readmorebtn').click(function() {
                    $('.targetDiv').hide();
                    $('#div' + $(this).attr('target')).fadeIn('slow');
                    $('.overlay').addClass('show');
                    $('body').addClass('overscroll');
                    $('.closebtn').fadeIn('slow');
                });
                $('.closebtn').click(function() {
                    $('.targetDiv').fadeOut('slow');
                    $('.overlay').removeClass('show');
                    $('body').removeClass('overscroll');
                });
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });
            $('.back-to-top').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });

            jQuery(document).ready(function() {
                $('.search-icon').click(function() {
                    $('.search-blkfull').fadeToggle(1000);
                });
                $('.search-closed').click(function() {
                    $('.search-blkfull').fadeOut(1000);
                });

            });

        });
    </script>


    <script type="text/javascript">
        // reference from https://www.digitalocean.com/community/tutorials/js-tabs

        const tabs = document.querySelectorAll(".tab");

        function tabify(tab) {
            const tabList = tab.querySelector(".tab__list");

            if (tabList) {
                const tabItems = [...tabList.children];
                const tabContent = tab.querySelector(".tab__content");
                const tabContentItems = [...tabContent.children];
                let tabIndex = 0;

                tabIndex = tabItems.findIndex((item, index) => {
                    return [...item.classList].indexOf("is--active") > -1;
                });

                tabIndex > -1 ? (tabIndex = tabIndex) : (tabIndex = 0);

                function setTab(index) {
                    tabItems.forEach((x, index) => x.classList.remove("is--active"));
                    tabContentItems.forEach((x, index) => x.classList.remove("is--active"));

                    tabItems[index].classList.add("is--active");
                    tabContentItems[index].classList.add("is--active");
                }

                tabItems.forEach((x, index) =>
                    x.addEventListener("click", () => setTab(index))
                );
                setTab(tabIndex);
                tab.querySelectorAll(".tab").forEach((tabContent) => tabify(tabContent));
            }
        }

        tabs.forEach(tabify);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox]', {
            //
        });
    </script>

    <script>
        //Counter Js
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
                });
                a = 1;
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('appointmentForm');
            const submitButton = document.getElementById('submitButton');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                submitButton.disabled = true;
                submitButton.textContent = 'SENDING';
                const dotsContainer = document.createElement('div');
                dotsContainer.className = 'dots-container';
                for (let i = 0; i < 3; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'dot';
                    dotsContainer.appendChild(dot);
                }
                submitButton.appendChild(dotsContainer);
                form.submit();
            });
        });
    </script>
</body>

</html>
