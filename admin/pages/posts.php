<?php include "../includes/path.php";?>
<?php include ROOT."/admin/includes/admin_header.php"?>

<?php include ROOT."/admin/includes/admin_nav.php";?>
<div class="col-md-10 main_content">
    <!--        admin topbar-->
    <?php
          if(!isset($_GET['show'])){
              include ROOT."/admin/includes/admin_topbar.php";
          }
    ?>


   <?php
   $show=$_GET['show'] ?? '';
   switch ($show){
       case 'add_post':
           include ROOT."/admin/includes/add_post.php";
           break;
       default:
           include ROOT."/admin/includes/view_all_post.php";
   }


   ?>


</div>

<?php include ROOT."/admin/includes/admin_footer.php"?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are You sure?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="yes_delete_post" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>