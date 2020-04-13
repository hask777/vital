<?php

// CONTENT CHOICES
function uza_sevices_content_choices_callback($services_content){
    return $services_content;
    //pr($services_content);
}
// POSTS
function uza_services_post_calback($type){
   return $type;
}
// TERMS
function uza_services_post_terms_calback($term_type){
   return $term_type;
}

function uza_services_content_callback(){
    $services_options = get_option('service_content');
    //pr($services_options);
    $serv_formats = array(
       'posts' => __('Посты', 'uza'),
       'categories' => __('Категории', 'uza'),
    );

    $output = '';
    foreach($serv_formats as $serv_format => $serv_value){
       $checked = ( @$services_options[$serv_format] == 1 ? 'checked' : '' );

       $output .= '<label class="uza_header_options"><input type="checkbox" id="'. $serv_format .'" name="service_content['.$serv_format.']" value="1"'. $checked .'>'.$serv_value.'</label>';
    }

    echo $output;
}

// POSTS TYPES
function uza_services_post_types_callback(){
    $services_options = get_option('service_content');
    if(@$services_options['posts'] == 1 && @$services_options['categories'] != 1){
        $post_types = get_post_types();
        $types_array = array();

        foreach($post_types as $post_type){
           $types_array[] = $post_type;
        }

        $service_post_type = get_option('services_post_types');
        //pr($service_post_type);
        ?>
            <label for="services_post_types"><?php echo __('Выберете тип поста', 'uza'); ?></label>
            <select class="" name="services_post_types[]" multiple>
              <?
              foreach($types_array as $type){
                 pr($type);
                 ?>
                     <option value="<?php echo $type;?>" <?php echo ($service_post_type == $type ?  'selected' : ''); ?>><?php echo $type; ?></option>
                 <?
              }?>
            </select>
        <?
    }
}
// POSTS
function uza_services_posts_callback(){
    $services_options = get_option('service_content');
    if(@$services_options['posts'] == 1 && @$services_options['categories'] != 1){
        $service_post_type = get_option('services_post_types');
        //pr($service_post_type);
        $args = array(
           'post_type' =>$service_post_type
        );

        $posts = new WP_Query($args);

        $posts_list =  esc_attr(get_option('service_posts_list'));
          // pr($posts_list);
        ?>
            <label for="service_posts_list"><?php echo __('Выберете пост', 'uza'); ?></label>
            <select class="" name="service_posts_list">
                <?php
                if($posts->have_posts()){
                    while( $posts->have_posts() ){
                      $posts->the_post();
                      ?>
                      <option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
                      <?
                    }
                }?>
            </select>
        <?
    }

}

function uza_services_terms_callback(){
    $services_options = get_option('service_content');
    if(@$services_options['categories'] == 1 && $services_options['posts'] != 1){
        $terms = get_terms();
        $terms_list = array();
        $terms_list =  get_option('services_terms_list');
        ?>
            <label for="services_terms_list"><?php echo __('Выберете категории', 'uza'); ?></label>
            <select class=""  name="services_terms_list[]" multiple>
            <?
                foreach($terms as $term):

                   echo '<option value="'. $term->term_id . '">'.$term->name.'</option>';

                endforeach; ?>
            </select>
        <?
    }
}
