<?php
if ((isset($_POST['consent_name_video'])) && (strlen(trim($_POST['consent_name_video'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['consent_name_video']));
} else {$name = 'Name required for consent';}

if ((isset($_POST['consent_name_signature'])) && (strlen(trim($_POST['consent_name_signature'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['consent_name_signature']));
} else {$email = 'Name Required for consent';}

//radio buttons...one must be chosen...

if ((isset($_POST['datepicker1'])) && (strlen(trim($_POST['datepicker1'])) > 0)) {
	$phone = stripslashes(strip_tags($_POST['datepicker1']));
} else {$phone = 'Please Choose a date';}

if ((isset($_POST['consent_explained'])) && (strlen(trim($_POST['consent_explained'])) > 0)) {
	$phone = stripslashes(strip_tags($_POST['consent_explained']));
} else {$phone = 'Name Required';}


if ((isset($_POST['consent_explained2'])) && (strlen(trim($_POST['consent_explained2'])) > 0)) {
	$phone = stripslashes(strip_tags($_POST['consent_explained2']));
} else {$phone = 'Name Required';}

ob_start();
?>

?>
