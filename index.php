<?php include "includes/path.php"?>
<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>
<?php

$result=get_all_post();

?>
<!--post section-->
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8">

<!--            one post-->
            <?php while($row=mysqli_fetch_assoc($result)):?>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3 class="text-uppercase display-4"><?php echo $row['post_title'];?></h3>
                    <small class="text-muted">by <?php echo $row['post_author'];?></small>
                    <p class="lead text-muted">Post date :<?php echo $row['post_date'];?></p>
                    <p class="lead text-muted">Post Time: <?php echo $row['post_time'];?></p>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="post_image">
                                <figure class="figure">
                                    <img src="images/<?php echo $row['post_image'];?>" alt="bootstrap image" class="rounded img-fluid">
                                    <figcaption class="text-center figure-caption">
                                        Thsi is css image
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="post_content">
                                <?php echo $row['post_content'];?>
                            </div>
                            <div class="col-md-10">
                                <div class="post_footer">
                                    <div class="float-left">
                                        <span class="mr-2 post_views">views:<?php echo $row['post_views'];?></span>
                                        <span class="post_likes"><a href="#" data-user_id="<?php echo $_SESSION['user_id'] ?? '';?>" data-id="<?php echo $row['post_id'];?>"  class="like"><i class="far fa-thumbs-up"></i></a> <?php echo $row['post_like'];?></span>
                                    </div>
                                    <div class="float-right">
                                        <a href="" class="btn btn-primary">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--            one post-->

                </div>
            </div>
            <?php endwhile;?>
        </div>
        <!--side bar-->
<?php include "includes/sidebar.php" ;?>
    </div>
</div>
<!--pagination-->
<?php include "includes/pagination.php";?>
<?php include "includes/footer.php";?>