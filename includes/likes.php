<?php ob_start();?>
<?php session_start();?>
<?php include "../includes/path.php"?>

<?php include ROOT."/includes/db.php";?>
<?php include ROOT."/includes/functions.php";?>
<?php include ROOT."/includes/query_function.php";?>

<?php
    $id=$_GET['id'];
    $user=$_GET['user'];
    $like=$_GET['like'];
    if($like=='like'){
        $query="INSERT INTO likes(post_id, user_id) VALUES ($id, $user)";
    }else{
        $query="DELETE FROM likes WHERE post_id=$id";
    }
    $send=mysqli_query($connection,$query);
    $get_like="SELECT * FROM likes";
    $send_like=mysqli_query($connection,$get_like);
    $all_like=mysqli_num_rows($send_like);
    if($like=='like'){
        $post_query="UPDATE posts SET post_like=post_like+1 WHERE post_id=$id";
    }else{
        $post_query="UPDATE posts SET post_like=post_like-1 WHERE post_id=$id";
    }
    $send_post=mysqli_query($connection,$post_query);
    


?>
