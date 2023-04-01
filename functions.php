add_action('wp_footer', 'my_square_image_align');
function my_square_image_align(){
?>
  <script>
    (function($) {
      
      // Square product images
      $('li.product img').height($('li.product img').width());
      
    })( jQuery );
  </script>
<?php
}
