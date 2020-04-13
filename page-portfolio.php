<?php get_header('uza');
$blog_image = esc_attr(get_option('blog_image'));?>
<div class="portfolio_image">
     <img src="<?php echo $blog_image; ?>" alt="">
</div>
<!-- ***** Breadcrumb Area Start ***** -->

    <?php get_template_part('template-parts/sections/breadcrumbs'); ?>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <?php get_template_part('template-parts/sections/portfolio_ajax'); ?>
    <!-- ****** Gallery Area End ****** -->

    <!-- ***** Newsletter Area Start ***** -->
    <?php get_template_part('template-parts/sections/newsletter'); ?>
    <!-- ***** Newsletter Area End ***** -->
<?php get_footer(); ?>
