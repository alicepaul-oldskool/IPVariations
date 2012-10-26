<?php
//session should start...holding off

if (!isset($_SESSION['ac_counter']))
{
$_SESSION['ac_counter']=0;
}

for ($_SESSION['ac_counter']=0;$_SESSION['ac_counter']<60;$_SESSION['ac_counter']++)
{
	
echo $_SESSION['ac_counter'];


}

     	#if question has been answered, submit it.
	if(isset($_POST['answer']) && $_SESSION['state'] == 'start'){
		$mysqli = new mysqli($g_db_hostname, $g_db_username, $g_db_password, $g_db_dbname);
		if ($mysqli->connect_error) {
			die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
		}
		#need to fix
		$stmt = $mysqli->prepare("INSERT into results (picture_id, user_id, answer) VALUES (?,?,?)");
		$stmt->bind_param("iii", $_POST['pic_num'], $_SESSION['user_id'], $_POST['answer']);
		#answer is an enum column of 0 through 7, so I am passing in an index, not a value which needs to be fixed
		

		$stmt->execute();
	}
     	#pop next question number
	$current_question_filename = array_shift($_SESSION['question_array']);
	if(isset($current_question_filename)){
		$info = pathinfo($current_question_filename);
		$current_question_number = (int) basename($current_question_filename,'.'.$info['extension']);
	}
	
	#@todo session state will be finished at 60 so that it caps it off	
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
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
       window.setTimeout('document.forms[\'survey\'].submit\(\)', 5000);
   }

}

</script>

<script>
    $(function() {
        $( "#radio" ).buttonset();
    });
    </script>

</head>
<body>
<div id="content">
<div class="container">
<div id="survey">
     <?php #print_r($_SESSION['question_array']);?>
     <?php #echo "The current survey is " . $g_current_survey . '.';?>
     <?php #echo $current_question_filename;?>
     //<img id="survey_image" src="<?php echo $img_folder . 'file:///C|/' . $current_question_filename;?>" /> 
     <div id="controls_and_anchors">
     <div id="controls">
          <form id="survey" method="post" action="start.php">
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
	  --></form>
      </div>
     <table width="606" height="198" border="1">
       <tr>
         <td width="64"><div align="center">
           <input type="radio" id="radio1" name="radio" class="surveybutton" onclick="clickHandle(1)" disabled="true" />
         </div></td>
         <td width="82"><div align="center">
           <input type="radio" id="radio2" name="radio" class="surveybutton" onclick="clickHandle(2)" disabled="true" />
         </div></td>
         <td width="106"><div align="center">
           <input type="radio" id="radio3" name="radio" class="surveybutton" onclick="clickHandle(3)" disabled="true" />
         </div></td>
         <td width="90"><div align="center">
           <input type="radio" id="radio4" name="radio" class="surveybutton" onclick="clickHandle(4)" disabled="true" />
         </div></td>
         <td width="110"><div align="center">
           <input type="radio" id="radio5" name="radio" class="surveybutton" onclick="clickHandle(5)" disabled="true" />
         </div></td>
         <td width="114"><div align="center">
           <input type="radio" id="radio6" name="radio" class="surveybutton" onclick="clickHandle(6)" disabled="true" />
         </div></td>
       </tr>
       <tr>
         <td height="102"><label for="radio1">
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
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
     </table>
     </div>
       <a id="quit" href="index.php">QUIT-testing reasons</a>
      </div>
      </div>
</div>
</div>
</body>
</html>