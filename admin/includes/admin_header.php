<?php session_start();?>

<?php include ROOT."/includes/db.php";?>
<?php include ROOT."/includes/functions.php";?>
<?php include ROOT."/includes/query_function.php";?>
<?php
if(!isset($_SESSION['user_name'])){
    re_direct('index');
}elseif ($_SESSION['user_role'] !=='admin'){
    re_direct('index');

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--fontawsome icon link-->
    <link rel="stylesheet" href="/my_blog/admin/css/all.min.css">
    <!--Bootstrap style-->
    <link rel="stylesheet" href="/my_blog/admin/css/bootstrap.min.css">
    <!--my custom style-->
    <link rel="stylesheet" href="/my_blog/admin/css/main.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="/my_blog/admin/js/ckeditor/ckeditor.js"></script>

    <title>MY | Blog</title>
</head>
<body>