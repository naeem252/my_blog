

<table class="table-bordered table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
            <th>User Gender</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users=get_all_users();
            while($row=mysqli_fetch_assoc($users)):
        ?>
            <tr>
                <td><?php echo $row['user_id'];?></td>
                <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                <td><?php echo $row['user_name'];?></td>
                <td><?php echo $row['user_email'];?></td>
                <td>
                    <div class="form-group">
                        <select name="role" data-user="<?php echo $row['user_name'];?>"  class="form-control user_role">
                            <option value="admin" <?php echo $row['user_role']=='admin' ? 'selected':'';?>>Admin</option>
                            <option value="subscriber" <?php echo $row['user_role']=='subscriber' ? 'selected':'';?>>Subscriber</option>
                        </select>
                    </div>
                </td>
                <td><?php echo $row['user_gender'];?></td>
                <td><a href="/my_blog/admin/includes/edit_user.php?edit_id=<?php echo $row['user_id'];?>">Edit</a></td>
                <td><a data-toggle="modal" data-target="#myModal" class="delete" href="/my_blog/admin/includes/delete_user.php?delete_id=<?php echo $row['user_id'];?>" data-role="<?php echo $row['user_role'];?>" data-id="<?php echo $row['user_id'];?>" data-user="<?php echo $row['user_name'];?>">Delete</a></td>
            </tr>
    <?php endwhile;?>
    </tbody>
</table>