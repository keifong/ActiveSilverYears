<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

session_start();

//what does this do????????????????? it prevents me from launching home.php directly as it is unintended, will cause error if launched directly, so we preventing it by doing this below
if(!isset($_SESSION['username'])){   
    header('location:login.php');
}
?>

<html>
    <head>
        <title> Home Page</title>
        <!-- design your home page here -->
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        
    </head>
    <body>
        
        <div class="container">
        <!-- logout option -->
        <a class="float-right" href="logout.php"> LOGOUT </a>
        
        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
        
    </body>
</html>
