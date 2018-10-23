+<?php
/*
   session_start();
	 $host = '163.22.17.251';
	 $user = 'beebox';
	 $password = 'beebox1234';
	 $database = 'pi';
	 $link = mysqli_connect($host, $user, $password, $database );
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($link,$_POST['id']);
      $mypassword = mysqli_real_escape_string($link,$_POST['pwd']);

      $sql = "SELECT id FROM user WHERE loginID = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         session_register("uID");
         $_SESSION['loginID'] = $myusername;

         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
	 */

session_start();
$host = '163.22.17.251';
$user = 'beebox';
$password = 'beebox1234';
$database = 'pi';
$link = mysqli_connect($host, $user, $password, $database );
$count = 0;
/*$account = 'beebox';
$password = 'beebox1234';
if($_POST['id'] = $account && $_POST['pwd'] = $password ){
	$_SESSION['uID'] = $row['id'];
	echo "login Success!!";
	header("Location:index.php");
}else {
	echo "wrong password or username";
}*/

			//預設帳號密碼

$userName = $_POST['id'];
$passWord = $_POST['pwd'];
$message = "Invalid Username or Password - Please try again";
$userName = mysqli_real_escape_string($link,$userName);
$sql = "SELECT * FROM user WHERE id='1'";
if ($result = mysqli_query($link,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['password'] == $passWord && $row['loginID'] == $userName) {

			$_SESSION['uID'] = $row['id'];

			echo "login Success!!";
			header("Location:index.php");
		  }else {
			header("Location:error.html");
			header("Refresh:3;url=loginForm.php");
			}
	 }
}

?>
