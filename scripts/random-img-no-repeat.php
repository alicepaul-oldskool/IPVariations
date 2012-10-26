<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/survey.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

<?php 
//goes into config file
echo 'yes';
$folder = 'images-live/';

$exts = 'jpg jpeg png gif';

$files = array(); $i = -1; // Initialize some variables
if ('' == $folder) $folder = './';

$handle = opendir($folder);
$exts = explode(' ', $exts);
while (false !== ($file = readdir($handle))) {
foreach($exts as $ext) { // for each extension check the extension
if (preg_match('/\.'.$ext.'$/i', $file, $test)) { // faster than ereg, case insensitive
$files[] = $file; // it's good
++$i;
}

}
}
closedir($handle); // We're not using it anymore
mt_srand((double)microtime()*253568-count($files)*646/12); // seed for PHP &lt; 4.2
$rand = mt_rand(0,count($files)); // $i was incremented as we went along

header('Location: '.$folder.$files[$rand]); // Voila!
?>
</body>
</html>