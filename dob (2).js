<script>
$(function(){
$('#user_Birthday').datepicker({changeYear: true, changeMonth: true});
$('button').click(function(){
var today = new Date(), 
birthday_val = $("#user_Birthday").val().split('/'),
birthday = new Date(birthday_val[2],birthday_val[0]-1,birthday_val[1]),
todayYear = today.getFullYear(),
todayMonth = today.getMonth(),
todayDay = today.getDate(),
birthdayYear = birthday.getFullYear(),
birthdayMonth = birthday.getMonth(),
birthdayDay = birthday.getDate(),
yearDifference = (todayMonth == birthdayMonth && todayDay > birthdayDay) ? 
todayYear - birthdayYear : (todayMonth > birthdayMonth) ? todayYear - birthdayYear : todayYear - birthdayYear-1;

alert("Age: " + yearDifference);
});
})

</script>