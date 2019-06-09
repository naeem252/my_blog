<?php include "../includes/path.php"?>
<?php include "../includes/header.php"?>
<?php include "../includes/navigation.php"?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="Full_name">Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="comment" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="send" class="btn btn-block btn-success">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php include "../includes/sidebar.php";?>
    </div>
</div>


<?php include "../includes/footer.php";?>
