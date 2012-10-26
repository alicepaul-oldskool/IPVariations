<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informed Consent</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<link rel="stylesheet" href="css/survey.css" type="text/css" media="screen">
<link href="css/smoothness/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" type="text/css">
<script>

$(function() {
		$( "#datepicker" ).datepicker({
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

<div class="container">
<div class="content">
<div class="consent_box">
  <form action="consent.php" method="post" id="consent.php">
<div class="center">Teachers College, Columbia University
Principal Investigator: Dr. Barbara Tversky

Research Title: Indexing Works of Art Along Two Indices
</div>
<p>PARTICIPANTS RIGHTS<br />
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
  <input name="consent_name_video" type="text" id="consent_name_video" value="Name" size="30" maxlength="30" />
</p>
<p>
  <label>
    <input type="checkbox" name="consent_check_group_1" value="1" id="consent_check_group_1_0" />
    Consent</label>
  to be video/audio taped. <br />
  <label>
    <input type="checkbox" name="consent_check_group_1" value="0" id="consent_check_group_1_1" />
    do NOT Consent</label>
  to be video/audio taped. <br />
  <br />
  The written and audio-taped materials will be viewed only by the principal
  investigator and members of the research team. Short segments of the written,
  audio taped materials may be viewed in university classrooms, meetings of
  professional associations or other similar settings after efforts have been made to
  preserve my anonymity.  </p>
<p>My signature means that I agree to participate in this study. By filling out the form
  field below I am providing my digital signature authorizing my participation in this
  study.  </p>
<p>Participant's Signature: 
  <input name="consent_name_signature" type="text" id="consent_name_signature" value="Name" size="30" maxlength="30" />
  <br />
  Date:
  <input type="text" id="datepicker">
  </p>
<p>Investigator's Verification of Explanation
  
  I certify that I have carefully explained the purpose and nature of this research to  
  <input name="consent_explained" type="text" id="consent_explained" value="Name" size="30" maxlength="30" />
 in age-appropriate language.</p>
<p> My digital signature verifies that He/She has had the opportunity to discuss it
  with me in detail. I have answered all his/her questions and he/she provided the
  affirmative agreement (i.e. assent) to participate in this research.</p>
<p>
  Investigator's Signature:
  <input name="consent_explained2" type="text" id="consent_explained2" value="Name" size="30" maxlength="30" />
  <br />
  Date:  
  <input type="text" id="datepicker">
 
</p>
<p> TEACHERS COLLEGE, COLUMBIA UNIVERSITY  <br />
  INSTITUTIONAL REVIEW BOARD
  Protocol #<br />
Consent form approved until</p>
  </form></div>

</body>
</html>
