<?php
/**
* Configuration file
* Change to meet the variations of your needs
* @todo put the switch in the config file
*/
//Number of Training Images


//put this in the config file
switch ($_SESSION['location']) 
{
    case 'training':
			$heading='<header><h3>Example: Abstract vs. Concrete</h3></header>';
			init_survey('images_training');
			$images_directory='images';
			define("IMG_CEILING_COUNT", 4);
			break;
   
    case 'testing1':
	   		$heading='';
			$images_directory='images_live';
       		init_survey('images_live');
			define("IMG_CEILING_COUNT", 10);
	    	break;
   
    case 'training2':
	       $heading='<header><h3>Example: Simple vs. Complex</h3></header>';
			$images_directory='images_training';
			init_survey('images_training');
			define("IMG_CEILING_COUNT", 4);
			break;
			
	case 'testing2':
        	$heading='';
			$images_directory='images_live';
			init_survey('images_live');
			define("IMG_CEILING_COUNT", 4);
	        break;
		case 'admin':
		break;
}

function process($counter)
{
	$counter=$counter-1;
	echo 'counter function:'.$counter;
	echo 'enet to function';
	return $counter;
	
}

echo $heading;
//Number of Images per Test

//Max amount of img use
define("IMG_CEILING_COUNT", 10);
function init_survey($images_directory){
if($_SESSION['location']== 'training')
{
	$images_directory='images_training';
	$ordering_array = array("t_one.jpg",
			    	   			"t_two.jpg",
				   				"t_three.jpg",
							    "t_four.jpg",
				   				"t_five.jpg",
				  			    "t_six.jpg"   
								 );
			
}

		$ordering_array = scandir($images_directory);

		array_shift($ordering_array);

		array_shift($ordering_array);

		shuffle($ordering_array);

		$img_displayed=array_pop($ordering_array);
		for ($i=0; $i<IMG_CEILING_COUNT; $i++)
		{
		$img='<div align="center"><img src="http://dev.lesliegruen.com/survey/'.$images_directory.'/'.$img_displayed.'"  width="300px" height="400px"/></div>';
		
		return $img;
		}
}


function get_string_from_file($filename){

	 if(!file_exists($filename)){

		return '';

	}

	$file_h = fopen($filename,"r");

	$survey = fgets($file_h);

	fclose($file_h);

	return $survey;

}

function set_string_to_file($string, $filename){

	$file_h = fopen($filename, "w+");

	fputs($file_h, $string);

	fclose($file_h);

}


set_string_to_file('teststring', 'test');

//lists the files in an array
//$arrays = init_survey('images_live');
if ($_SESSION['training']=='training')
{
	$arrays=init_survey('images_training');
}
else ($_SESSION['location']=='testing1');
{
$arrays=init_survey('imgs');
}
shuffle($arrays);

print_r($arrays);

function countdown()
{
for ($i=0;$i<$sTrainingCounter;$i++){ 
//echo ($_SERVER['PHP_SELF']);
echo $i;
}
echo $sTrainingCounter;
$sCounter=$sCounter-1;
}

function wow()
{
if (!isset($_SESSION['ac_counter']))
{
$_SESSION['ac_counter']=0;
}
	for ($_SESSION['ac_counter']=0;$_SESSION['ac_counter']< $_SESSION['training_counter'];$_SESSION['ac_counter']++)
	{
		echo $_SESSION['ac_counter'];
	}
}
 ?> 