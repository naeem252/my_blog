<?php include $_SERVER['DOCUMENT_ROOT']."/my_blog/includes/db.php";?>
<?php

$post_id=$_GET['post_id'] ?? '';

$query="DELETE FROM posts WHERE post_id=$post_id LIMIT 1";
$send=mysqli_query($connection,$query);
echo $send;
if($send){
    header("location:/my_blog/admin/pages/posts.php");
}else{
    die('naem');
}