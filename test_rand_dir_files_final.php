<?php
require_once('helpers.php');

$dir    = './random_dir_file/randimgtest/';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
shuffle($files1);


shuffle($files2);

$result = count($files1);
echo "result:".$result;

for ($i=0; $i<$result; $i++)
{
if (is_dir($files1[$i])) 
{
    if ($dh = opendir($files1[$i])) 
	{
        while (($file1[$i] = readdir($dh)) !== false) 
		{
            echo "DIRECTORY:". $file1[$i]."<BR><BR>";
        }
        closedir($dh);
		$x=init_survey($files1[1]);
		echo $x;
    }
}
}


//print_r($files1);
?><br>
<br>
<?php

print_r($files2);
?>

if (is_dir($files1)) {
    if ($dh = opendir($files1)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: $file : filetype: " . filetype($files1 . $file) . "\n";
        }
        closedir($dh);
    }
}