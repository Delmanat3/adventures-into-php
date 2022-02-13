<?php include "connection.php";
//MYSQL SYNTAX STRAIGHT INSERTS ETC

function GET_USERS(){
    global $connection;
    $query = "SELECT * FROM users";

    $result=mysqli_query($connection, $query);
    if(!$result){
        //die ends connection to the mysql server in phpadmin
        die('query failed' );
    }
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        echo "<option value=$id >$id</option>";
    }
}

?>
