<?php

// Advertise
$advertis_title_color = esc_attr(get_option('color_advertis_title'));
$advertis_title_size = esc_attr(get_option('advertis_title_size'));
$advertis_title_style = esc_attr(get_option('advertis_title_style'));

$advertis_description_color =  esc_attr(get_option('color_advertis_description'));
$advertis_description_size = esc_attr(get_option('advertis_description_size'));
$advertis_description_style = esc_attr(get_option('advertis_description_style'));

$phone_number_color = esc_attr(get_option('color_advertis_phone_number'));
$advertis_phone_text_size = esc_attr(get_option('advertis_phone_text_size'));
$advertis_phone_text_style= esc_attr(get_option('advertis_phone_text_style'));

$advertis_bgc = esc_attr(get_option('color_advertis_bgc'));

   ?>
      <style media="screen">

        .cta-content h2 {
            color: <?php echo $advertis_title_color;?>;
            font-size: <?php echo $advertis_title_size; ?>;
            font-style: <?php echo $advertis_title_style; ?>;
        }

        .cta-content h6 {
            color: <?php echo $advertis_description_color;?>;
            font-size: <?php echo $advertis_description_size; ?>;
            font-style: <?php echo $advertis_description_style; ?>;
        }

        .advertis_section .advertis_bgc{
            background-color: <?php echo $advertis_bgc = esc_attr(get_option('color_advertis_bgc')); ?>;
            opacity: <?php echo $advertis_opacity_bgc = esc_attr(get_option('advertis_bgc_opacity')); ?>;
        }

        .advertis_section .advertis_bgc_image img{
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

         .cta-content .call-now-btn a{
            display: block;
            color: <?php  echo $phone_number_color;?>;
            font-size: <?php echo $advertis_phone_text_size; ?>;
            font-style: <?php echo $advertis_phone_text_style; ?>;
         }

         @media only screen and (max-width: 767px){
            .header-area .main-header-area{
               border: none;
            }
            .cta-content h2 {
               text-align: center;
            }
         }

         @media only screen and (max-width: 420px) {
            html, body{
               overflow-x: hidden;
            }

            .cta-content h2 {
               font-size: 28px;
               text-align: center;
            }

            .cta-content .call-now-btn a {
               display: block;
               font-size: 28px;
               text-align: center;
            }

         }

      </style>
   <?
