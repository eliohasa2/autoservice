
						<html>
    <head>
        <title>Reading Auto Services</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
<body class="landing">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=223343681330782";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="container">

            <div class="row">

                <div style="height: 40px;">
<table class="table table-striped" style="width:100%;float:left;" >
                            <thead ">
                                <tr  class="success" style="font-size: 15px;font-family: Times">
                                    
                                    <th  >Name</th>
                                    <th style="text-align:center" >Carwash Services Description</th>
                                    <th>Price Cars</th>
                                    <th>Price 4X4 MPVS</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success" style="font-family: Times;font-size: 13px">
                                    
                                    <td >BLUE SERVICE</td>
                                    <td >Clean Alloys; Wax Hand Dry; Tyre Dressing; Clean Windows Out.</td>
                                    <td >&pound;5.99</td>
                                    <td >&pound;8.99</td>
                                </tr>
                                <tr class="success" style="font-family: Times;font-size: 13px">
                                    
                                    <td >BLUE EXTRA</td>
                                    <td >Clean Alloys; Wax Hand Dry; Clean Wheels; Tyre Dressing; Clean Windows In & Out;Air Freshner.</td>
                                    <td >&pound;6.99</td>
                                    <td >&pound;9.99</td>
                                </tr>
                                <tr class="success" style="font-family: Times;font-size: 13px">
                                    
                                    <td >RED SERVICE</td>
                                    <td >Clean Alloys; Wax Hand Dry; Wipe Cills; Tyre Dressing; Windows In & Out; Polish and Clean Dashboard; Hoover Seats, Floor & Boot; Air Freshner.</td>
                                    <td >&pound;9.99</td>
                                    <td  >&pound;14.99</td>
                                </tr>
                                <tr class="success" style="font-family: Times;font-size: 13px">
                                    
                                    <td >SILVER SERVICE</td>
                                    <td >Wax Hand Dry; Wipe Wheels; Wipe Cills; Tyre Dressing; Windows In & Out; Polish and Clean Dashboard; Hoover Seats, Floor & Boot; Spray Polish; Air Freshner.</td>
                                    <td >&pound;14.99</td>
                                    <td >&pound;19.99</td>
                                </tr>

                                <tr class="success" style="font-size: 13px ;font-family: Times">
                                    
                                    <td>GOLD SERVICE</td>
                                    <td>Clean Alloys; Wax Hand Dry; Wipe Wheels; Wipe Cills; Tyre Dressing; Windows In & Out; Polish and Clean Dashboard; Hoover Seats, Floor & Boot; Spray Polish;Foam Clean Seats ;Air Freshner.</td>
                                    <td>&pound;19.99</td>
                                    <td>&pound;24.99</td>
                                </tr>
                                    <tr class="success"  style="font-size: 13px;font-family: Times">
                                    
                                    <td>FULL VALET</td>
                                    <td>Car FULLY Washed</td>
                                    <td>Starting From &pound;50</td>
                                    <td>Starting From &pound;50</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3"></td>
                                    
                                </tr>
                            </tfoot>
                        </table>

                   </div>

<div>
                    <article  ">
                <a href="#" ><img src="/images/ccwash.jpeg" style="width:100%;height: 60%" alt="" /></a>
                <div class="inner">
                    <header style="float:left">
                        <h2 style="font-size: 15px;font-family: Times;background-color: lightgray">CARWASH</h2>
                        <p style="font-size: 15px;font-family: Times;background-color: lightgray">READING AUTOS HAND CAR WASH provides the highest and most professional valeting services. Being very experienced in this industry we don't only have well experienced staff, but we use vehicle-friendly chemicals to valet the vehicles as well. </p>
                    </header>
                    
                </div>
            </article>
</div>
                  <form  style="width:100%;display:flex" id="contact-form" action="{{url('pages/sendMail')}}" method="POST" role="form">
	  {{ csrf_field() }}
    <div class="messages"></div>

    <div class="controls" >

         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Type *</label>
                    <input id="type" type="text" value="Full Vallet" name="type" class="form-control" placeholder="Please enter your vallet *" required="required" data-error="Field is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
       
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Full Name *</label>
                    <input id="fname" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Full Name is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
       
        </div>
        <div class="row">
          
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="fnumber" type="number" name="fnumber" class="form-control" placeholder="Please enter your phone number" required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
            <div class="row">
          
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Reg Plate</label>
                    <input id="fplate" type="text" name="fplate" class="form-control" placeholder="Please enter your reg plate" required="required">
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
  <button type="submit" class="btn btn-primary">Make Reservation</button>
                <input type="submit" class="btn btn-success btn-send" onclick="location.href='/';" required="required" value="Go Back">
            </div>
        </div>
        
    </div>


<div class="fb-comments" data-href="https://www.facebook.com/Reading-Auto-Services-1245963262140371/?fref=ts" data-width="650" data-numposts="5">

</div>
</form>

                </div>

            </div>
         

        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
