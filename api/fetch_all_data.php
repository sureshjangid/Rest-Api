<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$connect= mysqli_connect('localhost','root','','student1');

$sql = "SELECT * from `personal_info`";
$result = mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){

    $row  = mysqli_fetch_all($result,MYSQLI_ASSOC);
  
    echo json_encode($row);
    
}else{
    echo json_encode(array("message"=>"No Recode found","status"=>false));
}


?>