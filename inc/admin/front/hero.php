<?php
    //Title
    $slide_title_size = esc_attr(get_option('slide_title_size'));
    $slide_title_style = esc_attr(get_option('slide_title_style'));
    $slide_title_weight = esc_attr(get_option('slide_title_weight'));

    $slide_title_size_mobile = esc_attr(get_option('slide_title_size_mobile'));
    $slide_title_style_mobile = esc_attr(get_option('slide_title_style_mobile'));
    $slide_title_mobile_weight = esc_attr(get_option('slide_title_mobile_weight'));

    //Description
    $slide_description_size = esc_attr(get_option('slide_description_size'));
    $slide_description_style = esc_attr(get_option('slide_description_style'));
    $slide_description_weight = esc_attr(get_option('slide_description_weight'));

    $slide_description_size_mobile = esc_attr(get_option('slide_description_size_mobile'));
    $slide_description_style_mobile = esc_attr(get_option('slide_description_style_mobile'));
    $slide_description_mobile_weight = esc_attr(get_option('slide_description_mobile_weight'));

    // Button text
    $slide_button_text_size = esc_attr(get_option('slide_button_text_size'));
    $slide_button_text_style = esc_attr(get_option('slide_button_text_style'));
    $slide_button_text_weight = esc_attr(get_option('slide_button_text_weight'));

    $slide_button_text_size_mobile = esc_attr(get_option('slide_button_text_size_mobile'));
    $slide_button_text_style_mobile = esc_attr(get_option('slide_button_text_style_mobile'));
    $slide_button_text_mobile_weight = esc_attr(get_option('slide_button_text_mobile_weight'));

?>

<style>
    .classy-navbar-toggler .navbarToggler span {
        background-color: #ffffff;
    }

    .single-welcome-slide .welcome-text h2
    {
        font-size:<?php echo $slide_title_size; ?>;
        font-style:<?php echo $slide_title_style ?>;
        font-weight:<?php echo $slide_title_weight; ?>;
    }

    .single-welcome-slide .welcome-text h5
    {
        font-size:<?php echo $slide_description_size; ?>;
        font-style:<?php echo $slide_description_style; ?>;
        font-weight:<?php echo $slide_description_weight; ?>;
    }
    .uza-btn
    {
        font-size:<?php echo $slide_button_text_size; ?>;
        font-style:<?php echo $slide_button_text_style; ?>;
        font-weight:<?php echo $slide_button_text_weight; ?>;
    }


    @media only screen and (max-width: 420px) {
        .single-welcome-slide{
            height: 100vh;
        }


        .welcom_content_image{
            position: absolute;
            width: 100%;
            height:50vh;
            top: 0;
            left: 0;
        }

        .single-welcome-slide .welcome-thumbnail{
            width: 100%;
            height: 50vh;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .welcom_content_text{
            margin-top: 50vh;
            width: 100%;
            height: 50vh;
        }

        .single-welcome-slide .welcome-thumbnail img{
            width: 50%;
            height: auto;
            margin-top: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        .owl-carousel .owl-item img{
            width: 50%;
            height: auto;
            margin-top: 50%;
            margin-left: auto;
            margin-right: auto;


        }

        .single-welcome-slide .welcome-text{
            text-align: center;
            padding-top: 0;
            padding: 10px;
        }

        .single-welcome-slide .welcome-text h2 {
            margin: 0;
            padding: 10px;
            font-size: <?php echo $slide_title_size_mobile; ?>;
            font-style: <?php echo $slide_title_style_mobile; ?>;
            font-weight: <?php echo $slide_title_mobile_weight; ?>;
        }

        .single-welcome-slide .welcome-text h5 {
            margin: 0;
            padding: 10px;
            font-size: <?php echo $slide_description_size_mobile; ?>;
            font-style: <?php echo $slide_description_style_mobile; ?>;
            font-weight: <?php echo $$slide_description_mobile_weight; ?>;
        }

        .uza-btn{
            margin-top: 20px;
            font-size:<?php echo $slide_button_text_size_mobile; ?>;
            font-style:<?php echo $slide_button_text_style_mobile; ?>;
            font-weight:<?php echo $slide_button_text_mobile_weight; ?>;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>
