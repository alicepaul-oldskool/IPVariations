// JavaScript Document
//inform consent after all fields true
//show continue arrow/button
$('#submit_consent').click(function(e) {
    if(!document.getElementById('consent_explained2').checked) {
        // checkbox not checked
        e.preventDefault();
        $('#continue').show();
    }
    else {
        $('#consent_form').submit();
    }
});