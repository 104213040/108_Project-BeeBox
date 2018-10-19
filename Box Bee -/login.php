<?php
session_start();
require("mysql.php");
$username = $_POST[loginUsername];
$password = $_POST[loginPassword];

$username = mysqli_real_escape_string($link,$username);

$sql = "SELECT password, id FROM user WHERE loginID='$username'";
if($result = mysqli_query($link,$sql)){
    if($row = mysqli_fetch_assoc($result)){
        if($row['password'] == $password){
            $_SESSION['uID'] = $row['id'];
            echo "Login Success!!!";
        }else{
          	echo "Invalid Username or Password - Please try again <br />"
        }
    }
}
?>
