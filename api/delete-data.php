<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization');


$connect= mysqli_connect('localhost','root','','student1');

$data = json_decode(file_get_contents('php://input'),true);

$sid =  $data['id'];
// $dob =  $data['birth'];

$sql = "DELETE from `personal_info` where id='$sid'";
$result = mysqli_query($connect,$sql);

if($result){
echo json_encode(array("message"=>"Data Deleted SuccessFull",'Status'=>true));
    
}else{
   
    echo json_encode(array("message"=>"Can't Deleted Data","status"=>false));
}


?>