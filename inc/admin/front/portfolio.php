<?php
// Title
$color_portfolio_title = esc_attr(get_option('color_portfolio_title'));
$portfolio_title_size = esc_attr(get_option('portfolio_title_size'));
$portfolio_title_style = esc_attr(get_option('portfolio_title_style'));
$portfolio_title_weight = esc_attr(get_option('portfolio_title_weight'));
// Description
$color_portfolio_description = esc_attr(get_option('color_portfolio_description'));
$portfolio_description_size = esc_attr(get_option('portfolio_description_size'));
$portfolio_description_style = esc_attr(get_option('portfolio_description_style'));
$portfolio_description_weight = esc_attr(get_option('portfolio_description_weight'));
// Bgc
$color_portfolio_bgc = esc_attr(get_option('color_portfolio_bgc'));
$portdolio_bgc_opacity = esc_attr(get_option('portdolio_bgc_opacity'));
// tabs
$portfolio_tabs_color = esc_attr(get_option('color_portfolio_tabs'));
$color_portfolio_tabs_active =  esc_attr(get_option('color_portfolio_tabs_active'));
$portfolio_tabs_size = esc_attr(get_option('portfolio_tabs_size'));
$portfolio_tabs_style = esc_attr(get_option('portfolio_tabs_style'));
$portfolio_tabs_weight = esc_attr(get_option('portfolio_tabs_weight'));
// button
?>
    <style media="screen">

        .uza-portfolio-area .section_bgc{
            background-color: <?php echo $color_portfolio_bgc; ?>;
            opacity: <?php echo $portdolio_bgc_opacity; ?>;
        }

        .uza-portfolio-area .section_bgc_image img{
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .uza-portfolio-area .section_heading h2{
            text-align: center;
            color: <?php echo $color_portfolio_title; ?>;
            font-size: <?php echo $portfolio_title_size; ?>;
            font-style: <?php echo $portfolio_title_style; ?>;
            font-weight: <?php echo $portfolio_title_weight; ?>;
        }

        .uza-portfolio-area .section_heading p{
            text-align: center;
            color: <?php echo $color_portfolio_description; ?>;
            font-size: <?php echo $portfolio_description_size; ?>;
            font-style: <?php echo $portfolio_description_style; ?>;
            font-weight: <?php echo $portfolio_description_weight; ?>;
        }

        .portfolio-menu button{
            color: <?php echo $portfolio_tabs_color; ?>;
            font-size: <?php echo $portfolio_tabs_size; ?>;
            font-style: <?php echo $portfolio_tabs_style; ?>;
            font-weight: <?php echo $portfolio_tabs_weight; ?>;
        }

        .portfolio-menu button.active, .portfolio-menu button:hover{
            color: <?php echo $color_portfolio_tabs_active; ?>;
        }

        .uza-btn.btn-3{
            color: #000;
            font-size: 28px;
            font-style: italic;
            border: 2px solid #e2e2e2;
            border-radius:  0;
            background-color: #fff;
            box-shadow: none;
        }

        .uza-btn.btn-3:hover{
            background-color: #eee;
            box-shadow: none;
        }


    </style>
<?
