$(document).ready(function() {
$("#register").click(function() {
var first_name = $("#first_name").val();
var rename = $("#rename").val();
var username = $("#username").val();
var password = $("#password").val();
var cpassword = $("#cpassword").val();
var mobile = $("#mobile").val();
var email = $("#email").val();

if (name == '' || rename == '' || username == '' || password == '' || cpassword == '' || mobile == '' || email == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("register.php", {
name1: name,
email1: email,
password1: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});