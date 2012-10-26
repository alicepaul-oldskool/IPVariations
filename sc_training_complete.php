<?php
session_start();
$_SESSION['location']='testing2';


?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">

<title>Study Training</title>

</head>



<body>

<div id="Content">

<h3>ATTRIBUTE Study Training</h3>

<p>Your training session is complete.</p>



<p>It is time to begin the real session.</p>







<p>Remember</p>


<p>Instructions: <br>
  <br>
  In the following module, you will see a series of images.
  
  <br>
  <br>
  Your task is to rate each image on how abstract or how concrete you precieve each
  image to be.
  
  <br>
  <br>
  The scale ranges from 1 to 6, with scores representing the following:
  <br>
  <br>
  1 (very simple) 2 (simple) 3 (somewhat simple) 4 (somewhat complex)
  5 (complex) 6 (very complex).
</p>
<section>
  <p>Very simple: images typically have less elements in the composition and might be characterized as "basic".<
    
  <p>Very complex: images typically have more elements in the compostion and might be characterized as "busy" or mo</p>
  <p>NOTE: This rating refers to how perceptually simple/complex the work is not how conceptually simple/complex it is.</p>
</section>
<p><br>
</p>
<p>&nbsp; </p>
  <p class="center"><a href="sc_test.php"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a ><sup> continue</sup>
    </p>

<a id="quit" href="index.php">QUIT Test...Can't go back!</a>

</div>

</body>

</html>

