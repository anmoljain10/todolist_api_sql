<?php
header('Access-Control-Allow-Origin: *');
include "connnect.php";
$i=$_POST['text'];
$sql = "DELETE FROM task WHERE id=$i";
$conn->query($sql);
//header("Location: http://todosql.local.geekydev.com");
?>