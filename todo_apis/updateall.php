<?php
include "connnect.php";


$sql = "UPDATE task set is_completed='1'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
header("Location: http://todosql.local.geekydev.com");
?>