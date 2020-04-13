<?php

function uza_admin_pages_metabox_init(){
    add_action('add_meta_boxes_page', 'uza_create_page_metaboxes');

    function uza_create_page_metaboxes(){
        add_meta_box( 'uza_slider_options_mb', __('Page Options', 'uza' ), 'uza_pages_options_mb', 'page', 'normal', 'high');
    }

    function uza_pages_options_mb($page){

        $page_data = get_post_meta($page->ID, 'page_data', true);

        if(empty($page_data)){

            $page_data = array(

            );
        }
        ?>
        <input type="button" id="upload-page-img" value="Upload Image">
        <input type="hidden" id="page-input" name="page_image" value="<?php $blog_image;
        ?>">

        <div id="page_image_preview" class="page_image_preview">
           <img src="<?php echo $page_image; ?>" alt="">
        </div>
        <?
    }
}
