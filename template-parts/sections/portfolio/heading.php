<?php
    $portfolio_title_front =  esc_attr(get_option('portfolio_title'));
    $portfolio_description_front =  esc_attr(get_option('portfolio_description'));
?>
<div class="container">
   <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
            <div class="section_heading">
                <h2><?php echo $portfolio_title_front; ?></h2>
                <p><?php echo $portfolio_description_front; ?></p>
            </div>
        </div>
   </div>
</div>
