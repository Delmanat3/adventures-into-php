<?php
include "connection.php"; ?>
<?php include "middleware.php"; ?>
<?php include "updateQuery.php"; ?>

<!-- //ESTABLISHED CONNECTION TO THE MYSQL SERVER

//MYSQL SYNTAX STRAIGHT INSERTS ETC -->

<?php
if (isset($_POST['submit'])) {
  update();
}
?>
<?php include "HTM/header.php";?>
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
 <?php include "footer.php";?>