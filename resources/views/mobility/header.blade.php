<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
     <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <link rel="icon" type="image/x-icon" href="{{ asset('index_assets/images/cardio-rescue-logo.webp') }}">
    <title>Cardio Rescue</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('logo.webp')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
				<div class="content-left-wrapper">
					<a href="{{ route('index') }}" id="logo">
						<img src="{{ asset('assets/frontend/images/md_rehab.png') }}" alt="Logo" width="100" height="65" style="border-radius: 50%" class="logo">
					</a>
					<div class="slider-container">
						<div class="slides">
							<img src="{{ asset('mobility_assets/doctors.gif') }}" alt="Assessment Test" class="img-fluid slide">
                            <img src="{{ asset('mobility_assets/ortho.gif') }}" alt="Assessment Test" class="img-fluid slide">
							<img src="{{ asset('mobility_assets/form.gif') }}" alt="Assessment Test" class="img-fluid slide">
							<img src="{{ asset('mobility_assets/muscle.gif') }}" alt="Assessment Test" class="img-fluid slide">

							<!-- Add more images as needed -->
						</div>
					</div>
					<div class="text-below-slider">
						<h2 class="assessText">ASSESSMENT TEST</h2>
						<p>CMSE TESTING, SMRT & ROBOTIC TREATMENT.</p>
						<div class="copy">© Cardio Rescue | 2024</div>
					</div>
				</div>
			</div>
	        <!-- /content-left -->
