<div class="row">
    <div class="col-md-2 admin_nav_container">
        <div class="admin_nav">
            <ul class="list-unstyled admin_nav-bar justify-content-sm-center">
                <li class="admin_nav_item"><a class="admin_nav_link" href="<?php echo MY_BLOG."admin/";?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="admin_nav_item">
                    <a class="admin_nav_link" href="" id="post"><i class="fas fa-file-alt"></i> Posts <span class="post_arr"><i class="fas fa-sort-down"></i></span></a>
                    <ul class="list-unstyled ml-3"  id="dropdown">
                        <li class="admin_nav_item">
                            <a class="admin_nav_link" href="<?php echo ADMIN."/pages/posts.php";?>"><i class="fas fa-file-alt"></i> All Post </a>
                        </li>
                        <li class="admin_nav_item">
                            <a class="admin_nav_link" href="<?php echo ADMIN."/pages/posts.php?show=add_post";?>"><i class="fas fa-file-alt"></i> Add Post</a>
                        </li>
                    </ul>
                </li>
                <li class="admin_nav_item">
                    <a class="admin_nav_link" href="<?php echo ADMIN."/pages/categories.php";?>"><i class="fas fa-file-alt"></i> Catrgories </a>
                </li>
                <li class="admin_nav_item"><a class="admin_nav_link" href=""><i class="fas fa-comments"></i> Comments</a></li>
                <?php if(is_admin()):?>
                <li class="admin_nav_item">
                    <a class="admin_nav_link" id="post2" href=""><i class="fas fa-user-friends"></i> Users <span class="post_arr2"><i class="fas fa-sort-down"></i></span></a>
                    <ul class="list-unstyled ml-3"  id="dropdown2">
                        <li class="admin_nav_item">
                            <a class="admin_nav_link" href="<?php echo ADMIN."/pages/users.php";?>"><i class="fas fa-file-alt"></i> All Users </a>
                        </li>
                        <li class="admin_nav_item">
                            <a class="admin_nav_link" href="<?php echo ADMIN."/pages/users.php?show=add_user";?>"><i class="fas fa-file-alt"></i> Add User</a>
                        </li>
                    </ul>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>