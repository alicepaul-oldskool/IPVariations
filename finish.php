<?php
session_destroy();
unset($_SESSION['location']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<title>Finish Study</title>
</head>

<body>
<div id="Content">	
<div class"container">
<h3>Thank YOU!</h3>

<p>Congratulations!  You have successfully completed the Study.</p>

<p>Thank you for your participation.</p>
<div class="bold-font">**Would you like to receive a confirmation email to verify your participation for credit, if yes then fill out the form below and an email will be sent to you.</div><form name="form1" method="post" action="">
  <p>Please Enter your email address
  <input type="text" name="participant_email" id="participant_email">
    </p>
  <p>Enter Email Address Again 
    <input type="text" name="email-verify" id="email-verify">
    <br>
    <br>
    Confirmation Email
    <input type="submit" name="confirm_email" id="confirm_email" value="Submit">
  </p>
</form>
<p><br>
  <br>
</div>
</p>
</body>
</html>
