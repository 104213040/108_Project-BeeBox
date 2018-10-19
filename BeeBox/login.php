<?php
session_start();
require("mysql.php");
$userName = $_POST['id'];
$passWord = $_POST['pwd'];

$userName = mysqli_real_escape_string($link,$userName); 

$sql = "SELECT password, id FROM user WHERE loginID='$userName'";
if ($result = mysqli_query($link,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['password'] == $passWord) {

			$_SESSION['uID'] = $row['id'];

			echo "login Success!!";
		} else {

			echo "Invalid Username or Password - Please try again <br />";
		}
	}
}
?>
