<?php
session_start();
require_once('config.php');
require_once('helpers.php');

$num_tries = (isset($_POST["num_tries"])) ? $_POST["num_tries"]  + 1 : 1;
if ($_POST["num_tries"]> 6)
{
	header("Location:test_done.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link href="css/survey.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function clickHandle(buttonNum){
    enableButtons(false);
    document.forms['survey'].answer.value = buttonNum;
    document.forms['survey'].submit();
}

function enableButtons(truefalse) {
    var number = document.forms['survey'].answer;
    var buttons = document.getElementsByClassName('surveybutton');
    for(var i=0; i<buttons.length; i++){
	buttons[i].disabled = !truefalse;
    }
}

window.onload = function() {
   var image = document.getElementById('survey_image');
   if(!image.complete){
       var refresh = window.setTimeout('function\(\)', 100);
   }
   else{
       window.setTimeout('enableButtons\(true\)', <?php echo $g_button_disable_time_ms;?>); 
       window.setTimeout('document.forms[\'survey\'].submit\(\)', 5000);
   }

}

</script>
<script>
    $(function() {
        $( "#radio1" ).buttonset();
    });
    </script>

</head>
<body>
<header>
<div class="container">

<div id="content">  
<title></title>
<form id="survey" method="post"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" onSubmit="">
<p><?php // echo $current_question_number; ?></p>
<p>&nbsp;</p>
<table width="547" height="114" border="0" align="center" cellpadding="0" cellspacing="0">
       <tr>
         <td width="16.6%" height="22"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(1)" value="1" />
    
    
         </div></td>
         <td width="16.6%" ><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(2)" value="2" />
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(3)" value="3"/>
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(4)" value="4" />
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(5)" value="5" />
         </div></td>
         <td width="16.6%"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(6)" value="6" />
         </div></td>
       </tr>
       <tr>
         <td height="90" ><label for="radio1">
           <div align="center">1 <br>
             Very Simple</div>
           </label></td>
         <td><label for="radio2">
           <div align="center">2 <br>
             Simple</div>
           </label></td>
         <td><label for="radio3">
           <div align="center">3<br>
             Somewhat Simple</div>
           </label></td>
         <td><label for="radio4">
           <div align="center">4<br>
             Somewhat Complex</div>
           </label></td>
         <td><label for="radio1">
           <div align="center">5 <br>
             Complex</div>
           </label></td>
         <td><label for="radio1">
           <div align="center">6 <br>
             Very Complex</div>
           </label></td>
       </tr>
</table>
  <div id="controls_and_anchors">
     </p>
     <div id="controls">
           	  <input type="hidden" name="answer" value='0' />
              	  <input type="hidden" name="pic_num" value="<?php echo $current_question_number;?>" />
<input type="hidden" name="formid" value="<?php echo $_COOKIE['submit1'];?>" />

<input type="hidden" name="answer" value='0' />
<?php echo $_COOKIE['submit1'];?>
   	     
   	</div>
</div>
<footer>
<div align="center">
  <p>
<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>" />
</form>

<?
if($_POST['submit'])
{ 
	if(isset($_COOKIE['submit1']))
	{ 
		if($_COOKIE['submit1'] >= 2)
		{ 
	header("Location:training_complete.php");
		 
		}
	}
	else 
	{ 
	$_COOKIE['submit'] += 1; 
	} 
}
else 
{ 
setcookie('submit1', 1, 86400);  
} 
  
 ?>       



</p>
<?php echo $_POST["num_tries"];?>


<footer>
  <p><a id="quit" href="index.php">QUIT-testing reason</a></p>
</footer>

</body>
</html>