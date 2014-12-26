<?php
session_start();
include('connect.php');
if(isset($_SESSION['uid'])){
	$uid = $_SESSION['uid'];
	$query = mysql_query("SELECT * FROM users WHERE uid='$uid'");
	while ($result = mysql_fetch_assoc($query)) {
		$user_fullname = $result['firstname'].' '.$result['lastname'];
		echo "<h1>Your weclome ".$user_fullname."</h1>";
	}
}
?>

