$(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var name = $("input#consent_name_video").val();
		if (name == "") {
      $("label#consent_name_video_error").show();
      $("input#consent_name_video").focus();
      return false;
    }
		var email = $("input#consent_name_signature").val();
		if (email == "") {
      $("label#consent_name_signature_error").show();
      $("input#consent_name_signature").focus();
      return false;
    }
		var phone = $("input#datepicker1").val();
		if (phone == "") {
      $("label#datepicker1_error").show();
      $("input#pdatepicker1").focus();
      return false;
    }
		
		var dataString = 'consent_name_video='+ name + '&consent_name_signature=' + email + '&datepicker1=' + phone;
		//alert (dataString);return false;
		
		$.ajax({
      type: "POST",
      url: "bin/process.php",
      data: dataString,
      success: function() {
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html("<h2>Contact Form Submitted!</h2>")
        .append("<p>We will be in touch soon.</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img id='checkmark' src='images/check.png' />");
        });
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});
