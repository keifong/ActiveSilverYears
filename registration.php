<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

session_start();
header('location:login.php');

//variable connection = $con
$con = mysqli_connect('localhost', 'root', ''); 
//localhost is my database, root is the username, password currently is blank(by default unless i change


mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
//$package = $_POST['package'];

$s = " select * from memberstable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
} else {
    $reg=" insert into memberstable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo " Registration Successful";
}
?>
