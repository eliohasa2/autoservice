<?php
$fname=$_POST['fname'];
$fnumber=$_POST['fnumber'];
$date=$_POST['date'];
$time=$_POST['time'];

$to      = 'eliohasa15@gmail.com';
$subject = 'New Booking';
$message = 'New Booking From: '.$fname . '<br>'. 'Date: '. $date .' Time: '. $time.' <br>'. 'Phone Number: '. $fnumber;

// mail($to, $subject, $message);
echo "You Reservation is Booked <br>";

?>
<input type="button" name="" onclick="window.location='/'" value="Go Back">