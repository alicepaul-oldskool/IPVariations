<?php 
session_start();
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
            $("#one").show(1000);
			
			$('a').click(function(e) {
		
			$("#two").css("display", "none");
            $("#two").show(1000);
    
		});

	});
</script>
</head>

<body>
<div id="content">
<div class="container">
<!--<a href="ac_2.php" class="transition">LINK</a>-->
<br>
<br>
<br>
 <header><span class="bold_text">Instructions</span>: Simplicity vs. Complexity 
    <!-- en<d .sidebar1 --><br>

  </span> </header>
<br>
<br>
<br>

  	<div>In the following module, you will see a series of images. <br>
<br>
<br>
<br>
</div>
    <div>  <div>
Your task is to rate each image on how <span class="bold_text">simple</span> or how <span class="bold_text">complex</span> you precieve each
image to be.<br>
<br>
<br>
<div>
The scale ranges from <span class="bold_text">1</span> to <span class="bold_text">6</span>, with scores representing the following:<br>
<p>  <span class="bold_text">1</span> (very simple) <span class="bold_text">2</span> (simple) <span class="bold_text">3</span> (somewhat simple)<br>
  <span class="bold_text">4</span> (somewhat complex)
        <span class="bold_text">5</span> (complex) <span class="bold_text">6 </span>(very complex).
        </p>

        
</div>
  
<div class="underline-big">Guidlines For Ratings</div><span class="bold_text">
SIMPLE</span>   
<div id="one"><span class="underline">Very simple: </span>images typically have less elements in the composition and might be characterized as "basic". <br>
<br>

        <div id="submit"><a href="sc_7.php" class="transition"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a>  <sup> NEXT</sup>
</div>
</div>
</div>
</div></div></body>
</html>