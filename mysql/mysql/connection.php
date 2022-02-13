<?php 


//ESTABLISHED CONNECTION TO THE MYSQL SERVER
$connection=mysqli_connect('localhost','root','','loginapp');
if($connection){
    echo "connection established";
}else{
    die("error in connecting");
}

?>