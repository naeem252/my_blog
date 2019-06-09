<?php include $_SERVER['DOCUMENT_ROOT']."/my_blog/includes/db.php";?>
<?php

$user_name=$_GET['user_name'] ?? '';

$query="DELETE FROM users WHERE user_name='$user_name' LIMIT 1";
$send=mysqli_query($connection,$query);
if($send){
    header("location:/my_blog/admin/pages/users.php");
}else{
    die('djafakj');
}