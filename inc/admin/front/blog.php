<?php
    $blog_bgc = esc_attr(get_option('color_blog_bgc'));
    $blog_image = esc_attr(get_option('blog_image'));
    $blog_title_color = esc_attr(get_option('color_blog_title'));
    $blog_title_size = esc_attr(get_option('blog_title_size'));
    $blog_title_style = esc_attr(get_option('blog_title_style'));
    $blog_style_weight = esc_attr(get_option('blog_title_weight')); ?>

        <style media="screen">
        .blog_section .blog_bgc{
          background-color: <?php echo $blog_bgc; ?>;
          opacity: <?php echo $advertis_opacity_bgc = esc_attr(get_option('advertis_bgc_opacity')); ?>;
        }

        .blog_section_heading h2{
           color: <?php echo $blog_title_color ;?>;
           font-size: <?php echo $blog_title_size;?>;
           font-style: <?php echo $blog_title_style; ?>;
           font-weight: <?php echo $blog_style_weight; ?>;

        }
        </style>
    <?
