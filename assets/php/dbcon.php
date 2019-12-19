<?php
$dbname= "project";
$user = "root";
$conn= mysqli_connect("localhost",$user,"",$dbname);
if (!$conn){
    echo "connection failed";
}else{
    

}

function clear($data){
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}














?>