<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/survey.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
$imagesDir = '../images_live/'; //goes into config file

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)]; // See comments

echo $randomImage;
?>
</body>
</html>