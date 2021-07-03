<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject1";
$eventtitle = $_POST['eventtitle'];
$eventdesc = $_POST['eventdesc'];
$eventtime = $_POST['eventtime'];
$eventdate = $_POST['eventdate'];
$eventlocation = $_POST['eventlocation'];
//Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO Events (EventTitle, EventDesc, EventTime, EventDate, EventLocation)
        VALUES(' " . $eventtitle . " ', ' " . $eventdesc . " ',' " . $eventtime . " ',' " . $eventdate . " ',  ' " . $eventlocation . " ' )";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();          
?>
