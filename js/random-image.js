<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/survey.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

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
</body>
</html>
