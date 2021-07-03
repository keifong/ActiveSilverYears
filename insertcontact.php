<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject1";
$contactname = $_POST['contactname'];
$contactemail = $_POST['contactemail'];
$contactnumber = $_POST['contactnumber'];
$comment = $_POST['comment'];
//Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO Feedback (ContactName, ContactEmail, ContactNumber, Comment)
        VALUES(' " . $contactname . " ', ' " . $contactemail . " ', " . $contactnumber . ",  ' " . $comment . " ' )";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();          
?>

