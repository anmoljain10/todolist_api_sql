<?php
header('Access-Control-Allow-Origin: *');
include "connnect.php";
$result = $conn->query("SELECT * FROM task");
$todo=[];
while($row = $result->fetch_assoc())
{
 $item['caption']=$row['caption'];
 $item['is_completed']=$row['is_completed'];
 $item['id']=$row['id'];
 array_push($todo,$item);
 
}
echo json_encode($todo);
$conn->close();
//header("Location:http://todolist.local.geekydev.com");
?>