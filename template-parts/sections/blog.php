<?php
   $blog_bgc = esc_attr(get_option('color_blog_bgc'));
   $blog_image = esc_attr(get_option('blog_image'));

?>
<section class="blog_section">
   <div class="uza-blog-area section-padding-0-80">
   <div class="blog_bgc_image">
      <img src="<?php echo $blog_image; ?>" alt="" >
   </div>
   <div class="blog_bgc">

   </div>

   <?php
      $blog_title = esc_attr(get_option('blog_title'));
      $blog_description = esc_attr(get_option('blog_description'));
   ?>

    <div class="container padding_top_60">
        <div class="row">
           <!-- Section Heading -->
           <div class="col-12">

                <div class="section_heading blog_section_heading">
                    <h2><?php echo $blog_title; ?></h2>
                    <p><?php echo $blog_description; ?></p>
                </div>
           </div>
        </div>

        <div class="row flex">
            <?php

               $blog_post = new WP_query(array(
                  'poat_type' => 'post',
                  'posts_per_page' => 3
               ));

               if ( $blog_post->have_posts() ) {
               	while ( $blog_post->have_posts() ) {
               		$blog_post->the_post();
                     ?>
                     <!-- Single Blog Post -->
                     <div class="col-12 col-lg-4 blog_item_1 flex">
                          <div class="single-blog-post bg-img mb-80">
                             <div class="single_blog_post_image">
                                <?php the_post_thumbnail(); ?>
                             </div>


                              <div class="post-content">
                                  <span class="post-date"><?php the_date(); ?></span>
                                  <a href="#" class="post-title"><?php the_title(); ?></a>
                                  <p><?php the_excerpt(); ?></p>
                                  <a href="<?php the_permalink(); ?>" class="read-more-btn">Читать<i class="arrow_carrot-2right"></i></a>
                              </div>
                          </div>
                     </div>

                     <?
                     wp_reset_postdata();
               	}
               }
            ?>

        </div>
    </div>
</section>
