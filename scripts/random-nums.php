<?php
/**
* @todo put the vars into the config define constants
* @todo match the array numbers to the image numbers
* @todo define ceiling limit, goes in config, for each image and place in database with a procedure that will not allow it to be shown more than 20x there will be a bool value that also begins at true, less than the ceiling, but when false it will not be able to be in array-so this has to be querried...can't just script
* 
*/
function randomNums($min, $max, $quantity) //these vars go into config
{
    $numbers = range($min, $max); 
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/survey.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body><?php
print_r( randomNums(0,25,5) );
?>

</body>
</html>