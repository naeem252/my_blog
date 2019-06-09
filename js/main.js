$(document).ready(function () {

  $('.like').click(function (e) {
      e.preventDefault();
      var id=$(this).data('id');
      var user_id=$(this).data('user_id');
      console.log(id);
      if($(this).find('i').hasClass('far')){
          $.get("/my_blog/includes/likes.php?id="+id+"&user="+user_id+"&like=like",function (data) {
              console.log(data);
          });
          $(this).html('<i class="fas fa-thumbs-up"></i>');
            // location.reload();
      }else{
          $.get("/my_blog/includes/likes.php?id="+id+"&user="+user_id+"&like=unlike",function (data) {
              console.log(data);
          });
          $(this).html('<i class="far fa-thumbs-up"></i>');

          // location.reload();

      }
      // location.reload();
      console.log($(this));
  });



  $('.basic').click(function (e) {
      e.preventDefault();
      // console.log($(this).html('<i class="fas fa-thumbs-up"></i>'));

  });

});