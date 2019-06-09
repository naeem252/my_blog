<?php
$user=$_SESSION['user_name'];
$query="SELECT * FROM users WHERE user_name='$user'";
$send=mysqli_query($connection,$query);
$data=mysqli_fetch_assoc($send);
if(isset($_POST['add'])){
    $post_title=$_POST['post_title'];
    $post_category=$_POST['post_category'];
    $post_date=date('l jS \of F Y h:i:s A');
    $post_image=$_FILES['post_image']['name'];
    $image_tmp=$_FILES['post_image']['tmp_name'];
    $post_author=$data['first_name']." ".$data['last_name'];
    $post_content=$_POST['post_content'];

    move_uploaded_file($image_tmp,ROOT."/images/".$post_image);

    $query ="INSERT INTO posts(post_author,post_title,post_category,post_content,post_date,post_publish,post_image) ";
    $query.="VALUES ('$post_author', '$post_title', '$post_category', '$post_content', '$post_date', 'yes', '$post_image')";
    $send=mysqli_query($connection,$query);

    confirm_query($send);

    re_direct('/admin/pages/posts');

}


?>


<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="post_title">Post Title</label>
                <input type="text" class="form-control" name="post_title" placeholder="post title">
            </div>
            <div class="form-group">
                <label for="post_image">Post Image</label>
                <input type="file" class="form-control" name="post_image" placeholder="post title">
            </div>
            <div class="form-group">
                <label for="post_title">Post Category</label>
                <select name="post_category" id="" class="form-control">
                    <option value="bootstrap">Bootstrap</option>
                    <option value="Javascript">Javascript</option>
                    <option value="Css">css</option>
                </select>
            </div>
            <div class="form-group">
                <label for="post_content">Post Content</label>
                <textarea  name="post_content" id="post_content" placeholder="post content" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-success" type="submit" name="add" value="Add Post">Add Post</button>
        </form>
    </div>
</div>