<?php 
//ESTABLISHED CONNECTION TO THE MYSQL SERVER
$connection=mysqli_connect('localhost','root','','loginapp');
if($connection){
    echo "connection established to MySql phpadmin database";
}else{
    die("error in connecting");
}
?>