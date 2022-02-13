<?php 
include "connection.php";
if(isset($_POST['submit'])) {
    $name=$_POST['username'];
    $pass=$_POST['password'];
//ESTABLISHED CONNECTION TO THE MYSQL SERVER


//MYSQL SYNTAX STRAIGHT INSERTS ETC
$query = "INSERT INTO users( username , password) ";
$query .="VALUES ('$name','$pass')";


$result=mysqli_query($connection,$query);

if(!$result){
    //die ends connection to the mysql server in phpadmin
    die('query failed' );
}
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
        <div class="col-xs-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">username
                        <input name="username" class="form-control" type="username">
                    </label>
                    <div class="form-group">
                         <label for="password"> password
                             <input  name="password" class="form-control" type="password">
                            </label>
                            
                            </div>
                </div>
                <input class="btn" type="submit"  name="submit">
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>