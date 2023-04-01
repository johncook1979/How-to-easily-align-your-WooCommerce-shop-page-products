add_action('wp_footer', 'my_square_image_align');
function my_square_image_align(){
?>
  <script>
    (function($) {
      
      // Square product images
      $('li.product img').height($('li.product img').width());
      
      // To make a horizontal rectangle apply maths as below which will set the height to 75% of the width of the image (a 100px wide image will be 75px high)
      // $('li.product img').height(($('li.product img').width())*.75);
      
      // To make a verticle rectangle apply maths as below which will set the height to 150% of the width of the image (50% taller than it is wide eg. 100px wide and 150px high)
      // $('li.product img').height(($('li.product img').width())*1.5);
      
    })( jQuery );
  </script>
<?php
}
