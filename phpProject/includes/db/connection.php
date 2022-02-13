<?php
ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "pass";
$db['db_name'] = "cms";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

// $connection=mysqli_connect('localhost','root','pass','cms');
// if($connection){
//     echo "connection to MySQL established";
// }else{
// echo "connection to server failed";
// }
?>