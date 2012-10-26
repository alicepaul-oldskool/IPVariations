<?php
/**
* @todo after counter reaches limit then instead of calling page again call for the next module page
*
*
*/
session_start();
require_once('config.php');
require_once('helpers.php');

$_SESSION['ac_counter']=0;

if (isset($_SESSION['ac_counter']) && isset($_SESSION['training']))
{

	for ($_SESSION['ac_counter']=0;$_SESSION['ac_counter']< TESTING_IMG_CEILING_COUNT;$_SESSION['ac_counter']++)
	{
		//echo $_SESSION['ac_counter'];
	}
}
#if question has been answered, submit it.
		if(isset($_POST['answer']) && $_SESSION['state'] == 'start')
		{
		$mysqli = new mysqli($g_db_hostname, $g_db_username, $g_db_password, $g_db_dbname);
			
			if ($mysqli->connect_error)
			{
				die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
			}
		
		#need to fix
		$stmt = $mysqli->prepare("INSERT into results (picture_id, user_id, answer) VALUES (?,?,?)");
		$stmt->bind_param("iii", $_POST['pic_num'], $_SESSION['user_id'], $_POST['answer']);
		
		#answer is an enum column of 0 through 7, so I am passing in an index, not a value which needs to be fixed
		
		$stmt->execute();
		
		}
		
		
		for ($_SESSION['training_counter']=0;$_SESSION['training_counter']< TESTING_IMG_CEILING_COUNT;$_SESSION['training_counter']++)
	{
		

    	$g_training_images_folder = 'images_training';

	 	#pop next question number
			$current_question_filename = array_shift($_SESSION['question_array']);
				
				if(isset($current_question_filename))
				{
					$info = pathinfo($current_question_filename);
					$current_question_number = (int) basename($current_question_filename,'.'.$info['extension']);
				}
	}
	#@todo session state will be finished at 60 so that it caps it off	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">

<script type="text/javascript">
// Example:
// randomImage(['0.gif',50,50,'1.gif',25,25,'2.gif',50,25]); 

// * Dependencies * 
// this function requires the following snippet:
// JavaScript/Randomizers/randomNumber
function randomImage(imgArr)
{
  var imgSrc, imgW, imgH, r;
  r = randomNumber(imgArr.length / 3)-1;
  
  imgSrc = imgArr[r * 3];
  imgW = imgArr[(r * 3)+1];
  imgH = imgArr[(r * 3)+2];

  document.write('<IMG SRC='+imgSrc+' WIDTH='+imgW+' HEIGHT='+imgH+'>');
}
</script>
<script type="text/javascript">
function switchImage(imgName, imgSrc) 

{

  if (document.images)

  {

    if (imgSrc != "none")

    {

      document.images[imgName].src = imgSrc;

    }

  }

}

</script>

<script type="text/javascript">
function clickHandle(buttonNum){
    enableButtons(false);
    document.forms['survey'].answer.value = buttonNum;
    document.forms['survey'].submit();
}

function enableButtons(truefalse) {
    //var number = document.forms['survey'].answer;
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
       //window.setTimeout('document.forms[\'survey\'].submit\(\)', 5000);
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
<div class="container">
	<div id="content">
			<section>       
            
     <table width="547" height="114" border="1" cellpadding="0" cellspacing="0">
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

<!-- 
 	  <input type="hidden" name="answer" value='0' />
	  <input type="hidden" name="pic_num" value="<?php echo $current_question_number;?>" />
	  <button type="button" class="surveybutton" onclick="clickHandle(1)" disabled="true">1</button>
	  <button type="button" class="surveybutton" onclick="clickHandle(2)" disabled="true">2</button>
	  <button type="button" class="surveybutton" onclick="clickHandle(3)" disabled="true">3</button>
	  <button type="button" class="surveybutton" onclick="clickHandle(4)" disabled="true">4</button>
	  <button type="button" class="surveybutton" onclick="clickHandle(5)" disabled="true">5</button>
          <button type="button" class="surveybutton" onclick="clickHandle(6)" disabled="true">6</button>
	  <button type="button" class="surveybutton" onclick="clickHandle(7)" disabled="true">7</button>
	  -->
<input type="hidden" name="answer" value='0' />

   	     
   	</div>
</div>
<footer>
<div align="center"></div>
  <input type="image" name="submit" id="continue" value="Start"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" src="assets/next_o.jpg" width="20" height="20">
  <sup> continue</sup></form>  
  
        

<p>
</p>
</p>


<footer>
  <p><a id="quit" href="index.php">QUIT-testing reason</a></p>
</footer>

</body>
</html>