<?php

function get_all_post(){
    global $connection;

    $query="SELECT * FROM posts";
    $send_query=mysqli_query($connection,$query);

    return $send_query;
}

function get_all_users(){
    global $connection;
    $query="SELECT * FROM users";
    $send=mysqli_query($connection,$query);
    confirm_query($send);
    return $send;
}

function register_user($user_info){
    global $connection;
    $query="INSERT INTO users(first_name,last_name,user_name,user_email,user_pass,user_role,user_gender) ";
    $query.="VALUES ('".esc($user_info['fname'])."' ,";
    $query.="'".$user_info['lname']."' ,";
    $query.="'".$user_info['user_name']."' ,";
    $query.="'".$user_info['user_email']."' ,";
    $query.="'".$user_info['user_pass']."' ,";
    $query.="'subscriber' ,";
    $query.="'".$user_info['user_gender']."')";
    $send = mysqli_query($connection,$query);

    if(!$send){
        die("something wrong".mysqli_error($connection));
    }


}

//category
function get_all_cat(){
    global $connection;
    $query="SELECT * FROM category";
    $send=mysqli_query($connection,$query);
    confirm_query($send);
    return $send;
}

function add_cat($data){
    global $connection;
    $query="INSERT INTO category(cat_name) VALUES ('$data')";
    $send=mysqli_query($connection,$query);
    if($send){
        re_direct('admin/pages/categories');
    }else{
        die('wrong');
    }
}

function edit_cat($data){
    global $connection;
    $query="UPDATE category SET cat_name='".esc($data['cat_name'])."' WHERE cat_id={$data['id']}";
    $send=mysqli_query($connection,$query);
    if($send){
        re_direct('admin/pages/categories');
    }else{
        die('wrong');
    }
}