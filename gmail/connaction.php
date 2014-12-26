<?php
	session_start();
	include('connect.php');
	if(isset($_POST['send']))
	{
	// error_reporting(0);
	$first_name = $_POST['first_name'];
	$rename = $_POST['rename'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$countery = $_POST['countery'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
//	print_r($_POST);/
	//die();

	$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid Email.......Please try again";
			
		}
		else
		{
			$result = mysql_query("SELECT * FROM users WHERE email='$email'")or die(mysql_error());
			$num_rows = mysql_num_rows($result);
			if($num_rows>=1){
			 echo 'User is already registered with this email address, Please try another email address.';
			}
			else{

			$abc="insert into users(firstname,lastname,username,passowrd,gender,countery,mobilenumebr,email)values('$first_name','$rename','$username','$password','$gender','$countery','$mobile','$email')";
			$sel=mysql_query($abc);
			$last_insert_uid =  mysql_insert_id($con); 
			$_SESSION['uid'] = $last_insert_uid;
			header("location:home.php");
			}
			
		}

}
?>