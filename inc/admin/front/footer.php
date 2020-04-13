<?php
    $color_footer_title = esc_attr(get_option('color_footer_title'));
    $footer_title_size = esc_attr(get_option('footer_title_size'));
    $footer_title_style = esc_attr(get_option('footer_title_style'));
    $footer_title_weight = esc_attr(get_option('footer_title_weight'));
    // BGC
    $color_footer_bgc = esc_attr(get_option('color_footer_bgc'));
    $footer_bgc_opacity = esc_attr(get_option('footer_bgc_opacity'));
    $footer_image = esc_attr(get_option('footer_image'));
?>
    <style media="screen">
        .footer-area .section_bgc{
            background-color: <?php echo $color_footer_bgc; ?>;
        }
        .single-footer-widget{
            text-align: center;
        }
        .single-footer-widget .widget-title{
            color: <?php echo $color_footer_title; ?>;
            font-size: <?php echo $footer_title_size; ?>;
            font-style: <?php echo $footer_title_style; ?>;
            font-weight: <?php echo $footer_title_weight; ?>;
        }

        .single-footer-widget .our-link li a{
            color: #000;
            font-size: 24px;
        }

        /* .service_section_heading h2, p{
            color: #000;
            font-size: 24px;
        } */
    </style>
<?
