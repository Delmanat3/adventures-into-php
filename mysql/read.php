<?php 


//ESTABLISHED CONNECTION TO THE MYSQL SERVER
$connection=mysqli_connect('localhost','root','','loginapp');
if($connection){
    echo "connection established";

}else{
    die("error in connecting");
}

//MYSQL SYNTAX STRAIGHT INSERTS ETC
$query = "SELECT * FROM users";


$result=mysqli_query($connection,$query);

if(!$result){
    //die ends connection to the mysql server in phpadmin
    die('query failed' );
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Title</title>
</head>

<body>
  <div class="container">
      <div class="col-sm-6">
          <?php 
          while($row = mysqli_fetch_assoc($result)){


            ?>
            <pre>
                <?php
            print_r($row);
            ?>
            </pre>
            <?php
        

          }
          
          ?>
      </div>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>