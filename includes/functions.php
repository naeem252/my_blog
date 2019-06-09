<?php
function esc($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

function confirm_query($send){
    global $connection;
    if(!$send){
        die("something wrong".mysqli_error($connection));
    }
}

function user_login(){
    if(isset($_SESSION['user_name'])){
        return true;
    }else{
        return false;
    }
}

function is_admin(){
    global $connection;
    $user_name=$_SESSION['user_name'] ?? '';
    $query="SELECT user_role FROM users WHERE user_name='$user_name'";
    $send=mysqli_query($connection,$query);
    $data=mysqli_fetch_assoc($send);
    if($data['user_role']==='admin'){
        return true;
    }else{
        return false;
    }
}

function re_direct($url){
    header("location:/my_blog/".$url.".php");
}