<?php
function imgResize($width, $height, $target) {
//takes the larger size of the width and height and applies the formula. Your function is designed to work with any image in any size.
if ($width > $height) {
$percentage = ($target / $width);
} else {
$percentage = ($target / $height);
}

//gets the new value and applies the percentage, then rounds the value

$width = round($width * $percentage);
$height = round($height * $percentage);
//returns the new sizes in html image tag format...this is so you can plug this function inside an image tag so that it will set the image to the correct size, without putting a whole script into the tag.
return "width=\"$width\" height=\"$height\"";

}
?>