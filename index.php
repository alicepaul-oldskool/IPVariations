<?php
/**
* @todo error handling form if user does not enter required fields
* @add to required form elements class="required"
*/
//clearing sessions and cookies
//sessions
session_start();
if (isset($_SESSION['location']))
{
	unset($_SESSION['location']);
}
//cookeies
 //Header("Cache-Control: must-revalidate");

 //$offset = 60 * 60 * 24 * 3;
 //$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 //Header($ExpStr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<link href="css/smoothness/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
.red-text {
	color: #F00;
	text-align: left;
	-webkit-transition: all 0s ease-in 5s;
	-moz-transition: all 0s ease-in 5s;
	-ms-transition: all 0s ease-in 5s;
	-o-transition: all 0s ease-in 5s;
	transition: all 0s ease-in 5s;
}
</style>
<script type="text/javascript">
   $(document).ready(function() {
   $("#new-user").validate();
   });
</script>
 
<script>
$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "1920:date"

		});
	});
    </script>
    <script>
    $(function(){
  
  $('#datepicker').datepicker({changeYear: true, changeMonth: true, yearRange: "1920:today"});
  $('#datepicker').change(function(){
var today = new Date(), 
      birthday_val = $("#datepicker").val().split('/'),
      birthday = new Date(birthday_val[2],birthday_val[0]-1,birthday_val[1]),
      todayYear = today.getFullYear(),
      todayMonth = today.getMonth(),
      todayDay = today.getDate(),
      birthdayYear = birthday.getFullYear(),
      birthdayMonth = birthday.getMonth(),
      birthdayDay = birthday.getDate(),
    yearDifference = (todayMonth == birthdayMonth && todayDay > birthdayDay) ? 
    todayYear - birthdayYear : (todayMonth > birthdayMonth) ? todayYear - birthdayYear : todayYear - birthdayYear-1;
if (yearDifference<18)
{
  
alert("Temp Error: Participant is too young: "+ yearDifference);

}
    else
    {
      alert("Temp Error:Age is valid:"+yearDifference);
    }
    

});
});
</script>

<title>Indexing Works of Art along Two Indicies</title>

</head>

<body>
<div class="container">

<div id="content"><h3>Title:</h3>
Indexing Works of Art along Two Indicies
<h3>Time Required:</h3>
The following experiment will take 20/25 minutes.<br>
<h3>Research Description:</h3>
     The researchers are interested in your personal perceptions of works of art. <br>
    You will be evaluating these wos of art along two different indicies.<br></p>
    <h3> Compensation:</h3>
    There is no monitary compensation for your participation. Students requiring participation credit will recieve a confirmation email to verify their participation.
    
  </h3>
  <br>
  <span class="bold_text"><br>
  </span><span class="red-text">IMPORTANT NOTES:<br>
  Your browser *should have its cache cleared on load this page.<br>
  BUT...
  <br>
  Please Open a New Browser Window for Each Test.<br>
  Please make sure your cookies are enabled and cleared from your browser Before Beginning
  <br>
  <br>
  <br>
  <br>
  </span>
  <div id="login">
</div>

</div>

</div>
<div class="footer">

<form id="new-user" action="informed_consent.php" method="post">

<label for="fname">
First Name</label>

<input name="fname" id="fname" type="text" size="20" maxlength="20" value="" onFocus="this.className='currentField'" onChange="this.clasName='changedField'">
<label for="lname">
Last Name</label>
<input name="lname" id="lname" type="text" size="20" maxlength="20" value=""  onFocus="this.className='currentField'" onChange="this.clasName='changedField'">
<label for="datepicker">
Date of Birth </label>
<input type="text" id="datepicker" id="datepicker" onFocus="this.className='currentField'" onChange="this.clasName='changedField'">

 <label for="male-gender">Male</label>

 <input type="radio" id="male-gender" name="gender" value="male" />

 <label for="female-gender">Female</label>

 <input type="radio" id="female-gender" name="gender" value="female" />
<br>
<br>
<br>

<div id="submit">
<input type="image" name="submit" id="next" class="transition" value="Start" src="assets/next_o.jpg" width="20" height="20"><sup> continue</sup></div>

</form>
    <!-- end .footer -->
    <br>
    

</div>
</body>

</html>