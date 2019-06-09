<?php

if(isset($_POST['login'])){
    $user_name=$_POST['user_name'];
    $user_password=$_POST['password'];

    include ROOT."/pages/login.php";
}


?>


<div class="col-md-4">
<?php
if(!user_login()){
    include ROOT."/includes/login_form.php";
}
?>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-dark my-4">
                <div class="card-header">
                    Recent Post
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. <a href="">Bootstrap</a></li>
                        <li class="list-group-item">2. <a href="">PHP</a></li>
                        <li class="list-group-item">3. <a href="">Javascrippt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-dark my-4">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. <a href="">Bootstrap</a></li>
                        <li class="list-group-item">2. <a href="">PHP</a></li>
                        <li class="list-group-item">3. <a href="">Javascrippt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-dark my-4">
                <div class="card-header">
                    Most Views
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. <a href="">Bootstrap</a></li>
                        <li class="list-group-item">2. <a href="">PHP</a></li>
                        <li class="list-group-item">3. <a href="">Javascrippt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>