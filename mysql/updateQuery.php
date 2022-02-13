

<?php
function update(){
    global $connection;
    $username =   $_POST['username'];
    $pass = $_POST['password'];
    $id =   $_POST['id'];
    $query = "UPDATE users SET username = '$username',password = '$pass' WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "error is update call";
    } else {
        echo "users updated";
    }

}

?>