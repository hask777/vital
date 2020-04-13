<?php
// Title
$color_archive_title = esc_attr(get_option('color_archive_title'));
$archive_title_size = esc_attr(get_option('archive_title_size'));
$archive_title_style = esc_attr(get_option('archive_title_style'));
$archive_title_weight = esc_attr(get_option('archive_title_weight'));
// BGC
$color_archive_bgc = esc_attr(get_option('color_archive_bgc'));
$archive_bgc_opacity = esc_attr(get_option('archive_bgc_opacity'));

?>
    <style media="screen">
    .archive_content_container{
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .page-header{
       position: relative;
       width: 100%;
       background-repeat: no-repeat;
    }

    .page-header .page_header_bgc{
       position: absolute;
       width: 100%;
       height: 100%;
       background-color: #000;
       opacity: 0.8;
    }

    .page-header .container{
       padding-top: 120px;
    }

    .page-header .page-title{
        color:#fff;
    }

    .breadcrumbs_list{
        padding: 20px;
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    .breadcrumbs_list li{
        color: #fff;
        margin-left: 10px;
        font-size: 18px;
    }

    .breadcrumbs_list li a{
        color: #fff;
    }

    .breadcrumbs_list .breadcrumb_list_item:before{
        content: "\f105";
        font-family: 'FontAwesome';
        margin-right: 10px;
    }

        .page-header .page-title{
            width: 100%;
            text-align: center;
            color: <?php echo $color_archive_title; ?>;
            font-size: <?php echo $archive_title_size; ?>;
            font-style: <?php echo $archive_title_style; ?>;
            font-weight: <?php echo $archive_title_weight; ?>;

        }

        .page-header .page_header_bgc{
            background-color: <?php echo $color_archive_bgc; ?>;
            opacity: <?php $archive_bgc_opacity; ?>;
        }

    </style>
<?
