<?php

$color_header_text_mobile = esc_attr(get_option('color_header_text_mobile'));
$header_text_size_mobile = esc_attr(get_option('header_text_size_mobile'));
$header_text_style_mobile = esc_attr(get_option('header_text_style_mobile'));
$header_text_weight_mobile = esc_attr(get_option('header_text_weight_mobile'));
$color_header_item_mobile = esc_attr(get_option('color_header_item_mobile'));

?>
    <style media="screen">

    @media only screen and (max-width: 991px) {
        .breakpoint-on .classy-navbar .classy-menu{
            background-color: #eee;

        }

        .breakpoint-on .classynav>ul>li>a{
            height: 100%;
            background-color: <?php echo $color_header_item_mobile; ?>;
            padding: 10px;
        }

        .classy-nav-container .classy-navbar .classynav ul li a {
            color: <?php echo  $color_header_text_mobile; ?>;
            font-size: <?php echo $header_text_size_mobile; ?>;
            font-style: <?php echo $header_text_style_mobile; ?>;
            font-weight: <?php echo $header_text_weight_mobile; ?>;
        }
    }


    </style>
<?
