
						<html>
    <head>
        <title>Make Reservation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Make a Reservation </h1>


                  <form id="contact-form" action="{{url('pages/sendMail')}}" method="POST" role="form">
	  {{ csrf_field() }}
    <div class="messages"></div>

    <div class="controls">

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
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Date *</label>
                              <input id="date" type="date" name="date" class="form-control" placeholder="Date" required="required"> 

                    <div class="help-block with-errors"></div>
                </div>
            </div>
             <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Date *</label>
                                                <input id="time" type="time" name="time" class="form-control" required="required" placeholder="Time">

                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
  <button type="submit" class="btn btn-primary">Submit</button>
                <input type="submit" class="btn btn-success btn-send" onclick="location.href='/';" required="required" value="Go Back">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
           </div>
        </div>
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
