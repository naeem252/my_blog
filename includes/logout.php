<?php ob_start();?>
<?php session_start();?>
<?php include $_SERVER['DOCUMENT_ROOT']."/my_blog/includes/path.php";?>
<?php include ROOT."/includes/db.php";?>
<?php include ROOT."/includes/functions.php";?>
<?php include ROOT."/includes/query_function.php";?>

<?php
unset($_SESSION['user_name']);
re_direct('index');
?>