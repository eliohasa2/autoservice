<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Reading Auto Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/assets2/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Our Services</h1>
					
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Take a look</a>
					<a href="/" class="button style2 scrolly-middle">Go Back</a>

				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>BROTHERS CARS SALES</h2>
				</header>
				<p>
					A car dealership based in Reading that is specialized in new and second hand vehicles.
We guarantee you will get the best services: we fully check the second hand cars in order to make sure that the customer invests on a product with very good conditions. 
We aim to make our customers happy and satisfied! High quality service and real test drive; we provid test drives to assure the customers are purchasing the best product.  
We always work hard to ensure we offer value for money for our consumers!


				</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Scroll Down</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="/images/mechanics.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>READING AUTO SERVICES MECHANICS</h2>
					</header>
					<p>Our mechanic area offers professional mechanical work done to your car. We are specialized in VOLKSWAGEN, AUDI, BMW, MERCEDES, SKODA, and SEAT. Starting from £50, we guarantee the best and most reliable service to your car.</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="/images/tyress.png" style="width:100%" alt="" /></a>
				<div class="inner">
					<header>
						<h2>TIRES</h2>
					</header>
					<p>We provide brand new and second hand tires. We sell the top branded tires, such as MICHELIN, PIRELLI, etc. We make sure that we provide the best conditions of second hand tires at the best price range, prices you can not compare with anywhere in Reading!</p>
				</div>
			</article>

			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="/images/bodypaint.jpg" style="width:100%" alt="" /></a>
				<div class="inner">
					<header>
						<h2>BODY PAINT WORK</h2>
					</header>
					<p>We provide professional spray body work, dealing with any dents or scratches on your vehicle, working with insurances to deal with accident repairs.</p>
				</div>
			</article>

		


<article class="container box style1 left" style="width: 55%">
					  <form   id="contact-form" action="{{url('pages/sendMail')}}" method="POST" role="form">
	  {{ csrf_field() }}
    <div class="messages"></div>

    <div class="controls" >

         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Type *</label>
                    <input id="type" type="text" value="Full Service" name="type" class="form-control" placeholder="Enter vallet *" required="required" data-error="Field is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
       
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Full Name *</label>
                    <input id="fname" type="text" name="fname" class="form-control" placeholder="Full Name *" required="required" data-error="Full Name is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
       
        </div>
        <div class="row">
          
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="fnumber" type="number" name="fnumber" class="form-control" placeholder="Phone number" required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
          
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Reg Plate</label>
                    <input id="fplate" type="text" name="fplate" class="form-control" placeholder="Reg Plate" required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Date *</label>
                              <input id="date" type="date" name="date" class="form-control" placeholder="Date" required="required"> 

                    <div class="help-block with-errors"></div>
                </div>
            </div>
             <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Time *</label>
                                                <input id="time" type="time" name="time" class="form-control" required="required" placeholder="Time">

                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
  <button type="submit" class="btn btn-primary" >Make Reservation</button>
                      <button type="button" href="/">Go Back</button>

            </div>
        </div>
        
    </div>


<div class="fb-comments" data-href="https://www.facebook.com/Reading-Auto-Services-1245963262140371/?fref=ts" data-width="650" data-numposts="5">

</div>
</form>
</article>
				</footer>
		<!-- Portfolio -->
			

		<!-- Contact -->
			

		<!-- Generic -->
		
		
						
					</div>

				</section>
				<section>
			
				</section> 
				
			</article>
		


		<!-- Scripts -->
			<script src="/assets2/js/jquery.min.js"></script>
			<script src="/assets2/js/jquery.scrolly.min.js"></script>
			<script src="/assets2/js/jquery.poptrox.min.js"></script>
			<script src="/assets2/js/skel.min.js"></script>
			<script src="/assets2/js/util.js"></script>
			<!--[if lte I/E 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/assets2/js/main.js"></script>

	</body>
</html>