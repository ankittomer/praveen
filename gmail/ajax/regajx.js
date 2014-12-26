				$(document).ready(function(){
				$("#sub").click(function(){
				var name = $("#na").val();
				var lname = $("#lna").val();
				var username = $("#us").val();
				var password = $("#pa").val();
				var mobile = $("#mo").val();
				var email = $("#em").val();
				
				// Returns successful data submission message when the entered information is stored in database.
				var dataString = '&name1='+ name + '&lname1='+ lname + '&username1='+ username + '&password1='+ password + '&mobile1='+ mobile '&email1='+ email;
				if(name==''||lname==''||username==''||password==''||mobile==''||email=='')
				{
				alert("Please Fill All Fields");
				}
				else
				{
				// AJAX Code To Submit Form.
				$.ajax({
				type: "POST",
				url: "connaction.php",
				data: dataString,
				cache: false,
				success: function(result){
				alert(result);
				}
				});
				}
				return false;
				});
				});				