<?php include $_SERVER['DOCUMENT_ROOT']."/my_blog/includes/db.php";?>
<?php

$user_name=$_GET['user_name'] ?? '';
$user_role=$_GET['user_role'] ?? '';

$query="UPDATE users SET user_role='$user_role' WHERE user_name='$user_name' LIMIT 1";
$send=mysqli_query($connection,$query);
echo $send;
?>