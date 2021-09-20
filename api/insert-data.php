<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization');


$connect= mysqli_connect('localhost','root','','student1');

$data = json_decode(file_get_contents('php://input'),true);

$name =  $data['name'];
// $dob =  $data['birth'];

$sql = "INSERT INTO `personal_info` (`name`) VALUES ('{$name}')";
$result = mysqli_query($connect,$sql);

if($result){
echo json_encode(array("message"=>"Data Insert SuccessFull",'Status'=>true));
    
}else{
   
    echo json_encode(array("message"=>"Can't Insert Data","status"=>false));
}


?>