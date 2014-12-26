
<?php 
	
	
	
	$var=mysql_connect("localhost","root","");
	$db=mysql_select_db("gmail");
	$email=$_POST["email"];
	$passowrd=$_POST["pass"];
	
	$reg="select * from users where email='".$email."' and passowrd='".$passowrd."'";
	$xyz=mysql_query($reg);
	$row=mysql_fetch_array($xyz);
	
	if(!empty($row))
	{
		header("location:home.php");
	}
	else
		{
		
		
			
	
	

?>
<a href="registration.php">create your account</a>
<?php
}
?>