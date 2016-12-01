
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="12345"/>

	<meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
	<meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Open Graph -->
	<meta property="og:site_name" content="Auto Dealer HTML"/>
	<meta property="og:title" content="Single Blog Post" />
	<meta property="og:url" content="http://localhost/09_blog_single.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Reading Auto Services</title>
	<link rel="stylesheet" type="text/css" href="/assets/css1/style.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/style980.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/style800.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/style700.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/style600.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/style500.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/style400.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css1/jquery.fancybox-1.3.4.css" media="screen" />
	<!--[if IE]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="/assets/js1/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.bxslider.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.selectik.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.countdown.js"></script>
	<script type="text/javascript" src="/assets/js1/jquery.checkbox.js"></script>
	<script type="text/javascript" src="/assets/js1/js.js"></script>
</head>
<!--BEGIN HEADER-->
	
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				
				<div class="main_wrapper">
				
	
					<h1><strong>{{$car->brand}} {{$car->model}}</strong></h1>

					<div class="car_image_wrapper car_group">
						<div class="big_image">
							
							<a href="{{Storage::url($car->imagesss)}}"  class="car_group">
								<!-- <img src="" alt="" class="zoom"/> -->
								<img src="{{Storage::url($car->imagesss)}}"  alt=""/>
							</a>
								
							</a>
						</div>
						<div class="small_img">
						@foreach ($cars1 as $car1) 
							
							<a href="{{Storage::url($car1->url)}}" class="car_group">
								<img src="{{Storage::url($car1->url)}}" alt=""/>
							</a>
						
							@endforeach

						</div>
					</div>
					<div class="car_characteristics">
						<a href="#" class="print"></a>
						<div class="price">&pound; {{$car->price}} <span></span></div>
						<div class="clear"></div>
						<div class="features_table">
						<div class="line grey_area">
								<div class="left">Brand:</div>
								<div class="right">{{$car->brand}}</div>
							</div>
							<div class="line grey_area">
								<div class="left">Model:</div>
								<div class="right">{{$car->model}}</div>
							</div>
							<div class="line grey_area">
								<div class="left">Year:</div>
								<div class="right">{{$car->year}}</div>
							</div>
							<div class="line grey_area">
								<div class="left">Fuel:</div>
								<div class="right">{{$car->fueltype}}</div>
							</div>
							<div class="line grey_area">
								<div class="left">Milage:</div>
								<div class="right">{{$car->km}}</div>
							</div>
							<div class="line grey_area">
								<div class="left">Description:</div>
								<textarea  style="width:350px;height:100px" class="right"> {{$car->desc}}</textarea>
							</div>
						
						</div>
					
				</div>
					
	<!--EOF FOOTER-->
</html>
