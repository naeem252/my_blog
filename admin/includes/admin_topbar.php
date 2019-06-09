<div class="row">
    <div class="col-md-12 topbar_container">
        <div class="topbar clearfix">
            <div class="d-flex justify-content-between align-items-center">
                <div class="user_information">
                    <span class="online"><i class="fas fa-circle"></i></span>
                    <span class="user_name"><?php echo $_SESSION['user_name'];?></span>
                    <span class="logout"><a href="/my_blog/includes/logout.php" class="btn btn-primary">Log Out</a></span>
                </div>
                <div class="view_site">
                    <a href="<?php echo MY_BLOG;?>">View Site</a>
                </div>
                <div class="">
                    <h5><span class="online"><i class="fas fa-circle"></i></span> All active Users:42</h5>
                </div>
            </div>
        </div>
    </div>
</div>