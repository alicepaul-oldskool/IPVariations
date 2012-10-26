
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>script</title>
<script type = "text/javascript">
var rimg = 0;

//this should be a for statement that puts all the images into an array with a +1
var pictures = [ "../images_live/1", "../images_live/2", "../images_live/3", "../images_live/4", "../images_live/5", "../images_live/6"];

function randpics(){
// pick a random image from the pictures array and displays by
// creating an img tag and appending the src attribute to the filename
  rimg = Math.floor(Math.random() * 7);
  document.getElementById('tip').src = pictures[rimg]+'.jpg';
  
// remove following when images are available
  document.getElementById('tip').alt = rimg + ' : ' +pictures[rimg]+'.jpg';
}

function getRBtnName(GrpName) {
  var sel = document.getElementsByName(GrpName);
  var fnd = -1;
  var str = '';
  for (var i=0; i<sel.length; i++) {
	if (sel[i].checked == true) { str = sel[i].value;  fnd = i; }
  }
  return fnd;   // return option index of selection
// comment out next line if option index used in line above  
//  return str;
} 

function checkAnswers() {
  var choice = getRBtnName('radiobutton');
  var flag = false;
 // if (choice == rimg) { flag = true; alert( "Congratulations, your answer is correct" ); }
		//		 else { alert('Nope ... try again'); }
  return flag;  
} // end function checkAnswers

</script>
</head>
<body onload="randpics()">

<form id = "example" onsubmit = "return checkAnswers()" action = "">
<p>Example</p><br />
   <img id="tip" src="" alt="mystery tip"/>

   <br />

   <input type = "radio" name = "radiobutton" value = "1" />
   <label>1 - Very Abstract</label>

   <input type = "radio" name = "radiobutton" value = "2" />
   <label>2 - Abstract</label>

   <input type = "radio" name = "radiobutton" value = "3" />
   <label>3 - Somewhat Abstract</label>

   <input type = "radio" name = "radiobutton" value = "4" />
   <label>4 - Somewhat Concrete</label><br />

   <input type = "radio" name = "radiobutton" value = "5" />
   <label>5 - Concrete</label>

   <input type = "radio" name = "radiobutton" value = "6" />
   <label>6 - Very Concrete</label>


   <input type = "submit" name = "submit" value = "Submit" />
  <!--  <input type = "reset" name = "reset" value = "Reset" />-->
</p>
</form>
</body>
</html>

