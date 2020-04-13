<?php

// description
function uza_blog_description_callback(){
   $blog_description = esc_attr(get_option('blog_description'));
   ?>
      <textarea name="blog_description" rows="8" cols="80"><?php echo $blog_description; ?></textarea>
   <?
}
