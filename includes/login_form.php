<div class="row">
    <div class="col-md-12">
        <div class="card border-dark my-4">
            <div class="card-header">
                Log In
            </div>
            <div class="card-body">
                <?php
                    echo $message?? ' ';
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" id="username" name="user_name" value="<?php echo $user_name ?? '';?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="<?php echo $user_password ?? '';?>" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="login" value="Log in"> or
                    </div>
                </form>
                <a href="<?php echo MY_BLOG."pages/registration.php";?>">Registration</a>
            </div>
        </div>
    </div>
</div>