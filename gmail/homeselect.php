<html>
<head>
</head>

<body>
<?php
	// error_reporting(0);
	$first_name = $_POST['first_name'];
	$rename = $_POST['rename'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$countery = $_POST['countery'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
//	print_r($_POST);
	//die();
	$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid Email.......";
		}
		else
		{
			$result = mysql_query("SELECT * FROM registration WHERE email='$email'");
	
			echo $_POST['send'];
	
			$var=mysql_connect("localhost","root","");
			$db=mysql_select_db("gmail");
	

			$abc="insert into users(firstname,lastname,username,passowrd,gender,countery,mobilenumebr,email)values('$first_name','$rename','$username','$password','$gender','$countery','$mobile','$email')";
			$sel=mysql_query($abc);
		}
	
echo "your welcome sir";
mysql_close ($var);
?>
</body>
</html>
