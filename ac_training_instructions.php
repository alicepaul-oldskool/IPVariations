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
<meta charset="utf-8">
<title></title>
<link href="css/survey.css" rel="stylesheet" type="text/css" media="all"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<div id="content">
<div class="container">

  <header><h3>Instructions: Abstractness vs. Concreteness</h3></header>
  <!-- en<d .sidebar1 --></div>
<section> <p>In the following <span class="bold_text">TRAINING</span> module, you will see a series of images.
<p>

Your task is to rate each image on how abstract or how concrete you precieve each
image to be.    
      <p> The scale ranges from <span class="bold_text">1</span> to <span class="bold_text">6</span>, with scores representing the following:<br>      
      <p>  <span class="bold_text">1</span> (very abstract) <span class="bold_text">2</span> (abstract) <span class="bold_text">3</span> (somewhat abstract)<br>
  <span class="bold_text">4</span> (somewhat concrete)
        <span class="bold_text">5</span> (concrete) <span class="bold_text">6 </span>(very concrete).
      <p>Very abstract images are typically non-realistic depictions that do not necessarily
        associate to any particular object, place, or thing.        
    <p> Very concrete images are typically realistic depictions that associate with objects,
        places or things.                       </p>
  </section>
<p>
<p>
<p class="center"><a href="ac_training.php"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a>  <sup> continue</sup>
</p></div>
</body>
</html>