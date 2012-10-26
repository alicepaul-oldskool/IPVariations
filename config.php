<?php
/**
* Configuration File for Constants, Globals, etc
* @todo create constant for dates for calendars
* @todo create constants for benchmarking enterprise and local systems to gather user response time 
* 
* @todo constants for names of surveys ???
* @todo function at bottom for randoms integrate with constants can be found just a script in random-nums.php
*
*
*/

$current_date=date(Y-m-d);

//database information
	$g_db_username = 'leslieg3';
	$g_db_password = '#Leslie123';
	$g_db_dbname = 'leslieg3_devsurvey';
	$g_db_hostname = 'lesliegruen.com';
	
//Filename information	
	$g_training_images_folder = 'images_training';

	//$g_current_survey_file = 'cache';
	
	#Array of survey image directories
	/*$g_survey_array = array( "Survey_".date('Y-m-d'),
	  	 "Attractiveness_white",
				 "Attractiveness_yellow" #note the last item doesn't get a trailing comma
			       );
*/
	
	//survey names according to date 
	$g_survey_name="survey_".$current_date;
	
	
	//Session Arrays
	$session_array = array("training1",
			    	   			"testing1",
				   				"training2",
							    "testing2",
								"admin"   
								 );
	//find out what this is for
	$_SESSION['counter']=4;
	
	//Session Counter for training
	//maybe make a constant
	//$_SESSION['training_counter']=6;
	define ('TRAINING_COUNTER', 6);
	
	//$_SESSION['testing_counter']=10;
	define('TESTING_COUNTER',10);
	
	$sections= array (
						array(
						"section"=>"training1",
						"heading"=>"Example: Abstract vs. Concrete",
						"imgs_directory"=>"images_training",
						"max_images"=>5,
						"next_page"=>"training_complete.php"
						),
					array(
						"section"=>'testing1',
						"heading"=>'',
						"imgs_directory"=>'images_live',
						"max_images"=>60
						),
					array(
						"section"=>'training2',
						"heading"=>'Example: Simple vs. Complex',
						"imgs_directory"=>'images_training',
						"max_images"=>5
						),
					array(
						"section"=>'testing2',
						"heading"=>'',
						"imgs_directory"=>'images_live',
						"max_images"=>60
						),
						
					array(
						"section"=>'admin',
						"heading"=>'Set Survey Administration'
						)
						
						
					);
						
												
						
						
						
	
	//set for changing surveys
	$g_button_disable_time_ms = '250';
?>