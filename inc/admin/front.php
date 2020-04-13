<?php
function change_header_bgc_color()
{
   require 'front/header.php';
   require 'front/hero.php';
   require 'front/services.php';
   require 'front/portfolio.php';
   require 'front/advertise.php';
   require 'front/newsletter.php';
   require 'front/blog.php';
   require 'front/mobile/menu.php';
   require 'front/footer.php';
   require 'front/archive.php';
}
add_action('wp_head', 'change_header_bgc_color');
