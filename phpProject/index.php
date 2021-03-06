<?php
include "includes/html/header.php"; ?>
<?php
include "includes/db/connection.php"; ?>
<!-- Navigation -->
<?php include "includes/html/nav.php"; ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php 
                $query="SELECT * FROM posts";
                $getPost=mysqli_query($connection,$query);

                while($row=mysqli_fetch_assoc($getPost)){
                 $post_title=$row['post_title'];
                 $post_auth=$row['post_author'];
                 $post_date=$row['post_date'];
                 $post_content=$row['post_content'];
?>
                 <h1 class="page-header">
                
                <small>Secondary Text</small>
            </h1>
            <!-- First Blog Post -->
            <h2>
                <a href="#"><?php echo $post_title?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $post_auth?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date?></p>
            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p><?php echo $post_content?></p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>
                <?php } ?>
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <?php
        include "includes/html/sideWidget.php";?>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Footer -->
    <?php include "includes/html/footer.php";?>