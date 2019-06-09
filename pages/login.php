<?php
$query="SELECT * FROM users WHERE user_name='$user_name'";
$send=mysqli_query($connection,$query);
$data=mysqli_fetch_assoc($send);
$row=mysqli_num_rows($send);

if(($row > 0 && password_verify($user_password,$data['user_pass']) ) || $user_password===$data['user_pass'] ){
    $_SESSION['user_name']=$user_name;
    $_SESSION['user_id']=$data['user_id'];
    $_SESSION['user_role']=$data['user_role'];
    re_direct("admin/index");
}else{
    $message="<span class='text-danger'>Incorrect username or password</span>";
}

