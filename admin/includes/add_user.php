<?php
if (isset($_POST['add_user'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['c_password'];
    $gender = $_POST['gender'];

    if ($password === $confirm_password) {

        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

        $user_info_arr = [

            'lname' => $lname,
            'fname' => $fname,
            'user_name' => $user_name,
            'user_pass' => $password,
            'user_gender' => $gender,
            'user_email' => $email

        ];
        register_user($user_info_arr);
        re_direct('admin/pages/users');

    } else {
        echo "Password are not match";
    }


}

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user_name">Username</label>
                    <input type="text" name="user_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="c_password">Confirm Password</label>
                    <input type="text" name="c_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="add_user" class="form-control btn btn-secondary" value="Register">
                </div>

            </form>
        </div>
    </div>
</div>