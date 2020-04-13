<?php
    $color_services_bgc = esc_attr(get_option('color_services_bgc'));
    $services_image = esc_attr(get_option('services_image'));
    $color_service_title = esc_attr(get_option('color_service_title'));
    $service_title_size = esc_attr(get_option('service_title_size'));
    $service_title_style = esc_attr(get_option('service_title_style'));
    $service_title_weight = esc_attr(get_option('service_title_weight'));

    $color_service_item_title = esc_attr(get_option('color_service_item_title'));
    $color_hover_service_item_title = esc_attr(get_option('color_hover_service_item_title'));
    $service_item_title_style = esc_attr(get_option('service_item_title_style'));
    $service_item_title_weight = esc_attr(get_option('service_item_title_weight'));
    $service_item_title_size = esc_attr(get_option('service_item_title_size'));
?>

<style media="screen">

    .uza-services-area .services_bgc{
        background-color: <?php echo $color_services_bgc; ?>;
        opacity: <?php echo $services_opacity_bgc = esc_attr(get_option('services_bgc_opacity')); ?>;
    }

    .uza-services-area .services_bgc_image img{
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .uza-services-area  a:hover h5{
        color: <?php echo $color_hover_service_item_title; ?>;
    }

    .service_section_heading h2{
        color: <?php echo $color_service_title; ?>;
        font-size: <?php echo $service_title_size; ?>;
        font-style: <?php echo $service_title_style; ?>;
        font-weight: <?php echo $service_title_weight; ?>;
    }

    .single-service-area h5{
        color: <?php echo $color_service_item_title; ?>;
        font-size: <?php echo $service_item_title_size; ?>;
        font-style: <?php echo $service_item_title_style; ?>;
        font-weight: <?php echo $service_item_title_weight; ?>;
    }

</style>
