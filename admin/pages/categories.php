<?php include "../includes/path.php"; ?>
<?php include ROOT . "/admin/includes/admin_header.php" ?>

<?php include ROOT . "/admin/includes/admin_nav.php"; ?>


<?php
if (isset($_POST['add_cat'])) {
    $cat_name = $_POST['cat_name'];

    add_cat($cat_name);
}

if (isset($_POST['edit_cat'])) {
    $cat_name = $_POST['cat_name'];
    $cat_id=$_GET['id'] ?? '';
    $data=['cat_name'=>$cat_name,'id'=>$cat_id];
    edit_cat($data);
}


if(isset($_GET['show'])){
    $id=$_GET['id'];
    $query="SELECT cat_name FROM category WHERE cat_id=$id";
    $send=mysqli_query($connection,$query);
    $cat_db_data=mysqli_fetch_assoc($send);
    $cat_db_name=$cat_db_data['cat_name'];
}

?>

    <div class="col-md-10 main_content">
<?php include ROOT . "/admin/includes/admin_topbar.php"; ?>
    <div class="row mt-5">
    <div class="col-md-6">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="cat_name" class="form-control" placeholder="Category name">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add Category" name="add_cat">
        </div>
    </form>
<!--edit category-->
<?php if (isset($_GET['show'])): ?>
    <form action="" method="post" class="mt-3">
        <h4>Edit Category</h4>
        <div class="form-group">
            <label for="">Category Name</label>
            <input value="<?php echo $cat_db_name ?? '';?>" type="text" name="cat_name" class="form-control" placeholder="Edit Category">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit Category" name="edit_cat">
        </div>
    </form>
<?php endif;?>
    </div>
    <div class="col-md-6">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $data = get_all_cat();
            while ($row = mysqli_fetch_assoc($data)):
                ?>
                <tr>
                    <td><?php echo $row['cat_id']; ?></td>
                    <td><?php echo $row['cat_name']; ?></td>

                    <td><a href="<?php echo ADMIN . "/pages/categories.php?show=edit&id={$row['cat_id']}"; ?>">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    <?php include ROOT . "/admin/includes/admin_footer.php"; ?>