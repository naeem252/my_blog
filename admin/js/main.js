$(document).ready(function () {
   $('#dropdown').hide();
   $('#post').click(function (e) {
      e.preventDefault();
      var icon =document.querySelector('.post_arr');
      if(icon.style.transform==='rotateX(180deg)'){
         icon.style.transform = 'rotateX(0deg)';
      }else{
         icon.style.transform ='rotateX(180deg)';
      }
      $('#dropdown').slideToggle(400);
   });

   $('#dropdown2').hide();
   $('#post2').click(function (e) {
      e.preventDefault();
      var icon =document.querySelector('.post_arr2');
      if(icon.style.transform==='rotateX(180deg)'){
         icon.style.transform = 'rotateX(0deg)';
      }else{
         icon.style.transform ='rotateX(180deg)';
      }
      $('#dropdown2').slideToggle(400);
   });


   var user;
   var role;
   var id;
   $('.delete').click(function (e) {
      e.preventDefault();
       user=$(this).data('user');
      $('.modal-body p').text('Are you wanted to delete '+user);
   });

   $('#yes_delete').click(function (e) {
      e.preventDefault();
      $.get("/my_blog/admin/includes/delete_user.php?user_name="+user);
      location.reload();
   });

$('.user_role').change(function (e) {
   e.preventDefault();
   role=$(this).val();
   user=$(this).data('user');
   $.get("/my_blog/admin/includes/change_user_role.php?user_name="+user+"&user_role="+role);
   location.reload();
});

$('.delete_post').click(function (e) {
   e.preventDefault();
   id=$(this).data('delete');
});

   $('#yes_delete_post').click(function (e) {
      e.preventDefault();
      $.get("/my_blog/admin/includes/delete_post.php?post_id="+id,function (data) {
         console.log(data);
      });
      location.reload();
   });



   CKEDITOR.replace( 'post_content' );
});