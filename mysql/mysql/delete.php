<?php include "connection.php"; ?>

<?php
function delete(){
    global $connection;
    $username =   $_POST['username'];
    $pass = $_POST['password'];
    $id =   $_POST['id'];
    $query = "DELETE FROM users WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "error is update call";
    } else {
        echo "users updated";
    }

}

?>