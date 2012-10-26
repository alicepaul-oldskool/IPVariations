<?php 
session_start();
if (isset($_SESSION['location']))
{
	unset($_SESSION['location']);
}
$_SESSION['location']='training';
?>
<!doctype html>
<html>
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<link href="css/smoothness/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title></title>
<link href="css/survey.css" rel="stylesheet" type="text/css" media="all"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">
    $(document).ready(function() {
            $("#one").css("display", "none");
            $("#one").show(3000);
			
			$('a').click(function(e) {
		
			$("#two").css("display", "none");
            $("#two").show(3000);
    
		});

	});
</script>
</head>

<body>
<div id="content">
<div class="container">
<!--<a href="ac_2.php" class="transition">LINK</a>-->
  <header><span class="bold_text">Instructions</span>: Abstractness vs. Concreteness 
    <!-- en<d .sidebar1 --><br>

   </header>
<br>
<br>
<br>

  	<div>In the following module, you will see a series of images. <br>
<br>
<br>
<br>
</div>
    <div>
Your task is to rate each image on how abstract or how concrete you precieve each
image to be.<br>
<br>
<br>
<div>
The scale ranges from <span class="bold_text">1</span> to <span class="bold_text">6</span>, with scores representing the following:<br>      
      <p>  <span class="bold_text">1</span> (very abstract) <span class="bold_text">2</span> (abstract) <span class="bold_text">3</span> (somewhat abstract)<br>
  <span class="bold_text">4</span> (somewhat concrete)
        <span class="bold_text">5</span> (concrete) <span class="bold_text">6 </span>(very concrete).
        </p>
      </div><br>
<br>
<br>

        <div class="underline-big">Guidlines For Ratings</div>
        <br>
        <br>
        <br>
        
     <span class="underline">Very abstract</span> images are typically non-realistic depictions that do not necessarily associate to any particular object, place, or thing. <br>
<br>
 <div id="one"><p>Very concrete images are typically realistic depictions that associate with objects,
        places or things.</p><br>
<br>
<br>

        <div id="submit"><a href="ac_training.php" class="transition"><img src="assets/next_o.jpg" width="19" height="19" alt="continue"></a>  <sup> NEXT</sup>
</div>
</div>
</div>
</div></div></body>
</html>