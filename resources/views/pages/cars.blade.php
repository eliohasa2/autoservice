<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reading Auto Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/assets3/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/assets3/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="/assets3/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/assets3/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/assets3/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/assets3/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets3/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/assets3/css/style.css">

	<!-- Modernizr JS -->
	<script src="/assets3/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	
	<div id="page">

	
	<div class="page-inner">


	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Brothers Cars Sales</h2>
					<a type="button" href="/"> Go Back </a>
					<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
				</div>
			</div>
			<div class="row">
			@foreach ($cars as $car)
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{Storage::url($car->imagesss)}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{Storage::url($car->imagesss)}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">	
							
							
							<p style="margin:0;text-align:left"><a href="/pages/details/{{$car->id}}">Brand: {{$car->brand}}</a></p>
							<p style="margin:0;text-align:left">Model: {{$car->model}}</a></p>
							<p style="margin:0;text-align:left">Description: {{$car->desc}}</p>
							<p style="margin:0;text-align:left">Year: {{$car->year}}</p>
							<p style="margin:0;text-align:left">Price: &pound;{{$car->price}}</p>
							<p style="margin:0;text-align:left">Miles: {{$car->km}}</p>
							<p style="margin:0;text-align:left">Fuel Type: {{$car->fueltype}}</p>	

						</div>
					</a>
				</div>
			@endforeach

			</div>
		</div>
	</div>
	

	

	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/assets3/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/assets3js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/assets3/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/assets3/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="/assets3/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/assets3/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="/assets3/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets3/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="/assets3/js/main.js"></script>

	</body>
</html>

