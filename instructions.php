<?php


if( isset($_POST['DOB']) && isset($_POST['gender']) && isset($_POST['fname'] && isset($_POST['lname'){

//insert DOB and gender into db

}

else{
echo 'form validation errors';
   // header('Location: index.php');

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<link href="css/smoothness/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<p>@depreciated to reflect abstract/concrete instructions<br>
  @new version is sc_training_instructions
</p>
<div id="content">
  
  <h3> Instructions: Simplicity vs. Complexity</h3>

<p>In the following module, you will see a series of images.<br>
Your task is to rate each image on how simple or how complex you precieve each image to be.<br>
The scale ranges from 1 to 4, with scores representing the following:<br>
1 (very simple) 2(simple) 3 (complex) 4 (very complex)<br>
Very simple: images typically have less elements in the composition and might be characterized as "basic".<br>
Very complex: images typicalll have more elements in the compostion and might be characterized as "busy" or mo<br>
NOTE: This rating refers to how perceptually simple/complex the work is not how conceptually simple/complex it is.</p><br>
<br>


<div id="survey">
   <div id="radio">
       <input type="radio" id="radio1" name="answer" value="1"/>        
        <input type="radio" id="radio2" name="answer" value="2"/>
        <input type="radio" id="radio3" name="answer" value="3"/>
                <input type="radio" id="radio3" name="answer" value="4"/>
 <label for="radio1">
       1 Very Simple</label>
              <label for="radio2">2 Simpler</label>
        <label for="radio3">3 Complex</label>
                        <label for="radio3">4 Very Complex</label>

    </div>
       
  <!--<button name="answer" class="surveybutton" value="1">1</button>

 <button name="answer" class="surveybutton" value="2">2</button>

 <button name="answer" class="surveybutton" value="3">3</button>

 <button name="answer" class="surveybutton" value="4">4</button>

 <button name="answer" class="surveybutton" value="5">5</button>

 <button name="answer" class="surveybutton" value="6">6</button>

 <button name="answer" class="surveybutton" value="7">7</button> -->

 
 </div>

</div>

<div id="lower">

<p>Yada</p>



<p>Your rating will be highlighted when your response has been correctly entered.</p>



<p>If you miss the opportunity to rate an image for any reason, don't worry about it. Just continue on to the next image.</p>



<p>You cannot pause or go back and change a rating once a new image appears.</p>



<p>You will now participate in a brief training session. As in the survey, an image will appear on the screen and yo click on the number that corresponds to your best choice.</p>



<p>When you click on the START button, your training session witll begin.</p>

<form id="start_survey" method="post" action="start.php">

<input type ="submit" value="Start Training" />

<br />

<a id="quit" href="index.php">QUIT Training</a>

</div>

</form>

</div>

</body>

</html>