<?php
include "connection.php"; ?>
<?php include "middleware.php"; ?>
<?php include "delete.php";?> 
<?php
if (isset($_POST['submit'])) {
    delete();
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
            <form action="put.php" method="put" class="form-group">
                <label for="username">username
                    <input type="text" name="username" type="username" class="form-control">
                </label>
                <label for="password">password
                    <input type="text" name="password" type="password" class="form-control">
                </label>
                <input class="btn btn-primary" type="submit" name="submit" value="submit">
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        GET_USERS();
                        ?>
                    </select>
                </div>
            </form>
            <?php

            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>