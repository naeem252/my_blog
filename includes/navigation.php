<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/my_blog/images/logo.png" alt="logo images" width="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo MY_BLOG;?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Most View</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown">
                        <a class="dropdown-item" href="#">Bootstrap</a>
                        <a class="dropdown-item" href="#">PHP</a>
                        <a class="dropdown-item" href="#">Node js</a>
                        <a class="dropdown-item" href="#">HTML</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo MY_BLOG."pages/about.php";?>" tabindex="-1" aria-disabled="true">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo MY_BLOG."/pages/contact.php";?>" tabindex="-1" aria-disabled="true">Contact Us</a>
                </li>

                <?php
                if(user_login() && $_SESSION['user_role']=='admin'):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ADMIN."/";?>" tabindex="-1" aria-disabled="true">Admin</a>
                    </li>
                <?php endif;?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               <?php
               if(user_login()):
               ?>
                <a href="/my_blog/includes/logout.php" class="nav-link">log out</a>
                <?php endif;?>
            </form>
        </div>
    </div>
</nav>