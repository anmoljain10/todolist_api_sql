<?php
header('Access-Control-Allow-Origin: *');
include "connnect.php";
$sql = "INSERT INTO task (caption, is_completed)
VALUES ('$_POST[item]', '0')";

if ($conn->query($sql) === TRUE) //conn is the connection varible
{ 
    echo "$_POST[item]";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>