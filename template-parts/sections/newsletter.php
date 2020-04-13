<?php
   $newsletter_title = esc_attr(get_option('newsletter_title'));
   $newsletter_description = esc_attr(get_option('newsletter_description'));

   $advertis_bgc = esc_attr(get_option('color_advertis_bgc'));
   $advertis_image = esc_attr(get_option('advertis_image'));

?>
<!-- ***** Newsletter Area Start ***** -->
<section class="uza-newsletter-area">
    <div class="section_bgc_image">
       <img src="<?php echo $advertis_image; ?>" alt="" >
    </div>
    <div class="section_bgc">

    </div>
    <div class="container newsletter_wrapper">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content">
                    <h2><?php echo $newsletter_title; ?></h2>
                    <p><?php echo $newsletter_description; ?></p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form">

                        <?php echo do_shortcode('[contact-form-7 id="115" title="Contact form 1" "email"]'); ?>


                </div>
            </div>
        </div>
        <!-- Border Bottom -->
        
    </div>
</section>
<!-- ***** Newsletter Area End ***** -->
