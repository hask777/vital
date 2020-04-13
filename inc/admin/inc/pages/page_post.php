<?php
function uza_save_page_post_admin( $post_id, $post, $update){
    if(!$update){
        return;
    }

    $page_data = array();
    // Pages
    $page_data['slide_id'] = sanitize_text_field($_POST['slide_id']);


    update_post_meta($page_id, 'page_data', $page_data);

    // pr($_POST);
    // die();
}
