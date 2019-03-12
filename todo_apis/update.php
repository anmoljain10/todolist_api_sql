<?php
header('Access-Control-Allow-Origin: *');
include "connnect.php";
$i=$_REQUEST['index'];
$f=$_POST['field'];
$val=$_POST['val'];
$sql = "UPDATE task set $f='$val' WHERE id='$i'";

if ($conn->query($sql) === TRUE) {
    echo "$f";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
//header("Location: http://todosql.local.geekydev.com");
?>