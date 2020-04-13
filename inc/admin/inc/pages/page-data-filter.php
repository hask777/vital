<?php
function uza_page_data_filter_content( $content ){

    if(is_singular('page')){
        return $content;
    }

    global $page;

    // $page_data = get_post_meta($page->ID, 'page_data', true);



    return  $content;
}
