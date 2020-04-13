<?php $services_image = esc_attr(get_option('services_image')); ?>
<section class="uza-services-area">
    <div class="services_bgc_image">
       <img src="<?php echo $services_image; ?>" alt="" >
    </div>
    <div class="services_bgc">

    </div>
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <?php $service_title = esc_attr(get_option('service_title'));
                ?>

                <div class="section_heading service_section_heading">
                    <h2><?php echo $service_title; ?></h2>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row">
               <?php
                  $terms_list = array();
                  $terms_list =  get_option('services_terms_list');
                if(!empty($terms_list)){
                    foreach($terms_list as $id):

                        $service_term = get_term($id);
                         //pr($service_term);
                        $image_id = get_term_meta( $id, '_thumbnail_id', 1 );
                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );

                        ?>
                      <!-- Single Service Area -->
                      <div class="col-12 col-lg-2 col-md-4 col-sm-6">
                          <div class="single-service-area mb-80">
                              <!-- Service Icon -->
                              <a href="<?php echo get_term_link( $service_term ); ?>">
                                <div class="service-icon">
                                  <img src="<?php echo $image_url; ?>" alt="">
                               </div>
                               <h5><?php echo  $service_term->name; ?></h5>
                              </a>

                          </div>
                      </div>
                   <?php endforeach;
                } ?>


        </div>
    </div>
</section>
