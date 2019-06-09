<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Post Title</th>
                <th>Post Author</th>
                <th>Post Category</th>
                <th>Post Content</th>
                <th>Post Date</th>
                <th>Post Publish</th>
                <th>Post Likes</th>
                <th>Post Views</th>
                <th>Post Images</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $all_post=get_all_post();
            while($row=mysqli_fetch_assoc($all_post)):
                ?>
                <tr>
                    <td><?php echo $row['post_id'];?></td>
                    <td><?php echo $row['post_title'];?></td>
                    <td><?php echo $row['post_author'];?></td>
                    <td><?php echo $row['post_category'];?></td>
                    <td><?php echo substr($row['post_content'],0,100);?></td>
                    <td><?php echo $row['post_date'];?></td>
                    <td><?php echo $row['post_publish'];?></td>
                    <td><?php echo $row['post_like'];?></td>
                    <td><?php echo $row['post_views'];?></td>
                    <td><img width="50" src="<?php echo MY_BLOG."images/".$row['post_image'];?>" alt=""></td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="" data-toggle="modal" data-target="#myModal" class="delete_post" data-delete="<?php echo $row['post_id'];?>">Delete</a></td>
                </tr>
            <?php endwhile;?>
            </tbody>
        </table>
    </div>
</div>