<?php
/**
* @todo add class="required" to req elements
* only one of the radios in the group needs it
*/
session_start();
include('./scripts/getDate.php');
?>
<!doctype html>
<html><head>
<title>Informed Consent</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<link href="css/smoothness/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" type="text/css">
<script src="js/show-continue.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   $("#consent_form").validate();
   });
</script>

<script>
$(function() 
{
		$( ".datepicker1" ).datepicker({
			altField: "#alternate",
			altFormat: "DD, d MM, yy",
			changeMonth: true,
			changeYear: true,
			yearRange: '1920:2010'

		});
	});	</script>

<script>

$(function() 
{
		$( ".datepicker2" ).datepicker({
			altField: "#alternate",
			altFormat: "DD, d MM, yy",
			changeMonth: true,
			changeYear: true,
			yearRange: '1920:2010'

		});
	});	</script>

<link href="css/survey.css" rel="stylesheet" type="text/css" media="all" /><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
</head>
 
<body>

<div class="content">
  <header>
    <h3>Informed Consent</h3>
  </header>
   <article class="content">
   <div class="consent_box">
<form action="ac_1.php" method="post" id="consent_form">
<bdi><p>Teachers College, Columbia University
    <br>
    Principal Investigator: Dr. Barbara Tversky</p>
  <p> Research Title: Indexing Works of Art Along Two Indices</p>
</bdi>
<p class="bold_text">PARTICIPANTS RIGHTS<br />
  <br />
  
  
  I have read and discussed the Research Description with the researcher. I have had
  the opportunity to ask questions about the purposes and procedures regarding this
  study.
  <br />
  <br />
  
  My participation in research is voluntary. I may refuse to participate or withdraw
  from participation at any time without jeopardy.  </p>
<p>The researcher may withdraw me from the research at his/her professional
  discretion.
  
  If, during the course of the study, significant new information that has been
  developed becomes available which may relate to my willingness to continue to
  participate, the investigator will provide this information to me.</p>
<p> Any information derived from the research project that personally identifies me
  will not be voluntarily released or disclosed without my separate consent, except
  as specifically required by law. If at any time I have any questions regarding the
  research or my participation, I can contact the investigator, who will
  answer my questions. The investigator's phone number is (212) 678-8301.</p>
<p> If at any time I have comments, or concerns regarding the conduct of the research
  or questions about my rights as a research subject, I should contact the Teachers
  College, Columbia University Institutional Review Board IRB. The phone number for
  the IRB is (212) 678-4105. Or, I can write to the IRB at Teachers College, Columbia
  University, 525 W. 120th Street, New York, NY, 10027, Box 151.
  
  I should receive a copy of the Research Description and this Participant's Rights
  document.</p>
<p> If this observation is to be video/audio-taped:</p>
<p>I, 
  <input name="consent_name_video" type="text" id="consent_name_video" value="" size="30" maxlength="30" onFocus="this.className='currentField'" onChange="this.clasName='changedField'" />
<br>

<input type="radio" name="consent-radios" value="1" id="consent-radios_0" onFocus="this.className='currentField'" onChange="this.clasName='changedField'">
   
  <span class="bold_text">Consent</span></label>
  <span class="bold_text">
  to be video/audio taped.</span><br />
  <input type="radio" name="consent-radios" value="0" id="consent-radios_1" onFocus="this.className='currentField'" onChange="this.clasName='changedField'">
    
      <span class="bold_text">Do NOT Consent</span></label>
  <span class="bold_text">
  to be video/audio taped. </span><br />
  <br />
  The written and audio-taped materials will be viewed only by the principal
  investigator and members of the research team. Short segments of the written,
  audio taped materials may be viewed in university classrooms, meetings of
  professional associations or other similar settings after efforts have been made to
  preserve my anonymity.  </p>
<p class="bold_text">My signature means that I agree to participate in this study. By filling out the form
  field below I am providing my digital signature authorizing my participation in this
  study.  </p>
<p>Participant's Signature: 
  <input name="consent_name_signature" type="text" id="consent_name_signature" value="" size="30" maxlength="30" onFocus="this.className='currentField'" onChange="this.clasName='changedField'" />
  Date:
  <input type="text" class="datepicker2" onFocus="this.className='currentField'" onChange="this.clasName='changedField'">
  <br>
  <br>
  Investigator's Verification of Explanation: The investigator has carefully explained the purpose and nature of this research to me,  <br>
  <input name="consent_explained" type="text" id="consent_explained" value='' size="30" maxlength="30" onFocus="this.className='currentField'" onChange="this.clasName='changedField'" />
 in age-appropriate language.</p>
<p> The Investigator's digital signature (below) verifies that He/She has had the opportunity to discuss the research with the participant (indicated above) and has answered all the participant's questions.  Furthermore, the digital signature verifies that the Investigator has received affirmation (i.e. assent) from the participant to participate in this research.<br>
  Investigator's Signature:
<input name="consent_explained2" type="text" id="consent_explained2" value="Allison Faye" size="30" maxlength="30"  onFocus="this.className='currentField'" onChange="this.clasName='changedField'"/>
  Date:  
  <input type="text" class="" onFocus="this.className='currentField'" onChange="this.clasName='changedField'" value="<?php echo $_SESSION['date'];?>">
 
</p>
<address>
<p> TEACHERS COLLEGE, COLUMBIA UNIVERSITY  <br />
  INSTITUTIONAL REVIEW BOARD
  Protocol #<br />
Consent form approved until</p>
<p>
  <input type="submit" name="submit_consent" id="submit_consent" value="Submit">
</p>
</address></p>
  <footer>
    
  </footer>
  <!-- end .container --></div>
  <!--<p><input type="image" name="submit" id="continue" value="Start" src="assets/next_o.png" width="20" height="20" id="age" /><sup> continue</sup>-->
</p> </form>
</body>
</html>