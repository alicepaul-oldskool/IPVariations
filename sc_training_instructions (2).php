<?php
session_start();
if (isset($_SESSION['location']))
{
	unset($_SESSION['location']);
}
$_SESSION['location']='training2';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Training Simple|Complex</title>
<link href="css/survey.css" rel="stylesheet" type="text/css" media="all"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<div id="content">
<div class="container">

  <header><h3><h3> Instructions: Simplicity vs. Complexity</h3></header>
  <!-- en<d .sidebar1 --></div>
<section> <p>In the following module, you will see a series of images.<p>

Your task is to rate each image on how simple or how complex you precieve each
image to be.    
      <p> The scale ranges from <span class="bold_text">1</span> to <span class="bold_text">6</span>, with scores representing the following:<br>      
      <p>  <span class="bold_text">1</span> (very simple) <span class="bold_text">2</span> (simple) <span class="bold_text">3</span> (somewhat simple)<br>
  <span class="bold_text">4</span> (somewhat complex)
        <span class="bold_text">5</span> (complex) <span class="bold_text">6 </span>(very complex).
      <p>Very simple: images typically have less elements in the composition and might be characterized as "basic".<
       
    <p>Very complex: images typically have more elements in the compostion and might be characterized as "busy" or mo</p>
<p>NOTE: This rating refers to how perceptually simple/complex the work is not how conceptually simple/complex it is.</p>


  </section>
<p>
  <p class="center"><a href="sc_training.php"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a>  <sup> continue</sup>
    </p></div>
</body>
</html>